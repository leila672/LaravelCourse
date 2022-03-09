<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ITI Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/posts">All posts</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
{{--@dd($posts)--}}
<div class="container">
    <form method="POST"  action="{{ route('posts.update', $data -> id ) }}" >
        @method('put')           
        @csrf
        <div class="mb-3">
            <label  class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $data->title }}" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Description</label>
            <input type="text"  name="desc" class="form-control" value="{{ $data->desc}}">
        </div>

        <div class="mb-3">
            <label  class="form-label">user</label>
            <select  class="form-select" aria-label="Default select example"  name="user_id">
                @foreach ( $users as $user)
                    <option value=" {{ $user->id }} "> {{$user->name }}</option>
                @endforeach
            </select>
        </div>


        <div class="mb-3 text-center">
            <input type="submit" class="btn btn-success">
        </div>
    </form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


