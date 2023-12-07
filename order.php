<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- FOR SEO -->
    <!-- <meta property='og:title' content='Custom Notion-styled Avatar Icon'/>
    <meta property='og:image' content='./assets/images/link.jpg'/> 
    <meta property='og:description' content='DESCRIPTION OF YOUR SITE'/>
    <meta property='og:url' content='URL OF YOUR WEBSITE'/>
    <meta property='og:image:width' content='1200' />
    <meta property='og:image:height' content='627' />
    <meta property="og:type" content='website'/> -->

    <title>MAP</title>
    <link rel="icon" href="./images/favi.png">
    <link rel="stylesheet" href="css/bootstrap-5.1.3min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="./css/slick.css" />
    <link rel="stylesheet" type="text/css" href="./css/slick-theme.css" />
    <script src="./js/svg-pan-zoom.js"></script>
</head>
<!-- oncontextmenu="return false;" -->

<body>

    <!-- header -->
    <section class="siteHeader bg-theme-primary sticky-top py-1">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light py-0  ">

                    <a class="navbar-brand d-block d-lg-none" href="/">
                        <img width="100px" src="./images/logo.webp" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <iconify-icon icon="lucide:menu"></iconify-icon>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mx-auto navCustom">
                            <!-- "me-auto" for left align | "ms-auto" for right align | "mx-auto" for center align--->

                            <li class="nav-item">
                                <a class="nav-link" href="#">About </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Eat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Dring</a>
                            </li>
                            <li class="nav-item d-none d-lg-block">
                                <a class="navbar-brand mx-5" href="/">
                                    <img width="230px" src="./images/logo.webp" alt="">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Ice cream</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Order</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>

                </nav>

            </div>
        </div>

    </section>


 <section class="order mt-4">

    <div class="container">
        <div class="row col-lg-9 mx-auto">
            <div class="col-md-7">
                <div class="order-title">
                    FILL OUT THE FORM BELOW TO ORDER YOUR LUMINARIES  
                </div>
            </div>
            <div class="col-md-5 text-end">
                <a href="https://broken-inn.com/luminaries/" class="view-map">CLICK TO VIEW THIS YEARS MAP</a>
            </div>
        </div>
        <div class="row col-lg-9 mx-auto my-3">
            <div class="inner-order rounded-3">
               <form action="./mail.php" method="post">
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" placeholder="Name" name="name" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" placeholder="Address" name="address" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                    </div>
                    <div class="row text-white">
                        <div class="col-md-4"><div class="items mb-3"> I'm available to help with:</div> </div>
                        <div class="col-md-8 help">
                             <div class="items mb-2">
                            <input type="checkbox" name="foldingBags" value="Folding bags," id="folding"> 
                            <label for="folding">Folding bags</label>
                        </div> 
                        <div class="items mb-2">
                            <input type="checkbox" name="fillingBagWithSand" value="Filling bag with sand," id="bag-sand"> 
                            <label for="bag-sand">Filling bag with sand</label>
                        </div> 
                        <div class="items mb-2">
                            <input type="checkbox" name="delivery" value="Delivery" id="delivery"> 
                            <label for="delivery">Delivery</label>
                        </div> 
                        </div>
                    </div> 
                    <div class="row text-white mt-4">
                        <div class="col-md-6"> 
                            <p>Check number of Luminaries Needed:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="items mb-2">
                                        <label for="luminaries-20">20</label>
                                        <input type="radio" name="luminaries" value="20" id="luminaries-20"> 
                                        <span class="ms-3">Cost $14.00</span>
                                    </div>
                                    <div class="items mb-2">
                                        <label for="luminaries-30">30</label>
                                        <input type="radio" name="luminaries" value="30" id="luminaries-30"> 
                                        <span class="ms-3">Cost $20.00</span>
                                    </div>
                                    <div class="items mb-2">
                                        <label for="luminaries-40">40</label>
                                        <input type="radio" name="luminaries" value="40" id="luminaries-40"> 
                                        <span class="ms-3">Cost $24.00</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="items mb-2">
                                        <label for="luminaries-50">50</label>
                                        <input type="radio"name="luminaries" value="50" id="luminaries-50"> 
                                        <span class="ms-3">Cost $28.00</span>
                                    </div>
                                    <div class="items mb-2">
                                        <label for="luminaries-60">60</label>
                                        <input type="radio" name="luminaries" value="60" id="luminaries-60"> 
                                        <span class="ms-3">Cost $32.00</span>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <p class="text-center fs-3 my-4">
                            Please send payment via venmo to @BrokenInn 
                        </p>
                        <button type="submit" class="btn-submit mx-auto" >submit</button>
                    </div> 
               </form>
            </div>
            <h3 class="txt-primary text-center my-3 fs-3">DEADLINE - FRIDAY DECEMBER 15th!</h3>
        </div>
    </div>

 </section>


    <!-- <footer class="py-1 px-4 footer-bg">
        <div class="container">
            <div class="space-1">
                
                <div class="text-center">
                    <small class="mb-0 small text-light">© Niskaunity, All rights reserved 2023.</small>
                </div>
               
            </div>
        </div>
    </footer> -->
    <script src="js/bootstrap-5.bundle.min.js"></script>
    <script src="js/iconify.min.js"></script>
    <script src="js/app.js"></script>
    <script>
        // Don't use window.onLoad like this in production, because it can only listen to one function.
        window.onload = function () {
            panZoomInstance = svgPanZoom('#map-niskaunity', {
                zoomEnabled: true,
                controlIconsEnabled: true,
                fit: true,
                center: true,
            });
            // panZoomInstance.zoom(2);
        };

    </script>

</body>

</html>