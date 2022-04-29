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

        #form-add {
            width: 70%;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 70px;
        }

        #addon-wrapping {
            background-color: var(--dark-purple) !important;
            border-color: var(--dark-purple);
            color: white;
        }

        .input-group > input,
        .input-group > button  {
            border-color: var(--dark-purple);
        }

        #button-addon2 {
            color: white;
            background-color: var(--dark-purple);
            border-color: var(--dark-purple);
        }

        #table-spells {
            width: 70%;
            margin-left: auto;
            margin-right: auto;
        }

        #table-spells > tbody > tr > td:first-child {
            padding-left: 0 !important;
        }

        #table-spells > tbody > tr > td:first-child button {
            background-color: var(--dark-purple);
            color: white;
        }

        #table-spells > tbody > tr > td:last-child {
            text-align: center;
        }

        #table-spells > tbody > tr > td:last-child button {
            color: white;
            background-color: #801f2d;
            border-color: var(--dark-purple);
        }

        table td {
            border: none !important;
            padding: 0 !important;
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
                    <a class="nav-link" href="{{route('spell.form')}}">Catégories de sorts</a>
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
        <i class="fa-solid fa-wand-sparkles"></i>&nbsp; Liste des catégories de sorts &nbsp;<i class="fa-solid fa-wand-sparkles"></i>
    </h1>
    <hr>
</div>

<form id="form-add" action={{route('spell.create')}} method="POST">
    @csrf
    @method('POST')
    <div class="input-group flex-nowrap mb-3">
      <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-hat-wizard"></i></span>
      <input type="text" name="spellname" class="form-control" placeholder="Nom de la nouvelle catégorie" aria-label="Username" aria-describedby="addon-wrapping">
      <input type="submit" class="btn btn-outline-secondary" id="button-addon2">
    </div>
</form>

@foreach($spells as $spell)
    <table id="table-spells" class="table">
        <tbody>
        <tr>
            <td>
                <form action={{route('spell.update',['spell'=>$spell])}} method="post">
                    @csrf
                    @method('PATCH')
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-hat-wizard"></i></span>
                        <input type="text" name="spellname" class="form-control" aria-label="Username" value="{{$spell->name}}" aria-describedby="basic-addon1">
                        <button type="submit" class="btn btn-outline-secondary" name="Modifier" >Modifier</button>
                    </div>
                </form>
            </td>
            <td>
                <form action={{route('spell.delete',['spell'=>$spell])}} method="post">
                @csrf
                @method('DELETE')
                    <button type="submit" class="btn btn-outline-secondary" name="Supprimer"><i class="fa-solid fa-trash"></i></button>
                </form>
            </td>
        </tr>
        </tbody>
    </table>

@endforeach



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
