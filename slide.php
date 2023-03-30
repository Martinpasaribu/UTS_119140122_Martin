<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Slick Banner</title>


    <link rel="stylesheet" type="text/css" href="gaya/css/style1.css"/>
    <link rel="stylesheet" type="text/css" href="gaya/css/style2.css"/>


	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/> -->

    <!-- Our CSS -->
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background: #dedede;
        }

        .containerr {
            max-width: 900px;
            padding: 15px;
            background-color: #fff;
            margin-left: auto;
            margin-right: auto;
        }

        .slider .slick-slide {
            border: solid 1px #000;
        }

        .slider .slick-slide img {
            width: 100%;
        }

        /* make button larger and change their positions */
        .slick-prev, .slick-next {
            width: 50px;
            height: 50px;
            z-index: 1;
        }
        .slick-prev {
            left: 5px;
        }
        .slick-next {
            right: 5px;
        }
        .slick-prev:before, 
        .slick-next:before {
            font-size: 40px;
            text-shadow: 0 0 10px rgba(0,0,0,0.5);
        }
        
        /* move dotted nav position */
        .slick-dots {
            bottom: 15px;
        }
        /* enlarge dots and change their colors */
        .slick-dots li button:before {
            font-size: 12px;
            color: #fff;
            text-shadow: 0 0 10px rgba(0,0,0,0.5);
            opacity: 1;
        }
        .slick-dots li.slick-active button:before {
            color: #dedede;
        }

        /* hide dots and arrow buttons when slider is not hovered */
        .slider:not(:hover) .slick-arrow,
        .slider:not(:hover) .slick-dots {
            opacity: 0;
        }
        /* transition effects for opacity */
        .slick-arrow,
        .slick-dots {
            transition: opacity 0.5s ease-out;
        }

    </style>
</head>
<body>
    <div class="containerr">
        <h1>Slick Slider</h1>
        <p>
            Hello. Look at beautiful laptops below!
        </p>
        <div class="slider">
            <div>
                <a href="#">
                    <img src="img2/bryan-pelayo-GD_ETGamDTs-unsplash.jpg" alt="Image 1">
                </a>            
            </div>
            <div>
                <a href="#">
                    <img src="img2/unsplash-NuFUbftUu_s-unsplash.jpg" alt="Image 2">
                </a>
            </div>
            <div>
                <a href="#">
                    <img src="img2/microsoft-edge-LXjbmtqn6lg-unsplash.jpg" alt="Image 3">
                </a>            
            </div>
            <div>
                <a href="#">
                    <img src="img2/windows-C6T6vr1sQI0-unsplash.jpg" alt="Image 4">
                </a>
            </div>
            <div>
                <a href="#">
                    <img src="img2/xps-yNvVnPcurD8-unsplash.jpg" alt="Image 5">
                </a>            
            </div>
        </div>
    </div>
        

    
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Slick JS -->    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Our Script -->
    <script>
        $(document).ready(function(){
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 2500,
                dots: true
            });
        });
    </script>

</body>
</html>

