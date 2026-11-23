<nav class="fixed inset-x-0 top-0 z-50 h-14 border-b border-gray-200 bg-white dark:border-gray-700 dark:bg-gray-800">
    <div class="mx-auto flex h-full max-w-6xl items-center justify-between px-5">
        <a href="{{ route('home') }}" class="flex items-center gap-1.5 text-[#4b2b0b] dark:text-white">
            <img src="{{ asset('image_assets/logo.png') }}" class="h-7 w-7 object-contain" alt="Logo BeLUTD">
            <span class="text-sm font-bold">BeLUTD</span>
        </a>

        <div class="absolute left-1/2 hidden -translate-x-1/2 items-center gap-10 text-sm font-medium text-gray-800 dark:text-gray-200 md:flex">
            <a href="{{ route('home') }}" class="hover:text-[#d87500]">Home</a>
            <a href="{{ route('diagnosis') }}" class="hover:text-[#d87500]">Diagnosis</a>
            <a href="{{ route('tentang') }}" class="hover:text-[#d87500]">Tentang Kami</a>
        </div>

        <button id="theme-toggle" type="button" aria-label="Ganti tema" class="rounded-full p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
            <svg id="theme-toggle-light-icon" class="hidden h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm0 4a4 4 0 100 8 4 4 0 000-8zm7 3a1 1 0 100 2h1a1 1 0 100-2h-1zM2 9a1 1 0 100 2h1a1 1 0 100-2H2zm12.95-4.536a1 1 0 010 1.414l-.707.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM6.464 13.536a1 1 0 010 1.414l-.707.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM15.657 14.95a1 1 0 00-1.414 0l-.707.707a1 1 0 101.414 1.414l.707-.707a1 1 0 000-1.414zM5.05 4.343a1 1 0 00-1.414 1.414l.707.707a1 1 0 001.414-1.414l-.707-.707z"/></svg>
            <svg id="theme-toggle-dark-icon" class="hidden h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"/></svg>
        </button>
    </div>
</nav>

<script>
    (() => {
        const root = document.documentElement;
        const button = document.getElementById('theme-toggle');
        const sun = document.getElementById('theme-toggle-light-icon');
        const moon = document.getElementById('theme-toggle-dark-icon');
        const saved = localStorage.getItem('color-theme');
        const dark = saved ? saved === 'dark' : window.matchMedia('(prefers-color-scheme: dark)').matches;
        root.classList.toggle('dark', dark);
        sun.classList.toggle('hidden', !dark);
        moon.classList.toggle('hidden', dark);
        button.addEventListener('click', () => {
            const nextDark = !root.classList.contains('dark');
            root.classList.toggle('dark', nextDark);
            localStorage.setItem('color-theme', nextDark ? 'dark' : 'light');
            sun.classList.toggle('hidden', !nextDark);
            moon.classList.toggle('hidden', nextDark);
        });
    })();
</script>
