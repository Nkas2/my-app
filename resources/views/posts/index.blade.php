<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Blog</title>
  <style>
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
  </style>
</head>
<body>
  <nav>
    <h1 class="judul">My Blog</h1>
  </nav>

  <main>
    <div>
      @php
        $number = 1;
      @endphp
      @foreach ($posts as $post)
        <div class="blog">
          <h3>{{ $post['tittle'] }} <small> #{{ $number }} </small> </h3>
          <p class="content"> {{ $post['content'] }} </p>
        </div>
        @php
            $number++;
        @endphp
      @endforeach
    </div>
  </main>
</body>
</html>