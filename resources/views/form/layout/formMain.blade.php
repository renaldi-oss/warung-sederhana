<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/assets/css/loginstyle.css" rel="stylesheet">
  </head>
  <body class="text-center">
<main class="form-signin">
    <img class="mb-4" src="/assets/images/icon/fococlipping-20220206-115758.png" alt="" width="100" height="100">
    <h1 class="h3 mb-3 fw-normal">{{ $title }}</h1>

    @yield('form')
    @yield('lokasi')

    <p class="mt-5 text-muted">Made by Reynaldi Fakhri Pratama &copy; 2022</p>
</main>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
