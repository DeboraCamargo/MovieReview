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
</head>
<body>
<div id="wrap">
    <header>
        <div>
            <img src="img/moviereview.jpg" alt="Movie Logo"/>
        </div>

        <div>
            <div id="search">
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
            <nav>
                <ul>
                    <li><a>Movies</a></li>
                    <li><a>TV Shows</a></li>
                    <li><a>Reviews</a></li>
                </ul>
            </nav>

        </div>
        <div>
            <div>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter-square"></i>
            </div>
            <div><button>Login</button></div>
        </div>

    </header>
    <content>
<?php
$omdb = new OMDb();

$movies = $omdb->getData();

echo $movies->{"Title"};

?>
    </content>

</div>
</body>
</html>
