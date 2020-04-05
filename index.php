<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A Leading Brasilian Jiu Jitsu in Plymouth. Kids Jiu Jitsu,  Adult Jiu Jitsu, Brazilian Jiu Jitsu in PlymouthThe best place to learn BJJ. Be stronger and smarter.">
        <meta name="robots" content="index, follow, max-image-preview:large">
        <link rel="canonical" href="http://bjjplymouthseminar.co.uk/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Brasilian Jiu Jitsu | Start">
        <meta property="og:locale" content="en_GB">
        <meta property="og:url" content="http://bjjplymouthseminar.co.uk/">
        <meta property="og:site_name" content="Brasilian Jiu jitsu Plymouth">
        <link rel="stylesheet" href="css\style.min.css">
        <link rel="stylesheet" href="css\all.min.css">
        <link rel="stylesheet" href="css\fontawesome.min.css">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/site.webmanifest">

        <?php 
     if(isset($_GET['page'])){
      include("php/variables.php");
                     if(!empty($page_filter)){
                          if(in_array($page_filter,$allowed_pages)){
                                          if(is_file("php/".$page_filter.".php")){
                                              include("php/".$page_filter.".php");
                                           }
                             }
                     }
    
    }else{
         include("php/start.php");
          
    }
    echo " <title> BJJ Plymouth | $title</title>";
   ?>
    </head>

    <body>
        <section class="loadPage_main">
            <div class="center-wrap">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </section>
        <div class="bars-wrap" id="mobile-menu">
            <div class="bars">
                <div class="bar top"></div>
                <div class="bar bottom"></div>
            </div>
        </div>
        <nav class="screen mobile">
            <ul>
                <li><a href="?page=about">About Us</a></li>
                <li><a href="?page=gallery">Gallery</a></li>
                <li><a href="?page=seminars">Seminars</a></li>
                <li><a href="?page=timetable">Timetable</a></li>
                <li><a href="?page=prices">Prices</a></li>
                <li><a href="?page=contact">Contact</a></li>
                <li><a href="?page=partners">Partners</a></li>
                <!-- <li><a href="?page=log" class="si">Sign in</a></li> -->
            </ul>
        </nav>
        <div class="container">
            <div class="txt">
                <?php
        if(isset($_GET['page'])){
            include("php/variables.php");
            if(!empty($page_filter)){
                if(!in_array($page_filter,$allowed_pages)){// parametr drugi musi byc tablica(array)
                    include("goneWrong.html");
                }else{
                    if(is_file("html/".$page_filter.".html")){
                        include("html/".$page_filter.".html");
                    }else {
                        include("notExist.html");
                    }
                }
            }
        }else{
            include("start.php");
        }
?>
            </div>
        </div>
        <footer>
            <div class="feet">Copyrights &copy <?php echo date("Y");?> BJJ Plymouth - All Rights Reserved</div>
            <div class="feet">Website made by Maciej Szeląg</div>
        </footer>
        <script src="js/loadPage.js"></script>
        <script src="js/main.js"></script>
    </body>

</html>
