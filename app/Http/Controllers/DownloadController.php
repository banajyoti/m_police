<?php

namespace App\Http\Controllers;

use App\Models\ExamCentre;
use App\Models\ExamPreference;
use App\Models\Preference;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use QrCode;
use \PDF;

class DownloadController extends Controller
{
    public function download_ack(Request $request)
    {
        $userDetails = User::leftJoin('questionaries', 'questionaries.user_id', '=', 'users.id')
            ->leftJoin('preferences', 'preferences.user_id', '=', 'users.id')
            ->leftJoin('profiles', 'profiles.user_id', '=', 'users.id')
            ->leftJoin('documents', 'documents.user_id', '=', 'users.id')
            ->leftJoin('castes', 'castes.id', '=', 'users.category_id')
            ->leftJoin('states as s1', 's1.id', '=', 'profiles.p_state_id')
            ->leftJoin('states as s2', 's2.id', '=', 'profiles.c_state_id')
            ->leftJoin('districts as d1', 'd1.id', '=', 'profiles.p_district_id')
            ->leftJoin('districts as d2', 'd2.id', '=', 'profiles.c_district_id')
            ->leftJoin('payments', 'payments.user_id', '=', 'users.id')
            ->leftJoin('games', 'games.id', '=', 'users.g_id')
            ->leftJoin('game_categories', 'game_categories.id', '=', 'users.c_ms_id')
            ->select(
                'users.*',
                'questionaries.*',
                'questionaries.govt_servt as comp',
                'questionaries.ncc_cert as ncc',
                'preferences.*',
                'profiles.*',
                'documents.*',
                'castes.name as c',
                's1.name as pState',
                's2.name as cState',
                'd1.name as pDist',
                'd2.name as cDist',
                'users.updated_at as up',
                'payments.*',
                'payments.created_at as c',
                'games.name as g',
                'game_categories.name as gc',
                'users.email as e'
            )
            ->where('users.id', Auth::user()->id)
            ->first();

        $examCentres = ExamPreference::leftJoin('users', 'users.id', '=', 'exam_preferences.user_id')
            ->leftJoin('exam_centres', 'exam_centres.id', '=', 'exam_preferences.centre_id')
            ->select('exam_preferences.preferences', 'exam_centres.name as Excentre')
            ->where('exam_preferences.user_id', Auth::user()->id)
            ->orderBy('exam_centres.name')
            ->get();

        $preferences = Preference::leftJoin('posts', 'posts.id', '=', 'preferences.post_id')
            ->select('preferences', 'posts.*')
            ->where('preferences.user_id', Auth::user()->id)
            ->orderBy('preferences.preferences')
            ->get();

        $qr_code = $userDetails->full_name . "\n" . $userDetails->registration_number;
        $qrcode = base64_encode(QrCode::format("svg")->size(230)
            ->errorCorrection("H")
            ->generate($qr_code));

        $pdf = PDF::loadview('pages.acknowledgement', compact('userDetails', 'preferences', 'qrcode', 'examCentres'));
        $page = $userDetails->full_name . '-acknowledgement.pdf';
        $pdf->getDomPDF()->setHttpContext(stream_context_create(['ssl' => ['allow_self_signed' => true, 'verify_peer' => false, 'verify_peer_name' => false]]));
        return $pdf->setPaper('A4', 'Portrait')->download($page);
        //return view('pages.acknowledgement', compact('userDetails', 'preferences'));
    }
}
