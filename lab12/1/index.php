<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
    <style>
        
    </style>
</head>
<body>
        <?php
            $url = "http://10.0.15.21/lab/lab12/restapis/10countries.json";    
            $response = file_get_contents($url);
            $result = json_decode($response);

            foreach ($result as $country){
                echo "Name : ".$country->name."<br>";
                echo "Capital : ".$country->capital."<br>";
                echo "Population : ".$country->population."<br>";
                echo "Region : ".$country->region."<br>";
                echo "Location : " ;
                foreach($country-> latlng as $locate){
                    echo $locate." ";
                }

                echo "<br>";
                echo "Borders : " ;
                foreach($country-> borders as $border){
                    echo $border." ";
                }
                echo "<br>";


                echo "<img src= '$country->flag'>";
                echo "<br><br><br><br><br><br>";
            }
            // echo "Home Town : $result->homeTown<br>";    
            // foreach ($result->members as $hero) {  
            //     echo "&emsp; Name : $hero->name<br>";
            //     echo "&emsp; Age : $hero->age<br>";            
            // }
        ?>
</body>
</html>