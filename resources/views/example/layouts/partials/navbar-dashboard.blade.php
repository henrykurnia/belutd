<nav
  class="sticky top-0 z-50 w-full bg-white/95 dark:bg-gray-800/95 backdrop-blur-md border-b border-[#F5E1A4] dark:border-gray-700 transition-colors duration-300 font-sans">
  <div class="px-6 md:px-12 py-3 max-w-6xl mx-auto">
    <div class="flex items-center justify-between">

      <!-- Logo Section -->
      <div class="flex items-center justify-start">
        <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
          <img src="{{ asset('image_assets/logo.png') }}" class="h-8 w-auto transition-transform group-hover:scale-105"
            alt="BeLUTD Logo" onerror="this.src='https://via.placeholder.com/40?text=Logo'" />
          <span
            class="self-center text-xl font-extrabold whitespace-nowrap text-[#4A2508] dark:text-[#FDE6A4] tracking-tight">
            BeLUTD
          </span>
        </a>
      </div>

      <!-- Menu Tengah (Desktop) -->
      <div class="hidden md:flex items-center gap-8 text-sm font-bold text-[#4A2508]/80 dark:text-gray-300">
        <a href="{{ route('home') }}"
          class="{{ request()->routeIs('home') ? 'text-[#4A2508] dark:text-white font-extrabold relative after:content-[\'\'] after:block after:w-5 after:h-0.5 after:bg-[#F5820D] after:rounded-full after:mx-auto after:mt-0.5' : 'hover:text-[#F5820D] dark:hover:text-[#FDE6A4]' }} transition-colors duration-200">
          Home
        </a>
        <a href="{{ route('diagnosis') }}"
          class="{{ request()->routeIs('diagnosis') ? 'text-[#4A2508] dark:text-white font-extrabold relative after:content-[\'\'] after:block after:w-5 after:h-0.5 after:bg-[#F5820D] after:rounded-full after:mx-auto after:mt-0.5' : 'hover:text-[#F5820D] dark:hover:text-[#FDE6A4]' }} transition-colors duration-200">
          Diagnosa
        </a>
        <a href="{{ route('tentang') }}"
          class="{{ request()->routeIs('tentang') ? 'text-[#4A2508] dark:text-white font-extrabold relative after:content-[\'\'] after:block after:w-5 after:h-0.5 after:bg-[#F5820D] after:rounded-full after:mx-auto after:mt-0.5' : 'hover:text-[#F5820D] dark:hover:text-[#FDE6A4]' }} transition-colors duration-200">
          Tentang Kami
        </a>
      </div>

      <!-- Right Side: Dark Mode Toggle -->
      <div class="flex items-center">
        <button id="theme-toggle" type="button" aria-label="Toggle Dark Mode"
          class="text-[#4A2508] dark:text-[#FDE6A4] hover:bg-[#FFF5D6] dark:hover:bg-gray-700 focus:outline-none rounded-lg text-sm p-2.5 transition-colors duration-200">
          <!-- Icon Sun (Light Mode) -->
          <svg id="theme-toggle-light-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
              fill-rule="evenodd" clip-rule="evenodd"></path>
          </svg>
          <!-- Icon Moon (Dark Mode) -->
          <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
          </svg>
        </button>
      </div>

    </div>
  </div>
</nav>

<!-- Script Dark Mode -->
<script>
  // Cek preferensi awal
  if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
  } else {
    document.documentElement.classList.remove('dark');
  }

  const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
  const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

  // Tampilkan icon yang sesuai
  if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
  } else {
    themeToggleDarkIcon.classList.remove('hidden');
  }

  const themeToggleBtn = document.getElementById('theme-toggle');

  themeToggleBtn.addEventListener('click', function () {
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    if (localStorage.getItem('color-theme')) {
      if (localStorage.getItem('color-theme') === 'light') {
        document.documentElement.classList.add('dark');
        localStorage.setItem('color-theme', 'dark');
      } else {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('color-theme', 'light');
      }
    } else {
      if (document.documentElement.classList.contains('dark')) {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('color-theme', 'light');
      } else {
        document.documentElement.classList.add('dark');
        localStorage.setItem('color-theme', 'dark');
      }
    }
  });
</script>