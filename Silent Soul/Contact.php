<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body.contact {
            font-family: Arial, sans-serif;
            background: url('img/contact_bg.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            margin: 0 auto;
            padding: 20px 0;
        }

        .contact-container,
        .map-container {
            width: 100%;
            padding: 40px;
            background-color: rgba(0, 0, 0, 0);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
        }

        .contact-form {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .form-group {
            width: 100%;
            flex: 1 1 48%;
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #ddd;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 8px; /* Reduced padding */
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 16px;
            outline: none;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            background-color: rgba(255, 255, 255, 0.4);
            border-color: #5cb85c;
        }

        button {
            padding: 15px 20px;
            width: 100%;
            max-width: 200px;
            margin-top: 10px;
            background-color: black;
            color: #fff;
            border: none;
            border-radius: 30px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #4a9c4a;
        }

        .message {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #fff;
        }

        .map-container iframe {
            width: 100%;
            height: 300px; /* Reduced height */
            border: none;
        }

        .inquiry-info {
            text-align: center;
            margin-bottom: 20px;
            font-size: 18px;
            color: #ddd;
            padding: 15px;
            background-color: rgba(0, 0, 0, 0.7);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .inquiry-info a {
            color: #5cb85c;
            text-decoration: none;
            font-weight: bold;
        }

        .inquiry-info a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .contact-form {
                flex-direction: column;
            }

            .form-group {
                width: 100%;
            }

            .contact-container,
            .map-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body class="contact">
<?php include 'header.php'; ?>

<div class="inquiry-info">
    For Business inquiries, please reach out to:<br>
    <a href="mailto:sriram@littleredzombies.com">Studiosilentsoul14@gmail.com</a>
</div>

<div class="container">
    <div class="contact-container">
        <?php
        // PHPMailer code here
        ?>
        <form action="" method="POST" class="contact-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="company">Company Name:</label>
                <input type="text" id="company" name="company" placeholder="Enter your company name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="contact_no">Contact No:</label>
                <input type="tel" id="contact_no" name="contact_no" placeholder="Enter your contact number" required>
            </div>
            <div class="form-group">
                <label for="purpose">Purpose:</label>
                <input type="text" id="purpose" name="purpose" placeholder="Enter purpose" required>
            </div>
            <div class="form-group">
                <label for="additional_notes">Additional Notes:</label>
                <textarea id="additional_notes" name="additional_notes" rows="5" placeholder="Enter additional notes" required></textarea>
            </div>
            <button type="submit">Send Message</button>
        </form>
    </div>

    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3562.1284058933545!2d80.91770957496167!3d26.860735064131687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd5049355555%3A0x7e2f04b511d6018a!2sLucknow%2C%20Uttar%20Pradesh%20226024!5e0!3m2!1sen!2sin!4v1696083894303!5m2!1sen!2sin" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
