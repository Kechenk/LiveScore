<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} " class="h-full bg-gray-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <title>Sports Data</title>
  <link rel="icon" type="image/x-icon" href="src/img/garuda.png">
  <link rel="stylesheet" href="style.css">
  <!-- Fonts -->
  @vite('resources/css/app.css')
</head>

<body class="h-full">
  <div class="min-h-full">
    <x-navbar></x-navbar>

    <x-header>{{ $title }}</x-header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{ $slot }}
      </div>
    </main>
  </div>

</body>

</html>
