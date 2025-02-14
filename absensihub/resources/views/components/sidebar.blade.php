<div>
    <div class="flex justify-between items-center w-full px-4 py-4 ">
        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
            type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-200">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2 5.5C2 4.94772 2.44772 4.5 3 4.5H21C21.5523 4.5 22 4.94772 22 5.5V6.5C22 7.05228 21.5523 7.5 21 7.5H3C2.44772 7.5 2 7.05228 2 6.5V5.5Z"
                    fill="#9ca3af" />
                <path
                    d="M2 11.5C2 10.9477 2.44772 10.5 3 10.5H21C21.5523 10.5 22 10.9477 22 11.5V12.5C22 13.0523 21.5523 13.5 21 13.5H3C2.44772 13.5 2 13.0523 2 12.5V11.5Z"
                    fill="#9ca3af" />
                <path
                    d="M3 16.5C2.44772 16.5 2 16.9477 2 17.5V18.5C2 19.0523 2.44772 19.5 3 19.5H21C21.5523 19.5 22 19.0523 22 18.5V17.5C22 16.9477 21.5523 16.5 21 16.5H3Z"
                    fill="#9ca3af" />
            </svg>
        </button>
        <div></div>
    </div>

    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden">

    </div>

    <aside
        id="defsidebar"class="fixed left-0 z-40 top-0 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 ">
        <div
            class=" px-3 py-4 overflow-y-auto bg-white h-full flex flex-col items-center overflow-hidden text-gray-400 shadow-xl">
            <h1 class="font-bold text-3xl mb-2">
                <span class="text-[#7E30E1] outline-1">Absensi</span><span class="text-[#E26EE5]">Hub</span>
            </h1>
            <div class="w-full px-2">
                <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
                    @if (session('jabatan') === 'admin')
                        <a class=" {{ request()->is('dashboard') ? 'bg-[#7E30E1] text-white stroke-white' : 'bg-none stroke-black' }} flex items-center w-full h-12 px-3 py-7 mt-4 rounded-xl hover:bg-[#7E30E1] hover:stroke-white hover:text-white"
                            href="{{ route('dashboardadmin', ['id' => session('user_id')]) }}">
                            <svg class="w-8 h-8 mr-3" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M12 12C12 11.4477 12.4477 11 13 11H19C19.5523 11 20 11.4477 20 12V19C20 19.5523 19.5523 20 19 20H13C12.4477 20 12 19.5523 12 19V12Z"
                                        stroke-width="2" stroke-linecap="round"></path>
                                    <path
                                        d="M4 5C4 4.44772 4.44772 4 5 4H8C8.55228 4 9 4.44772 9 5V19C9 19.5523 8.55228 20 8 20H5C4.44772 20 4 19.5523 4 19V5Z"
                                        stroke-width="2" stroke-linecap="round"></path>
                                    <path
                                        d="M12 5C12 4.44772 12.4477 4 13 4H19C19.5523 4 20 4.44772 20 5V7C20 7.55228 19.5523 8 19 8H13C12.4477 8 12 7.55228 12 7V5Z"
                                        stroke-width="2" stroke-linecap="round"></path>
                                </g>
                            </svg>
                            <span class="ml-2 text-xl font-medium">Dashboard</span>
                        </a>
                    @endif

                    @if (session('jabatan') === 'admin')
                        <a class=" {{ request()->is('karyawan') ? 'bg-[#7E30E1] text-white stroke-white fill-current' : 'bg-none stroke-black' }} flex items-center w-full h-12 px-3 py-7 mt-4 rounded-xl hover:fill-current hover:bg-[#7E30E1] hover:stroke-white hover:text-white"
                            href="{{ route('akunkaryawan1', ['id' => session('user_id')]) }}">
                            <svg class="w-8 h-8 mr-3" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <style type="text/css"> </style>
                                    <g>
                                        <path class="st0"
                                            d="M194.651,414.476c16.23,0,61.349,0,61.349,0s45.111,0,61.35,0c16.222,0,23.587-23.603,14.198-40.285 c-7.072-12.572-18.659-26.826-37.516-34.921c-10.793,7.556-23.905,12-38.032,12c-14.143,0-27.238-4.444-38.032-12 c-18.864,8.095-30.444,22.349-37.523,34.921C171.064,390.873,178.421,414.476,194.651,414.476z">
                                        </path>
                                        <path class="st0"
                                            d="M256,335.476c27.714,0,50.167-22.444,50.167-50.159v-12.016c0-27.714-22.452-50.174-50.167-50.174 c-27.714,0-50.174,22.46-50.174,50.174v12.016C205.826,313.032,228.286,335.476,256,335.476z">
                                        </path>
                                        <path class="st0"
                                            d="M404.977,56.889h-75.834v16.254c0,31.365-25.524,56.889-56.889,56.889h-32.508 c-31.365,0-56.889-25.524-56.889-56.889V56.889h-75.833c-25.445,0-46.072,20.627-46.072,46.071v362.969 c0,25.444,20.627,46.071,46.072,46.071h297.952c25.444,0,46.071-20.627,46.071-46.071V102.96 C451.048,77.516,430.421,56.889,404.977,56.889z M402.286,463.238H109.714V150.349h292.572V463.238z">
                                        </path>
                                        <path class="st0"
                                            d="M239.746,113.778h32.508c22.406,0,40.635-18.23,40.635-40.635V40.635C312.889,18.23,294.659,0,272.254,0 h-32.508c-22.405,0-40.635,18.23-40.635,40.635v32.508C199.111,95.547,217.341,113.778,239.746,113.778z M231.619,40.635 c0-4.492,3.635-8.127,8.127-8.127h32.508c4.493,0,8.127,3.635,8.127,8.127v16.254c0,4.492-3.634,8.127-8.127,8.127h-32.508 c-4.492,0-8.127-3.635-8.127-8.127V40.635z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-2 font-medium text-base">Akun Karyawan</span>
                        </a>
                    @endif

                    @if (session('jabatan') === 'admin')
                        <a class=" {{ request()->is('pengajuancuti') ? 'bg-[#7E30E1] text-white stroke-white fill-current' : 'bg-none stroke-black' }} flex items-center w-full h-12 px-3 py-7 mt-4 rounded-xl hover:fill-current hover:bg-[#7E30E1] hover:stroke-white hover:text-white"
                            href="{{ route('pengajuancuti', ['id' => session('user_id')]) }}">
                            <svg class="w-8 h-8 mr-3" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M3 14V10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157C20.4816 3.82476 20.7706 4.69989 20.8985 6M21 10V14C21 17.7712 21 19.6569 19.8284 20.8284C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8284C3.51839 20.1752 3.22937 19.3001 3.10149 18"
                                        stroke-width="1.5" stroke-linecap="round"></path>
                                    <path d="M8 14H13" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path d="M8 10H9M16 10H12" stroke-width="1.5" stroke-linecap="round"></path>
                                </g>
                            </svg>
                            <span class="ml-2 font-medium text-base">Pengajuan Cuti</span>
                        </a>
                    @endif

                    @if (session('jabatan') === 'admin')
                        <a class=" {{ request()->is('cutiditerima') ? 'bg-[#7E30E1] text-white stroke-white fill-current' : 'bg-none stroke-black' }} flex items-center w-full h-12 px-3 py-7 mt-4 rounded-xl hover:fill-current hover:bg-[#7E30E1] hover:stroke-white hover:text-white"
                            href="{{ route('cutipegawai', ['id' => session('user_id')]) }}">
                            <svg class="w-8 h-8 mr-3" viewBox="0 0 32 32" enable-background="new 0 0 32 32"
                                version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g id="Approved"></g>
                                    <g id="Approved_1_"></g>
                                    <g id="File_Approve"></g>
                                    <g id="Folder_Approved"></g>
                                    <g id="Security_Approved"></g>
                                    <g id="Certificate_Approved"></g>
                                    <g id="User_Approved"></g>
                                    <g id="ID_Card_Approved"></g>
                                    <g id="Android_Approved"></g>
                                    <g id="Privacy_Approved"></g>
                                    <g id="Approved_2_"></g>
                                    <g id="Message_Approved"></g>
                                    <g id="Upload_Approved"></g>
                                    <g id="Download_Approved"></g>
                                    <g id="Email_Approved"></g>
                                    <g id="Data_Approved">
                                        <g>
                                            <path
                                                d="M26,22.75c-0.553,0-1,0.447-1,1V29H7V7h18v8.12c0,0.553,0.447,1,1,1s1-0.447,1-1V6V2c0-0.553-0.447-1-1-1H6 C5.447,1,5,1.447,5,2v4v24c0,0.553,0.447,1,1,1h20c0.553,0,1-0.447,1-1v-6.25C27,23.197,26.553,22.75,26,22.75z M7,3h18v2H7V3z">
                                            </path>
                                            <path
                                                d="M30.73,15.316c-0.378-0.402-1.01-0.424-1.414-0.047l-10.006,9.361l-4.627-4.33c-0.402-0.378-1.037-0.358-1.413,0.046 c-0.378,0.402-0.357,1.035,0.046,1.413l5.311,4.971c0.192,0.18,0.438,0.27,0.684,0.27s0.491-0.09,0.684-0.27l10.689-10 C31.087,16.353,31.107,15.72,30.73,15.316z">
                                            </path>
                                            <path
                                                d="M9.438,10.625h4.5c0.553,0,1-0.447,1-1s-0.447-1-1-1h-4.5c-0.553,0-1,0.447-1,1S8.885,10.625,9.438,10.625z">
                                            </path>
                                            <path
                                                d="M21.75,12.813c0-0.553-0.447-1-1-1H9.438c-0.553,0-1,0.447-1,1s0.447,1,1,1H20.75 C21.303,13.813,21.75,13.365,21.75,12.813z">
                                            </path>
                                            <path
                                                d="M9.438,15c-0.553,0-1,0.447-1,1s0.447,1,1,1h7.75c0.553,0,1-0.447,1-1s-0.447-1-1-1H9.438z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-2 font-medium text-base">Cuti Pegawai</span>
                        </a>
                    @endif

                    @if (session('jabatan') === 'admin')
                        <a class=" {{ request()->is('gajikaryawan') ? 'bg-[#7E30E1] text-white stroke-white fill-current' : 'bg-none stroke-black' }} flex items-center w-full h-12 px-3 py-7 mt-4 rounded-xl hover:fill-current hover:bg-[#7E30E1] hover:stroke-white hover:text-white"
                            href="{{ route('gajikaryawan', ['id' => session('user_id')]) }}">
                            <svg class="w-8 h-8 mr-3" version="1.1" id="Uploaded to svgrepo.com"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 32 32" xml:space="preserve" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <style type="text/css">
                                        .feather_een {
                                            fill: #000000;
                                        }
                                    </style>
                                    <path class="feather_een"
                                        d="M3,11c0-0.552,0.448-1,1-1s1,0.448,1,1c0,0.552-0.448,1-1,1S3,11.552,3,11z M4,22c0.552,0,1-0.448,1-1 c0-0.552-0.448-1-1-1s-1,0.448-1,1C3,21.552,3.448,22,4,22z M28,10c-0.552,0-1,0.448-1,1c0,0.552,0.448,1,1,1s1-0.448,1-1 C29,10.448,28.552,10,28,10z M21,16c0,3.314-1.686,6-5,6s-5-2.686-5-6s1.686-6,5-6S21,12.686,21,16z M20,16c0-2.417-1.051-5-4-5 s-4,2.583-4,5c0,2.417,1.051,5,4,5S20,18.417,20,16z M28,20c-0.552,0-1,0.448-1,1c0,0.552,0.448,1,1,1s1-0.448,1-1 C29,20.448,28.552,20,28,20z M31,12.28V22c0,1.105-0.895,2-2,2h-9.686l-6.849,6.849c-0.391,0.391-0.902,0.586-1.414,0.586 s-1.024-0.195-1.414-0.586l-6.873-6.873c-0.923-0.11-1.647-0.844-1.742-1.771C0.432,21.481,0.425,20.451,1,19.72V10 c0-1.105,0.895-2,2-2h9.686l6.849-6.849c0.391-0.391,0.902-0.586,1.414-0.586s1.024,0.195,1.414,0.586l6.873,6.873 c0.923,0.11,1.647,0.843,1.742,1.771C31.568,10.519,31.575,11.549,31,12.28z M14.101,8h13.698l-6.142-6.142 c-0.189-0.189-0.44-0.293-0.707-0.293s-0.518,0.104-0.707,0.293L14.101,8z M17.899,24H4.201l6.142,6.142 c0.189,0.189,0.44,0.293,0.707,0.293c0.267,0,0.518-0.104,0.707-0.293L17.899,24z M30,10c0-0.551-0.449-1-1-1H3 c-0.551,0-1,0.449-1,1v12c0,0.551,0.449,1,1,1h26c0.551,0,1-0.449,1-1V10z">
                                    </path>
                                </g>
                            </svg>
                            <span class="ml-2 font-medium text-base">Gaji Karyawan</span>
                        </a>
                    @endif

                    @if (session('jabatan') === 'admin')
                        <a class=" {{ request()->is('riwayat-gaji') ? 'bg-[#7E30E1] text-white stroke-white fill-current' : 'bg-none stroke-black' }} flex items-center w-full h-12 px-3 py-7 mt-4 rounded-xl hover:fill-current hover:bg-[#7E30E1] hover:stroke-white hover:text-white" 
                            href="{{ route('riwayatGaji') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-200">
                            <svg class="w-8 h-8 mr-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 8V12L14.5 14.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M5.60423 5.60423L5.0739 5.0739V5.0739L5.60423 5.60423ZM4.33785 6.87061L3.58786 6.87438C3.58992 7.28564 3.92281 7.61853 4.33408 7.6206L4.33785 6.87061ZM6.87963 7.63339C7.29384 7.63547 7.63131 7.30138 7.63339 6.88717C7.63547 6.47296 7.30138 6.13549 6.88717 6.13341L6.87963 7.63339ZM5.07505 4.32129C5.07296 3.90708 4.7355 3.57298 4.32129 3.57506C3.90708 3.57715 3.57298 3.91462 3.57507 4.32882L5.07505 4.32129ZM3.75 12C3.75 11.5858 3.41421 11.25 3 11.25C2.58579 11.25 2.25 11.5858 2.25 12H3.75ZM16.8755 20.4452C17.2341 20.2378 17.3566 19.779 17.1492 19.4204C16.9418 19.0619 16.483 18.9393 16.1245 19.1468L16.8755 20.4452ZM19.1468 16.1245C18.9393 16.483 19.0619 16.9418 19.4204 17.1492C19.779 17.3566 20.2378 17.2341 20.4452 16.8755L19.1468 16.1245ZM5.14033 5.07126C4.84598 5.36269 4.84361 5.83756 5.13505 6.13191C5.42648 6.42626 5.90134 6.42862 6.19569 6.13719L5.14033 5.07126ZM18.8623 5.13786C15.0421 1.31766 8.86882 1.27898 5.0739 5.0739L6.13456 6.13456C9.33366 2.93545 14.5572 2.95404 17.8017 6.19852L18.8623 5.13786ZM5.0739 5.0739L3.80752 6.34028L4.86818 7.40094L6.13456 6.13456L5.0739 5.0739ZM4.33408 7.6206L6.87963 7.63339L6.88717 6.13341L4.34162 6.12062L4.33408 7.6206ZM5.08784 6.86684L5.07505 4.32129L3.57507 4.32882L3.58786 6.87438L5.08784 6.86684ZM12 3.75C16.5563 3.75 20.25 7.44365 20.25 12H21.75C21.75 6.61522 17.3848 2.25 12 2.25V3.75ZM12 20.25C7.44365 20.25 3.75 16.5563 3.75 12H2.25C2.25 17.3848 6.61522 21.75 12 21.75V20.25ZM16.1245 19.1468C14.9118 19.8483 13.5039 20.25 12 20.25V21.75C13.7747 21.75 15.4407 21.2752 16.8755 20.4452L16.1245 19.1468ZM20.25 12C20.25 13.5039 19.8483 14.9118 19.1468 16.1245L20.4452 16.8755C21.2752 15.4407 21.75 13.7747 21.75 12H20.25ZM6.19569 6.13719C7.68707 4.66059 9.73646 3.75 12 3.75V2.25C9.32542 2.25 6.90113 3.32791 5.14033 5.07126L6.19569 6.13719Z" ></path> </g></svg>
                            <span class="ml-3">Riwayat Gaji</span>
                        </a>
                    @endif
                </div>
            </div>
            <div class="mt-auto w-full px-2">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="flex items-center w-full h-12 px-3 rounded hover:bg-red-700 text-white bg-red-500"
                        type="submit">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12H3m12 0l-3-3m3 3l-3 3m9-11.25v14.5c0 1.242-1.008 2.25-2.25 2.25H8.25A2.25 2.25 0 016 20.25V3.75C6 2.508 7.008 1.5 8.25 1.5h9.5A2.25 2.25 0 0120 3.75z">
                            </path>
                        </svg>
                        <span class="ml-2 text-lg font-medium">Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </aside>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sidebar = document.getElementById('defsidebar');
            const overlay = document.getElementById('overlay');
            const toggleButton = document.querySelector('[data-drawer-toggle]');


            const openSidebar = () => {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.resmove('hidden');
            };

            const closeSidebar = () => {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
            };

            toggleButton.addEventListener('click', () => {
                if (sidebar.classList.contains('-translate-x-full')) {
                    openSidebar();
                } else {
                    closeSidebar();
                }
            });



            overlay.addEventListener('click', closeSidebar);
        });
    </script>
</div>
