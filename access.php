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
    /* nav bar */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
        background-color:rgb(255, 191, 198);
    }
    
    /* background colour */
    footer {
      background-color: rgb(255, 191, 198);
      padding: 25px;
    }
    /* carousel size */
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
    /* name of acesiories detail */ 
    container text-center{
    width: 320px;
    padding: 10px;
    border: 5px solid blue;
    margin: 0;
      }
      /* the whole page details */
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
      
      .container {
    position: relative;
}
      
  

  </style>
</head>
<body>
<!-- nav bar -->
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
          <li><a href="http://localhost/newwebsite/tops.php">TOPS</a></li>
        <li><a href="http://localhost/newwebsite/index.php">DRESSES</a></li>
    <li><a href="http://localhost/newwebsite/skirts.php">SKIRTS</a></li>
        <li class="active"><a href="http://localhost/newwebsite/access.php">ACCESSORIES</a></li>
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
  <!-- explanation of whats being sold on this site -->
    
<div class="container text-center">    
  <h3>ACCESSORIES</h3><br>
    <p>Accessories are key in taking any look from barely basic to totally babein’ or from day to night. Amp up your style game and invest in some key outfit changing pieces to take you through the new season. Take that party dress to the next level with a statement necklace or cute clutch. The devil is in the details so upgrade your basics with some stack rings and your must-have sunnies. Build up your transitional wardrobe and work an effortlessly on-style fedora, statement pendant necklace or fringed, faux suede, shoulder bag. Whatever your style, perfect your look and accessorize it up!</p>
    
    <!-- images of the items that are being sold with their name that are links to a pop up that allows costumers to select the amount they want to purchase this will then safe to their basket -->
      <div class="row">
    <div class="col-sm-4">
    <img src="https://media.missguided.com/s/missguided/4556_set/1/savage-rainbow-iridescent-pleated-wings.jpg?$product-page__zoom--2x$" alt="White Bandage Cropped Top with Front Cross Strap Detailing - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/4556_set/3/savage-rainbow-iridescent-pleated-wings.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/4556_set/1/savage-rainbow-iridescent-pleated-wings.jpg?$product-page__zoom--2x$';" class="img-responsive">
   
        
        
   <button class="btn" data-toggle="modal" data-target="#myModal">festival wings</button> <br>
        <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£15.00</a>

        </div>
        
        
