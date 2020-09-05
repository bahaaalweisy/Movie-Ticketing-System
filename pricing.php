<?php
    require_once "config.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pricing Page</title>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <style type="text/css">
        .container {
            margin-top: 100px;
        }

        .card {
            width: 300px;
        }

        .card:hover {
            -webkit-transform: scale(1.05);
            -moz-transform: scale(1.05);
            -ms-transform: scale(1.05);
            -o-transform: scale(1.05);
            transform: scale(1.05);
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        .list-group-item {
            border: 0px;
            padding: 5px;
        }

        .price {
            font-size: 72px;
        }

        .currency {
            position: relative;
            font-size: 25px;
            top: -31px;
        }
    </style>
     
   
   
   
   
    <!-- FOR PRELOADER PAGE -->
   
    <link href="css/main.css" rel="stylesheet">   	
    <link rel="stylesheet" href="css/normalize.css">
    
    
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>
<script type="text/javascript">






/* 
_____   _           _         _                        _                  
|_   _| | |         | |       | |                      | |                 
 | |   | |__   __ _| |_ ___  | |_ ___  _ __ ___   __ _| |_ ___   ___  ___ 
 | |   | '_ \ / _` | __/ _ \ | __/ _ \| '_ ` _ \ / _` | __/ _ \ / _ \/ __|
_| |_  | | | | (_| | ||  __/ | || (_) | | | | | | (_| | || (_) |  __/\__ \
\___/  |_| |_|\__,_|\__\___|  \__\___/|_| |_| |_|\__,_|\__\___/ \___||___/

Oh nice, welcome to the js file of dreams.
Enjoy responsibly!
@ihatetomatoes

*/

$(document).ready(function() {
	
	setTimeout(function(){
		$('body').addClass('loaded');
		$('div').removeClass('loaded');
	}, 4000);
	
});




</script>


</head>
<body>
<div class="container">
    
    
		<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>
         

    
    
    
    <?php
        $colNum = 1;
        foreach ($products as $productID => $attributes) {
            if ($colNum == 1)
                echo '<div class="row">';

            echo '
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2 class="price"><span class="currency">$</span>'.($attributes['price']/100).'</h2>
                        </div>
                        <div class="card-body text-center">
                            <div class="card-title">
                                <h2>'.$attributes['title'].'</h2>
                            </div>
                            <ul class="list-group">
                            ';

                            foreach($attributes['features'] as $feature)
                                echo '<li class="list-group-item">'.$feature.'</li>';

                           echo '
                            </ul>
                            <br>

                             <form action="stripeIPN.php?id='.$productID.'" method="POST">
                             <script
                              src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                              data-key="'.$stripeDetails['publishableKey'].'"
                              data-amount="'.$attributes['price'].'"
                              data-name="'.$attributes['title'].'"
                              data-description="Widget"
                              data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                             data-locale="auto">
                             </script>
                              </form>  





                        </div>
                    </div>
                </div>
            ';

            if ($colNum == 10) {
                echo '</div><br>';
                
                $colNum = 0;
            } else
                $colNum++;
        }
    ?>
</div>







</body>
</html>