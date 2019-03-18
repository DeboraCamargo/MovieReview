<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Movie Review</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">
      <link href="css/main.css" rel="stylesheet" >
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Movie Review Form</h2>
    <p class="lead">Please fill out your impression about the movie!</p>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-8 order-md-1">
      <form class="needs-validation" novalidate>

        <div class="mb-3 justify-content-center">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" placeholder="Beauty and The Beast" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="genre">Genre</label>
          <input type="text" class="form-control" name="genre" placeholder="Romance">
        </div>

        <div class="mb-3">
          <label for="year">Released Year</label>
          <input type="text" class="form-control" name="year" placeholder="2017">
        </div>

        <div class="mb-3">
          <label for="country">Country</label>
          <select class="custom-select d-block w-100" name="country" required>
            <option value="">Choose...</option>
            <option>United States</option>
            <option>Canada</option>
            <option>France</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid country.
          </div>
        </div>

        <div class="mb-3">
          <label for="producer">Producer</label>
          <input type="text" class="form-control" name="producer" placeholder="David Hoverman">
        </div>

        <div class="mb-3">
          <label for="runtime">Runtime</label>
          <input type="text" class="form-control" name="runtime" placeholder="129">
        </div>

        <div class="mb-3">
          <label for="storyline">Storyline</label>
          <textarea name="storyline" class="form-control" rows="8" cols="50" placeholder="A beautiful enchantress disguised as an old beggar woman arrives at a castle during a ball and offers the host, a cruel and selfish prince, a rose in return for shelter from a storm. When he refuses, she reveals her identity. To punish the prince for his lack of compassion, the enchantress transforms him into a beast and his servants into household objects, then erases the castle, the prince and his servants from the memories of their loved ones..."></textarea>
        </div>

        <div class="mb-3">
          <label for="poster">Poster</label>
          <input type="image" class="form-control" name="poster" placeholder="">
        </div>

        <div class="mb-3">
          <label for="keywords">Keywords</label>
          <textarea name="keywords" class="form-control" rows="2" cols="10" placeholder="Romance, Disney, Emma Watson"></textarea>
        </div>

        <div class="mb-3">
          <label for="language">Available Language</label>
          <input type="text" class="form-control" name="language" placeholder="English, French, German, Portuguese, Korean">
        </div>

        <div class="mb-3">
          <label for="director">Director</label>
          <input type="text" class="form-control" name="director" placeholder="Bill Condon">
        </div>
        <hr class="mb-4">
        <button class="btn btn-secondary btn-lg btn-block" type="submit">Post My Review</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2019 Application Project Group 3</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script></body>
</html>
