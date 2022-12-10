<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | المنتجات </title>
    <style>
        h3{
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
        }
        .card{
            float: right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;
        }
        .card img{
            width: 100%;
            height: 200px;
        }
        main{
            width: 60%;
        }
    
            nav{
    float: right;
    text-align: right;
    color: brown;
}
nav ul{
    width: auto;
    overflow: auto;
}
nav ul li{
    display: inline-block;
    list-style: none;
    padding: 2px 10px;
}
nav ul li:hover{
    border: 2px solid  rgb(5, 177, 245);
}
/*nav ul li.activate{
    border: 2px solid rgb(5, 177, 245);
}*/
nav ul li a{
    text-decoration: none;
    color: #000;
    font-size: 18px;
   /* padding: 2px 10px;*/
}s
nav ul li :after a{
    content: "|";
}
nav ul li  :last-child:after a{
    content: "";
        }
        .buttons{
    margin-left: 45%;
    margin-top: 20px;
}
/*.button{
    width: 120px;
    height: 40px;
    border: solid blue;

}*/
button a{
text-decoration: none;
font-size: 18px;
}
.btn1{
    background-color: burlywood;
    border: solid burlywood;
    width: 120px;
    height: 40px;

}
    </style>
                
</head>
<body>
<nav>
                    <ul>
                        <li class="activate"> <a href="/Ecommerce-market/shop market/home.php"> Home Page</a></li>
  
                    </ul>
                </nav>
    <center>
        <h3 style ="color: blue;">كل المنتجات المتوفرة</h3>
    </center>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM products");
    while($row = mysqli_fetch_array($result)){
        echo "
        <center>
        <main>
            <div class='card' style='width: 15rem;'>
                <img src='$row[image]' class='card-img-top'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[name]</h5>
                    <p class='card-text'>$row[price]</p>
                </div>
            </div>
        </main>
        <center>
        ";
    }
    ?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="buttons">
<button class="btn btn1"><a href="/rakwan-shop/register.php"> login Market </a> </button>
</div>
</body>
</html>