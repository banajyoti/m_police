@include('layouts.header')

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Include Flatpickr CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">

    <!-- Tailwind CSS (via CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Include Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>
<div class="grow p-4 grid grid-cols-12 gap-3">
    <div class="Div_of_Wtn col-span-12 order-2 md:col-span-6 md:order-3 lg:col-span-6 lg:order-1 xl:col-span-3 xl:order-1 2xl:col-span-4 2xl:order-1 ">
        <div class="h-full p-4 rounded-xl borde border-gray-400">
            <p class="m-0 text-xl font-bold">What's New</p>
            <div class="max-h-[30vh] md:max-h-[68vh] overflow-auto scroll-style space-y-8 py-4">
                <div class="">
                    <span class="inline-block mb-2 p-2 px-3 rounded-2xl bg-gray-200 text-xs font-bold text-white"
                        style="background: linear-gradient(58deg, rgba(0,4,40,1) 17%, rgba(0,78,146,1) 66%);">21<sup>st</sup> December, 2024</span>
                    <p class="m-0 text-sm">Online application portal will be live from 21 December, 2024</p>
                </div>
                <div class="">
                    <span class="inline-block mb-2 p-2 px-3 rounded-2xl bg-gray-200 text-xs font-bold text-white"
                        style="background: linear-gradient(58deg, rgba(0,4,40,1) 17%, rgba(0,78,146,1) 66%);">21<sup>st</sup> December, 2024</span>
                    <p class="m-0 text-sm">Last date of submission of online application will be 20<sup>th</sup> January, 2025 | 11:59:59 PM</p>
                </div>
                {{-- <div class="">
                    <span class="inline-block mb-2 p-2 px-3 rounded-2xl bg-gray-200 text-xs font-bold text-white"
                        style="background: linear-gradient(58deg, rgba(0,4,40,1) 17%, rgba(0,78,146,1) 66%);">09 January
                        2025</span>
                    <p class="m-0 text-xs">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere inventore
                        optio porro id at numquam libero aut sapiente vero magnam reiciendis laboriosam voluptate
                        maxime, esse quidem hic dolore rem non.</p>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="Div_of_Reg col-span-12 order-1 md:col-span-6 md:order-2 lg:col-span-6 lg:order-4 xl:col-span-3 xl:order-3 2xl:col-span-3 2xl:order-3 space-y-0 xl:space-y-3">
        <a href="{{ route('register') }}" class="h-full lg:h-auto">
            <div
                class="h-full lg:h-auto bg-white shadow-md p-4 lg:py-6 rounded hover:text-red-600 transition-all border rounded-xl space-y-1 lg:space-y-3">
                <div class="">
                    <p class="m-0 text-xl lg:text-3xl font-Nunito">CLICK HERE TO REGISTER</p>
                    <p class="m-0 text-xs font-medium text-blue-500">Click here to register & generate one time
                        Recruitment ID.</p>
                </div>
                <p class="m-0 text-sm font- text-gray-500">Register in the Portal using valid mobile number.</p>
                <p class="m-0 text-xs font-medium text-gray-500"><span class="font-semibold">Note:</span> Candidates
                    are advised to keep the mobile number unchanged until the recruitment process is over.</p>
            </div>
        </a>
        <div class="h-full lg:h-auto bg-white shadow-md p-4 lg:py-6 rounded border rounded-xl space-y- hidden xl:block">
            <div class="">
                <p class="m-0 text-xl font-Nunito">Helpdesk</p>
                <p class="m-0 text-sm font- text-gray-500">Feel free to contact us for any queries.</p>
            </div>
            <p class="m-0 text-sm font- text-gray-800 flex items-center">
                <i class="bi pr-2 text-lg bi-whatsapp"></i>+91 86389-00879 (For English/Hindi Language)
            </p>
            <p class="m-0 text-sm font- text-gray-800 flex items-center">
                <i class="bi pr-2 text-lg bi-whatsapp"></i>+91 94025-90399 (For Mizo Language)
            </p>
            <p class="m-0 text-sm font- text-gray-800 flex items-center">
                <i class="bi pr-2 text-lg bi-envelope"></i>mizorampolicerect@gmail.com
            </p>
            <p class="m-0 text-sm font- text-gray-800 flex items-center">
                <i class="bi pr-2 text-lg bi-clock-history"></i>10:00 AM to 5:00 PM
                <span class="pl-1 text-xs text-gray-600">( on all working days )</span>
            </p>
            <p class="m-0 text-sm font- text-gray-800 flex items-top">
                <i class="bi pr-2 text-lg bi-geo-alt"></i>Police Headquarters, Khatla, Aizawl, Mizoram. Pin Code –
                796001
            </p>
        </div>
    </div>
    <div class="Div_of_Log col-span-12 order-3 md:col-span-6 md:order-4 lg:col-span-6 lg:order-2 xl:col-span-3 xl:order-5 2xl:col-span-3 2xl:order-5 ">
        <div class="h-full p-4 rounded-xl borde border-gray-400">
            <form class="max-w-sm mt-4 mx-auto space-y-">
                <div class="mb-6">
                    <p class="text-center text-3xl Nunito">LOGIN</p>
                    <p class="text-center text-xs poppins text-gray-700">( for already registered candidates )</p>
                </div>
                <p class="mb-8 text-center text-xs poppins font-medium">
                    Login using <span class="text-blue-600">Registered Mobile Number
                    </span> and <span class="text-blue-600">Date of Birth</span>.
                </p>
                {{-- <div class="mb-5">
                    <label for="rec_id" class="block mb-2 text-sm font-medium text-gray-600">Recruitment ID</label>
                    <input type="text" id="rec_id" name="rec_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Recruitment ID" required />
                    @error('rec_id')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4 flex items-center px-10">
                    <div class="h-[0.08rem] bg-gray-300 w-full"></div>
                    <p class="mx-4 text-center text-xs poppins font-medium">OR</p>
                    <div class="h-[0.08rem] bg-gray-300 w-full"></div>
                </div> --}}
                <div class="mb-6">
                    <label for="mob_no" class="block mb-2 text-sm font-medium text-gray-600">Registered Mobile
                        Number</label>
                    <input type="text" id="mob_no" name="mobile_no" maxlength="10" minlength="10"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Mobile Number" required />
                    @error('mob_no')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="mb-6">
                    <label for="dob" class="block mb-2 text-sm font-medium text-gray-600">Date of Birth</label>
                    <input type="date" id="dob" name="dob"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Password" required />
                    @error('dob')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div> --}}
                <div class="mb-6">
                    <label for="dob" class="block mb-2 text-sm font-medium text-gray-600">Date of Birth</label>
                    <input type="text" id="dob" name="dob"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 datepicker"
                        placeholder="Select Date" required />

                    <!-- Validation Error Message (if any) -->
                    @error('dob')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <a type="button" id="loginButton"
                    class="mb-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-3xl text-sm w-full sm:w- px-5 py-2.5 text-center">Login</a>
                <a type="button"
                    class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-3xl text-sm w-full sm:w- px-5 py-2.5 text-center"
                    href="{{ route('home') }}">Back to Home</a>
            </form>
        </div>
    </div>
    <div class="Div_of_Hlp col-span-12 order-5 md:col-span-6 md:order-1 lg:col-span-6 lg:order-5 xl:col-span-3 xl:order-4 2xl:col-span-4 2xl:order-4 block xl:hidden">
        <div class="h-full lg:h-auto bg-white shadow-md p-4 lg:py-6 rounded border rounded-xl space-y- ">
            <div class="">
                <p class="m-0 text-xl font-Nunito">Helpdesk</p>
                <p class="m-0 text-sm font- text-gray-500">Feel free to contact us for any queries.</p>
            </div>
            <p class="m-0 text-sm font- text-gray-800 flex items-center">
                <i class="bi pr-2 text-lg bi-whatsapp"></i>+91 86389-00879 (For English/Hindi Language)
            </p>
            <p class="m-0 text-sm font- text-gray-800 flex items-center">
                <i class="bi pr-2 text-lg bi-whatsapp"></i>+91 94025-90399 (For Mizo Language)
            </p>
            <p class="m-0 text-sm font- text-gray-800 flex items-center">
                <i class="bi pr-2 text-lg bi-envelope"></i>mizorampolicerect@gmail.com
            </p>
            <p class="m-0 text-sm font- text-gray-800 flex items-center">
                <i class="bi pr-2 text-lg bi-clock-history"></i>10:00 AM to 5:00 PM
                <span class="pl-1 text-xs text-gray-600">( on all working days )</span>
            </p>
            <p class="m-0 text-sm font- text-gray-800 flex items-top">
                <i class="bi pr-2 text-lg bi-geo-alt"></i>Police Headquarters, Khatla, Aizawl, Mizoram. Pin Code –
                796001
            </p>
        </div>
    </div>
    <div class="Div_of_Pst col-span-12 order-4 md:col-span-12 md:order-5 lg:col-span-6 lg:order-3 xl:col-span-3 xl:order-2 2xl:col-span-2 2xl:order-2 ">
        <div class="h-full lg:h-auto bg-white shadow-md p-4 lg:py-6 rounded border rounded-xl space-y-3">
            <div class="">
                <p class="m-0 text-xl font-Nunito">Reservation of quotas:</p>
                <p class="m-0 text-sm font- text-gray-500">Seat reservation categories </p>
            </div>
            <div class="space-y-1">
                <p class="m-0 text-sm flex items-center"><i class="bi bi-circle-fill text-[0.30rem] text-red-600 pr-1"></i> 5% for</p>
                <p class="m-0 text-sm font-medium uppercase pl-1">Ex-Servicemen</p>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-xs text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="border text-center p-0.5">
                                    Constable (UB)
                                </th>
                                <th scope="col" class="border text-center p-0.5">
                                    Constable (AB)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <td class="text-center p-1">
                                    2 Posts
                                </td>
                                <td class="text-center p-1">
                                    10 Posts
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="space-y-1">
                <p class="m-0 text-sm flex items-center"><i class="bi bi-circle-fill text-[0.30rem] text-red-600 pr-1"></i> 5% for</p>
                <p class="m-0 text-sm font-medium uppercase pl-1">Meritorious Sportsperson</p>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-xs text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="border text-center p-0.5">
                                    Constable (UB)
                                </th>
                                <th scope="col" class="border text-center p-0.5">
                                    Constable (AB)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <td class="text-center p-1">
                                    2 Posts
                                </td>
                                <td class="text-center p-1">
                                    10 Posts
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="space-y-1">
                <p class="m-0 text-sm flex items-center"><i class="bi bi-circle-fill text-[0.30rem] text-red-600 pr-1"></i> 10% for</p>
                <p class="m-0 text-sm font-medium uppercase pl-1">Home Guard Volunteers (MRHG)</p>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-xs text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="border text-center p-0.5">
                                    Constable (UB)
                                </th>
                                <th scope="col" class="border text-center p-0.5">
                                    Constable (AB)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <td class="text-center p-1">
                                    5 Posts
                                </td>
                                <td class="text-center p-1">
                                    20 Posts
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="space-y-1">
                <p class="m-0 text-sm flex items-center"><i class="bi bi-circle-fill text-[0.30rem] text-red-600 pr-1"></i> 33% for</p>
                <p class="m-0 text-sm font-medium uppercase pl-1">WOmen Candidates</p>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-xs text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="border text-center p-0.5">
                                    Constable (UB)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <td class="text-center p-1">
                                    16 Posts
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@include('layouts.custom-scripts.loginScript')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
<script>
    // Initialize Flatpickr on the input with the id 'dob'
    flatpickr("#dob", {
        dateFormat: "Y-m-d", // Format the selected date (e.g., 2024-12-10)
        disableMobile: true, // Disable the mobile native date picker on mobile devices
        inline: false, // The calendar is shown as an overlay (set true to make it inline)
        placeholder: "Select Date", // Placeholder text
        minDate: "1900-01-01", // Set minimum allowed date
        maxDate: "2024-12-31", // Set maximum allowed date
    });
</script>
