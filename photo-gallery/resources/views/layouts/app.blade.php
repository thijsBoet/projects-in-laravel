<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/app.css">
  <title>Photo Gallery</title>
</head>
<body>
@include('inc.navbar')
  <div class="container p-5">
    @include('inc.messages')
    @yield('content')
  </div>
</body>
</html>