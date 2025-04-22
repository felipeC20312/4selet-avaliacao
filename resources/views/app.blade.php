<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>

  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <x-layout.header />
  <main>@yield('content')</main>
  <x-layout.footer />


  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <script>
    lucide.createIcons();
  </script>
</body>

</html>
