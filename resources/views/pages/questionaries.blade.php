@include('layouts.header')

<head>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
@include('layouts.nav-2')
<div class="px-4 grow flex flex-col">
    <div class="flex gap-3">
        <div class="grow flex flex-col group">
            <div class="h-full flex flex-col items-center md:items-start">
                <a
                    class="grow inline-block lg:w-full border border-green-600 shadow-md rounded-lg p-1 sm:p-2 flex items-center text-green-600 font-medium transition-all text-xs">
                    <div class="h-6 w-6 sm:h-8 sm:w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span
                            class="m-auto text-sm TimesNR">Q</span></div>
                    <span class="hidden lg:inline-block">Questionnaires</span>
                </a>
                <div class="flex h-6 sm:ml-6">
                    <div class="h-full w-[2px] bg-green-600"></div>
                </div>
            </div>
        </div>
        <div class="grow flex flex-col group">
            <div class="h-full flex flex-col items-center md:items-start">
                <a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-1 sm:p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs"
                    href="#">
                    <div class="h-6 w-6 sm:h-8 sm:w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span
                            class="m-auto text-sm TimesNR"><i class="bi bi-arrow-down-up"></i></span></div>
                    <span class="hidden lg:inline-block">Post Preferences</span>
                </a>
                <div class="flex h-6 sm:ml-6">
                    <div class="h-full w-[2px] bg-gray-300 group-hover:bg-blue-600"></div>
                </div>
            </div>
        </div>
        <div class="grow flex flex-col group">
            <div class="h-full flex flex-col items-center md:items-start">
                <a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-1 sm:p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs"
                    href="#">
                    <div class="h-6 w-6 sm:h-8 sm:w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span
                            class="m-auto text-sm TimesNR"><i class="bi bi-person"></i></span></div>
                    <span class="hidden lg:inline-block">Profile</span>
                </a>
                <div class="flex h-6 sm:ml-6">
                    <div class="h-full w-[2px] bg-gray-300 group-hover:bg-blue-600"></div>
                </div>
            </div>
        </div>
        <div class="grow flex flex-col group">
            <div class="h-full flex flex-col items-center md:items-start">
                <a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-1 sm:p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs"
                    href="#">
                    <div class="h-6 w-6 sm:h-8 sm:w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span
                            class="m-auto text-sm TimesNR"><i class="bi bi-file-building"></i></span></div>
                    <span class="hidden lg:inline-block">Exam Centre Preference</span>
                </a>
                <div class="flex h-6 sm:ml-6">
                    <div class="h-full w-[2px] bg-gray-300 group-hover:bg-blue-600"></div>
                </div>
            </div>
        </div>
        <div class="grow flex flex-col group">
            <div class="h-full flex flex-col items-center md:items-start">
                <a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-1 sm:p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs"
                    href="#">
                    <div class="h-6 w-6 sm:h-8 sm:w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span
                            class="m-auto text-sm TimesNR"><i class="bi bi-file-earmark-pdf"></i></span></div>
                    <span class="hidden lg:inline-block">Document's</span>
                </a>
                <div class="flex h-6 sm:ml-6">
                    <div class="h-full w-[2px] bg-gray-300 group-hover:bg-blue-600"></div>
                </div>
            </div>
        </div>
        <div class="grow flex flex-col group">
            <div class="h-full flex flex-col items-center md:items-start">
                <a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-1 sm:p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs"
                    href="#">
                    <div class="h-6 w-6 sm:h-8 sm:w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span
                            class="m-auto text-sm TimesNR"><i class="bi bi-eye"></i></span></div>
                    <span class="hidden lg:inline-block">Preview</span>
                </a>
                <div class="flex h-6 sm:ml-6">
                    <div class="h-full w-[2px] bg-gray-300 group-hover:bg-blue-600"></div>
                </div>
            </div>
        </div>
        <div class="grow flex flex-col group">
            <div class="h-full flex flex-col items-center md:items-start">
                <a class="grow inline-block lg:w-full border border-gray-300 hover:border-blue-600 hover:shadow-md rounded-lg p-1 sm:p-2 flex items-center hover:text-blue-600 font-medium transition-all text-xs"
                    href="#">
                    <div class="h-6 w-6 sm:h-8 sm:w-8 bg-gray-200 rounded-full lg:mr-2 text-black text-xs flex"><span
                            class="m-auto text-sm TimesNR">₹</span></div>
                    <span class="hidden lg:inline-block">Payment</span>
                </a>
                <div class="flex h-6 sm:ml-6">
                    <div class="h-full w-[2px] bg-gray-300 group-hover:bg-blue-600"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="sm:p-4 grow border-t sm:border border-gray-300 sm:rounded-lg space-y-4 text-xs md:text-sm">
        <p class="m-auto text-yellow-500 text-center rounded-md text-[0.65rem] md:text-sm font-medium">Candidates need
            to
            fill out all the mandatory <span class="text-red-600">*</span> questions.</p>
        <form id="myForm" action="" method="post">
            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
            <div class="grid gap-6">
                <div class="">
                    <p class="text-lg font-bold mb-2">Mizo Language Proficiency (Reference: The Mizoram Gazette
                        Notification vide No. A-11019/1/2021-P&AR(GSW)
                        dt.09.04.2024 issue No. 247)</p>
                    <div class="grid gap-4">
                        <!-- card 1 -->
                        <div class="p-0 md:p-4 md:py-6 border rounded-lg border-gray-300" id="x1">
                            <div class="h-full">
                                <div class="md:my-2 md:mt-2 flex flex-col sm:flex-row items-end sm:items-center">
                                    <div class="flex items-center flex-grow w-full">
                                        <i class="bi bi-grip-vertical pr-2 hidden md:block"></i>
                                        <div
                                            class="grow p-2 md:px-4 md:py-3 bg-gray-100 rounded-t-lg md:rounded-lg space-y-2">
                                            <div class="flex lg:items-start 2xl:items-center">
                                                <i class="text-blue-600 text-xl mr-2"></i>
                                                <p class="text-base">Have you studied Mizo subject in Class-X
                                                    standard
                                                    (HSLC) or above within Mizoram?<span class="text-red-600">*</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-end p-2">
                                        <div>
                                            <input id="yes_class_x_mizo"
                                                {{ ($data->class_x_mizo ?? '') == 1 ? 'checked' : '' }} value="1"
                                                type="radio" name="class_x_mizo" class="hidden peer">
                                            <label for="yes_class_x_mizo"
                                                class="p-2 inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">Yes</label>
                                        </div>
                                        <div>
                                            <input id="no_class_x_mizo"
                                                {{ ($data->class_x_mizo ?? '') == 0 ? 'checked' : '' }} value="0"
                                                type="radio" name="class_x_mizo" class="hidden peer">
                                            <label for="no_class_x_mizo"
                                                class="p-2 inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-red-600 peer-checked:bg-red-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">No</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <p class="px-6 text-gray-500 hidden md:block" id="class_x_mizo_display">
                                    Answer:
                                    @if ($data && isset($data->class_x_mizo))
                                        @if ($data->class_x_mizo == 1)
                                            I have
                                        @else
                                            I haven't
                                        @endif
                                    @else
                                        Data not available
                                    @endif
                                </p> --}}
                            </div>
                        </div>
                        <!-- card 2 -->
                        <div class="p-0 md:p-4 md:py-6 border rounded-lg border-gray-300 {{ isset($data->mizo_as_mil) && $data->mizo_as_mil == 1 ? '' : 'hidden' }}"
                            id="x2">
                            <div class="h-full">
                                <div class="md:my-2 md:mt-2 flex flex-col sm:flex-row items-end sm:items-center">
                                    <div class="flex items-center flex-grow w-full">
                                        <i class="bi bi-grip-vertical pr-2 hidden md:block"></i>
                                        <div
                                            class="grow p-2 md:px-4 md:py-3 bg-gray-100 rounded-t-lg md:rounded-lg space-y-2">
                                            <div class="flex lg:items-start 2xl:items-center">
                                                <i class="text-blue-600 text-xl mr-2"></i>
                                                <p class="text-base">Have you studied Mizo subject as MIL in HSLC or Above in outside Mizoram?<span class="text-red-600">*</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-end p-2">
                                        <div>
                                            <input id="yes_mizo_as_mil"
                                                {{ ($data->mizo_as_mil ?? '') == 1 ? 'checked' : '' }} value="1"
                                                type="radio" name="mizo_as_mil" class="hidden peer">
                                            <label for="yes_mizo_as_mil"
                                                class="p-2 inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">Yes</label>
                                        </div>
                                        <div>
                                            <input id="no_mizo_as_mil"
                                                {{ ($data->mizo_as_mil ?? '') == 0 ? 'checked' : '' }} value="0"
                                                type="radio" name="mizo_as_mil" class="hidden peer">
                                            <label for="no_mizo_as_mil"
                                                class="p-2 inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-red-600 peer-checked:bg-red-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">No</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <p class="px-6 text-gray-500 hidden md:block" id="mizo_as_mil_display">
                                    Answer:
                                    @if ($data && isset($data->mizo_as_mil))
                                        @if ($data->mizo_as_mil == 1)
                                            I have
                                        @else
                                            I haven't
                                        @endif
                                    @else
                                        Data not available
                                    @endif
                                </p> --}}
                            </div>
                        </div>
                        <!-- card 3 -->
                        <div class="p-0 md:p-4 md:py-6 border rounded-lg border-gray-300 {{ isset($data->min_score_mizo) && $data->min_score_mizo == 1 ? '' : 'hidden' }}"
                            id="x3">
                            <div class="h-full">
                                <div class="md:my-2 md:mt-2 flex flex-col sm:flex-row items-end sm:items-center">
                                    <div class="flex items-center flex-grow">
                                        <i class="bi bi-grip-vertical pr-2 hidden md:block"></i>
                                        <div
                                            class="grow p-2 md:px-4 md:py-3 bg-gray-100 rounded-t-lg md:rounded-lg space-y-2">
                                            <!-- <div class="flex items-center justify-between">
                                                <div class="flex items-center text-gray-500">
                                                    <i class="bi bi-bezier pr-1"></i>
                                                    <span class="text-xs font-semibold">MIZO Language Proficiency</span>
                                                </div>
                                                <div class="flex items-center text-gray-500">
                                                    <span class="text-xs font-semibold"><span
                                                            class="text-red-600">*</span>Required</span>
                                                    <i class="bi bi-align-top pr-1"></i>
                                                </div>
                                            </div> -->
                                            <div class="flex lg:items-start 2xl:items-center">
                                                <i class="text-blue-600 text-xl mr-2"></i>
                                                <p class="text-base">Have you achieved a minimum score in the
                                                    qualifying
                                                    test of Mizo Language Proficiency as prescribed by the
                                                    Government from time to time? <span class="text-red-600">*</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-end p-2">
                                        <div class="">
                                            <input id="yes_min_score_mizo"
                                                {{ ($data->min_score_mizo ?? '') == 1 ? 'checked' : '' }}
                                                value="1" type="radio" name="min_score_mizo"
                                                class="hidden peer">
                                            <label for="yes_min_score_mizo"
                                                class="p-2 inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">Yes</label>
                                        </div>
                                        <div class="">
                                            <input id="no_min_score_mizo"
                                                {{ ($data->min_score_mizo ?? '') == 0 ? 'checked' : '' }}
                                                value="0" type="radio" name="min_score_mizo"
                                                class="hidden peer">
                                            <label for="no_min_score_mizo"
                                                class="p-2 inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-red-600 peer-checked:bg-red-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">No</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <p class="px-6 text-gray-500 hidden md:block" id="min_score_display">
                                    Answer:
                                    @if ($data && isset($data->min_score_mizo))
                                        @if ($data->min_score_mizo == 1)
                                            I have
                                        @else
                                            I haven't
                                        @endif
                                    @else
                                        Data not available
                                    @endif
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="text-lg font-bold mb-2">Marital Status</p>
                    <div class="grid gap-4">
                        <!-- card 4 -->
                        <div class="p-0 md:p-4 md:py-6 border rounded-lg border-gray-300">
                            <div class="h-full">
                                <div class="md:my-2 md:mt-2 flex flex-col sm:flex-row items-end sm:items-center">
                                    <div class="flex items-center flex-grow w-full">
                                        <i class="bi bi-grip-vertical pr-2 hidden md:block"></i>
                                        <div
                                            class="grow p-2 md:px-4 md:py-3 bg-gray-100 rounded-t-lg md:rounded-lg space-y-2">
                                            <div class="flex lg:items-start 2xl:items-center">
                                                <i class="text-blue-600 text-xl mr-2"></i>
                                                <p class="text-base">Are You Married? <span
                                                        class="text-red-600">*</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-end p-2">
                                        <div>
                                            <input id="yes_m_status"
                                                {{ ($data->m_status ?? '') == 1 ? 'checked' : '' }} value="1"
                                                type="radio" name="m_status" class="hidden peer">
                                            <label for="yes_m_status"
                                                class="p-2 inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">Yes</label>
                                        </div>
                                        <div>
                                            <input id="no_m_status"
                                                {{ ($data->m_status ?? '') == 0 ? 'checked' : '' }} value="0"
                                                type="radio" name="m_status" class="hidden peer">
                                            <label for="no_m_status"
                                                class="p-2 inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-red-600 peer-checked:bg-red-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">No</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <p class="px-6 text-gray-500 hidden md:block" id="comp_cert_display">
                                    Answer:
                                    @if ($data && isset($data->comp_cert))
                                        @if ($data->comp_cert == 1)
                                            I have
                                        @else
                                            I don't
                                        @endif
                                    @else
                                        Data not available
                                    @endif
                                </p> --}}
                            </div>
                        </div>
                        <!-- card 5 -->
                        <div class="p-0 md:p-4 md:py-6 border rounded-lg border-gray-300 choose_m_status hidden">
                            <div class="h-full">
                                <div class="md:my-2 md:mt-2 flex flex-col sm:flex-row items-end sm:items-center">
                                    <div class="flex items-center flex-grow w-full">
                                        <i class="bi bi-grip-vertical pr-2 hidden md:block"></i>
                                        <div
                                            class="grow p-2 md:px-4 md:py-3 bg-gray-100 rounded-t-lg md:rounded-lg space-y-2">
                                            <div class="flex lg:items-start 2xl:items-center">
                                                <i class="text-blue-600 text-xl mr-2"></i>
                                                <p class="text-base">Do You have more than one living spouse?<span
                                                        class="text-red-600">*</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-end p-2">
                                        <div>
                                            <input id="yes_m_question"
                                                {{ ($data->m_question ?? '') == 1 ? 'checked' : '' }} value="1"
                                                type="radio" name="m_question" class="hidden peer">
                                            <label for="yes_m_question"
                                                class="p-2 inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">
                                                Yes
                                            </label>
                                        </div>
                                        <div>
                                            <input id="no_m_question"
                                                {{ ($data->m_question ?? '') == 0 ? 'checked' : '' }} value="0"
                                                type="radio" name="m_question" class="hidden peer">
                                            <label for="no_m_question"
                                                class="p-2 inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-red-600 peer-checked:bg-red-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 6 -->
                    </div>
                </div>
                <div class="">
                    <p class="text-lg font-bold mb-2">Certifications</p>
                    <div class="grid gap-4">
                        <!-- card 4
                        <div class="p-0 md:p-4 md:py-6 border rounded-lg border-gray-300">
                            <div class="h-full">
                                <div class="md:my-2 md:mt-2 flex flex-col sm:flex-row items-end sm:items-center">
                                    <div class="flex items-center flex-grow w-full">
                                        <i class="bi bi-grip-vertical pr-2 hidden md:block"></i>
                                        <div
                                            class="grow p-2 md:px-4 md:py-3 bg-gray-100 rounded-t-lg md:rounded-lg space-y-2">
                                            <div class="flex lg:items-start 2xl:items-center">
                                                <i class="text-blue-600 text-xl mr-2"></i>
                                                <p class="text-base">Do you have Computer Certificate as per DP&AR
                                                    Office Memorandum vide No. A. 12034/1/2015-
                                                    P&AR(GSW) dated 10.07.2019 and The Mizoram
                                                    Gazette Notification No. A. 12018/31/2020-
                                                    P&AR(GSW) dated. 10.03.2023? <span class="text-red-600">*</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-end p-2">
                                        <div>
                                            <input id="yes_comp_cert"
                                                {{ ($data->comp_cert ?? '') == 1 ? 'checked' : '' }} value="1"
                                                type="radio" name="comp_cert" class="hidden peer">
                                            <label for="yes_comp_cert"
                                                class="p-2 inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">Yes</label>
                                        </div>
                                        <div>
                                            <input id="no_comp_cert"
                                                {{ ($data->comp_cert ?? '') == 0 ? 'checked' : '' }} value="0"
                                                type="radio" name="comp_cert" class="hidden peer">
                                            <label for="no_comp_cert"
                                                class="p-2 inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-gray-600 peer-checked:bg-gray-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">No</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <p class="px-6 text-gray-500 hidden md:block" id="comp_cert_display">
                                    Answer:
                                    @if ($data && isset($data->comp_cert))
                                        @if ($data->comp_cert == 1)
                                            I have
                                        @else
                                            I don't
                                        @endif
                                    @else
                                        Data not available
                                    @endif
                                </p> --}}
                            </div>
                        </div>-->
                        <!-- card 5 -->
                        <div class="p-0 md:p-4 md:py-6 border rounded-lg border-gray-300">
                            <div class="h-full">
                                <div class="md:my-2 md:mt-2 flex flex-col sm:flex-row items-end sm:items-center">
                                    <div class="flex items-center flex-grow w-full">
                                        <i class="bi bi-grip-vertical pr-2 hidden md:block"></i>
                                        <div
                                            class="grow p-2 md:px-4 md:py-3 bg-gray-100 rounded-t-lg md:rounded-lg space-y-2">
                                            <div class="flex lg:items-start 2xl:items-center">
                                                <i class="text-blue-600 text-xl mr-2"></i>
                                                <p class="text-base">Do you have NCC Certificate? <span
                                                        class="text-red-600">*</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-end p-2">
                                        <div>
                                            <input id="yes_ncc_cert"
                                                {{ ($data->ncc_cert ?? '') == 1 ? 'checked' : '' }} value="1"
                                                type="radio" name="ncc_cert" class="hidden peer">
                                            <label for="yes_ncc_cert"
                                                class="p-2 inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">
                                                Yes
                                            </label>
                                        </div>
                                        <div>
                                            <input id="no_ncc_cert"
                                                {{ ($data->ncc_cert ?? '') == 0 ? 'checked' : '' }} value="0"
                                                type="radio" name="ncc_cert" class="hidden peer">
                                            <label for="no_ncc_cert"
                                                class="p-2 inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-red-600 peer-checked:bg-red-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <p class="px-6 text-gray-500 hidden md:block" id="ncc_cert_display">
                                    Answer:
                                    @if ($data && isset($data->ncc_cert))
                                        @if ($data->ncc_cert == 1)
                                            I have.
                                        @else
                                            I don't.
                                        @endif
                                    @else
                                        Data not available.
                                    @endif
                                </p> --}}
                                <!-- NCC Grade Selection -->
                                <div class="m-2 flex lg:flex-col xl:flex-row items-center choose_ncc_div hidden">
                                    <p class="px-6 text-gray-500 hidden md:block mr-auto xl:mr-0"
                                        id="ncc_grade_display">
                                        Choose NCC Grade:
                                    </p>
                                    <div class="flex items-center gap-1 ml-auto">
                                        <div class="xl:ml-auto flex items-center gap-2">
                                            <div
                                                class="flex gap-1 items-center p-1 sm:p-2 mx-1 border border-gray-300 hover:border-blue-500 rounded-md">
                                                <input id="ncc_grade_a" type="radio" value="1"
                                                    name="ncc_grade"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                                                    @if (isset($data->ncc_grade) && $data->ncc_grade == 1) checked @endif>
                                                <label for="ncc_grade_a" class="w-full text-sm text-gray-900">
                                                    <span class="hidden md:inline-block pr-1">NCC:</span>
                                                    <span class="font-medium text-sm">A</span>
                                                </label>
                                            </div>
                                            <div
                                                class="flex gap-1 items-center p-1 sm:p-2 mx-1 border border-gray-300 hover:border-blue-500 rounded-md">
                                                <input id="ncc_grade_b" type="radio" value="2"
                                                    name="ncc_grade"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                                                    @if (isset($data->ncc_grade) && $data->ncc_grade == 2) checked @endif>
                                                <label for="ncc_grade_b" class="w-full text-sm text-gray-900">
                                                    <span class="hidden md:inline-block pr-1">NCC:</span>
                                                    <span class="font-medium text-sm">B</span>
                                                </label>
                                            </div>
                                            <div
                                                class="flex gap-1 items-center p-1 sm:p-2 mx-1 border border-gray-300 hover:border-blue-500 rounded-md">
                                                <input id="ncc_grade_c" type="radio" value="3"
                                                    name="ncc_grade"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                                                    @if (isset($data->ncc_grade) && $data->ncc_grade == 3) checked @endif>
                                                <label for="ncc_grade_c" class="w-full text-sm text-gray-900">
                                                    <span class="hidden md:inline-block pr-1">NCC:</span>
                                                    <span class="font-medium text-sm">C</span>
                                                </label>
                                            </div>
                                        </div>
                                        <button type="button"
                                            class="p-1.5 sm:p-2 border border-gray-300 hover:border-red-500 rounded-md hover:text-red-500 revert_ncc_choice"
                                            title="Revert NCC choice">
                                            <i class="bi bi-x-lg"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 6 -->
                        <div class="p-0 md:p-4 md:py-6 border rounded-lg border-gray-300">
                            <div class="h-full">
                                <div class="md:my-2 md:mt-2 flex flex-col sm:flex-row items-end sm:items-center">
                                    <div class="flex items-center flex-grow w-full">
                                        <i class="bi bi-grip-vertical pr-2 hidden md:block"></i>
                                        <div
                                            class="grow p-2 md:px-4 md:py-3 bg-gray-100 rounded-t-lg md:rounded-lg space-y-2">
                                            <div class="flex lg:items-start 2xl:items-center">
                                                <i class="text-blue-600 text-xl mr-2"></i>
                                                <p class="text-base">Are you a Home Guard Volunteer (MRHG)? <span
                                                        class="text-red-600">*</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-end p-2">
                                        <div>
                                            <input id="yes_home_guard"
                                                {{ ($data->home_guard ?? '') == 1 ? 'checked' : '' }} value="1"
                                                type="radio" name="home_guard" class="hidden peer">
                                            <label for="yes_home_guard"
                                                class="p-2 inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">
                                                Yes
                                            </label>
                                        </div>
                                        <div>
                                            <input id="no_home_guard"
                                                {{ ($data->home_guard ?? '') == 0 ? 'checked' : '' }} value="0"
                                                type="radio" name="home_guard" class="hidden peer">
                                            <label for="no_home_guard"
                                                class="p-2 inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-red-600 peer-checked:bg-red-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <p class="px-6 text-gray-500 hidden md:block" id="home_guard_display">
                                    Answer:
                                    @if ($data && isset($data->home_guard))
                                        @if ($data->home_guard == 1)
                                            I'm.
                                        @else
                                            I'm not.
                                        @endif
                                    @else
                                        Data not available.
                                    @endif
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="text-lg font-bold mb-2">Government Servant</p>
                    <div class="grid gap-4">
                        <div class="p-0 md:p-4 md:py-6 border rounded-lg border-gray-300">
                            <div class="h-full">
                                <div class="md:my-2 md:mt-2 flex flex-col sm:flex-row items-end sm:items-center">
                                    <div class="flex items-center flex-grow w-full">
                                        <i class="bi bi-grip-vertical pr-2 hidden md:block"></i>
                                        <div
                                            class="grow p-2 md:px-4 md:py-3 bg-gray-100 rounded-t-lg md:rounded-lg space-y-2">
                                            <div class="flex lg:items-start 2xl:items-center">
                                                <i class="text-blue-600 text-xl mr-2"></i>
                                                <p class="text-base">Are you a government servant ? <span
                                                        class="text-red-600">*</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-end p-2">
                                        <div>
                                            <input id="yes_govt_servt"
                                                {{ ($data->govt_servt ?? '') == 1 ? 'checked' : '' }} value="1"
                                                type="radio" name="govt_servt" class="hidden peer">
                                            <label for="yes_govt_servt"
                                                class="p-2 inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">
                                                Yes
                                            </label>
                                        </div>
                                        <div>
                                            <input id="no_govt_servt"
                                                {{ ($data->govt_servt ?? '') == 0 ? 'checked' : '' }} value="0"
                                                type="radio" name="govt_servt" class="hidden peer">
                                            <label for="no_govt_servt"
                                                class="p-2 inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-red-600 peer-checked:bg-red-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="text-lg font-bold mb-2">For Constable (Mechanic) Post</p>
                    <div class="grid gap-4">
                        <!-- card 7 -->
                        <div class="p-0 md:p-4 md:py-6 border rounded-lg border-gray-300">
                            <div class="h-full">
                                <div class="md:my-2 md:mt-2 flex flex-col sm:flex-row items-end sm:items-center">
                                    <div class="flex items-center flex-grow w-full">
                                        <i class="bi bi-grip-vertical pr-2 hidden md:block"></i>
                                        <div
                                            class="grow p-2 md:px-4 md:py-3 bg-gray-100 rounded-t-lg md:rounded-lg space-y-2">
                                            <div class="flex lg:items-start 2xl:items-center">
                                                <i class="text-blue-600 text-xl mr-2"></i>
                                                <p class="text-base">
                                                    Have you completed a 1-year training course in a concerned Trade at
                                                    the Industrial Training Institute or its equivalent institution?
                                                    <span class="text-red-600">*</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-end p-2">
                                        <div>
                                            <input id="yes_iti_eqi"
                                                {{ isset($data) && $data->iti_eqi == 1 ? 'checked' : '' }}
                                                value="1" type="radio" name="iti_eqi" class="hidden peer">
                                            <label for="yes_iti_eqi"
                                                class="p-2 inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">
                                                Yes
                                            </label>
                                        </div>
                                        <div>
                                            <input id="no_iti_eqi"
                                                {{ isset($data) && $data->iti_eqi == 0 ? 'checked' : '' }}
                                                value="0" type="radio" name="iti_eqi" class="hidden peer">
                                            <label for="no_iti_eqi"
                                                class="p-2 inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-red-600 peer-checked:bg-red-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <p class="px-6 text-gray-500 hidden md:block" id="iti_eqi_display">
                                    Answer:
                                    @if ($data && isset($data->iti_eqi))
                                        @if ($data->iti_eqi == 1)
                                            I have.
                                        @else
                                            I haven't.
                                        @endif
                                    @else
                                        Data not available.
                                    @endif
                                </p> --}}
                            </div>
                        </div>
                        <!-- card 8 -->
                        <div class="p-0 md:p-4 md:py-6 border rounded-lg border-gray-300">
                            <div class="h-full">
                                <div class="md:my-2 md:mt-2 flex flex-col sm:flex-row items-end sm:items-center">
                                    <div class="flex items-center flex-grow w-full">
                                        <i class="bi bi-grip-vertical pr-2 hidden md:block"></i>
                                        <div
                                            class="grow p-2 md:px-4 md:py-3 bg-gray-100 rounded-t-lg md:rounded-lg space-y-2">
                                            <div class="flex lg:items-start 2xl:items-center">
                                                <i class="text-blue-600 text-xl mr-2"></i>
                                                <p class="text-base">
                                                    Do you have at least 5 years of work experience in a Government or
                                                    private automobile workshop as a mechanic? <span
                                                        class="text-red-600">*</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-end p-2">
                                        <div>
                                            <input id="yes_auto_mobile"
                                                {{ ($data->auto_mobile ?? '') == 1 ? 'checked' : '' }} value="1"
                                                type="radio" name="auto_mobile" class="hidden peer">
                                            <label for="yes_auto_mobile"
                                                class="p-2 inline-block border border-gray-300 hover:border-blue-600 hover:text-blue-800 peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">
                                                Yes
                                            </label>
                                        </div>
                                        <div>
                                            <input id="no_auto_mobile"
                                                {{ ($data->auto_mobile ?? '') == 0 ? 'checked' : '' }} value="0"
                                                type="radio" name="auto_mobile" class="hidden peer">
                                            <label for="no_auto_mobile"
                                                class="p-2 inline-block border border-gray-300 hover:border-gray-600 hover:text-gray-800 peer-checked:border-red-600 peer-checked:bg-red-600 peer-checked:text-white rounded-md h-8 w-24 sm:h-11 sm:w-28 flex items-center justify-center text-xs sm:text-sm">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="m-2 flex w-full lg:flex-col xl:flex-row items-center mechExperience hidden">
                                    <p class="px-6 text-black-500 md:block ml-auto">Enter Total experience in years
                                        <input type="text" id="mech_experience" name="mech_experience"
                                            onkeypress="return isNumber(event)" maxlength="2"
                                            value="{{ old('mech_experience', $data->mech_experience ?? '') }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            placeholder="Enter your experience" required />
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="px-4 mt-auto flex items-center">
    <a id="save_button" type="submit"
        class="ml-auto inline-block bg-green-600 hover:bg-green-700 text-white p-2 rounded-md Nunito {{ !empty($data) ? '' : 'hidden' }}">
        <i class="bi bi-check-all pr-1"></i>Save & proceed
    </a>
</div>
@include('layouts.footer')
@include('layouts.custom-scripts.questionariesScript')
