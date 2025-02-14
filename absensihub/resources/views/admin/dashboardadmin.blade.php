<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body class="bg-[#F3F8FF]">
    <x-sidebar></x-sidebar>
    <div class="p-4 sm:ml-64">
        <div class="text-6xl font-bold text-gray-700 uppercase">
            Dashboard
        </div>
        <div class="grid grid-cols-4 gap-4 mt-10 mx-8">
            <div class="rounded-xl w-full  bg-[#00beee] text-white">
                <div class="grid grid-cols-2 gap-0 shadow-2xl h-44">
                    <div class="text-3xl font-bold mt-10 ml-7">
                        {{ $jumlahKaryawan }}
                    </div>
                    <div class="row-span-2 h-32 flex items-center justify-center">
                        <svg class="w-32 h-32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M10.1992 12C12.9606 12 15.1992 9.76142 15.1992 7C15.1992 4.23858 12.9606 2 10.1992 2C7.43779 2 5.19922 4.23858 5.19922 7C5.19922 9.76142 7.43779 12 10.1992 12Z"
                                    stroke="#00acd5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M1 22C1.57038 20.0332 2.74795 18.2971 4.36438 17.0399C5.98081 15.7827 7.95335 15.0687 10 15C14.12 15 17.63 17.91 19 22"
                                    stroke="#00acd5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M17.8205 4.44006C18.5822 4.83059 19.1986 5.45518 19.579 6.22205C19.9594 6.98891 20.0838 7.85753 19.9338 8.70032C19.7838 9.5431 19.3674 10.3155 18.7458 10.9041C18.1243 11.4926 17.3302 11.8662 16.4805 11.97"
                                    stroke="#00acd5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M17.3203 14.5701C18.6543 14.91 19.8779 15.5883 20.8729 16.5396C21.868 17.4908 22.6007 18.6827 23.0003 20"
                                    stroke="#00acd5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="ml-3 -mt-8 font-medium">
                        Jumlah Karyawan
                    </div>
                </div>
            </div>
            <div class="rounded-xl w-full  bg-[#00a65a] text-white">
                <div class="grid grid-cols-2 gap-0 shadow-2xl h-44">
                    <div class="text-3xl font-bold mt-10 ml-7">
                        {{ $jumlahHadir }}
                    </div>
                    <div class="row-span-2 h-32 flex items-center justify-center">
                        <svg class="h-32 w-32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M19 21L22 18M22 18L19 15M22 18H16M15.5 3.29076C16.9659 3.88415 18 5.32131 18 7C18 8.67869 16.9659 10.1159 15.5 10.7092M12 15H8C6.13623 15 5.20435 15 4.46927 15.3045C3.48915 15.7105 2.71046 16.4892 2.30448 17.4693C2 18.2044 2 19.1362 2 21M13.5 7C13.5 9.20914 11.7091 11 9.5 11C7.29086 11 5.5 9.20914 5.5 7C5.5 4.79086 7.29086 3 9.5 3C11.7091 3 13.5 4.79086 13.5 7Z"
                                    stroke="#135f3d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="ml-3 -mt-8 font-medium">
                        Jumlah Hadir
                    </div>
                </div>
            </div>

            <div class="rounded-xl w-full  bg-[#f36161] text-white">
                <div class="grid grid-cols-2 gap-0 shadow-2xl h-44">
                    <div class="text-3xl font-bold mt-10 ml-7">
                        {{ $jumlahTidakHadir }} 
                    </div>
                    <div class="row-span-2 h-32 flex items-center justify-center">
                        <svg class="w-32 h-32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M16.5 16L21.5 21M21.5 16L16.5 21M15.5 3.29076C16.9659 3.88415 18 5.32131 18 7C18 8.67869 16.9659 10.1159 15.5 10.7092M12 15H8C6.13623 15 5.20435 15 4.46927 15.3045C3.48915 15.7105 2.71046 16.4892 2.30448 17.4693C2 18.2044 2 19.1362 2 21M13.5 7C13.5 9.20914 11.7091 11 9.5 11C7.29086 11 5.5 9.20914 5.5 7C5.5 4.79086 7.29086 3 9.5 3C11.7091 3 13.5 4.79086 13.5 7Z"
                                    stroke="#cb2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="ml-3 -mt-8 font-medium">
                        Jumlah Tidak Hadir
                    </div>
                </div>
            </div>

            <div class="rounded-xl w-full  bg-[#F0A04B] text-white">
                <div class="grid grid-cols-2 gap-0 shadow-2xl h-44">
                    <div class="text-3xl font-bold mt-10 ml-7">
                        {{ $jumlahCuti }}
                    </div>
                    <div class="row-span-2 h-32 flex items-center justify-center">
                        <svg class="w-32 h-32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M16 18L18 20L22 16M12 15H8C6.13623 15 5.20435 15 4.46927 15.3045C3.48915 15.7105 2.71046 16.4892 2.30448 17.4693C2 18.2044 2 19.1362 2 21M15.5 3.29076C16.9659 3.88415 18 5.32131 18 7C18 8.67869 16.9659 10.1159 15.5 10.7092M13.5 7C13.5 9.20914 11.7091 11 9.5 11C7.29086 11 5.5 9.20914 5.5 7C5.5 4.79086 7.29086 3 9.5 3C11.7091 3 13.5 4.79086 13.5 7Z"
                                    stroke="#ae6920" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="ml-3 -mt-8 font-medium">
                        Jumlah Cuti
                    </div>
                </div>
            </div>

            <div class="col-span-4 shadow-2xl bg-white rounded-xl p-5">
                <div class="text-xl font-semibold mt-4 ml-4">
                    Jumlah Kehadiran Karyawan Per-Bulan : tanggal
                </div>
                <div class="relative flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                    <div class="pt-6 px-2 pb-0">
                        <div id="line-chart"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        const chartConfig = {
            series: [{
                name: "Kehadiran per bulan",
                data: @json($dataKehadiran),
            }],
            chart: {
                type: "line",
                height: 350,
                toolbar: {
                    show: false,
                },
            },
            title: {
                show: "",
            },
            dataLabels: {
                enabled: true,
            },
            colors: ["#4f1261"],
            stroke: {
                lineCap: "round",
                curve: "smooth",
            },
            markers: {
                size: 0,
            },
            xaxis: {
                axisTicks: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
                labels: {
                    style: {
                        colors: "#616161",
                        fontSize: "12px",
                        fontFamily: "inherit",
                        fontWeight: 400,
                    },
                },
                categories: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "Mei",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
            },
            yaxis: {
                labels: {
                    style: {
                        colors: "#616161",
                        fontSize: "12px",
                        fontFamily: "inherit",
                        fontWeight: 400,
                    },
                },
            },
            grid: {
                show: true,
                borderColor: "#dddddd",
                strokeDashArray: 5,
                xaxis: {
                    lines: {
                        show: true,
                    },
                },
                padding: {
                    top: 5,
                    right: 20,
                },
            },
            fill: {
                opacity: 0.8,
            },
            tooltip: {
                theme: "white",
            },
        };

        const linechart = new ApexCharts(document.querySelector("#line-chart"), chartConfig);

        linechart.render();
    </script>
</body>

</html>
