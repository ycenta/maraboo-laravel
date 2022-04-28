<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>XD</title>

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

        .card > img {
            width: 100%;
            height: 20vw;
            object-fit: cover;
        }

        .div-info {
            display: flex;
            justify-content: space-between;
        }

        .div-info > p {
            display: inline-flex;
        }

        .div-info > p > i {
            line-height: 1.4 !important;
        }

        .fa-location-dot {
            color: #b133ff;
        }

        .fa-star {
            color: #ffb833;
        }

        div > h5 {
            text-align: center;
            font-weight: bold;
        }

        .card-body {
            text-align: justify;
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
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div id="title">
    <h1>
        <i class="fa-solid fa-wand-sparkles"></i>&nbsp; Trouvez le profil qui correspond à vos besoins &nbsp;<i class="fa-solid fa-wand-sparkles"></i>
    </h1>
    <hr>
</div>

<div id="content" class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4">
  <div class="col">
    <div class="card">
      <img src="img/test.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Prénom NOM</h5>
        <div class="div-info">
            <p><i class="fa-solid fa-location-dot"></i>&nbsp;Ville</p>
            <p>10/10&nbsp;<i class="fa-solid fa-star"></i></p>
        </div>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/test2.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <div class="div-info">
            <p><i class="fa-solid fa-location-dot"></i>&nbsp;Ville</p>
            <p>10/10&nbsp;<i class="fa-solid fa-star"></i></p>
        </div>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/test2.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <div class="div-info">
            <p><i class="fa-solid fa-location-dot"></i>&nbsp;Ville</p>
            <p>10/10&nbsp;<i class="fa-solid fa-star"></i></p>
        </div>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/test2.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <div class="div-info">
            <p><i class="fa-solid fa-location-dot"></i>&nbsp;Ville</p>
            <p>10/10&nbsp;<i class="fa-solid fa-star"></i></p>
        </div>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/test2.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <div class="div-info">
            <p><i class="fa-solid fa-location-dot"></i>&nbsp;Ville</p>
            <p>10/10&nbsp;<i class="fa-solid fa-star"></i></p>
        </div>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/test2.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <div class="div-info">
            <p><i class="fa-solid fa-location-dot"></i>&nbsp;Ville</p>
            <p>10/10&nbsp;<i class="fa-solid fa-star"></i></p>
        </div>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/test2.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <div class="div-info">
            <p><i class="fa-solid fa-location-dot"></i>&nbsp;Ville</p>
            <p>10/10&nbsp;<i class="fa-solid fa-star"></i></p>
        </div>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  
</div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
