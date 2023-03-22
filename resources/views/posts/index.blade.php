<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Blog</title>
  <link href=" {{ asset('bootstrap5/css/bootstrap.min.css') }} " rel="stylesheet">
  <script src=" {{ asset('bootstrap5/js/bootstrap.bundle.min.js') }} "></script>
  {{-- <style>
    * {
      padding: 0;
      margin: 0;
    }
    nav {
      background-color: black;
      /* height: 10vh; */
    }
    main {
      width: 90%;
      margin: 0 auto;
    }
    .judul {
      text-align: center;
      font-size: 40px;
      color: lightgrey;
      padding: 10px 0;
    }
    .blog {
      float: left;
      width: 60%;
      padding: 5px;
      border-bottom: 1px solid gray;
    }
    .content {
      line-height: 30px;
    }
    small {
      color: rgb(42, 102, 122);
    }
    .user {
      float: right;
      border: 1px solid black;
      width: 300px;
    }
  </style> --}}
</head>
<body>
  <nav>
    <h1 class="display-2 text-primary text-center">
      My Blog <a href=" {{url("posts/create")}}" class="btn btn-success"> + Buat Postingan Baru </a>
    </h1>
  </nav>

  <main class="container">
    <div>
      @foreach ($posts as $post)
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text">{{ $post->content }}</p>
          <p class="card-text"><small class="text-muted">{{ $post->created_at }}</small></p>
          <a href=" {{ url("posts/$post->id ") }} " class="btn btn-primary">cek selengkapnya</a>
        </div>
      </div>
      @endforeach
    </div>
  </main>
</body>
</html>