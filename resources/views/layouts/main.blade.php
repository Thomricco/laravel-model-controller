<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}?v=2">

  <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    @include("movies.index")
</body>

</html>