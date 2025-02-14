<div>
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
                        <a class=" {{ request()->is('absensi') ? 'bg-[#7E30E1] text-white stroke-white' : 'bg-none stroke-black' }} flex items-center w-full h-12 px-3 py-7 mt-4 rounded-xl hover:bg-[#7E30E1] hover:stroke-white hover:text-white"
                            href="{{ route('absensi', ['id' => session('user_id')]) }}">
                            <svg class="w-8 h-8 mr-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 12C12 11.4477 12.4477 11 13 11H19C19.5523 11 20 11.4477 20 12V19C20 19.5523 19.5523 20 19 20H13C12.4477 20 12 19.5523 12 19V12Z"  stroke-width="2" stroke-linecap="round"></path> <path d="M4 5C4 4.44772 4.44772 4 5 4H8C8.55228 4 9 4.44772 9 5V19C9 19.5523 8.55228 20 8 20H5C4.44772 20 4 19.5523 4 19V5Z"  stroke-width="2" stroke-linecap="round"></path> <path d="M12 5C12 4.44772 12.4477 4 13 4H19C19.5523 4 20 4.44772 20 5V7C20 7.55228 19.5523 8 19 8H13C12.4477 8 12 7.55228 12 7V5Z"  stroke-width="2" stroke-linecap="round"></path> </g></svg>
                            <span class="ml-2 text-xl font-medium">Absensi</span>
                        </a>
    
                        <a class=" {{ request()->is('cuti') ? 'bg-[#7E30E1] text-white stroke-white fill-current' : 'bg-none stroke-black' }} flex items-center w-full h-12 px-3 py-7 mt-4 rounded-xl hover:fill-current hover:bg-[#7E30E1] hover:stroke-white hover:text-white"
                            href="{{ route('cuti', ['id' => session('user_id')]) }}">
                            <svg class="w-6 h-6 mr-3" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M22.0098 12.39V7.39001C22.0098 6.32915 21.5883 5.31167 20.8382 4.56152C20.0881 3.81138 19.0706 3.39001 18.0098 3.39001H6.00977C4.9489 3.39001 3.93148 3.81138 3.18134 4.56152C2.43119 5.31167 2.00977 6.32915 2.00977 7.39001V17.39C2.00977 18.4509 2.43119 19.4682 3.18134 20.2184C3.93148 20.9685 4.9489 21.39 6.00977 21.39H12.0098" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21.209 5.41992C15.599 16.0599 8.39906 16.0499 2.78906 5.41992" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15.0098 18.39H23.0098" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M20.0098 15.39L23.0098 18.39L20.0098 21.39" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            <span class="ml-2 font-medium text-base">Cuti</span>
                        </a>
                        <a class=" {{ request()->is('gaji') ? 'bg-[#7E30E1] text-white stroke-white fill-current' : 'bg-none stroke-black' }} flex items-center w-full h-12 px-3 py-7 mt-4 rounded-xl hover:fill-current hover:bg-[#7E30E1] hover:stroke-white hover:text-white"
                            href="{{ route('gaji', ['id' => session('user_id')]) }}">
                            <svg class="w-8 h-8 mr-3" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> </style> <g> <path class="st0" d="M194.651,414.476c16.23,0,61.349,0,61.349,0s45.111,0,61.35,0c16.222,0,23.587-23.603,14.198-40.285 c-7.072-12.572-18.659-26.826-37.516-34.921c-10.793,7.556-23.905,12-38.032,12c-14.143,0-27.238-4.444-38.032-12 c-18.864,8.095-30.444,22.349-37.523,34.921C171.064,390.873,178.421,414.476,194.651,414.476z"></path> <path class="st0" d="M256,335.476c27.714,0,50.167-22.444,50.167-50.159v-12.016c0-27.714-22.452-50.174-50.167-50.174 c-27.714,0-50.174,22.46-50.174,50.174v12.016C205.826,313.032,228.286,335.476,256,335.476z"></path> <path class="st0" d="M404.977,56.889h-75.834v16.254c0,31.365-25.524,56.889-56.889,56.889h-32.508 c-31.365,0-56.889-25.524-56.889-56.889V56.889h-75.833c-25.445,0-46.072,20.627-46.072,46.071v362.969 c0,25.444,20.627,46.071,46.072,46.071h297.952c25.444,0,46.071-20.627,46.071-46.071V102.96 C451.048,77.516,430.421,56.889,404.977,56.889z M402.286,463.238H109.714V150.349h292.572V463.238z"></path> <path class="st0" d="M239.746,113.778h32.508c22.406,0,40.635-18.23,40.635-40.635V40.635C312.889,18.23,294.659,0,272.254,0 h-32.508c-22.405,0-40.635,18.23-40.635,40.635v32.508C199.111,95.547,217.341,113.778,239.746,113.778z M231.619,40.635 c0-4.492,3.635-8.127,8.127-8.127h32.508c4.493,0,8.127,3.635,8.127,8.127v16.254c0,4.492-3.634,8.127-8.127,8.127h-32.508 c-4.492,0-8.127-3.635-8.127-8.127V40.635z"></path> </g> </g></svg>
                            <span class="ml-2 font-medium text-base">Gaji</span>
                        </a>
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
    
</div>