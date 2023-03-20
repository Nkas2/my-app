<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog | judul: {{ $post[1] }} </title>
  <link href=" {{ asset('bootstrap5/css/bootstrap.min.css') }} " rel="stylesheet">
  <script src=" {{ asset('bootstrap5/js/bootstrap.bundle.min.js') }} "></script>
  <link rel="stylesheet" href=" {{ asset('css/blog.css') }} ">
</head>
<body>
  <div class="container">
    <article class="blog-post">
      <h2 class="blog-post-title mb-1">{{ $post[1] }}</h2>
      <p class="blog-post-meta"> {{ $post[3] }} </a></p>
      <p> {{ $post[2] }} </p>
    </article>
    <a href=" {{ url("posts") }}" class="btn btn-warning" >Home</a>
  </div>
</body>
</html>