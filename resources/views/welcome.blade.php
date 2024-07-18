<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }} " class="h-full bg-gray-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <title>Sports Data</title>
  <link rel="icon" type="image/x-icon" href="src/img/garuda.png">

  <!-- Fonts -->
  @vite('resources/css/app.css')
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="h-full bg-slate-200 ">
  <div class="min-h-full">
    <header>
      <nav class="bg-gray-800" x-data="{ isOpen: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <img class="h-10 w-10" src="src/img/garuda.png" alt="Sports Data" href="/">
              </div>
              <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  {{-- <x-nav-link href="/" :active="request()->is('/')">Dashboard</x-nav-link>
                  <x-nav-link href="/team" :active="request()->is('team')">Team</x-nav-link>
                  <x-nav-link href="/projects" :active="request()->is('projects')">Projects</x-nav-link>
                  <x-nav-link href="/calendar" :active="request()->is('calendar')">Calendar</x-nav-link>
                  <x-nav-link href="/reports" :active="request()->is('reports')">Reports</x-nav-link> --}}
                </div>
              </div>
            </div>
            <div class="hidden md:block">
              <div class="ml-4 flex items-center md:ml-6">
                <button type="button"
                  class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">View notifications</span>
                  <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                  </svg>
                </button>

                <!-- Profile dropdown -->
                <div class="relative ml-3">
                  <div>
                    <button type="button" @click="isOpen = !isOpen"
                      class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                      id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                      <span class="absolute -inset-1.5"></span>
                      <span class="sr-only">Open user menu</span>
                      <img class="h-8 w-8 rounded-full"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                    </button>
                  </div>

                  <!--
                      Dropdown menu, show/hide based on menu state.
      
                      Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                      Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                  <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75 transform"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <!-- Active: "bg-gray-100", Not Active: "" -->
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                      id="user-menu-item-0">Your Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                      id="user-menu-item-1">Settings</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                      id="user-menu-item-2">Sign out</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="-mr-2 flex md:hidden">
              <!-- Mobile menu button -->
              <button type="button" @click="isOpen = !isOpen"
                class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!-- Menu open: "block", Menu closed: "hidden" -->
                <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="isOpen" class="md:hidden" id="mobile-menu">
          <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <x-nav-link href="/" :active="request()->is('/')">Dashboard</x-nav-link>
            <x-nav-link href="/team" :active="request()->is('team')">Team</x-nav-link>
            <x-nav-link href="/projects" :active="request()->is('projects')">Projects</x-nav-link>
            <x-nav-link href="/calendar" :active="request()->is('calendar')">Calendar</x-nav-link>
            <x-nav-link href="/reports" :active="request()->is('reports')">Reports</x-nav-link>

          </div>
          <div class="border-t border-gray-700 pb-3 pt-4">
            <div class="flex items-center px-5">
              <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full"
                  src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                  alt="">
              </div>
              <div class="ml-3">
                <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
              </div>
              <button type="button"
                class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">View notifications</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                  aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
              </button>
            </div>
            <div class="mt-3 space-y-1 px-2">
              <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your
                Profile</a>
              <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
              <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign
                out</a>
            </div>
          </div>
        </div>
      </nav>

    </header>

    <main>
      <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="src/img/banner3.jpg"
              class="absolute block w-10/12 rounded-xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
              alt="...">
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="src/img/banner2.jpg"
              class="absolute block w-10/12 rounded-xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
              alt="...">
          </div>
          <!-- Item 3 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="src/img/banner3.jpg"
              class="absolute block w-10/12 rounded-xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
              alt="...">
          </div>
          <!-- Item 4 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="src/img/banner3.jpg"
              class="absolute block w-10/12 rounded-xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
              alt="...">
          </div>
          <!-- Item 5 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="src/img/banner2.jpg"
              class="absolute block w-10/12 rounded-xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
              alt="...">
          </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
          <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
            data-carousel-slide-to="3"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
            data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
          class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
          data-carousel-prev>
          <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
          </span>
        </button>
        <button type="button"
          class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
          data-carousel-next>
          <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
          </span>
        </button>
      </div>

    </main>
    <div class="container relative flex flex-col justify-between h-full max-w-6xl px-10 mx-auto xl:px-0 mt-5">
      <h2 class="mb-1 text-3xl font-extrabold leading-tight text-gray-900">NEWS</h2>
      <p class="mb-12 text-lg text-gray-500">Latest News From Sports Data</p>
      <div class="w-full">
        <div class="flex flex-col w-full mb-10 sm:flex-row">
          <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
            <div class="relative h-full ml-0 mr-0 sm:mr-10">
              <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 rounded-lg"></span>
              <div class="relative h-full p-5 bg-white border-2 rounded-lg">
                <div class="flex items-center -mt-1">
                  <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">DAPP Development</h3>
                </div>
                <p class="mt-3 mb-1 text-xs font-medium text-indigo-500 uppercase">------------</p>
                <p class="mb-2 text-gray-600">A decentralized application (dapp) is an application built on a
                  decentralized network that combines a smart contract and a frontend user interface.</p>
              </div>
            </div>
          </div>
          <div class="w-full sm:w-1/2">
            <div class="relative h-full ml-0 md:mr-10">
              <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 rounded-lg"></span>
              <div class="relative h-full p-5 bg-white border-2 rounded-lg">
                <div class="flex items-center -mt-1">
                  <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Web 3.0 Development</h3>
                </div>
                <p class="mt-3 mb-1 text-xs font-medium uppercase">------------</p>
                <p class="mb-2 text-gray-600">Web 3.0 is the third generation of Internet services that will
                  focus on understanding and analyzing data to provide a semantic web.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-col w-full mb-5 sm:flex-row">
          <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
            <div class="relative h-full ml-0 mr-0 sm:mr-10">
              <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 rounded-lg"></span>
              <div class="relative h-full p-5 bg-white border-2 rounded-lg">
                <div class="flex items-center -mt-1">
                  <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Project Audit</h3>
                </div>
                <p class="mt-3 mb-1 text-xs font-medium uppercase">------------</p>
                <p class="mb-2 text-gray-600">A Project Audit is a formal review of a project, which is intended
                  to assess the extent up to which project management standards are being upheld.</p>
              </div>
            </div>
          </div>
          <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
            <div class="relative h-full ml-0 mr-0 sm:mr-10">
              <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 rounded-lg"></span>
              <div class="relative h-full p-5 bg-white border-2 rounded-lg">
                <div class="flex items-center -mt-1">
                  <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Hacking / RE</h3>
                </div>
                <p class="mt-3 mb-1 text-xs font-medium uppercase">------------</p>
                <p class="mb-2 text-gray-600">A security hacker is someone who explores methods for breaching
                  defenses and exploiting weaknesses in a computer system or network.</p>
              </div>
            </div>
          </div>
          <div class="w-full sm:w-1/2">
            <div class="relative h-full ml-0 md:mr-10">
              <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 rounded-lg"></span>
              <div class="relative h-full p-5 bg-white border-2 rounded-lg">
                <div class="flex items-center -mt-1">
                  <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Bot/Script Development</h3>
                </div>
                <p class="mt-3 mb-1 text-xs font-medium uppercase">------------</p>
                <p class="mb-2 text-gray-600">Bot development frameworks were created as advanced software tools
                  that eliminate a large amount of manual work and accelerate the development process.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- source:https://tailwind.besoeasy.com -->

  </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

</html>
