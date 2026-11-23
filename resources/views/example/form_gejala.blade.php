@extends('example.layouts.default.landing')

@section('content')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <div class="w-full min-h-[calc(100vh-4rem)] bg-white dark:bg-gray-900 transition-colors duration-300 font-sans">

        <!-- ================= PANEL KIRI (FIXED: DIAM TERKUNCI DI LAYAR) ================= -->
        <aside
            class="w-full lg:w-[38%] lg:fixed lg:top-16 lg:bottom-0 lg:left-0 bg-gradient-to-br from-[#FCE29C] via-[#FDEBB8] to-[#FFF9E6] dark:from-[#3d3314] dark:via-[#2d2610] dark:to-gray-900 flex flex-col justify-between pt-8 lg:pt-10 pb-0 px-6 sm:px-10 overflow-hidden z-20 border-b lg:border-b-0 lg:border-r border-[#F5D372]/60 dark:border-gray-800">

            <!-- Dekorasi Lingkaran & Paw Prints Latar -->
            <div class="pointer-events-none">
                <div class="w-56 h-56 rounded-full bg-[#F7C631]/25 blur-2xl absolute -top-12 -left-12"></div>
                <div class="w-64 h-64 rounded-full bg-[#F5820D]/15 blur-2xl absolute bottom-10 -right-16"></div>

                <svg class="w-8 h-8 text-[#9C6526]/15 dark:text-[#FDE6A4]/10 absolute top-8 right-8 rotate-12"
                    viewBox="0 0 24 24" fill="currentColor">
                    <ellipse cx="12" cy="15.5" rx="4.5" ry="3.8" />
                    <circle cx="6.5" cy="10.5" r="2" />
                    <circle cx="10" cy="7.5" r="2.1" />
                    <circle cx="14.5" cy="7.5" r="2.1" />
                    <circle cx="18" cy="10.5" r="2" />
                </svg>
                <svg class="w-10 h-10 text-[#9C6526]/15 dark:text-[#FDE6A4]/10 absolute top-[45%] left-5 -rotate-12"
                    viewBox="0 0 24 24" fill="currentColor">
                    <ellipse cx="12" cy="15.5" rx="4.5" ry="3.8" />
                    <circle cx="6.5" cy="10.5" r="2" />
                    <circle cx="10" cy="7.5" r="2.1" />
                    <circle cx="14.5" cy="7.5" r="2.1" />
                    <circle cx="18" cy="10.5" r="2" />
                </svg>
            </div>

            <!-- Bagian Atas: Brand + Stepper + Tips -->
            <div class="relative z-10 w-full max-w-sm mx-auto shrink-0">

                <!-- Header Brand & Badge Langkah Dinamis -->
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-2.5">
                        <img src="{{ asset('image_assets/logo.png') }}" alt="BeLUTD Logo" class="h-8 w-auto"
                            onerror="this.style.display='none'">
                        <span class="text-xl font-extrabold text-[#4A2508] dark:text-[#FDE6A4] tracking-tight">
                            BeLUTD
                        </span>
                    </div>
                    <span id="step-badge"
                        class="px-3 py-1 rounded-full text-[11px] font-bold bg-[#4A2508] text-[#FCE9A6] dark:bg-[#F5820D] dark:text-white shadow-xs">
                        Langkah 1 dari 2
                    </span>
                </div>

                <!-- Judul & Deskripsi Singkat -->
                <h2 class="text-lg md:text-xl font-extrabold text-[#4A2508] dark:text-white leading-snug mb-1.5">
                    Deteksi Dini Kesehatan Saluran Kemih Anabul
                </h2>
                <p id="step-subtitle" class="text-xs text-[#4A2508]/80 dark:text-gray-300 leading-relaxed mb-4">
                    Amati perilaku kucingmu di <i>litter box</i> dan aktivitas harian dalam 24–48 jam terakhir sebelum
                    mengisi formulir.
                </p>

                <!-- Stepper Alur Diagnosa -->
                <div
                    class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm border border-[#F5D372]/70 dark:border-gray-700 rounded-2xl p-3.5 mb-3.5 shadow-xs">
                    <div class="space-y-3">
                        <!-- Step 1 -->
                        <div id="stepper-item-1" class="flex items-start gap-3 transition-opacity">
                            <div id="stepper-circle-1"
                                class="w-6 h-6 rounded-full bg-gradient-to-r from-[#F28500] to-[#C85A00] text-white font-bold text-xs flex items-center justify-center shrink-0 shadow-xs">
                                1
                            </div>
                            <div class="text-left">
                                <p class="text-xs font-extrabold text-[#4A2508] dark:text-white">
                                    Gejala Klinis <span id="stepper-status-1" class="text-[#F5820D] font-semibold">(Sedang
                                        Diisi)</span>
                                </p>
                                <p class="text-[11px] text-[#5C3D24]/80 dark:text-gray-400">
                                    Tanda fisik buang air kecil, nafsu makan, &amp; keaktifan.
                                </p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div id="stepper-item-2" class="flex items-start gap-3 opacity-65 transition-opacity">
                            <div id="stepper-circle-2"
                                class="w-6 h-6 rounded-full bg-[#F9E7A8] dark:bg-gray-700 text-[#4A2508] dark:text-gray-300 font-bold text-xs flex items-center justify-center shrink-0 border border-[#E5C158]">
                                2
                            </div>
                            <div class="text-left">
                                <p class="text-xs font-bold text-[#4A2508] dark:text-gray-200">
                                    Faktor Risiko <span id="stepper-status-2"
                                        class="hidden text-[#F5820D] font-semibold">(Sedang Diisi)</span>
                                </p>
                                <p class="text-[11px] text-[#5C3D24]/80 dark:text-gray-400">
                                    Pola pakan, kondisi tubuh, serta lingkungan kucing.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kartu Tips Singkat -->
                <div class="flex items-start gap-2.5 bg-[#4A2508] dark:bg-gray-800 text-[#FFFDF8] rounded-xl p-3 shadow-sm">
                    <svg class="w-4 h-4 text-[#F7C631] shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd" />
                    </svg>
                    <p id="step-tip-text" class="text-[11px] leading-relaxed text-[#FFFDF8]/95">
                        Arahkan kursor pada ikon <span class="font-bold text-[#F7C631]">(i)</span> di sebelah istilah medis
                        untuk melihat penjelasan gejalanya.
                    </p>
                </div>
            </div>

            <!-- Bagian Bawah: Ilustrasi Pemilik & Kucing Mentok Bawah -->
            <div
                class="relative z-10 w-full max-w-[260px] lg:max-w-[280px] mx-auto mt-auto pt-3 flex justify-center items-end leading-none overflow-hidden">
                <img src="{{ asset('image_assets/form.png') }}" alt="Pemilik dan Kucing Oren"
                    class="block w-full max-h-[24vh] xl:max-h-[28vh] object-contain object-bottom mb-[-2px] drop-shadow-sm">
            </div>
        </aside>

        <!-- ================= PANEL KANAN (AREA FORM MULTI-STEP) ================= -->
        <div
            class="w-full lg:w-[62%] lg:ml-[38%] min-h-[calc(100vh-4rem)] bg-white dark:bg-gray-900 py-10 px-6 sm:px-10 lg:px-14 flex flex-col justify-center">
            <div class="max-w-3xl w-full mx-auto">

                <!-- Alert Validasi Sisi Klien / Server -->
                <div id="validation-alert"
                    class="{{ $errors->any() ? '' : 'hidden' }} mb-6 p-3.5 rounded-xl bg-red-50 dark:bg-red-900/30 border border-red-200 dark:border-red-800 text-xs font-medium text-red-700 dark:text-red-300 flex items-center gap-2">
                    <svg class="w-4 h-4 shrink-0 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                            clip-rule="evenodd" />
                    </svg>
                    <span id="validation-alert-text">Mohon lengkapi seluruh kolom gejala klinis terlebih dahulu sebelum
                        melanjutkan.</span>
                </div>

                @if (session('success'))
                    <div
                        class="mb-6 p-3.5 rounded-xl bg-emerald-50 dark:bg-emerald-900/30 border border-emerald-200 dark:border-emerald-800 text-xs font-medium text-emerald-700 dark:text-emerald-300">
                        {{ session('success') }}
                    </div>
                @endif

                @php
                    // Data Dropdown Step 1: Gejala Klinis
                    $gejalaFields = [
                        [
                            'name' => 'hematuria',
                            'label' => 'Hematuria',
                            'placeholder' => 'Pilih kondisi...',
                            'info' => 'Terdapat darah pada urine sehingga warna kencing tampak kemerahan atau merah muda.',
                            'options' => ['1' => 'Ya', '0' => 'Tidak']
                        ],
                        [
                            'name' => 'disturia',
                            'label' => 'Disturia',
                            'placeholder' => 'Pilih kondisi...',
                            'info' => 'Rasa nyeri atau tidak nyaman saat buang air kecil, sering ditandai dengan mengeong kesakitan.',
                            'options' => ['1' => 'Ya', '0' => 'Tidak']
                        ],
                        [
                            'name' => 'periuria',
                            'label' => 'Periuria',
                            'placeholder' => 'Pilih kondisi...',
                            'info' => 'Buang air kecil sembarangan di luar kotak pasir (litter box).',
                            'options' => ['1' => 'Ya', '0' => 'Tidak']
                        ],
                        [
                            'name' => 'stanguria',
                            'label' => 'Stanguria',
                            'placeholder' => 'Pilih kondisi...',
                            'info' => 'Kesulitan atau mengejan keras saat buang air kecil sehingga urine keluar menetes/tersendat.',
                            'options' => ['1' => 'Ya', '0' => 'Tidak']
                        ],
                        [
                            'name' => 'anuria',
                            'label' => 'Anuria',
                            'placeholder' => 'Pilih kondisi...',
                            'info' => 'Tidak mampu mengeluarkan urine sama sekali akibat penyumbatan total saluran kemih.',
                            'options' => ['1' => 'Ya', '0' => 'Tidak']
                        ],
                        [
                            'name' => 'oliguria',
                            'label' => 'Oliguria',
                            'placeholder' => 'Pilih kondisi...',
                            'info' => 'Volume atau jumlah urine yang dikeluarkan jauh lebih sedikit dari biasanya.',
                            'options' => ['1' => 'Ya', '0' => 'Tidak']
                        ],
                        [
                            'name' => 'pollakuria',
                            'label' => 'Pollakuria',
                            'placeholder' => 'Pilih kondisi...',
                            'info' => 'Frekuensi buang air kecil menjadi sangat sering namun urine yang keluar hanya sedikit.',
                            'options' => ['1' => 'Ya', '0' => 'Tidak']
                        ],
                        [
                            'name' => 'muntah',
                            'label' => 'Muntah',
                            'placeholder' => 'Pilih kondisi...',
                            'info' => null,
                            'options' => ['1' => 'Ya', '0' => 'Tidak']
                        ],
                        [
                            'name' => 'tingkat_keaktifan',
                            'label' => 'Tingkat Keaktifan',
                            'placeholder' => 'Pilih tingkat keaktifan...',
                            'info' => null,
                            'options' => ['normal' => 'Normal / Aktif', 'menurun' => 'Menurun / Lesu']
                        ],
                        [
                            'name' => 'tingkat_nafsu_makan',
                            'label' => 'Tingkat Nafsu Makan',
                            'placeholder' => 'Pilih tingkat nafsu makan...',
                            'info' => null,
                            'options' => ['normal' => 'Normal', 'menurun' => 'Menurun']
                        ],
                        [
                            'name' => 'dehidrasi',
                            'label' => 'Dehidrasi',
                            'placeholder' => 'Pilih kondisi...',
                            'info' => 'Kekurangan cairan tubuh, ditandai dengan gusi kering, mata cekung, atau kulit lambat kembali saat dicubit.',
                            'options' => ['1' => 'Ya', '0' => 'Tidak']
                        ],
                    ];

                    // Data Dropdown Step 2: Faktor Risiko (Sesuai Referensi)
                    $faktorFields = [
                        [
                            'name' => 'jenis_kelamin',
                            'label' => 'Jenis Kelamin',
                            'placeholder' => 'Pilih jenis kelamin...',
                            'options' => ['jantan' => 'Jantan', 'betina' => 'Betina']
                        ],
                        [
                            'name' => 'obesitas',
                            'label' => 'Obesitas',
                            'placeholder' => 'Pilih kondisi berat badan...',
                            'options' => ['1' => 'Ya (Kegemukan / Obesitas)', '0' => 'Tidak (Berat Badan Ideal)']
                        ],
                        [
                            'name' => 'status_sterilisasi',
                            'label' => 'Status Sterilisasi',
                            'placeholder' => 'Pilih status sterilisasi...',
                            'options' => ['sudah' => 'Sudah Steril', 'belum' => 'Belum Steril']
                        ],
                        [
                            'name' => 'jenis_pakan',
                            'label' => 'Jenis Pakan (dominan)',
                            'placeholder' => 'Pilih jenis pakan dominan...',
                            'options' => [
                                'dry_food' => 'Dry Food (Pakan Kering)',
                                'wet_food' => 'Wet Food (Pakan Basah)',
                                'campuran' => 'Campuran (Dry & Wet Food)'
                            ]
                        ],
                        [
                            'name' => 'punya_kucing_lain',
                            'label' => 'Punya Kucing/Peliharaan Lain',
                            'placeholder' => 'Pilih kondisi peliharaan...',
                            'options' => ['1' => 'Ya, punya peliharaan lain', '0' => 'Tidak, hanya satu kucing']
                        ],
                        [
                            'name' => 'tingkat_keramaian',
                            'label' => 'Tingkat Keramaian Tempat Tinggal',
                            'placeholder' => 'Pilih tingkat keramaian...',
                            'options' => [
                                'tenang' => 'Tenang / Sepi',
                                'sedang' => 'Sedang / Normal',
                                'ramai' => 'Ramai / Bising'
                            ]
                        ],
                    ];
                @endphp

                <form id="form-diagnosis" action="{{ route('diagnosis.store') }}" method="POST" novalidate>
                    @csrf

                    <!-- ========================================================= -->
                    <!-- STEP 1: FORM GEJALA KLINIS                                -->
                    <!-- ========================================================= -->
                    <div id="step-1-container">
                        <h1 class="text-2xl md:text-[26px] font-extrabold text-center text-[#4A2508] dark:text-white mb-8">
                            Gejala Klinis
                        </h1>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5">

                            <!-- 1. Input Nama Kucing -->
                            <div>
                                <label for="nama_kucing"
                                    class="block text-xs md:text-[13px] font-semibold text-[#4A2508] dark:text-gray-200 mb-1.5">
                                    Nama
                                </label>
                                <input type="text" id="nama_kucing" name="nama_kucing"
                                    value="{{ old('nama_kucing', session('diagnosis_input.nama_kucing')) }}"
                                    placeholder="Masukkan nama kucing..." data-step="1" required
                                    class="step1-field w-full h-11 px-4 rounded-md bg-[#F9F2DC] dark:bg-gray-800 border border-transparent focus:border-[#F59E0B] focus:bg-white dark:focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-[#F59E0B]/20 text-sm text-[#4A2508] dark:text-white placeholder-[#4A2508]/45 transition">
                            </div>

                            <!-- 2 - 12. Custom Dropdown Gejala Klinis -->
                            @foreach($gejalaFields as $field)
                                @php
                                    $currentValue = old($field['name'], session('diagnosis_input.' . $field['name']));
                                    $hasValue = $currentValue !== null && isset($field['options'][(string) $currentValue]);
                                    $selectedLabel = $hasValue ? $field['options'][(string) $currentValue] : $field['placeholder'];
                                @endphp

                                <div>
                                    <div class="flex items-center justify-between mb-1.5">
                                        <label class="text-xs md:text-[13px] font-semibold text-[#4A2508] dark:text-gray-200">
                                            {{ $field['label'] }}
                                        </label>

                                        @if($field['info'])
                                            <div class="group relative flex items-center">
                                                <button type="button" tabindex="-1"
                                                    class="text-[#6E4726] dark:text-[#FDE6A4] hover:text-[#F5820D] focus:outline-none"
                                                    aria-label="Info {{ $field['label'] }}">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8"
                                                        viewBox="0 0 24 24">
                                                        <circle cx="12" cy="12" r="9.5" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M12 16v-4m0-4h.01" />
                                                    </svg>
                                                </button>
                                                <div
                                                    class="pointer-events-none opacity-0 invisible group-hover:opacity-100 group-hover:visible group-focus-within:opacity-100 group-focus-within:visible transition-all duration-200 absolute bottom-full right-0 mb-2 w-60 p-2.5 rounded-lg bg-[#4A2508] text-white text-[11px] leading-relaxed shadow-lg z-40">
                                                    {{ $field['info'] }}
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="custom-select-wrapper relative">
                                        <input type="text" name="{{ $field['name'] }}"
                                            value="{{ $hasValue ? $currentValue : '' }}" data-step="1" required
                                            class="sr-only custom-select-input step1-field" tabindex="-1">

                                        <button type="button"
                                            class="custom-select-trigger w-full h-11 px-4 rounded-md bg-[#F9F2DC] dark:bg-gray-800 border border-transparent hover:border-[#E5C158] focus:border-[#F59E0B] focus:bg-white dark:focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-[#F59E0B]/20 text-sm flex items-center justify-between transition cursor-pointer">
                                            <span
                                                class="custom-select-label truncate {{ $hasValue ? 'text-[#4A2508] dark:text-white font-medium' : 'text-[#4A2508]/50 dark:text-gray-400' }}">
                                                {{ $selectedLabel }}
                                            </span>
                                            <svg class="custom-select-arrow w-4 h-4 text-[#4A2508] dark:text-gray-300 transition-transform duration-200 shrink-0 ml-2"
                                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </button>

                                        <div
                                            class="custom-select-menu hidden absolute left-0 right-0 mt-1.5 rounded-xl bg-[#FFFDF8] dark:bg-gray-800 border border-[#F5D372] dark:border-gray-700 shadow-[0_10px_25px_rgba(74,37,8,0.12)] overflow-hidden z-30">
                                            <ul class="py-1 max-h-48 overflow-y-auto">
                                                @foreach($field['options'] as $optVal => $optLabel)
                                                    @php
                                                        $isSelected = $hasValue && (string) $currentValue === (string) $optVal;
                                                    @endphp
                                                    <li>
                                                        <button type="button" data-value="{{ $optVal }}"
                                                            class="custom-select-option w-full px-4 py-2.5 text-left text-sm flex items-center justify-between transition-colors cursor-pointer {{ $isSelected ? 'bg-[#FCE9A6] dark:bg-[#4a3f1a] text-[#4A2508] dark:text-[#FDE6A4] font-bold' : 'text-[#4A2508] dark:text-gray-200 hover:bg-[#F9F2DC] dark:hover:bg-gray-700' }}">
                                                            <span>{{ $optLabel }}</span>
                                                            <svg class="check-icon w-4 h-4 text-[#F28500] {{ $isSelected ? '' : 'hidden' }}"
                                                                fill="none" stroke="currentColor" stroke-width="2.5"
                                                                viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </button>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <!-- Tombol Selanjutnya -->
                        <div class="mt-8 flex justify-end">
                            <button type="button" id="btn-next-step"
                                class="bg-[#F59E0B] hover:bg-[#D97706] text-white font-bold text-sm px-8 py-3 rounded-lg shadow-md shadow-amber-500/25 transition-all cursor-pointer">
                                Selanjutnya
                            </button>
                        </div>
                    </div>

                    <!-- ========================================================= -->
                    <!-- STEP 2: FORM FAKTOR RISIKO                                -->
                    <!-- ========================================================= -->
                    <div id="step-2-container" class="hidden">
                        <h1 class="text-2xl md:text-[26px] font-extrabold text-center text-[#4A2508] dark:text-white mb-8">
                            Faktor Risiko
                        </h1>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-6">

                            @foreach($faktorFields as $field)
                                @php
                                    $currentValue = old($field['name'], session('diagnosis_input.' . $field['name']));
                                    $hasValue = $currentValue !== null && isset($field['options'][(string) $currentValue]);
                                    $selectedLabel = $hasValue ? $field['options'][(string) $currentValue] : $field['placeholder'];
                                @endphp

                                <div>
                                    <label
                                        class="block text-xs md:text-[13px] font-semibold text-[#4A2508] dark:text-gray-200 mb-1.5">
                                        {{ $field['label'] }}
                                    </label>

                                    <div class="custom-select-wrapper relative">
                                        <input type="text" name="{{ $field['name'] }}"
                                            value="{{ $hasValue ? $currentValue : '' }}" data-step="2" required
                                            class="sr-only custom-select-input step2-field" tabindex="-1">

                                        <button type="button"
                                            class="custom-select-trigger w-full h-11 px-4 rounded-md bg-[#F9F2DC] dark:bg-gray-800 border border-transparent hover:border-[#E5C158] focus:border-[#F59E0B] focus:bg-white dark:focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-[#F59E0B]/20 text-sm flex items-center justify-between transition cursor-pointer">
                                            <span
                                                class="custom-select-label truncate {{ $hasValue ? 'text-[#4A2508] dark:text-white font-medium' : 'text-[#4A2508]/50 dark:text-gray-400' }}">
                                                {{ $selectedLabel }}
                                            </span>
                                            <svg class="custom-select-arrow w-4 h-4 text-[#4A2508] dark:text-gray-300 transition-transform duration-200 shrink-0 ml-2"
                                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </button>

                                        <div
                                            class="custom-select-menu hidden absolute left-0 right-0 mt-1.5 rounded-xl bg-[#FFFDF8] dark:bg-gray-800 border border-[#F5D372] dark:border-gray-700 shadow-[0_10px_25px_rgba(74,37,8,0.12)] overflow-hidden z-30">
                                            <ul class="py-1 max-h-48 overflow-y-auto">
                                                @foreach($field['options'] as $optVal => $optLabel)
                                                    @php
                                                        $isSelected = $hasValue && (string) $currentValue === (string) $optVal;
                                                    @endphp
                                                    <li>
                                                        <button type="button" data-value="{{ $optVal }}"
                                                            class="custom-select-option w-full px-4 py-2.5 text-left text-sm flex items-center justify-between transition-colors cursor-pointer {{ $isSelected ? 'bg-[#FCE9A6] dark:bg-[#4a3f1a] text-[#4A2508] dark:text-[#FDE6A4] font-bold' : 'text-[#4A2508] dark:text-gray-200 hover:bg-[#F9F2DC] dark:hover:bg-gray-700' }}">
                                                            <span>{{ $optLabel }}</span>
                                                            <svg class="check-icon w-4 h-4 text-[#F28500] {{ $isSelected ? '' : 'hidden' }}"
                                                                fill="none" stroke="currentColor" stroke-width="2.5"
                                                                viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </button>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <!-- Tombol Kembali & Diagnosa -->
                        <div class="mt-12 flex items-center justify-between gap-4">
                            <button type="button" id="btn-prev-step"
                                class="bg-white dark:bg-gray-800 border border-[#6E4726] text-[#4A2508] dark:text-[#FDE6A4] dark:border-[#FDE6A4] hover:bg-[#FFF5D6] dark:hover:bg-gray-700 font-bold text-sm px-6 py-3 rounded-lg transition-all cursor-pointer">
                                Kembali
                            </button>

                            <button type="submit"
                                class="bg-[#F59E0B] hover:bg-[#D97706] text-white font-bold text-sm px-10 py-3 rounded-lg shadow-md shadow-amber-500/25 transition-all cursor-pointer">
                                Diagnosa
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>

    <!-- Script Interaksi Custom Dropdown & Multi-Step Form -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('form-diagnosis');
            const step1Container = document.getElementById('step-1-container');
            const step2Container = document.getElementById('step-2-container');
            const btnNext = document.getElementById('btn-next-step');
            const btnPrev = document.getElementById('btn-prev-step');
            const validationAlert = document.getElementById('validation-alert');
            const validationAlertText = document.getElementById('validation-alert-text');

            // Elemen Panel Kiri yang ikut berubah saat pindah Step
            const stepBadge = document.getElementById('step-badge');
            const stepperItem1 = document.getElementById('stepper-item-1');
            const stepperItem2 = document.getElementById('stepper-item-2');
            const stepperCircle1 = document.getElementById('stepper-circle-1');
            const stepperCircle2 = document.getElementById('stepper-circle-2');
            const stepperStatus1 = document.getElementById('stepper-status-1');
            const stepperStatus2 = document.getElementById('stepper-status-2');
            const stepTipText = document.getElementById('step-tip-text');

            // 1. Logika Custom Dropdown
            const wrappers = document.querySelectorAll('.custom-select-wrapper');

            function closeAllDropdowns(exceptWrapper = null) {
                wrappers.forEach(wrapper => {
                    if (wrapper !== exceptWrapper) {
                        wrapper.querySelector('.custom-select-menu').classList.add('hidden');
                        wrapper.querySelector('.custom-select-arrow').classList.remove('rotate-180');
                    }
                });
            }

            wrappers.forEach(wrapper => {
                const trigger = wrapper.querySelector('.custom-select-trigger');
                const menu = wrapper.querySelector('.custom-select-menu');
                const arrow = wrapper.querySelector('.custom-select-arrow');
                const label = wrapper.querySelector('.custom-select-label');
                const hiddenInput = wrapper.querySelector('.custom-select-input');
                const options = wrapper.querySelectorAll('.custom-select-option');

                trigger.addEventListener('click', function (e) {
                    e.stopPropagation();
                    const isHidden = menu.classList.contains('hidden');
                    closeAllDropdowns(wrapper);

                    if (isHidden) {
                        menu.classList.remove('hidden');
                        arrow.classList.add('rotate-180');
                    } else {
                        menu.classList.add('hidden');
                        arrow.classList.remove('rotate-180');
                    }
                });

                options.forEach(option => {
                    option.addEventListener('click', function (e) {
                        e.stopPropagation();
                        const val = this.getAttribute('data-value');
                        const text = this.querySelector('span').textContent.trim();

                        hiddenInput.value = val;
                        label.textContent = text;
                        label.classList.remove('text-[#4A2508]/50', 'dark:text-gray-400');
                        label.classList.add('text-[#4A2508]', 'dark:text-white', 'font-medium');

                        // Hapus sorotan error jika sebelumnya kosong
                        trigger.classList.remove('border-red-500', 'ring-2', 'ring-red-500/20');
                        trigger.classList.add('border-transparent');

                        options.forEach(opt => {
                            opt.classList.remove('bg-[#FCE9A6]', 'dark:bg-[#4a3f1a]', 'text-[#4A2508]', 'dark:text-[#FDE6A4]', 'font-bold');
                            opt.classList.add('text-[#4A2508]', 'dark:text-gray-200', 'hover:bg-[#F9F2DC]', 'dark:hover:bg-gray-700');
                            opt.querySelector('.check-icon').classList.add('hidden');
                        });

                        this.classList.remove('hover:bg-[#F9F2DC]', 'dark:hover:bg-gray-700');
                        this.classList.add('bg-[#FCE9A6]', 'dark:bg-[#4a3f1a]', 'text-[#4A2508]', 'dark:text-[#FDE6A4]', 'font-bold');
                        this.querySelector('.check-icon').classList.remove('hidden');

                        menu.classList.add('hidden');
                        arrow.classList.remove('rotate-180');
                    });
                });
            });

            document.addEventListener('click', function () {
                closeAllDropdowns();
            });

            // Hapus error border saat input nama diketik
            const namaInput = document.getElementById('nama_kucing');
            namaInput.addEventListener('input', function () {
                if (this.value.trim() !== '') {
                    this.classList.remove('border-red-500', 'ring-2', 'ring-red-500/20');
                    this.classList.add('border-transparent');
                }
            });

            // 2. Validasi Field per Step
            function validateStep(stepSelector) {
                const fields = document.querySelectorAll(stepSelector);
                let isValid = true;
                let firstInvalidEl = null;

                fields.forEach(field => {
                    const isEmpty = field.value.trim() === '';
                    const visualTarget = field.classList.contains('custom-select-input')
                        ? field.closest('.custom-select-wrapper').querySelector('.custom-select-trigger')
                        : field;

                    if (isEmpty) {
                        isValid = false;
                        visualTarget.classList.remove('border-transparent');
                        visualTarget.classList.add('border-red-500', 'ring-2', 'ring-red-500/20');
                        if (!firstInvalidEl) firstInvalidEl = visualTarget;
                    } else {
                        visualTarget.classList.remove('border-red-500', 'ring-2', 'ring-red-500/20');
                        visualTarget.classList.add('border-transparent');
                    }
                });

                if (!isValid && firstInvalidEl) {
                    firstInvalidEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }

                return isValid;
            }

            // 3. Fungsi Perpindahan Tampilan Step 1 <-> Step 2
            function showStep2() {
                validationAlert.classList.add('hidden');
                step1Container.classList.add('hidden');
                step2Container.classList.remove('hidden');

                // Update Panel Kiri
                stepBadge.textContent = 'Langkah 2 dari 2';
                stepperItem1.classList.add('opacity-75');
                stepperCircle1.innerHTML = '&#10003;';
                stepperStatus1.textContent = '(Selesai)';
                stepperStatus1.classList.remove('text-[#F5820D]');
                stepperStatus1.classList.add('text-emerald-600');

                stepperItem2.classList.remove('opacity-65');
                stepperCircle2.classList.remove('bg-[#F9E7A8]', 'dark:bg-gray-700', 'text-[#4A2508]', 'dark:text-gray-300', 'border', 'border-[#E5C158]');
                stepperCircle2.classList.add('bg-gradient-to-r', 'from-[#F28500]', 'to-[#C85A00]', 'text-white', 'shadow-xs');
                stepperStatus2.classList.remove('hidden');

                stepTipText.innerHTML = 'Lengkapi seluruh faktor risiko sesuai kebiasaan dan kondisi fisik kucing untuk memperoleh hasil diagnosa yang akurat.';

                window.scrollTo({ top: 0, behavior: 'smooth' });
            }

            function showStep1() {
                validationAlert.classList.add('hidden');
                step2Container.classList.add('hidden');
                step1Container.classList.remove('hidden');

                // Kembalikan Panel Kiri ke Step 1
                stepBadge.textContent = 'Langkah 1 dari 2';
                stepperItem1.classList.remove('opacity-75');
                stepperCircle1.textContent = '1';
                stepperStatus1.textContent = '(Sedang Diisi)';
                stepperStatus1.classList.add('text-[#F5820D]');
                stepperStatus1.classList.remove('text-emerald-600');

                stepperItem2.classList.add('opacity-65');
                stepperCircle2.classList.add('bg-[#F9E7A8]', 'dark:bg-gray-700', 'text-[#4A2508]', 'dark:text-gray-300', 'border', 'border-[#E5C158]');
                stepperCircle2.classList.remove('bg-gradient-to-r', 'from-[#F28500]', 'to-[#C85A00]', 'text-white', 'shadow-xs');
                stepperStatus2.classList.add('hidden');

                stepTipText.innerHTML = 'Arahkan kursor pada ikon <span class="font-bold text-[#F7C631]">(i)</span> di sebelah istilah medis untuk melihat penjelasan gejalanya.';

                window.scrollTo({ top: 0, behavior: 'smooth' });
            }

            // Event Klik Tombol Selanjutnya
            btnNext.addEventListener('click', function () {
                if (validateStep('.step1-field')) {
                    showStep2();
                } else {
                    validationAlertText.textContent = 'Mohon isi semua data pada form Gejala Klinis terlebih dahulu sebelum melanjutkan.';
                    validationAlert.classList.remove('hidden');
                }
            });

            // Event Klik Tombol Kembali
            btnPrev.addEventListener('click', function () {
                showStep1();
            });

            // Event Submit Form Diagnosa (Validasi Step 2)
            form.addEventListener('submit', function (e) {
                if (!validateStep('.step2-field')) {
                    e.preventDefault();
                    validationAlertText.textContent = 'Mohon lengkapi seluruh kolom Faktor Risiko sebelum melakukan diagnosa.';
                    validationAlert.classList.remove('hidden');
                }
            });
        });
    </script>
@endsection