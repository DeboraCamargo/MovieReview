<?php
/**
 * Created by PhpStorm.
 * User: debby
 * Date: 2019-02-22
 * Time: 1:09 PM
 */

require "lib/omdbapi.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="main-page.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">
</head>
<body>
<div id="wrap">
    <header>
        <div class="logo">
            <img src="img/movie-review-trans.png" alt="Movie Logo"/>
        </div>


            <div class="search">
                <input type="search">
                <select>
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
            <div><button>Login</button></div>

        </div>

    </header>

    <aside>
        <h2>Movies of the week
        </h2>

        <nav>
            <ul>
                <li><a href="#"> Movie </a></li>
                <li><a href="#"> Movie </a></li>
                <li><a href="#"> Movie </a></li>
                <li><a href="#"> Movie </a></li>
                <li><a href="#"> Movie </a></li>
                <li><a href="#"> Movie </a></li>
                <li><a href="#"> Movie </a></li>
                <li><a href="#"> Movie </a></li>
                <li><a href="#"> Movie </a></li>
                <li><a href="#"> Movie </a></li>
                <li><a href="#"> Movie </a></li>
                <li><a href="#"> Movie </a></li>
                <li><a href="#"> Movie </a></li>
            </ul>
        </nav>

        <content>
            <?php
            //$omdb = new OMDb();
            //
            //$movies = $omdb->getData();
            //
            //echo $movies->{"Title"};

            ?>
        </content>
    </aside>
    <article>
        <section>
            <h2>Author's review on Oculus</h2>
           <a href="#"><img src="img/oculus.jpg" alt="movie oculus" height="250"></a>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc mollis, nulla non elementum tincidunt, felis ligula
                sodales lectus, sit amet dignissim quam massa sit amet lorem. Aenean lorem risus, tempus nec, gravida eu, semper
                sed, ipsum. Donec risus. Pellentesque sollicitudin sapien ut neque scelerisque blandit. Praesent metus. Mauris
                pulvinar mattis justo. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer dictum vehicula orci.
                Integer sed velit. Nunc in sem sit amet ligula scelerisque dapibus. Nullam commodo odio vel enim. </p>
        </section>
        <section>
            <h2>Authors review on the Ant man and the wasp</h2>
            <a href="#"><img src="img/Ant-man-and-the-Wasp.jpg" alt="antman" height="250"></a>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc mollis, nulla non elementum tincidunt, felis ligula
                sodales lectus, sit amet dignissim quam massa sit amet lorem. Aenean lorem risus, tempus nec, gravida eu, semper
                sed, ipsum. Donec risus. Pellentesque sollicitudin sapien ut neque scelerisque blandit. Praesent metus. Mauris
                pulvinar mattis justo. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer dictum vehicula orci.
                Integer sed velit. Nunc in sem sit amet ligula scelerisque dapibus. Nullam commodo odio vel enim. </p>
        </section>

        <section>
            <h2>Authors review on Black Panther</h2>
            <a href="#"> <img src="img/BlackPanther.jpg" alt="blackpanther" height="250"></a>

            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc mollis, nulla non elementum tincidunt, felis ligula
                sodales lectus, sit amet dignissim quam massa sit amet lorem. Aenean lorem risus, tempus nec, gravida eu, semper
                sed, ipsum. Donec risus. Pellentesque sollicitudin sapien ut neque scelerisque blandit. Praesent metus. Mauris
                pulvinar mattis justo. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer dictum vehicula orci.
                Integer sed velit. Nunc in sem sit amet ligula scelerisque dapibus. Nullam commodo odio vel enim. </p>
        </section>

        <section>
            <h2>Authors review on Rocketman</h2>
            <a href="#"><img src="img/rocketman.jpg" alt="rocketman" height="250"></a>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc mollis, nulla non elementum tincidunt, felis ligula
                sodales lectus, sit amet dignissim quam massa sit amet lorem. Aenean lorem risus, tempus nec, gravida eu, semper
                sed, ipsum. Donec risus. Pellentesque sollicitudin sapien ut neque scelerisque blandit. Praesent metus. Mauris
                pulvinar mattis justo. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer dictum vehicula orci.
                Integer sed velit. Nunc in sem sit amet ligula scelerisque dapibus. Nullam commodo odio vel enim. </p>
        </section>

    </article>

    <footer>
        <p>&copy; Copyright 2019 - Movie IMDbest</p>

    </footer>



</div>
</body>
</html>
