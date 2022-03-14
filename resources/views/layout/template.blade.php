<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body dir="rtl">
    <main class="grid grid-cols-5 container bg-darkBlue-dark m-auto">
        {{--  sidebar  --}}
        @include('layout.sidebar')
        <div class="container col-start-2 col-span-4">
            {{-- header --}}
            @include('layout.header')
            {{-- page content --}}
            <section class="content content-height overflow-y-scroll py-4 px-10 rounded-tr-3xl bg-darkBlue-ligth">
              @yield('content')
            </section>
        </div>
    </main>
</body>
</html>