<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continuous Text Slider</title>
    <style>
        /* Slider Container */
        .slider-container {
            width: 100%;
            overflow: hidden;
            position: relative;
            background-color: black;
        }

        /* Slider Track */
        .slider-track {
            display: flex;
            width: 4813px;
            animation: slide 30s linear infinite;
        }

        /* Individual Slide */
        .slide {
            width: 300px;
            flex-shrink: 0;
            position: relative;
            transition: transform 0.5s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: none; 
            border-radius: 10px;
            /* padding: 20px; */
            /* margin: 10px; */
        }

        /* Text inside each slide */
        .slide p {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            text-align: center;
            transition: transform 0.5s ease;
            color: #27d5de;
        }

        /* Pop-up effect on hover */
        .slide:hover p {
            transform: scale(1.2);
        }

        /* Continuous sliding animation */
        @keyframes slide {
            0% { transform: translateX(0); }
            100% { transform: translateX(-2406px); } /* Half of 4813px to ensure smooth looping */
        }
    </style>
</head>
<body>

<div class="slider-container">
        <div class="slider-track">
            <div class="slide">
                <p>3D Character Design</p>
            </div>
            <div class="slide">
                <p>3D Creature Design</p>
            </div>
            <div class="slide">
                <p>Realtime 3d hair</p>
            </div>
            <div class="slide">
                <p>3D Weapons</p>
            </div>
            <div class="slide">
                <p>3D Environments</p>
            </div>
            <div class="slide">
                <p>High-Poly to Low-Poly Modeling</p>
            </div>
            <div class="slide">
                <p>Game-Ready Assets</p>
            </div>
            <div class="slide">
                <p>Customized Art Styles</p>
            </div>
            <div class="slide">
                <p>Concept Art</p>
            </div>
        </div>
    </div>

</body>
</html>
