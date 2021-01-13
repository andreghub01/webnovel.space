<?php 
isset($title) ? true : die ;
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=1024">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-185812022-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-185812022-1');
</script>
    <title><?=$title?></title>
    <style>
        .thumbnail{
            width: 50%;
        }
        .rounded {
            border-radius: .9rem!important;
        }
        a {
            text-decoration: none;
            color: #000000;
        }
        .col-6{
            margin-bottom: 50px;
        }
    </style>
  </head>
  <body>
    <div class="container-fluid bg-white">
        <div class="container">
            <a href="<?=$linkAuthor?>">
                <img src="/navbar.png" alt="">
            </a>
        </div>
    </div>
    <div class="container mt-5">
        <h2 class="fw-bold">BEST POPULAR NOVEL <span id="year"></span></h2>
        <div class="row text-center mt-5">
            <?php foreach ($novels as $key => $novel) :?>
                <div class="col-6">
                    <a href="<?=$novel['link']?>">
                        <img class="rounded thumbnail" src="<?=$novel['thumbnail']?>" alt="<?=$novel['title']?>">
                        <h4 class="mt-2"><?=$novel['title']?></h4>
                        <span class="text-secondary"><?=$novel['genre']?></span>
                        <div class="text-warning h2">
                            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span class="text-dark h5"><?=$novel['rating']?></span>
                        </div>
                        <p class="text-start">
                            <?=$novel['synopsis']?>
                        </p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="container-fluid mt-5" style="background-color: #25253d;">
        <div class="container">
            <a href="<?=$linkAuthor?>">
                <img src="/footer2.png" alt="">
            </a>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>
  </body>
</html>
