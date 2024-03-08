<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="POST">
            <label for="prodid">Name :</label>
            <input type="text" id="prodid" name="prodid" placeholder="Enter a Product ID (1-30)" required />
            <button type="submit" name="submit">Submit</button>
        </form>

        <?php  if(isset($_POST['submit'])){
                    $prodid = $_POST['prodid'];       
                    //วิธีดึงข้อมูลเเบบ 1 (ใช้เเบบ2เถอะ)
                    $url = "http://10.0.15.21/lab/lab12/restapis/products.php?prodid=" . $prodid;
                    $client = curl_init($url);
                    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
                    $response = curl_exec($client);   
                    $result = json_decode($response); //เเปลง json string -> object


                    echo "Product ID: " . $result[0]->ProductID . " <br>";
                    echo "Product Name: " . $result[0]->ProductName . " <br>"; 
                    echo "Product Description: " . $result[0]->Description . " <br>"; 
                    echo "Product unitPrice: " . $result[0]->UnitPrice . " <br>"; 
                } 
        ?>
</body>
</html>