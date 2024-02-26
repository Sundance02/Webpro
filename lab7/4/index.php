<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4</title>
    <style>
        .header{
            text-align: center;
        }
        .col{
            float: left;
            width: 24%;
            margin-left: 12px;
        }
        img{
            width: 100%;
            height: 100%;
        }

        
    </style>
</head>
<body>
    
    <?php
        echo "<h1 class='header'>"."My Gallery"."</h1>";
        echo "<div class ='row'>";

            
            //col1
            echo "<div class='col'>";
                
                echo '<img src="https://c.wallhere.com/photos/18/ec/1920x1920_px_artwork_digital_art_painting-1421207.jpg!d" alt="">';
                echo '<img src="https://i.pinimg.com/originals/12/34/63/123463210d6908478a53cd19f3f8061b.jpg" alt="">';
                echo '<img src="https://wallpapercave.com/wp/wp11786660.jpg" alt="">';
                echo '<img src="https://c.wallhere.com/photos/ea/49/1920x1920_px_abstract_Colorful_Exploded-1429715.jpg!d" alt="">';
                echo '<img src="https://c4.wallpaperflare.com/wallpaper/555/28/28/1920x1920-px-artwork-digital-art-fantasy-girl-painting-technology-apple-hd-art-wallpaper-preview.jpg" alt="">';
            echo "</div>";


            //col2
            echo "<div class='col'>";
                echo '<img src="https://s1.1zoom.me/big7/720/Planets_Earth_442845.jpg" alt="">';
                echo '<img src="https://c.wallhere.com/photos/8c/31/1920x1920_px_science_fiction_space-1290895.jpg!d" alt="">';
                echo '<img src="https://wallpaperaccess.com/full/2474201.jpg" alt="">';
                echo '<img src="https://wallpapercave.com/wp/wp11786674.jpg" alt="">';
                echo '<img src="https://wallpapercave.com/wp/wp11786663.jpg" alt="">';
            echo "</div>";

            //col3
            echo "<div class='col'>";
                echo '<img src="https://wallpapercave.com/wp/wp11786681.jpg" alt="">';
                echo '<img src="https://wallpapercave.com/wp/wp11786682.jpg" alt="">';
                echo '<img src="https://wallpapercave.com/wp/wp11786701.jpg" alt="">';
                echo '<img src="https://wallpapercave.com/wp/wp11128213.png" alt="">';
                echo '<img src="https://wallpapercave.com/wp/wp11786711.jpg" alt="">';
            echo "</div>";


            //col4
            echo "<div class='col'>";
                echo '<img src="https://wallpapercave.com/wp/wp11786713.jpg" alt="">';
                echo '<img src="https://wallpapercave.com/wp/wp11786714.jpg" alt="">';
                echo '<img src="https://wallpapercave.com/wp/wp11786716.jpg" alt="">';
                echo '<img src="https://wallpapercave.com/wp/wp11786718.jpg" alt="">';
                echo '<img src="https://wallpapercave.com/wp/wp11786727.png" alt="">';
            echo "</div>";
    
    
    
    
    
        echo "</div>";
    ?>
</body>
</html>