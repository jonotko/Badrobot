<?php //admin.php

require_once "db_config.php";

mysql_connect(DATABASE_HOST,DATABASE_USER,DATABASE_PASS) or die("<p>Couldn't connect</p>".mysql_error());
mysql_select_db(DATABASE_NAME) or die("<p>Couldn't select database".mysql_error());

/*if(isset($_REQUEST['menu'])){
    $menu_option = trim($_REQUEST["menu"]);
    
    switch($menu_option){
        case '1':
        header("Location:admin.php?menu=1");
        break;
        case '2':
        header("Location:admin.php?menu=2");
        break;
        case '3':
        header("Location:admin.php?menu=3");
        break;
        case '4':
        header("Location:admin.php?menu=4");
        break;
        default:
        break;                                                                                                                
    }
}*/


/*$query = "CREATE TABLE products(
            id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
            title varchar(50) NOT NULL,
            price varchar(50) NOT NULL,
            description varchar(200) NOT NULL,
            image_ref varchar(20) NOT NULL,
            category varchar(20) NOT NULL,
            date_posted date NOT NULL,
            slider boolean,
            in_stock boolean
)";*/

//mysql_query($query) or die("<p>Couldn't create table ".mysql_error());

/*$image_directory = "products/";

$title = $_REQUEST['title'];
$price = $_REQUEST['price'];
$description = $_REQUEST['description'];
$image_ref = $_REQUEST['image_ref'];
$category = $_REQUEST['category'];
$date_posted = $_REQUEST['date_posted'];
$slider = $_REQUEST['slider'];
$in_stock = $_REQUEST['in_stock'];
move_uploaded_file($_FILES['product_image']['tmp_name'],$image_directory.$image_ref.".jpg");

$query = "INSERT INTO products VALUES('Null','{$title}','{$price}','{$description}','{$image_ref}','{$category}','{$date_posted}','{$slider}','{$in_stock}')";
mysql_query($query) or die("Unable to post to database".mysql_error());*/


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/img/icon.png">

    <title>Supa Bad Robot</title>
      
    <!--Bootstrap Javascript-->
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
    <!--Slider stuff-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="jquery.bxslider/jquery.bxslider.js"></script>
    <link href="jquery.bxslider/jquery.bxslider.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
      <link href="css/adminstyles.css" rel="stylesheet" >
      
    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Oxygen|Orbitron' rel='stylesheet' type='text/css'>
    <link href="font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><span class="blue"><i class="fa fa-home fa-fw"></i>BADROBOT</span> <span class="yellow">TT</span> <img src="img/badRobot.png" style ="width:32px; height:auto;"/></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">View Site</a></li>
            <li><a href="smartphones.html">Contact Developers</a></li>
            <li><a href="accessories.html">Create New User</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>

<?php 
$result = mysql_query("SELECT* FROM products");
$rows = mysql_num_rows($result);

echo "<p>{$rows}</p>";
?>
    
    <!-- Temp links for side menu nav -->
    <a href="#">Slider</a><br />
    <a href="#">Newest products</a><br />
    <a href="#">Hotest Products</a><br />
    <a href="#">Mobile Repairs</a><br />
    
    
    <!-- New mobile repair service -->
    <!--<div class="container-fluid">
        <form action="admin.php" method="POST">
            <input type="text" name="name_mobile_repair" placeholder="Enter the name of the mobile repair" />
            <input type="text" name="price" placeholder="Enter the price of the mobile repair" />
            <input type="hidden" name="new" value="create" />
            <input type="submit" value="Create new repair service" />
        </form>
    </div>-->
    
    <!-- Update Mobile repair service -->
    <!--<div class="container-fluid">
        <form action="admin.php" method="POST">
            <input type="text" name="mobile_repair_name" placeholder="Enter updated name" />
            <input type="text" name="price" placeholder="enter updated price" />
            <input type="hidden" name="update" value="update" />
            <input type="submit" value="update" />
        </form>
    </div>-->
    
    <!--Delete mobile repair service -->
    <!--<div class="container-fluid">
        <form action="admin.php" method="post">
            <input type="hidden" name="mobile_repair_name" value="{$row[1]}" />
            <input type="hidden" name="delete" value="delete" />
            <input type="submit" value="Delete" />
        </form>
    </div>
    -->
    
    <!--<div id="starter" class="container-fluid">
    <form action="admin.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="enter title" maxsize='50'/>
        <input type="text" name="price" placeholder=" Enter price" maxsize='50'/>
        <input type="text" name="description" placeholder=" Enter description" maxsize='50'/>
        <input type="text" name="image_ref" placeholder=" Enter image name" maxsize='50'/>
        <input type="text" name="category" placeholder="Select category" maxsize='50'/>
        <input type="date" name="date_posted" placeholder="Enter date" maxsize='50'/>
        <input type="file" name="product_image" placeholder="select file" maxsize='50'/>
        <input type="hidden" name="slider" value="0" maxsize='50'/>
        <input type="hidden" name="in_stock" value=1 maxsize='50'/>
        <input type="submit" value="Submit"/>
    </form>
    </div>-->
    
    
    
    
    
    
    
    
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>