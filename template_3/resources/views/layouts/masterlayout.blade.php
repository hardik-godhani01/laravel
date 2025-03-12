<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>templte-3 - @yield('title', 'website')</title>
  {{--
  <link rel="stylesheet" href="css/style.css "> --}}
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  @stack('style')
</head>

<body>
  <div id="wrapper">
    <header>
      <h1>YahooBaba</h1>
    </header>
    <nav>
      <a href="/">home</a>
      <a href="/about">about</a>
      <a href="/post">post</a>
    </nav>
    <Main>
      <article>
        @hasSection('content')
      @yield('content')
    @else
    <h2>No Content Found.</h2>
  @endif
      </article>
      <aside>
        @section('sidebar')
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/post">Post</a></li>
        </ul>
        @show
      </aside>
    </Main>
    <footer>yahoobaba@copyright 2025.</footer>
  </div>

  @stack('scripts')
</body>

</html>