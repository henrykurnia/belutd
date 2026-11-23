@extends('example.layouts.default.landing')

@section('content')
            @vite(['resources/css/app.css', 'resources/js/app.js'])

            <!-- Container Utama dengan Latar Krem Hangat -->
            <div
                class="w-full min-h-screen bg-[#FFFDF8] dark:bg-gray-900 transition-colors duration-300 overflow-x-hidden font-sans relative">

                <!-- ================= HERO SECTION (1 LAYAR PENUH) ================= -->
                <section
                    class="relative w-full min-h-[calc(100vh-4rem)] flex items-stretch bg-gradient-to-b from-[#FFF9EB] via-[#FFFDF6] to-[#FFFDF8] dark:from-gray-900 dark:to-gray-900 pt-6 md:pt-0 overflow-hidden">

                    <!-- Bentuk Kuning Organik Full Kanan & Penuh Sampai Bawah -->
                    <div class="hidden md:block absolute inset-y-0 right-0 w-[62%] pointer-events-none z-0">
                        <svg viewBox="0 0 800 800" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full"
                            preserveAspectRatio="none">
                            <path d="M800 0H470C430 110 310 130 260 250C210 370 110 460 40 620C10 690 0 760 0 800H800V0Z"
                                fill="#FDE6A0" class="dark:fill-[#4a3f1a]/60" />
                            <path d="M800 30H530C480 150 370 160 310 280C250 400 150 490 80 650C50 720 35 775 25 800H800V30Z"
                                fill="#FAD775" class="dark:fill-[#5e4f20]/60" />
                        </svg>
                    </div>

                    <!-- Ornamen Paw Prints Cokelat di Area Hero -->
                    <div class="hidden md:block pointer-events-none z-10">
                        <svg class="w-6 h-6 text-[#9C6526] dark:text-[#FDE6A4] absolute top-6 right-[9%] rotate-12"
                            viewBox="0 0 24 24" fill="currentColor">
                            <ellipse cx="12" cy="15.5" rx="4.5" ry="3.8" />
                            <circle cx="6.5" cy="10.5" r="2" />
                            <circle cx="10" cy="7.5" r="2.1" />
                            <circle cx="14.5" cy="7.5" r="2.1" />
                            <circle cx="18" cy="10.5" r="2" />
                        </svg>
                        <svg class="w-8 h-8 text-[#9C6526] dark:text-[#FDE6A4] absolute top-[14%] right-[22%] -rotate-12"
                            viewBox="0 0 24 24" fill="currentColor">
                            <ellipse cx="12" cy="15.5" rx="4.5" ry="3.8" />
                            <circle cx="6.5" cy="10.5" r="2" />
                            <circle cx="10" cy="7.5" r="2.1" />
                            <circle cx="14.5" cy="7.5" r="2.1" />
                            <circle cx="18" cy="10.5" r="2" />
                        </svg>
                        <svg class="w-7 h-7 text-[#9C6526] dark:text-[#FDE6A4] absolute top-[38%] right-[51%] -rotate-12"
                            viewBox="0 0 24 24" fill="currentColor">
                            <ellipse cx="12" cy="15.5" rx="4.5" ry="3.8" />
                            <circle cx="6.5" cy="10.5" r="2" />
                            <circle cx="10" cy="7.5" r="2.1" />
                            <circle cx="14.5" cy="7.5" r="2.1" />
                            <circle cx="18" cy="10.5" r="2" />
                        </svg>
                        <svg class="w-9 h-9 text-[#9C6526] dark:text-[#FDE6A4] absolute bottom-[18%] right-[50%] -rotate-12"
                            viewBox="0 0 24 24" fill="currentColor">
                            <ellipse cx="12" cy="15.5" rx="4.5" ry="3.8" />
                            <circle cx="6.5" cy="10.5" r="2" />
                            <circle cx="10" cy="7.5" r="2.1" />
                            <circle cx="14.5" cy="7.5" r="2.1" />
                            <circle cx="18" cy="10.5" r="2" />
                        </svg>
                        <svg class="w-8 h-8 text-[#9C6526] dark:text-[#FDE6A4] absolute top-[35%] right-[4%] rotate-12"
                            viewBox="0 0 24 24" fill="currentColor">
                            <ellipse cx="12" cy="15.5" rx="4.5" ry="3.8" />
                            <circle cx="6.5" cy="10.5" r="2" />
                            <circle cx="10" cy="7.5" r="2.1" />
                            <circle cx="14.5" cy="7.5" r="2.1" />
                            <circle cx="18" cy="10.5" r="2" />
                        </svg>
                        <svg class="w-9 h-9 text-[#9C6526] dark:text-[#FDE6A4] absolute bottom-[22%] right-[6%] rotate-12"
                            viewBox="0 0 24 24" fill="currentColor">
                            <ellipse cx="12" cy="15.5" rx="4.5" ry="3.8" />
                            <circle cx="6.5" cy="10.5" r="2" />
                            <circle cx="10" cy="7.5" r="2.1" />
                            <circle cx="14.5" cy="7.5" r="2.1" />
                            <circle cx="18" cy="10.5" r="2" />
                        </svg>
                    </div>

                    <!-- Kontainer Utama Hero -->
                    <div
                        class="relative z-10 w-full max-w-[1280px] mx-auto px-5 md:px-8 flex flex-col md:flex-row items-center md:items-stretch justify-between gap-6">

                        <!-- TEKS KIRI -->
                        <div class="w-full md:w-[46%] flex flex-col justify-center items-start text-left pb-8 md:pb-20">
                            <h1
                                class="text-[34px] md:text-[44px] lg:text-[50px] font-extrabold leading-[1.12] mb-4 text-[#4A2508] dark:text-white tracking-tight relative inline-block">
                                Diagnosa Lebih Awal <br>
                                <span class="text-[#F5820D]">FLUTD</span> Kucingmu <br>
                                dengan BeLUTD

                                <svg class="hidden md:block w-9 h-9 text-[#F7C631] absolute -right-10 -top-1" viewBox="0 0 40 40"
                                    fill="none">
                                    <path d="M6 16L18 6" stroke="currentColor" stroke-width="4" stroke-linecap="round" />
                                    <path d="M10 25L26 19" stroke="currentColor" stroke-width="4" stroke-linecap="round" />
                                    <path d="M11 33L24 34" stroke="currentColor" stroke-width="4" stroke-linecap="round" />
                                </svg>
                            </h1>

                            <p class="text-[#4A2508]/85 dark:text-gray-300 mb-7 leading-relaxed text-sm md:text-[15px] max-w-md">
                                Sering curiga dengan gejala FLUTD? Jangan tunggu sampai terlambat! Pakai BeLUTD untuk menganalisis
                                kondisi kesehatan kucingmu secara mandiri dan dapatkan penanganan awal yang tepat.
                            </p>

                            <div class="flex flex-wrap gap-3">
                        <a href="{{ route('diagnosis') }}"
                            class=" bg-gradient-to-r from-[#F28500] to-[#C85A00] text-white px-6 py-2.5 rounded-xl font-bold
                            hover:brightness-105 transition shadow-md shadow-orange-500/20 text-xs md:text-sm">
                            Diagnosa Sekarang
                        </a>
                                <a href="#tentang-flutd"
                                    class="bg-white/90 dark:bg-gray-800 border border-[#6E4726] text-[#4A2508] dark:text-[#FDE6A4] dark:border-[#FDE6A4] px-6 py-2.5 rounded-xl font-bold hover:bg-[#FFF5D6] dark:hover:bg-gray-700 transition text-xs md:text-sm">
                                    Tentang FLUTD
                                </a>
                            </div>
                        </div>

                        <!-- GAMBAR KANAN -->
                        <div class="w-full md:w-[54%] relative flex justify-center md:justify-end items-end self-end pt-6 md:pt-12">
                            <div class="relative w-full max-w-sm md:max-w-[500px] flex items-end justify-center">
                                <svg class="hidden md:block w-12 h-12 text-[#F7C631] absolute -top-8 left-[28%] z-20"
                                    viewBox="0 0 48 48" fill="none">
                                    <path d="M12 10L18 34" stroke="currentColor" stroke-width="5" stroke-linecap="round" />
                                    <path d="M30 6L28 32" stroke="currentColor" stroke-width="5.5" stroke-linecap="round" />
                                </svg>

                                <img src="{{ asset('image_assets/herosec.png') }}" alt="Kucing Oren"
                                    class="relative z-10 w-full object-contain object-bottom mb-[-6px] md:mb-[-10px] drop-shadow-sm">
                            </div>
                        </div>
                    </div>

                    <!-- Gelombang Pemisah -->
                    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-20 pointer-events-none">
                        <svg viewBox="0 0 1440 110" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="w-full h-[55px] md:h-[85px]" preserveAspectRatio="none">
                            <path d="M0 55C260 105 520 5 840 45C1120 80 1300 35 1440 15V110H0V55Z" fill="#FCE59B"
                                class="dark:fill-[#4a3f1a]/70" />
                            <path d="M0 78C310 115 620 20 960 58C1190 83 1340 50 1440 35V110H0V78Z" fill="#FFFDF8"
                                class="dark:fill-gray-900" />
                        </svg>
                    </div>
                </section>

                <!-- ================= SECTION BAWAH ================= -->
                <div id="tentang-flutd" class="relative w-full pt-8 pb-16 scroll-mt-16">

                    <!-- Dekorasi Paw Prints Pudar -->
                    <div class="hidden md:block pointer-events-none">
                        <svg class="w-8 h-8 text-[#F5E1A4]/70 absolute top-14 left-[4%] -rotate-12" viewBox="0 0 24 24"
                            fill="currentColor">
                            <ellipse cx="12" cy="15.5" rx="4.5" ry="3.8" />
                            <circle cx="6.5" cy="10.5" r="2" />
                            <circle cx="10" cy="7.5" r="2.1" />
                            <circle cx="14.5" cy="7.5" r="2.1" />
                            <circle cx="18" cy="10.5" r="2" />
                        </svg>
                        <svg class="w-8 h-8 text-[#F5E1A4]/70 absolute top-12 right-[4%] rotate-12" viewBox="0 0 24 24"
                            fill="currentColor">
                            <ellipse cx="12" cy="15.5" rx="4.5" ry="3.8" />
                            <circle cx="6.5" cy="10.5" r="2" />
                            <circle cx="10" cy="7.5" r="2.1" />
                            <circle cx="14.5" cy="7.5" r="2.1" />
                            <circle cx="18" cy="10.5" r="2" />
                        </svg>
                        <svg class="w-7 h-7 text-[#F5E1A4]/70 absolute top-[26%] right-[3%] rotate-12" viewBox="0 0 24 24"
                            fill="currentColor">
                            <ellipse cx="12" cy="15.5" rx="4.5" ry="3.8" />
                            <circle cx="6.5" cy="10.5" r="2" />
                            <circle cx="10" cy="7.5" r="2.1" />
                            <circle cx="14.5" cy="7.5" r="2.1" />
                            <circle cx="18" cy="10.5" r="2" />
                        </svg>
                        <svg class="w-8 h-8 text-[#F5E1A4]/70 absolute top-[43%] left-[2.5%] -rotate-12" viewBox="0 0 24 24"
                            fill="currentColor">
                            <ellipse cx="12" cy="15.5" rx="4.5" ry="3.8" />
                            <circle cx="6.5" cy="10.5" r="2" />
                            <circle cx="10" cy="7.5" r="2.1" />
                            <circle cx="14.5" cy="7.5" r="2.1" />
                            <circle cx="18" cy="10.5" r="2" />
                        </svg>
                        <svg class="w-7 h-7 text-[#F5E1A4]/70 absolute top-[56%] left-[5%] -rotate-12" viewBox="0 0 24 24"
                            fill="currentColor">
                            <ellipse cx="12" cy="15.5" rx="4.5" ry="3.8" />
                            <circle cx="6.5" cy="10.5" r="2" />
                            <circle cx="10" cy="7.5" r="2.1" />
                            <circle cx="14.5" cy="7.5" r="2.1" />
                            <circle cx="18" cy="10.5" r="2" />
                        </svg>
                    </div>

                    <!-- Konten -->
                    <div class="max-w-[1280px] mx-auto px-5 md:px-8 relative z-10">

                        <!-- DEFINITION -->
                        <section class="text-center mb-10">
                            <p
                                class="text-base md:text-[19px] text-[#4A2508] dark:text-gray-200 leading-relaxed font-bold max-w-3xl mx-auto">
                                Feline Lower Urinary Tract Disease (FLUTD) adalah istilah untuk menyebut berbagai penyakit pada
                                saluran kemih bagian bawah kucing, terutama masalah yang terjadi di kandung kemih dan uretra.
                                Penyakit ini biasanya ditandai oleh:
                            </p>
                        </section>

                        <!-- SYMPTOMS GRID DENGAN TOOLTIP (TANPA IKON i) -->
                        <section class="mb-20">
                            @php
    $symptoms1 = [
        [
            'name' => 'Hematuria',
            'desc' => 'Terdapat darah pada urine sehingga warna kencing tampak kemerahan atau merah muda.'
        ],
        [
            'name' => 'Stranguria',
            'desc' => 'Kesulitan atau mengejan saat buang air kecil, sering disertai tanda kesakitan.'
        ],
        [
            'name' => 'Periuria',
            'desc' => 'Buang air kecil di luar kotak pasir (litter box), seperti di lantai, kasur, atau sudut ruangan.'
        ],
        [
            'name' => 'Disuria',
            'desc' => 'Rasa nyeri atau tidak nyaman saat buang air kecil, membuat kucing mengeong kesakitan di litter box.'
        ],
        [
            'name' => 'Polakisuria',
            'desc' => 'Frekuensi buang air kecil menjadi sangat sering namun urine yang keluar hanya sedikit.'
        ],
        [
            'name' => 'Anuria',
            'desc' => 'Tidak mampu mengeluarkan urine sama sekali akibat sumbatan total pada saluran kemih (kondisi darurat).'
        ],
        [
            'name' => 'Oliguria',
            'desc' => 'Volume atau jumlah urine yang dikeluarkan jauh lebih sedikit dari kondisi normal.'
        ],
        [
            'name' => 'Muntah',
            'desc' => 'Kucing mengalami muntah yang dapat dipicu oleh rasa nyeri hebat atau penumpukan racun akibat gangguan urine.'
        ],
        [
            'name' => 'Dehidrasi',
            'desc' => 'Tubuh kucing kekurangan cairan yang ditandai dengan gusi kering dan elastisitas kulit menurun.'
        ],
    ];

    $symptoms2 = [
        [
            'name' => 'Penurunan Nafsu Makan',
            'desc' => 'Kucing enggan makan atau porsi makannya berkurang drastis karena merasa nyeri dan tidak nyaman.'
        ],
        [
            'name' => 'Penurunan Keaktifan',
            'desc' => 'Kucing terlihat lesu, lebih banyak tidur, menyendiri, atau tidak bersemangat bermain seperti biasa.'
        ],
    ];
                            @endphp

                            <!-- Baris 1 - 3 (3 Kolom) -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                @foreach($symptoms1 as $symptom)
                                    <div tabindex="0"
                                        class="group relative bg-gradient-to-b from-[#FCE9A6] to-[#F9DC82] dark:from-[#4a3f1a] dark:to-[#3d3314] border border-[#F5D372]/60 dark:border-yellow-700/50 py-3.5 px-6 rounded-2xl text-center font-bold text-sm md:text-base text-[#4A2508] dark:text-gray-100 shadow-[0_3px_10px_rgba(218,165,32,0.12)] transition-all hover:-translate-y-0.5 hover:shadow-md cursor-help focus:outline-none focus:ring-2 focus:ring-[#F5820D]">
                                        {{ $symptom['name'] }}

                                        <!-- Tooltip Popover -->
                                        <div role="tooltip"
                                            class="pointer-events-none opacity-0 invisible group-hover:opacity-100 group-hover:visible group-focus:opacity-100 group-focus:visible transition-all duration-200 absolute bottom-full left-1/2 -translate-x-1/2 mb-2.5 w-64 sm:w-72 p-3 rounded-xl bg-[#4A2508] dark:bg-gray-800 text-[#FFFDF8] text-xs font-medium leading-relaxed shadow-xl border border-[#F5820D]/40 z-30">
                                            {{ $symptom['desc'] }}
                                            <!-- Panah Bawah Tooltip -->
                                            <div
                                                class="absolute top-full left-1/2 -translate-x-1/2 border-[6px] border-transparent border-t-[#4A2508] dark:border-t-gray-800">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Baris 4 (2 Kolom Terpusat) -->
                            <div class="flex flex-col md:flex-row justify-center gap-4">
                                @foreach($symptoms2 as $symptom)
                                    <div tabindex="0"
                                        class="group relative w-full md:w-[32.2%] bg-gradient-to-b from-[#FCE9A6] to-[#F9DC82] dark:from-[#4a3f1a] dark:to-[#3d3314] border border-[#F5D372]/60 dark:border-yellow-700/50 py-3.5 px-6 rounded-2xl text-center font-bold text-sm md:text-base text-[#4A2508] dark:text-gray-100 shadow-[0_3px_10px_rgba(218,165,32,0.12)] transition-all hover:-translate-y-0.5 hover:shadow-md cursor-help focus:outline-none focus:ring-2 focus:ring-[#F5820D]">
                                        {{ $symptom['name'] }}

                                        <!-- Tooltip Popover -->
                                        <div role="tooltip"      class="pointer-events-none opacity-0 invisible group-hover:opacity-100
                                            group-hover:visible group-focus:opacity-100 group-focus:visible transition-all duration-200
                                            absolute bottom-full left-1/2 -translate-x-1/2 mb-2.5 w-64 sm:w-72 p-3 rounded-xl
                                            bg-[#4A2508] dark:bg-gray-800 text-[#FFFDF8] text-xs font-medium leading-relaxed shadow-xl
                                            border border-[#F5820D]/40 z-30">
                                            {{ $symptom['desc'] }}
                                            <!-- Panah Bawah Tooltip -->
                                            <div     class="absolute top-full left-1/2 -translate-x-1/2 border-[6px] border-transparent
                                                border-t-[#4A2508] dark:border-t-gray-800">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>

                        <!-- FACTORS SECTION -->
                        <section class="relative pt-2">
                            <div class="relative flex items-center justify-center mb-10">
                                <div class="hidden sm:block h-[2.5px] w-24 md:w-32 bg-[#F6CE55] rounded-full mr-4"></div>
                                <h2 class="text-lg md:text-[21px] font-extrabold text-[#4A2508] dark:text-white text-center">
                                    Dapat dipicu oleh beberapa faktor:
                                </h2>
                                <div class="hidden sm:block h-[2.5px] w-24 md:w-32 bg-[#F6CE55] rounded-full ml-4"></div>

                                <div
                                    class="hidden md:flex items-center justify-center absolute -right-4 -top-16 w-40 h-40 pointer-events-none">
                                    <div class="w-28 h-28 rounded-full bg-[#FCE9A6]/80 dark:bg-[#4a3f1a]/60 absolute top-2 right-1">
                                    </div>
                                    <img src="{{ asset('image_assets/cat 1.png') }}" alt="Kucing Membaca"
                                        class="relative z-10 w-36 object-contain">
                                </div>
                            </div>

                            <!-- Grid 5 kolom -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
                                <!-- Card 1 -->
                                <div
                                    class="bg-white dark:bg-gray-800 border border-[#F3E5C8] dark:border-gray-700 rounded-2xl p-4 shadow-[0_4px_15px_rgba(74,37,8,0.05)] hover:shadow-md transition flex flex-col">
                                    <img src="{{ asset('image_assets/jk.jpg') }}"
                                        class="w-full h-36 xl:h-40 object-cover rounded-xl mb-4" alt="Umur Kalender">
                                    <div class="px-0.5 pb-1">
                                        <h3 class="font-bold text-sm md:text-[15px] mb-2 text-[#4A2508] dark:text-white">Jenis Kelamin</h3>
                                            <p class="text-xs md:text-[13px] text-[#5C3D24]/85 dark:text-gray-400 leading-relaxed">
                                                Kucing yang lebih tua cenderung lebih rentan mengalami FLUTD karena risiko penyakit
                                                meningkat.
                                            </p>
                                    </div>
                                </div>

                                <!-- Card 2 -->
                                <div
                                    class="bg-white dark:bg-gray-800 border border-[#F3E5C8] dark:border-gray-700 rounded-2xl p-4 shadow-[0_4px_15px_rgba(74,37,8,0.05)] hover:shadow-md transition flex flex-col">
                                    <img src="{{ asset('image_assets/obesitas.jpg') }}"
                                        class="w-full h-36 xl:h-40 object-cover rounded-xl mb-4" alt="Obesitas">
                                    <div class="px-0.5 pb-1">
                                        <h3 class="font-bold text-sm md:text-[15px] mb-2 text-[#4A2508] dark:text-white">Obesitas
                                        </h3>
                                        <p class="text-xs md:text-[13px] text-[#5C3D24]/85 dark:text-gray-400 leading-relaxed">
                                            Kelebihan berat badan dapat meningkatkan risiko terjadinya FLUTD pada kucing.
                                        </p>
                                    </div>
                                </div>

                                <!-- Card 3 -->
                                <div
                                    class="bg-white dark:bg-gray-800 border border-[#F3E5C8] dark:border-gray-700 rounded-2xl p-4 shadow-[0_4px_15px_rgba(74,37,8,0.05)] hover:shadow-md transition flex flex-col">
                                    <img src="{{ asset('image_assets/stres.jpg') }}"
                                            class=" w-full h-36 xl:h-40 object-cover rounded-xl mb-4" alt="Stress">
                                    <div class="px-0.5 pb-1">
                                        <h3 class="font-bold text-sm md:text-[15px] mb-2 text-[#4A2508] dark:text-white">Stress</h3>
                                        <p class="text-xs md:text-[13px] text-[#5C3D24]/85 dark:text-gray-400 leading-relaxed">
                                            Kucing yang stres dapat mengalami perubahan perilaku dan meningkatkan risiko FLUTD.
                                        </p>
                                    </div>
                                </div>

                                <!-- Card 4 -->
                                <div
                                    class="bg-white dark:bg-gray-800 border border-[#F3E5C8] dark:border-gray-700 rounded-2xl p-4 shadow-[0_4px_15px_rgba(74,37,8,0.05)] hover:shadow-md transition flex flex-col">
                                    <img src="{{ asset('image_assets/jp.jpg') }}" class="w-full h-36 xl:h-40 object-cover rounded-xl
                                        mb-4" alt="Jenis Pakan">
                                    <div class="px-0.5 pb-1">
                                        <h3 class="font-bold text-sm md:text-[15px] mb-2 text-[#4A2508] dark:text-white">Jenis Pakan
                                        </h3>
                                        <p class="text-xs md:text-[13px] text-[#5C3D24]/85 dark:text-gray-400 leading-relaxed">
                                            Pakan yang tidak sesuai dengan kebutuhan kucing dapat memicu FLUTD.
                                        </p>
                                    </div>
                                </div>

                                <!-- Card 5 -->
                                <div
                                    class="bg-white dark:bg-gray-800 border border-[#F3E5C8] dark:border-gray-700 rounded-2xl p-4 shadow-[0_4px_15px_rgba(74,37,8,0.05)] hover:shadow-md transition flex flex-col">
                                    <img src="{{ asset('image_assets/steril.jpg') }}"
                                        class="w-full h-36 xl:h-40 object-cover rounded-xl mb-4" alt="Cuaca dan Iklim">
                                    <div class="px-0.5 pb-1">
                                        <h3 class="font-bold text-sm md:text-[15px] mb-2 text-[#4A2508] dark:text-white">Status Sterilisasi</h3>
                                        <p class="text-xs md:text-[13px] text-[#5C3D24]/85 dark:text-gray-400 leading-relaxed">
                                            Perubahan cuaca ekstrem dapat memengaruhi kesehatan saluran kemih pada kucing.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <!-- ================= FOOTER DATAR SEDERHANA ================= -->
                <footer
                    class="w-full bg-[#FCE9A6]/60 dark:bg-gray-800/80 border-t border-[#F5D372]/60 dark:border-gray-700 py-5 px-5 transition-colors duration-300">
                    <div
                        class="max-w-[1280px] mx-auto flex items-center justify-center gap-1.5 text-xs font-semibold text-[#5C3D24] dark:text-[#FDE6A4] text-center">
                        <svg class="w-3.5 h-3.5 text-[#F28500] shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <ellipse cx="12" cy="15.5" rx="4.5" ry="3.8" />
                            <circle cx="6.5" cy="10.5" r="2" />
                            <circle cx="10" cy="7.5" r="2.1" />
                            <circle cx="14.5" cy="7.5" r="2.1" />
                            <circle cx="18" cy="10.5" r="2" />
                        </svg>
                        <span>&copy; 2026 BeLUTD | Diagnosis Awal, Kucing Sehat, Keluarga Bahagia</span>
                    </div>
                </footer>

            </div>
@endsection