<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'Proyecto Laravel')</title>
  @vite('resources/css/app.css')
</head>

<body class="min-h-screen w-full">
  <div class="absolute h-screen w-screen -z-10">
    <svg class="absolute -z-10 -top-10 opacity-20 " width='100%' height='100%' xmlns='http://www.w3.org/2000/svg'>
      <defs>
        <pattern id='a' patternUnits='userSpaceOnUse' width='20' height='20'
          patternTransform='scale(2) rotate(0)'>
          <rect x='0' y='0' width='100%' height='100%' fill='hsla(0,0%,100%,1)' />
          <path d='M3.25 10h13.5M10 3.25v13.5' stroke-linecap='square' stroke-width='0.5'
            stroke='hsla(258.5,59.4%,59.4%,1)' fill='none' />
        </pattern>
      </defs>
      <rect width='800%' height='800%' transform='translate(0,0)' fill='url(#a)' />
    </svg>
  </div>
  <main class="">
    <header class="w-full text-sm mb-6 not-has-[nav]:hidden">
      @if (Route::has('login'))
        <nav class="flex justify-end p-10 gap-4 font-bold">
          @auth
            <a href="{{ url('/dashboard') }}" class="text-xl border px-4 py-1 rounded-lg bg-[#fff] text-primary">
              Products
            </a>
          @else
            <a href="{{ route('login') }}" class="text-xl border px-4 py-1 rounded-lg bg-[#fff] text-primary">
              Log in
            </a>

            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="text-xl border px-4 py-1 rounded-lg bg-[#fff] text-primary">
                Register
              </a>
            @endif
          @endauth
        </nav>
      @endif
    </header>
    <section class="flex justify-center items-center">
      <div class="container mx-auto flex px-5 py-14 sm:flex-row flex-col items-center ">
        {{-- Texto --}}
        <div
          class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
          <h1 class="text-4xl md:text-5xl font-extrabold text-primary mb-6 leading-tight">
            Welcome to Inventory and Movement System
          </h1>
          <p class="mb-8 text-lg text-gray-400">
            Manage your inventory and movements efficiently and securely with our modern and user-friendly
            interface.
          </p>

          <div class="flex justify-center">
            <a href="{{ route('products.index') }}"
              class="inline-flex text-white bg-indigo-600 hover:bg-indigo-700 border-0 py-2 px-6 rounded-lg text-lg font-semibold transition">
              Let's get started!
            </a>
          </div>
        </div>

        {{-- Imagen --}}
        <div class="lg:max-w-3xl lg:w-full md:w-1/2 w-5/6">
          <img class="object-cover object-center min-w-full" alt="home" src="{{ asset('images/home.svg') }}">
        </div>
      </div>
    </section>
  </main>

</body>

</html>
