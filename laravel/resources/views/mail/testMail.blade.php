<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Hello world to {{Auth::user() -> name}}</h1>

    Your email is {{Auth::user() -> email}}

    <h2 style="color:red"> {{$testString}}</h2>
  </body>
</html>
