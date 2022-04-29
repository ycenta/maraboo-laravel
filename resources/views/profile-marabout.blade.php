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

        .me-auto {
            margin-left: auto !important;
            margin-right: 0 !important;
        }

        .me-auto a {
            color: white !important;
        }

        .card {
            margin-top: 50px;
            width: 70%;
            margin-left: auto;
            margin-right: auto;
        }

        .card > img {
            width: 100%;
            height: 20vw;
            object-fit: cover;
        }

        h5 {
            color: var(--dark-purple);
            font-weight: bold;
        }

        .card i {
            color: var(--dark-purple);
        }

        .card-text {
            text-align: justify;
        }

        .fa-star {
            color: #ffb833 !important;
        }

        .btn {
          background-color: var(--dark-purple);
          color: white;
          width: 100%;
        }

        .btn:hover {
          color: white;
        }

        .input-grade {
            width: 10%;
        }

        .card-comment {
            margin-bottom: 20px;
        }

        .card-comment .card-body, .card-comment .card-body .mb-3 {
        	padding-bottom: 0!important;
        }
        
    </style>
</head>
<body class="antialiased">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Maraboo &nbsp;<i class="fa-solid fa-hat-wizard"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if (Auth::user())
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}" class="nav-link">
                            @csrf
                            <input type="submit" value="Logout">
                        </form>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('register') }}">Register</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                    @endif
                </ul>
        </div>
    </div>
</nav>


<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../image/{{ $marabout->picture_url }}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $marabout->name }}<i class="fa-solid fa-star"></i></h5>
        <p><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;{{ $marabout->phone }}</p>
        <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;{{ $marabout->address }}</p>
        <p><i class="fa-solid fa-wand-sparkles"></i></i>&nbsp;&nbsp;Spécialités :</p>
        <ul>
            @foreach ($spells as $spell)
            <li>{{ $spell->name }}</li>
            @endforeach
        </ul>
        <p class="card-text">{{ $marabout->resume }}</p>
      </div>
    </div>
  </div>
</div>

<div class="card">
    <div class="card-body">
        @if (Auth::user())
		@includeIf('create-comment', ['id'=>$marabout->id])
		@else
		<p>Please <a href="{{ route('login') }}">login</a> or <a href="{{ route('register')}}">register</a> to post a comment</p>
		@endif
    </div>
</div>


@foreach($marabout->comments as $comment)
<div class="card card-comment">
    <div class="card-body">
        <div class="mb-3">
          <p>{{ $comment->content }}</p>
          <p>{{ $comment->updated_at->diffForHumans() }}</p>
        </div>
    </div>
</div>
@endforeach

</div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>