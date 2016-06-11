<?php 
$code = $_POST["textarea"];
$dirname = uniqid();
mkdir($dirname);
$html = "/index.html";
$myFile =  $dirname . $html;   
$fh = fopen($myFile, 'w'); // or die("error");  
$stringData = $code;   
fwrite($fh, $stringData);



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HTML Host</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
        padding-top: 70px;

    }
    </style>

    

</head>

<body>

    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
      
            <div class="navbar-header">
           
                </button>
                <a class="navbar-brand" href="#">HTMLHost</a>
            </div>
          
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              
            </div>

        </div>
     
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Host HTML Pages!</h1>
                <p class="lead">

<a href="<?php
echo "http://preventstroke.tk/HTMLhosting/" .$myFile;
?>"> <?php
echo "http://preventstroke.tk/HTMLhosting/" .$myFile;
?></a> 
</p>
                <ul class="list-unstyled">
                    
                </ul>
            </div>
        </div>
    

    </div>



    <script src="js/jquery.js"></script>


    <script src="js/bootstrap.min.js"></script>

</body>

</html>
