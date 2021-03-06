<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <style>

        :root {
            --light-purple: #f9f8fe;
            --dark-purple: #483D8B;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background-color: var(--light-purple);
        }

        .navbar {
            background-color: var(--dark-purple) !important;
        }

        .navbar > div > * {
            color: white !important;
        }

        .nav-item > a {
            color: white !important;
        }

        #title {
            margin: 40px auto 65px auto;
            text-align: center;
        }

        #title > hr {
            border: 1.5px solid var(--dark-purple);
            width: 35%;
            margin: 25px auto 0 auto;
            opacity: unset !important;
            border-radius: 25px;
        }

        #title > h1 > i {
            font-size: 22px;
            color: var(--dark-purple);
        }

        .fa-right-from-bracket {
            color: white;
            font-size: 22px;
        }

        .card {
          width: 70%;
          margin-left: auto;
          margin-right: auto;
          margin-bottom: 20px;
          padding: 10px;
        }

        .btn {
          background-color: var(--dark-purple);
          color: white;
          width: 100%;
        }

        .btn:hover {
          color: white;
        }

        .btn-delete {
          background-color: #801f2d;
        }

    </style>
</head>
<body class="antialiased">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Maraboo &nbsp;<i class="fa-solid fa-hat-wizard"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboardadmin')}}">Utilisateurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('spell.form')}}">Cat??gories de sorts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('comment.form')}}">Commentaires</a>
                </li>
            </ul>
            <a href="#"><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </div>
</nav>

<div id="title">
    <h1>
        <i class="fa-solid fa-wand-sparkles"></i>&nbsp; Liste des commentaires &nbsp;<i class="fa-solid fa-wand-sparkles"></i>
    </h1>
    <hr>
</div>
@foreach($comments as $comment)
<div class="card">
  <p>Attribu?? ?? Supersorcierdu93 le 10/10/2022</p>
  <form action="">
    <div class="mb-3">
      <label class="form-label">Note /10</label>
      <input type="number" class="form-control" min="0" max="10" value="8">
    </div>
    <div class="mb-3">
      <label class="form-label">Commentaire</label>
      <textarea class="form-control" rows="3">{{$comment->content}}</textarea>
    </div>
    <div class="mb-3">
      <button class="btn">Modifier</button>
    </div>
  </form>
  <form action="">
    <div class="mb-3">
      <button class="btn btn-delete">Supprimer</button>
    </div>
  </form>
</div>
@endforeach
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
