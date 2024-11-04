<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continuous Image Slider with Slick</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <style>
        /* Style for main image slider */
        .slider-for {
            width: 50%; /* Adjust the width */
            margin: 0 auto;
            position: relative; /* Set position for z-index */
            z-index: 1; /* Bring this slider to the front */
        }

        .slider-for img {
            width: 100%; /* Full width */
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Style for navigation slider (thumbnails) */
        .slider-nav {
            width: 80%; /* Adjust width */
            margin: -250px auto 20px; /* Increase negative margin to pull it further upwards */
            position: relative; /* Set position for z-index */
            z-index: 0; /* Send this slider to the back */
        }

        .slider-nav img {
            width: 90%; /* Full width thumbnails */
            height: 180px;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .slider-text {
            position: absolute;
            bottom: 20px; /* You can adjust this to change the vertical position */
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 24px;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            z-index: 1; /* Ensures text stays above the image */
        }

        /* Style for Slick dots */
        .slick-dots li button:before {
            font-size: 12px;
            color: #ccc;
        }

        .slick-dots li.slick-active button:before {
            color: black;
        }

        /* Style for Slick arrows */
        .slick-prev:before,
        .slick-next:before {
            color: black;
            font-size: 30px;
        }
    </style>
</head>
<body>

    <div class="slider-for">
        <div><img src="img/Lion_01.jpg" alt="Slide 1">
        <div class="slider-text">This is Slide 1</div></div>
        <div><img src="img/Baby_Monster_02_01.jpg" alt="Slide 2"></div>
        <div><img src="img/Baby_Monster_03.jpg" alt="Slide 3"></div>
        <div><img src="img/Sword.jpg" alt="Slide 4"></div>
        <div><img src="img/Baby_Monster_01.jpg" alt="Slide 5"></div>
    </div>

    <div class="slider-nav">
        <div><img src="img/Lion_01.jpg" alt="Thumbnail 1"></div>
        <div><img src="img/Baby_Monster_02_01.jpg" alt="Thumbnail 2"></div>
        <div><img src="img/Baby_Monster_03.jpg" alt="Thumbnail 3"></div>
        <div><img src="img/Sword.jpg" alt="Thumbnail 4"></div>
        <div><img src="img/Baby_Monster_01.jpg" alt="Thumbnail 5"></div>
    </div>

    <!-- Slick Slider JS -->
    <script>
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: true,
            centerMode: true,
            focusOnSelect: true,
            autoplay:true
        });
    </script>

</body>
</html>