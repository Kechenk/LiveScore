<nav class="bg-slate-100">
  <div class="mx-auto max-w-7xl p-4 flex sm:px-2 lg:px-4">
    <div class="flex h-12 items-center justify-between">
      <div class="flex items-center">
        <div class="flex-shrink-0 max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
          <img src="/src/icon.png" class="h-10 w-10 items-center">
          <span
            class="p-2 text-transparent bg-clip-text bg-gradient-to-r to-slate-700 from-black text-2xl font-semibold whitespace-nowrap dark:text-white hidden sm:block">
            infosholat.com
          </span>
          <div class="ml-10 flex items-baseline space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <x-nav-link href="/" :active="request()->is('/')">Jadwal Sholat</x-nav-link>
            <x-nav-link href="/quran" :active="request()->is('team')">Al-Qur'an</x-nav-link>
            <x-nav-link href="/zakat" :active="request()->is('projects')">Zakat</x-nav-link>
            <x-nav-link href="/calendar" :active="request()->is('calendar')">Kalender</x-nav-link>
            <x-nav-link href="/doa" :active="request()->is('reports')">Do'a Harian</x-nav-link>
          </div>
        </div>
        <div class="hideen md:block">
          <div class="ml-10"></div>
        </div>
      </div>
    </div>
  </div>
</nav>
