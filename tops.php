<!DOCTYPE html>
<html lang="en">
<head>
  <title>MISSGLAM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
        background-color:rgb(255, 191, 198);
       
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: rgb(255, 191, 198);
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
      $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
     
    container text-center{
    width: 320px;
    padding: 10px;
    border: 5px solid gray;
    margin: 0;
      }
      
  input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}    
      

  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">MISSGLAM</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li class="active"><a href="http://localhost/newwebsite/tops.php">TOPS</a></li>
        <li><a href="http://localhost/newwebsite/index.php">DRESSES</a></li>
    <li><a href="http://localhost/newwebsite/skirts.php">SKIRTS</a></li>
        <li><a href="http://localhost/newwebsite/access.php">ACCESSORIES</a></li>
        </ul>
      <ul class="nav navbar-nav navbar-right">
<li><a href="http://localhost/newwebsite/php.php">Need help ? </a></li>
      </ul>
    </div>
  </div>
    <body>

</body>
</nav>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="otherpic/new%20ba.jpeg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="otherpic/new2bae.jpeg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="otherpic/banner_1481016963.jpg"alt="Flower" width="460" height="345">
      </div>



    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  
    
<div class="container text-center">    
  <h3>TOPS</h3><br>
    <p>Bring your style a-game with the fierce collection of lust-worthy tops at Missglam. From smokin’ going out tops to silky camis and bangin’ bodysuits - or cut the crop with our coveted collection of crop tops. Our colour and print combos are off the hook; including black, red, white tops and more, in monochrome stripes, luxurious suede and bold florals to name a few. Whether you’re feeling super effortless, cool casual or killer glam, have fun building your own coveted looks with these delectable beauties.</p>
    <div class="row">
    <div class="col-sm-4">
   <img src="https://media.missguided.com/s/missguided/TW416774_set/1/orange-crochet-sleeve-milkmaid-crop-top.jpg?$product-page__zoom--2x$" alt="White Bandage Cropped Top with Front Cross Strap Detailing - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/TW416774_set/4/orange-crochet-sleeve-milkmaid-crop-top.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/TW416774_set/1/orange-crochet-sleeve-milkmaid-crop-top.jpg?$product-page__zoom--2x$';" class="img-responsive">
   
        
        
   <button class="btn" data-toggle="modal" data-target="#myModal">black polka dress </button> <br>
        <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£15.00</a>

        </div>
        
        
