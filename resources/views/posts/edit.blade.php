<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href=" {{ asset('bootstrap5/css/bootstrap.min.css') }} " rel="stylesheet">
    <script src=" {{ asset('bootstrap5/js/bootstrap.bundle.min.js') }} "></script>
    <title>Blog | Edit Postingan</title>
</head>
<body>
    <div class="container">
        <h1>Edit Postingan</h1>

        <form action=" {{ url('posts/'.$post->id) }} " method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="tittle" class="form-label">Judul</label>
                <input type="text" class="form-control" id="tittle" name="tittle" autocomplete="username" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="3">{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-dark">Simpan</button>
        </form>
        <form action="{{ url("posts/$post->id") }}" method="POST">
            @method("DELETE")
            @csrf
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
    </div>
</body>
</html>
</body>
</html>