<?php

require __DIR__ . '/vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
    $ctrl = new \CosyTextTrainer\Ctrl\DefaultController();
    $dataset = $ctrl->indexAction();
    $text = isset($dataset['text'])?$dataset['text']:'';
if(isset($_GET['addword']) && isset($_POST['word']))
{
    // TODO 1: ekran & model
    $word = $_POST['word'];
    $ctrl->addWordAction(intval($word['article_id']), $word['content']);
}
elseif(isset($_GET['addarticle']) && isset($_POST['article']))
{
    // TODO 1: ekran & model
    $article = $_POST['article'];
    print_r($article);
    $ctrl->addArticleAction($article['content'], intval($article['language_id']));
}
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
           <textarea id="input_area"><?php echo $text;?></textarea>
           <div id="result"></div>
           <button id="add-article">add article</button>
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
                word = window.getSelection().toString();
                $('#result').append($('<div>' + word + '</div>'));
                $.ajax({
                  type: "POST",
                  url: 'index.php?addword=1',
                  data: {"word":{"article_id":2, "content":word}},
                  success: function(){alert('added');},
                  dataType: "json"
                });
                
            });
            
            $('#add-article').click(function(){
                content = $('textarea#input_area').val();
                $.ajax({
                  type: "POST",
                  url: 'index.php?addarticle=1',
                  data: {"article":{"language_id":1, "content":content}},
                  success: function(){alert('added');},
                  dataType: "json"
                });
                                
            });
            
        });
        </script>
        
        
    </div>
   </body>
</html>