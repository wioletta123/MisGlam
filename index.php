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
      background-color:rgb(255, 191, 198);
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
     /* text for the name of items  */ 
    container text-center{
    width: 320px;
    padding: 10px;
    border: 5px solid gray;
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
        <li class="active"><a href="http://localhost/newwebsite/index.php">DRESSES</a></li>
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
  
    <!-- text explining the style of the dresses  -->
<div class="container text-center">    
  <h3>DRESSESS</h3><br>
    <p>the easy go-to piece and must-have wardrobe essential. This season it's all about the key fabrics, from on-trend faux suede, figure hugging slinky styles and luxe lace. From feminine and floaty, structured and fierce, sexy cut out styles, body conscious silhouettes and luxe evening wear pieces; our expansive collection of dresses has a style to suit any occasion or event. Whether you need maxi or mini, for party or day, we've got you covered. Team the perfect dress with strappy heels or chunky ankle boots and be sure to pile on the accessories to finish off any look to perfection.</p>
    
    <!-- images of the items that are being sold with their name that are links to a pop up that allows costumers to select the amount they want to purchase this will then safe to their basket -->
    <div class="row">
    <div class="col-sm-4">
    <img src="otherpic/1st%20front.jpg" alt="White Bandage Cropped Top with Front Cross Strap Detailing - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/DD914524_set/4/black-polka-dot-ruffle-tea-dress.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/DD914524_set/1/black-polka-dot-ruffle-tea-dress.jpg?$product-page__zoom--2x$';" class="img-responsive">
   
        
        
   <button class="btn" data-toggle="modal" data-target="#myModal">black polka dress </button> <br>
        <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£15.00</a>

        </div>
        
        
<div class="col-sm-4">
<img src="https://media.missguided.com/s/missguided/DD915428_set/1/pink-wrap-front-polka-dot-cami-dress.jpg?$product-page__zoom--2x$" alt="Stone Full Length Sleeve Bodysuit with Scoop Neck - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/DD915428_set/4/pink-wrap-front-polka-dot-cami-dress.jpg?$product-page__main--3x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/DD915428_set/1/pink-wrap-front-polka-dot-cami-dress.jpg?$product-page__zoom--2x$';" class="img-responsive">
      
        <button class="btn" data-toggle="modal" data-target="#myModal"> pink polka dot dress </button> <br>
         <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£28.00</a>
        </div>
        <div class="col-sm-4">
      <img src="https://media.missguided.com/s/missguided/DE923483_set/3/black-strappy-embroidered-midi-dress.jpg?$product-page__zoom--2x$" alt="803-camel-casual-wear-thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/DE923483_set/2/black-strappy-embroidered-midi-dress.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/DE923483_set/3/black-strappy-embroidered-midi-dress.jpg?$product-page__zoom--2x$';" class="img-responsive">
           
            <button class="btn" data-toggle="modal" data-target="#myModal">long black dress</button> <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£25.00</a>
        </div>
    </div>
        <div class="col-sm-4">
        <img src="https://media.missguided.com/s/missguided/DD915621_set/1/white-rugby-colourblock-shirt-dress.jpg?$product-page__zoom--2x$" alt="Black Bandage Crop Top with Cut Out Bust and Strap Detail - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/DD915621_set/4/white-rugby-colourblock-shirt-dress.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/DD915621_set/1/white-rugby-colourblock-shirt-dress.jpg?$product-page__zoom--2x$';" class="img-responsive">
            
               <button class="btn" data-toggle="modal" data-target="#myModal">shirt dress </button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£15.00</a>
        </div>
        <div class="col-sm-4">
           <img src="https://media.missguided.com/s/missguided/DD914986_set/1/white-floral-bardot-frill-skater-dress.jpg?$product-page__zoom--2x$" alt="Bandage Crop top with cut out bust and gold button detail - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/DD914986_set/4/white-floral-bardot-frill-skater-dress.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/DD914986_set/1/white-floral-bardot-frill-skater-dress.jpg?$product-page__zoom--2x$';" class="img-responsive">
       
            <button class="btn" data-toggle="modal" data-target="#myModal">off shoulder dress </button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£25.00</a>
        </div>
        <div class="col-sm-4">
       <img src="https://media.missguided.com/s/missguided/DE923445_set/1/khaki-bandeau-bandage-midi-dress.jpg?$product-page__zoom--2x$" alt="Long sleeve double layered crop top - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/DE923445_set/2/khaki-bandeau-bandage-midi-dress.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/DE923445_set/1/khaki-bandeau-bandage-midi-dress.jpg?$product-page__zoom--2x$';" class="img-responsive">
            
            <button class="btn" data-toggle="modal" data-target="#myModal">midi khaki dress </button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£26.00</a>
        </div>
        <div class="col-sm-4">
        <img src="https://media.missguided.com/s/missguided/DE923498_set/1/khaki-satin-cowl-maxi-dress.jpg?$product-page__zoom--2x$" alt="Wrap around light khaki top - thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/DE923498_set/2/khaki-satin-cowl-maxi-dress.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/DE923498_set/1/khaki-satin-cowl-maxi-dress.jpg?$product-page__zoom--2x$';" class="img-responsive">
           
             <button class="btn" data-toggle="modal" data-target="#myModal">long prom dress</button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£15.00</a>
        </div>
        <div class="col-sm-4">
      <img src="https://media.missguided.com/s/missguided/DE922913_set/1/nude-embroidered-lace-long-sleeve-maxi-dress.jpg?$product-page__zoom--2x$" alt="make-the-cut-serenity-blue-crop-thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/DE922913_set/2/nude-embroidered-lace-long-sleeve-maxi-dress.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/DE922913_set/1/nude-embroidered-lace-long-sleeve-maxi-dress.jpg?$product-page__zoom--2x$';" class="img-responsive">
           
            <button class="btn" data-toggle="modal" data-target="#myModal">floral white dress</button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£25.00</a>
        </div>
        <div class="col-sm-4">
       <img src="https://media.missguided.com/s/missguided/SBDE907558_set/1/white-lace-overlay-mini-dress.jpg?$product-page__zoom--2x$" alt="womens-busty--white-cut-out-crop-top-thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/SBDE907558_set/4/white-lace-overlay-mini-dress.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/SBDE907558_set/1/white-lace-overlay-mini-dress.jpg?$product-page__zoom--2x$';" class="img-responsive">
        <button class="btn" data-toggle="modal" data-target="#myModal">white lacey dress</button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£20.00</a>
        </div>
        <div class="col-sm-4">
  <img src="https://media.missguided.com/s/missguided/DD914661_set/1/yellow-gingham-tie-front-mini-dress.jpg?$product-page__zoom--2x$" alt="Black Cut Out Bandage Bodysuit - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/DD914661_set/3/yellow-gingham-tie-front-mini-dress.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/DD914661_set/1/yellow-gingham-tie-front-mini-dress.jpg?$product-page__zoom--2x$';" class="img-responsive">
            
            <button class="btn" data-toggle="modal" data-target="#myModal">yellow checked dress</button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£25.00</a>
        </div>
        <div class="col-sm-4">
       <img src="https://media.missguided.com/s/missguided/DD915817_set/1/white-lace-up-front-mini-dress.jpg?$product-page__zoom--2x$" alt="Gold Halter Neck Glitter Embellished Bodysuit - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/DD915817_set/4/white-lace-up-front-mini-dress.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/DD915817_set/1/white-lace-up-front-mini-dress.jpg?$product-page__zoom--2x$';" class="img-responsive">
           
            <button class="btn" data-toggle="modal" data-target="#myModal">white and black polka dot dress</button>
            <br>
            <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£20.00</a>
        </div>
        <div class="col-sm-4">
       <img src="https://media.missguided.com/s/missguided/DD909855_set/1/blue-stud-popper-detail-bardot-bodycon-dress.jpg?$product-page__zoom--2x$" alt="Mocha Long Sleeve Deep Plunge Bodysuit - Thumbnail" onmouseover="this.src='https://media.missguided.com/s/missguided/DD909855_set/4/blue-stud-popper-detail-bardot-bodycon-dress.jpg?$product-page__zoom--2x$';" onmouseout="this.src='https://media.missguided.com/s/missguided/DD909855_set/1/blue-stud-popper-detail-bardot-bodycon-dress.jpg?$product-page__zoom--2x$';" class="img-responsive">
        </div>
        <button class="btn" data-toggle="modal" data-target="#myModal">off shoulder blue dress</button>
        <br>
        <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">£18.00</a>
        </div> 
</div><br>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
        
    <!-- this will pop up when somone clicks on the name of the item it allows users to choose the size and the amount they want to purchase -->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> DRESSES</h4>
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
