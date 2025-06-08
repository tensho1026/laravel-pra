

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <header>
    <h1 style="color: red;">インスタグラム風アプリ</h1>
  </header>
  <div class="content">
    @yield('content')
  </div>
  <footer>
    <p class='text-red-500'>2023 インスタグラム風アプリ</p>
  </footer>
</body>
</html>