<div class="col-sm-4">
<img src="https://media.missguided.com/s/missguided/A2506700_set/1/black-heart-shape-sunglasses.jpg?$product-page__zoom--2x$" alt="Stone Full Length Sleeve Bodysuit with Scoop Neck - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/A2506700_set/3/black-heart-shape-sunglasses.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/A2506700_set/1/black-heart-shape-sunglasses.jpg?$product-page__zoom--2x$';" class="img-responsive">
      
        <button class="btn" data-toggle="modal" data-target="#myModal"> heart glasses </button> <br>
         <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£8.00</a>
        </div>
        <div class="col-sm-4">
      <img src="https://media.missguided.com/s/missguided/A2508054_set/1/pink-emroidered-slogan-large-straw-hat.jpg?$product-page__zoom--2x$" alt="803-camel-casual-wear-thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/A2508054_set/4/pink-emroidered-slogan-large-straw-hat.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/A2508054_set/1/pink-emroidered-slogan-large-straw-hat.jpg?$product-page__zoom--2x$" alt="803-camel-casual-wear-thumbnail';" class="img-responsive">
           
            <button class="btn" data-toggle="modal" data-target="#myModal">pink beach hat</button> <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£15.00</a>
        </div>
    </div>
        <div class="col-sm-4">
        <img src="https://media.missguided.com/s/missguided/4601_set/1/gold-look-mini-coin-anklet.jpg?$product-page__zoom--2x$" alt="Black Bandage Crop Top with Cut Out Bust and Strap Detail - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/4601_set/3/gold-look-mini-coin-anklet.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/4601_set/1/gold-look-mini-coin-anklet.jpg?$product-page__zoom--2x$';" class="img-responsive">
            
               <button class="btn" data-toggle="modal" data-target="#myModal">gold necklace</button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£10.00</a>
        </div>
        <div class="col-sm-4">
           <img src="https://media.missguided.com/s/missguided/A2508097_set/1/white-double-buckle-studded-western-belt.jpg?$product-page__zoom--2x$" alt="Bandage Crop top with cut out bust and gold button detail - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/A2508097_set/3/white-double-buckle-studded-western-belt.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/A2508097_set/1/white-double-buckle-studded-western-belt.jpg?$product-page__zoom--2x$';" class="img-responsive">
       
            <button class="btn" data-toggle="modal" data-target="#myModal">white belt </button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£5.00</a>
        </div>
        <div class="col-sm-4">
       <img src="https://media.missguided.com/s/missguided/A2510418_set/1/blue-striped-rope-handle-beach-bag.jpg?$product-page__zoom--2x$" alt="Long sleeve double layered crop top - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/A2510418_set/2/blue-striped-rope-handle-beach-bag.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/A2510418_set/1/blue-striped-rope-handle-beach-bag.jpg?$product-page__zoom--2x$';" class="img-responsive">
            
            <button class="btn" data-toggle="modal" data-target="#myModal">beach bag</button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£16.00</a>
        </div>
        <div class="col-sm-4">
        <img src="https://media.missguided.com/s/missguided/A2508059_set/1/grey-snake-print-metal-trim-clutch-bag.jpg?$product-page__zoom--2x$" alt="Wrap around light khaki top - thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/A2508059_set/2/grey-snake-print-metal-trim-clutch-bag.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/A2508059_set/1/grey-snake-print-metal-trim-clutch-bag.jpg?$product-page__zoom--2x$';" class="img-responsive">
           
             <button class="btn" data-toggle="modal" data-target="#myModal">animal print bag</button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£15.00</a>
        </div>
        <div class="col-sm-4">
      <img src="https://media.missguided.com/s/missguided/A2507804_set/1/nude-faux-leather-croc-cross-body-bag.jpg?$product-page__zoom--2x$" alt="make-the-cut-serenity-blue-crop-thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/A2507804_set/4/nude-faux-leather-croc-cross-body-bag.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/A2507804_set/1/nude-faux-leather-croc-cross-body-bag.jpg?$product-page__zoom--2x$" alt="make-the-cut-serenity-blue-crop-thumbnail';" class="img-responsive">
           
            <button class="btn" data-toggle="modal" data-target="#myModal">nude side bag</button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£15.00</a>
        </div>
        <div class="col-sm-4">
       <img src="https://media.missguided.com/s/missguided/A2507849_set/1/white-chain-trim-cross-body-bag.jpg?$product-page__zoom--2x$" alt="womens-busty--white-cut-out-crop-top-thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/A2507849_set/4/white-chain-trim-cross-body-bag.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/A2507849_set/1/white-chain-trim-cross-body-bag.jpg?$product-page__zoom--2x$';" class="img-responsive">
        <button class="btn" data-toggle="modal" data-target="#myModal">white leather bag</button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£20.00</a>
        </div>
        <div class="col-sm-4">
  <img src="https://media.missguided.com/s/missguided/A2507863_set/1/gold-sequin-beret.jpg?$product-page__zoom--2x$" alt="Black Cut Out Bandage Bodysuit - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/A2507863_set/3/gold-sequin-beret.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/A2507863_set/1/gold-sequin-beret.jpg?$product-page__zoom--2x$';" class="img-responsive">
            
            <button class="btn" data-toggle="modal" data-target="#myModal">sequen gold hat</button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£10.00</a>
        </div>
        <div class="col-sm-4">
       <img src="https://media.missguided.com/s/missguided/4647_set/1/mixed-metal-heart-bands-ring-pack.jpg?$product-page__zoom--2x$" alt="Gold Halter Neck Glitter Embellished Bodysuit - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/4647_set/3/mixed-metal-heart-bands-ring-pack.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/4647_set/1/mixed-metal-heart-bands-ring-pack.jpg?$product-page__zoom--2x$';" class="img-responsive">
           
            <button class="btn" data-toggle="modal" data-target="#myModal">two rings</button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£9.00</a>
        </div>
        <div class="col-sm-4">
       <img src="https://media.missguided.com/s/missguided/4687_set/1/palm-leaf-drop-earrings.jpg?$product-page__zoom--2x$" alt="Mocha Long Sleeve Deep Plunge Bodysuit - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/4687_set/3/palm-leaf-drop-earrings.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/4687_set/1/palm-leaf-drop-earrings.jpg?$product-page__zoom--2x$';" class="img-responsive">
        </div>
        <button class="btn" data-toggle="modal" data-target="#myModal">leaf silver earings</button>
        <br>
        <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£10.00</a>
        </div> 
</div><br>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content this will pop up when the users click on the name of the item  -->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> accessories</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Quantity</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
              <label for="size">size</label>
    <select id="size" name="size">
      <option value="one">one size</option>
              </select>
      
          
              <button type="submit" class="btn btn-block">Add to your Basket
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
         </div>
            <!-- users are also given an option to cancel the selection or if they need any help they can press the help button that will take then to a php form  -->
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
           
           </div>
        
    
   
</footer>

</body>
</html>
