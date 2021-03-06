<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
    <style>
      .error-message {
        color: red;
      }
      .active {
        color: red!important;
        font-weight: bold;
      }
    </style>
</head>
<body class="px-6">
  @include('layouts/partials/header')
  @yield('content')
</body>
</html>