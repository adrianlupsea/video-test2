<!DOCTYPE html>
<html>
    <head>
        <title>{{title}}</title>
        <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"> </script>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <link rel="stylesheet" href="style.css">
        
    </head>   
    <body>
        <header>
         <div class="container">
  <div class="jumbotron">
    <h1> Welcome Guest</h1> 
    <p>Please craete an account to access the rest of the features</p> 
  </div>
</div>

<!-- <div class="container">-->
<!--  <br>-->
<!--  <div id="myCarousel" class="carousel slide" data-ride="carousel">-->
    <!-- Indicators -->
<!--    <ol class="carousel-indicators">-->
<!--      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
<!--      <li data-target="#myCarousel" data-slide-to="1"></li>-->
<!--      <li data-target="#myCarousel" data-slide-to="2"></li>-->
<!--      <li data-target="#myCarousel" data-slide-to="3"></li>-->
<!--    </ol>-->

    <!-- Wrapper for slides -->
<!--    <div class="carousel-inner" role="listbox">-->

<!--      <div class="item active">-->
<!--        <img src="Galery/poze/1.jpg" alt="Chania" width="460" height="345">-->
<!--        <div class="carousel-caption">-->
<!--          <h3>Chania</h3>-->
<!--          <p>Some text</p>-->
<!--        </div>-->
<!--      </div>-->

<!--      <div class="item">-->
<!--        <img src="Galery/poze/2.jpg" alt="Chania" width="460" height="345">-->
<!--        <div class="carousel-caption">-->
<!--          <h3>Chania</h3>-->
<!--          <p>Some text</p>-->
<!--        </div>-->
<!--      </div>-->
    
<!--      <div class="item">-->
<!--        <img src="Galery/poze/3.jpg" alt="Flower" width="460" height="345">-->
<!--        <div class="carousel-caption">-->
<!--          <h3>Flowers</h3>-->
<!--          <p>Some text</p>-->
<!--        </div>-->
<!--      </div>-->

<!--      <div class="item">-->
<!--        <img src="Galery/poze/4" alt="Flower" width="460" height="345">-->
<!--        <div class="carousel-caption">-->
<!--          <h3>Flowers</h3>-->
<!--          <p>Some text</p>-->
<!--        </div>-->
<!--      </div>-->
  
<!--    </div>-->

    <!-- Left and right controls -->
<!--    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">-->
<!--      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
<!--      <span class="sr-only">Previous</span>-->
<!--    </a>-->
<!--    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">-->
<!--      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
<!--      <span class="sr-only">Next</span>-->
<!--    </a>-->
<!--  </div>-->
<!--</div>-->
            
         <form role="form" id="foo" type="POST" action=logged.php>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password">
  </div>
 
  <button type="submit" class="btn btn-default">Submit</button>
  <a href="register.php">Register an Account</a>
</form>
          </header>