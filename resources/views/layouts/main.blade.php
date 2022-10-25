<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield("title") | Laravel</title>
  <script src="/js/console.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/ae87f7706d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/main.css">
</head>
<body>
  <header class="py-4 px-4 mb-14 bg-neutral-900 text-white">
    <nav class="flex justify-around font-semibold">
      <a href="/">Home</a>
      <a href="/about">About</a>
      <a href="/conditions">Conditions</a>
      <a href="/contact">Contact</a>
      <a href="/events/create">Create Events</a>
      <a href="/php">PHP</a>
      <a href="/product">Product Details</a>
      <a href="/products?search=">Products Search</a>
      <a href="/login">Login</a>
    </nav>
  </header>

  @if (session("msg"))
    <div class="absolute right-0 bg-green-600 p-4">
      <p class="msg text-white">{{ session("msg") }}</p>
    </div>
  @endif

  @yield("content")

  <div class="pb-10"></div>
  <footer class="flex fixed justify-center w-full text-white font-semibold bottom-0 bg-neutral-900">
    <p>Footer&copy; 2022</p>
  </footer>
</body>
</html>
