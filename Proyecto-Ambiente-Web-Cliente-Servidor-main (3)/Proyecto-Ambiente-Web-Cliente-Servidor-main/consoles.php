<?php include_once 'generales.php'; 

if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php headerSite(); ?>
</head>

<body>
    <?php headerSection(); ?>
    <ol class="breadcrumb">
                <li> <?php echo $_SESSION["sesionNombre"]; ?></li>
            </ol>
    <!-- banner section start -->
    <!-- product section start -->
    <div class="product_section layout_padding">
        <div class="container">
        
            <div class="product_text">Play <span style="color: #5ca0e9;">Station</span></div>
            <div class="product_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image_2"><img src="images/ps4.jpg"></div>
                        <div class="price_text">Price $ <span style="color: #3a3a38;">250</span></div>
                        <h1 class="game_text">Play Station 4</h1>
                        <p class="long_text">Consola 1T de memoria incluye juego a escoger</p>
                    </div>
                    <div class="col-md-6">
                        <div class="image_2"><img src="images/ps5-con.png"></div>
                        <div class="price_text">Price $ <span style="color: #3a3a38;">599</span></div>
                        <h1 class="game_text">Play Station 5</h1>
                        
                    </div>
                </div>
            </div>

        </div>


    </div>
    <div class="product_section layout_padding">
            <div class="container">
                <div class="product_text" style="color: #5ca0e9;">Xbox </span></div>
            
                <div class="product_section_2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image_2"><img src="images/xboxonex.jpg"></div>
                            <div class="price_text">Price $ <span style="color: #3a3a38;">200</span></div>
                            <h1 class="game_text">Xbox One X</h1>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="image_2"><img src="images/xboxones.jpg"></div>
                            <div class="price_text">Price $ <span style="color: #3a3a38;">300</span></div>
                            <h1 class="game_text">Xbox One S</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product_section layout_padding">
            <div class="container">
                <div class="product_text" style="color: #5ca0e9;">Nintendo </span></div>
               
                <div class="product_section_2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image_2"><img src="images/switch.jpg"></div>
                            <div class="price_text">Price $ <span style="color: #3a3a38;">200</span></div>
                            <h1 class="game_text">Nintendo Switch Oled</h1>
                           
                        </div>
                        <div class="col-md-6">
                            <div class="image_2"><img src="images/switchlite.jpg"></div>
                            <div class="price_text">Price $ <span style="color: #3a3a38;">300</span></div>
                            <h1 class="game_text">Nintendo Switch Lite</h1>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- footer section start -->
    <?php footerSection(); ?>
    <!-- footer section end -->
    <!-- copyright section start -->
    <?php copyRightSection() ?>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <?php jsSection() ?>
</body>

</php>