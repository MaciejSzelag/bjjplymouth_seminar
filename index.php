<!DOCTYPE html>


<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css\style.min.css">
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
    echo " <title> CheckMat | $title</title>";
   ?>
    </head>
    <body>
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
                <li><a href="?page=adults">Adults</a></li>
                <li><a href="?page=kids">Kids</a></li>
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
     <script src="js/main.js"></script>
    </body>

</html>
