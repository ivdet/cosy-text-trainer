<?php



$name = "Cosy Text trainer";

?><!DOCTYPE html>
<html lang = "en">
   
   <head>
      <meta charset = "utf-8">
      <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      
      <title><?php echo $name;?></title>
      
      <!-- Bootstrap -->
      <link href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel = "stylesheet">
      <!-- Custom CSS -->
      <link href="http://ironsummitmedia.github.io/startbootstrap-freelancer/css/freelancer.css" rel="stylesheet">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      
      <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>
      textarea#input_area{
          width: 100%;
          min-height: 200px;
      }
      </style>
   </head>
   
   <body id="page-top" class="index">
   <div class="container">
        <h1><?php echo $name;?></h1>
        <ul class = "nav nav-tabs">
           <li><a href = "#h" data-toggle = "tab">Home</a></li>
           <li><a href = "#s" data-toggle = "tab">Street</a></li>
        </ul>
        
        <div class = "tab-content">
           <div class = "tab-pane fade in active" id = "h">
           <textarea id="input_area"></textarea>
           <div id="result"></div>
           </div>
           <div class = "tab-pane fade" id = "s">streetdiv</div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        
        
        <script>
        $(document).ready(function(){
            
            $('#input_area').dblclick(function(){
                $('#result').append($('<div>' + window.getSelection().toString() + '</div>'));
                
            });
            
        });
        </script>
        
        
    </div>
   </body>
</html>