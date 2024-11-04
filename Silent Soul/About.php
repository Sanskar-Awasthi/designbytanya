<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #121212;
            margin: 0;
            padding: 0;
            color: #e0e0e0;
            overflow-x: hidden;
            scroll-behavior: smooth; /* Smooth scrolling */
            
        }

        .about-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 5%;
        }

        .section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px 0;
            position: relative;
        }

        .section:nth-child(even) {
            flex-direction: row-reverse; /* Flip content for even sections */
        }

        .section img {
            width: 100%;
            max-width: 500px;
            height: auto;
            border-radius: 12px;
            transition: transform 0.4s ease-in-out, box-shadow 0.4s;
            loading: lazy; /* Lazy loading */
        }

        .section img:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.6);
        }

        .content {
            flex: 1;
            max-width: 600px;
            padding: 0 30px;
            position: relative;
        }

        .content h2 {
            font-size: 2.5em;
            color: #27d5de;
            margin-bottom: 20px;
            position: relative;
        }

        /* .content h2::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            height: 4px;
            width: 60px;
            background-color: #3498db;
        } */

        .content p {
            font-size: 1.2em;
            line-height: 1.8;
            margin-bottom: 20px;
            animation: fadeInUp 1.2s ease-out;
            color: white;
        }

        @keyframes fadeInUp {
            0% {
                transform: translateY(30px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .values-container {
            background-color: #1c1c1c;
            padding: 50px;
            margin-top: 50px;
            opacity: 0;
            transform: translateY(100px);
            transition: opacity 1.2s ease-in-out, transform 1.2s ease-in-out;
        }

        .values-container.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .values-container h3 {
            font-size: 2.5em;
            color: #f1c40f;
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }

        .values-container h3::after {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -10px;
            height: 4px;
            width: 80px;
            background-color: #3498db;
        }

        .values-content {
            display: flex;
            justify-content: space-between;
            max-width: 1000px;
            margin: 0 auto;
            flex-wrap: wrap;
        }

        .values-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
            flex: 1;
            margin: 10px;
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.8s ease-in-out, transform 0.8s ease-in-out;
        }

        .values-list.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .values-list li {
            font-size: 1.3em;
            margin-bottom: 15px;
            cursor: pointer;
            background-color: #2c2c2c;
            padding: 20px;
            border: 1px solid #555;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease-in-out, background-color 0.3s;
            position: relative;
            padding-right: 40px;
        }

        .values-list li:hover {
            transform: translateY(-10px);
            background-color: #333;
        }

        .arrow {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            width: 0;
            height: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-top: 10px solid #f1c40f;
            transition: transform 0.3s;
        }

        .values-list li:hover .arrow {
            transform: translateY(-50%) rotate(90deg);
        }

        .content-area {
            margin-top: 30px;
            padding: 20px;
            background-color: #333;
            border-radius: 8px;
            display: none;
            opacity: 0;
            transition: all 0.6s ease-in-out;
        }

        .content-area.active {
            display: block;
            opacity: 1;
        }

        /* Progress Bars */
        .progress-container {
            width: 100%;
            background-color: #444;
            border-radius: 8px;
            overflow: hidden;
            margin-top: 15px;
        }

        .progress {
            height: 20px;
            background-color: #f1c40f;
            width: 0;
            transition: width 1s ease;
        }

        /* Icon styles */
        .values-list li::before {
            content: '';
            display: inline-block;
            width: 24px;
            height: 24px;
            margin-right: 10px;
            background: url('img/icon.png') no-repeat center center; /* Replace with your icon */
            background-size: contain;
        }

        @media (max-width: 768px) {
            .section {
                flex-direction: column;
                text-align: center;
            }

            .section:nth-child(even) {
                flex-direction: column;
            }

            .section img {
                margin-bottom: 20px;
            }

            .content {
                padding: 0;
            }

            .values-content {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body class="about">
    <?php include 'header.php'; ?>

    <div class="about-container">

        <!-- 1st Section (Image Left, Content Right) -->
        <div class="section">
            <img src="img/about_us_9.jpg" alt="About Image 1">
            <div class="content">
                <h2>Our Journey</h2>
                <p>
                    Silent Soul Studios is a trailblazer in 3D art production for the gaming industry, renowned for exceptional quality, cost-efficiency, and timely delivery. 
                </p>
                <p>
                    We've grown from a small passionate team to a global leader in creating high-quality characters, props, and environments for games across different genres.
                </p>
            </div>
        </div>

        <!-- 2nd Section (Image Right, Content Left) -->
        <div class="section">
            <img src="img/about_us_2.jpg" alt="About Image 2">
            <div class="content">
                <h2>Our Expertise</h2>
                <p>
                    Our expertise spans a wide range of 3D art forms, including character creation, environment design, and more. Each piece is crafted to elevate gameplay experiences and engage players.
                </p>
                <p>
                    We are driven by a commitment to both creativity and precision, ensuring that every detail enhances the final product.
                </p>
            </div>
        </div>

        <!-- 3rd Section (Image Left, Content Right) -->
        <div class="section">
            <img src="img/about_us_1.jpg" alt="About Image 3">
            <div class="content">
                <h2>Our Vision</h2>
                <p>
                    Our vision is to reshape the gaming landscape with breathtaking visuals and captivating gameplay experiences. 
                </p>
                <p>
                    We believe in the power of storytelling through art, where every game we touch becomes a canvas for creativity.
                </p>
            </div>
        </div>

        <!-- Values Section -->
        <div class="values-container" id="valuesSection">
            <h3>Our Values</h3>
            <div class="values-content">
                <ul class="values-list" id="valuesList1">
                    <li onclick="showContent('value1')">
                        Crafting Worlds, Elevating Games
                        <div class="arrow"></div>
                    </li>
                    <li onclick="showContent('value2')">
                        Art That Speaks, Quality That Delivers
                        <div class="arrow"></div>
                    </li>
                    <li onclick="showContent('value3')">
                        Innovation in Every Pixel
                        <div class="arrow"></div>
                    </li>
                </ul>
                <ul class="values-list" id="valuesList2">
                    <li onclick="showContent('value4')">
                        Your Vision, Our Expertise
                        <div class="arrow"></div>
                    </li>
                    <li onclick="showContent('value5')">
                        Respect and Integrity
                        <div class="arrow"></div>
                    </li>
                    <li onclick="showContent('value6')">
                        Teamwork and Collaboration
                        <div class="arrow"></div>
                    </li>
                </ul>
            </div>
            <div class="content-area" id="contentArea">
                <h3 id="contentTitle"></h3>
                <p id="contentText"></p>
                <div class="progress-container">
                    <div class="progress" id="progressBar" style="width: 100%;"></div> <!-- Progress bar example -->
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script>
        // JavaScript for showing the values content
        const content = {
            value1: {
                title: 'Crafting Worlds, Elevating Games',
                text: 'At Silent Soul Studios, we push creative boundaries in game art production, transforming worlds with innovative and impactful design.'
            },
            value2: {
                title: 'Art That Speaks, Quality That Delivers',
                text: 'Our priority is to deliver high-quality art that resonates with players while ensuring timely completion and client satisfaction.'
            },
            value3: {
                title: 'Innovation in Every Pixel',
                text: 'We are committed to bringing cutting-edge techniques and out-of-the-box ideas to life, ensuring our art stays ahead of industry trends.'
            },
            value4: {
                title: 'Your Vision, Our Expertise',
                text: 'We collaborate closely with clients to translate their ideas into stunning visuals that enhance the gaming experience.'
            },
            value5: {
                title: 'Respect and Integrity',
                text: 'We value respect and transparency in all our interactions, creating a healthy and positive work environment.'
            },
            value6: {
                title: 'Teamwork and Collaboration',
                text: 'We believe in the power of teamwork, fostering an environment where collaboration leads to the best creative outcomes.'
            }
        };

        function showContent(valueKey) {
            const contentArea = document.getElementById('contentArea');
            const contentTitle = document.getElementById('contentTitle');
            const contentText = document.getElementById('contentText');
            const progressBar = document.getElementById('progressBar');

            contentTitle.innerText = content[valueKey].title;
            contentText.innerText = content[valueKey].text;

            contentArea.classList.add('active');
            progressBar.style.width = '100%'; // Example of progress bar animation
        }

        // Scroll-triggered animations
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    document.getElementById('valuesSection').classList.add('visible');
                    document.getElementById('valuesList1').classList.add('visible');
                    document.getElementById('valuesList2').classList.add('visible');
                }
            });
        });

        observer.observe(document.getElementById('valuesSection'));
    </script>
</body>
</html>
