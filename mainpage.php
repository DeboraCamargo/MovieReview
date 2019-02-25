<?php
/**
 * Created by PhpStorm.
 * User: debby
 * Date: 2019-02-22
 * Time: 1:09 PM
 */

require "lib/themoviedb.php";

$themoviedb = new TheMovieDB();
$latestMovieIds = array("tt2386490", "tt0437086", "tt3513498", "tt2452244", "tt8155288");
$moviesArray = array(
    "oculus" => $themoviedb->getMovieById(157547),
    "Ant-man-and-the-Wasp" => $themoviedb->getMovieById(363088),
    "BlackPanther" => $themoviedb->getMovieById(284054),
    "rocketman" => $themoviedb->getMovieById(504608)
);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="main-page.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
</head>
<body>
<div id="wrap">
    <header>
        <div class="logo">
            <img src="img/movie-review-trans.png" alt="Movie Logo"/>
        </div>


        <div class="search">
            <label for="search">Search</label>
            <input id="search" type="search"  class="loginbtn">
            <label for="search-by">Search by</label>
            <select id="search-by"  class="loginbtn">
                <option value="TV">All</option>
                <option value="TV">TV episodes</option>
                <option value="Movie">Movie</option>
                <option value="Casting">Casting</option>
            </select>

            <a>
                <i class="fas fa-search"></i>
            </a>
        </div>
        <nav class="menu">
            <ul>
                <li><a>Movies</a></li>
                <li><a>TV Shows</a></li>
                <li><a>Reviews</a></li>
            </ul>
        </nav>
        <div class="header-links">
            <div>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter-square"></i>
                <i class="fas fa-envelope"></i>
            </div>
        </div>

        <div class="login">
            <div><button id="opener" class="loginbtn">Login</button></div>
        </div>
        <div id="dialog">
            <p>Already a member?</p>
            <button id="goLogin" class="opt">Yes, take me to login page</button>
            <button id="goSubscribe" class="opt">No, I need to subscribe</button>
        </div>

    </header>

    <aside>
        <h2>Movies of the week
        </h2>

        <div>
            <?php

            foreach ($latestMovieIds as $movieId) {
                $movie = $themoviedb->findMovieByIMDBId($movieId);
                ?>
                <div class="side-movie">
                    <img alt="<?php echo $movie->{"title"}?>"
                         src="<?php echo $themoviedb->getPosterUrl($movie->{"poster_path"})?>" />
                    <div><?php echo $movie->{"title"}?></div>
                    <div>Release date: <?php echo $movie->{"release_date"}?></div>
                </div>
                <?php
            }
            ?>
        </div>
    </aside>
    <article>
        <?php
        foreach ($moviesArray as $key => $movie) {
            ?>
            <section>
                <h2>Author's review on <?php echo $movie->title ?></h2>
                <div style="text-align: center;">
                    <a href="#"><img src="img/<?php echo $key ?>.jpg" alt="movie <?php echo $movie->title ?>" height="250"></a>
                </div>
                <sub><i>"<?php echo $movie->tagline ?>"</i></sub>
                <p>Overview: <?php echo $movie->overview ?> </p>
                <span>Rating: <?php echo $movie->vote_average == 0? "-" : $movie->vote_average ?>/10</span>
            </section>
            <?php
        }
        ?>
    </article>

    <footer>
        <p>&copy; Copyright 2019 - Movie IMDbest</p>

    </footer>

</div>
<script>
    $(function() {
        $( "#dialog" ).dialog({
            autoOpen: false,
            show: {
                effect: "blind",
                duration: 1000
            },
            hide: {
                effect: "explode",
                duration: 1000
            },
            title: "Membership"
        });

        $( "#opener" ).click(function() {
           $( "#dialog" ).dialog( "open" );
        });

        $( "#goLogin" ).click(function() {
            window.location.href = "login.php";
        });

        $( "#goSubscribe" ).click(function() {
            window.location.href = "signup.php";
        });
    });
</script>
</body>
</html>

