@extends('example.layouts.default.baseof')

@section('main')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Panggil navbar khusus landing page Anda --}}
    @include('example.layouts.partials.navbar-dashboard')

    <main class="w-full min-h-screen bg-[#FFFDF8] dark:bg-gray-900 overflow-x-hidden">
        @yield('content')
    </main>
@endsection