<div class="col-sm-4">
<img src="https://media.missguided.com/s/missguided/TJC12098_set/1/yellow-cap-sleeve-crop-top.jpg?$product-page__zoom--2x$" alt="Stone Full Length Sleeve Bodysuit with Scoop Neck - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/TJC12098_set/4/yellow-cap-sleeve-crop-top.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/TJC12098_set/1/yellow-cap-sleeve-crop-top.jpg?$product-page__zoom--2x$';" class="img-responsive">
      
        <button class="btn" data-toggle="modal" data-target="#myModal"> pink polka dot dress </button> <br>
         <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£28.00</a>
        </div>
        <div class="col-sm-4">
      <img src="https://media.missguided.com/s/missguided/TW420853_set/1/nude-oversized-plunge-shirt.jpg?$product-page__zoom--2x$" alt="803-camel-casual-wear-thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/TW420853_set/4/nude-oversized-plunge-shirt.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/TW420853_set/1/nude-oversized-plunge-shirt.jpg?$product-page__zoom--2x$" alt="803-camel-casual-wear-thumbnail';" class="img-responsive">
           
            <button class="btn" data-toggle="modal" data-target="#myModal">long black dress</button> <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£25.00</a>
        </div>
    </div>
        <div class="col-sm-4">
        <img src="https://media.missguided.com/s/missguided/TJF11239_set/1/white-lace-trim-gathered-hem-crop-top.jpg?$product-page__main--3x$" alt="Black Bandage Crop Top with Cut Out Bust and Strap Detail - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/TJF11239_set/4/white-lace-trim-gathered-hem-crop-top.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/TJF11239_set/1/white-lace-trim-gathered-hem-crop-top.jpg?$product-page__main--3x$';" class="img-responsive">
            
               <button class="btn" data-toggle="modal" data-target="#myModal">shirt dress </button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£15.00</a>
        </div>
        <div class="col-sm-4">
           <img src="https://media.missguided.com/s/missguided/TJF11462_set/1/white-whitney-graphic-crop-top.jpg?$product-page__zoom--2x$" alt="Bandage Crop top with cut out bust and gold button detail - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/TJF11462_set/4/white-whitney-graphic-crop-top.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/TJF11462_set/1/white-whitney-graphic-crop-top.jpg?$product-page__zoom--2x$';" class="img-responsive">
       
            <button class="btn" data-toggle="modal" data-target="#myModal">off shoulder dress </button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£25.00</a>
        </div>
        <div class="col-sm-4">
       <img src="https://media.missguided.com/s/missguided/TJF10640_set/1/pink-sequin-chain-bralet.jpg?$product-page__zoom--2x$" alt="Long sleeve double layered crop top - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/TJF10640_set/4/pink-sequin-chain-bralet.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/TJF10640_set/1/pink-sequin-chain-bralet.jpg?$product-page__zoom--2x$';" class="img-responsive">
            
            <button class="btn" data-toggle="modal" data-target="#myModal">midi khaki dress </button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£26.00</a>
        </div>
    </div>
        <div class="col-sm-4">
        <img src="https://media.missguided.com/s/missguided/TW420883_set/1/red-basic-v-neck-satin-strappy-bodysuit.jpg?$product-page__zoom--2x$" alt="Wrap around light khaki top - thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/TW420883_set/4/red-basic-v-neck-satin-strappy-bodysuit.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/TW420883_set/1/red-basic-v-neck-satin-strappy-bodysuit.jpg?$product-page__zoom--2x$';" class="img-responsive">
           
             <button class="btn" data-toggle="modal" data-target="#myModal">long prom dress</button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£15.00</a>
        </div>
        <div class="col-sm-4">
      <img src="https://media.missguided.com/s/missguided/Z9215330_set/1/petite-pink-tie-front-wide-sleeve-crop-top.jpg?$product-page__zoom--2x$" alt="make-the-cut-serenity-blue-crop-thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/Z9215330_set/4/petite-pink-tie-front-wide-sleeve-crop-top.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/Z9215330_set/1/petite-pink-tie-front-wide-sleeve-crop-top.jpg?$product-page__zoom--2x$';" class="img-responsive">
           
            <button class="btn" data-toggle="modal" data-target="#myModal">floral white dress</button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£25.00</a>
        </div>
        <div class="col-sm-4">
       <img src="https://media.missguided.com/s/missguided/L4227626_set/1/black-sequin-strappy-crop-top.jpg?$product-page__zoom--2x$" alt="womens-busty--white-cut-out-crop-top-thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/L4227626_set/4/black-sequin-strappy-crop-top.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/L4227626_set/1/black-sequin-strappy-crop-top.jpg?$product-page__zoom--2x$';" class="img-responsive">
        <button class="btn" data-toggle="modal" data-target="#myModal">white lacey dress</button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£20.00</a>
        </div>
        <div class="col-sm-4">
  <img src="https://media.missguided.com/s/missguided/TW420499_set/1/white-multi-tassel-mirror-crop-top.jpg?$product-page__main--3x$" alt="Black Cut Out Bandage Bodysuit - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/TW420499_set/4/white-multi-tassel-mirror-crop-top.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/TW420499_set/1/white-multi-tassel-mirror-crop-top.jpg?$product-page__main--3x$';" class="img-responsive">
            
            <button class="btn" data-toggle="modal" data-target="#myModal">yellow checked dress</button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£25.00</a>
        </div>
        <div class="col-sm-4">
       <img src="https://media.missguided.com/s/missguided/TJF11773_set/1/white-rainbow-stripe-cropped-rugby-top.jpg?$product-page__zoom--2x$" alt="Gold Halter Neck Glitter Embellished Bodysuit - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/TJF11773_set/4/white-rainbow-stripe-cropped-rugby-top.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/TJF11773_set/1/white-rainbow-stripe-cropped-rugby-top.jpg?$product-page__zoom--2x$';" class="img-responsive">
           
            <button class="btn" data-toggle="modal" data-target="#myModal">white and black polka dot dress</button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£20.00</a>
        </div>
        <div class="col-sm-4">
       <img src="https://media.missguided.com/s/missguided/L4229326_set/1/blue-mesh-stripe-crop-top.jpg?$product-page__zoom--2x$" alt="Mocha Long Sleeve Deep Plunge Bodysuit - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/L4229326_set/4/blue-mesh-stripe-crop-top.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/L4229326_set/1/blue-mesh-stripe-crop-top.jpg?$product-page__zoom--2x$';" class="img-responsive">
        </div>
        <button class="btn" data-toggle="modal" data-target="#myModal">off shoulder blue dress</button>
        <br>
        <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£18.00</a>
        </div> 
</div><br>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> TOPS</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Quantity</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
              <label for="size">size</label>
    <select id="size" name="size">
      <option value="6">6</option>
      <option value="8">8</option>
      <option value="10">10</option>
        <option value="10">12</option>
        <option value="10">14</option>
        <option value="10">16</option>
    </select>
          
              <button type="submit" class="btn btn-block">Add to your Basket
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
         </div>
                <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="http://localhost/newwebsite/php.php">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<footer class="container-fluid text-center">
  <p>© MISSGLAM LTD // OFFICIAL BABE UNIFORM</p>  
    

    </footer>

</body>
</html>
