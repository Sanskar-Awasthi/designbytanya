<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"> <!-- Link to your custom stylesheet -->
</head>
<body class="home">
<?php include 'header.php'; ?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <?php 
    // Fetch the result set from the database
    $result = mysqli_query($con, "SELECT * FROM slider"); // Adjust your query as necessary
    $totalSlides = mysqli_num_rows($result);
    
    for ($i = 0; $i < $totalSlides; $i++) {
        echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="' . $i . '" class="' . ($i === 0 ? 'active' : '') . '" aria-current="' . ($i === 0 ? 'true' : 'false') . '" aria-label="Slide ' . ($i + 1) . '"></button>';
    }
    ?>
  </div>
  
  <div class="carousel-inner">
    <?php 
    $active = true;
    // Reset pointer to the beginning of the result set
    mysqli_data_seek($result, 0);
    
    while ($row = mysqli_fetch_assoc($result)) {
        $desktop_view_image = $row['desktop_view_image'];
        $mobile_view_image = $row['mobile_view_image'];
        $title = $row['title'];
        $text = $row['text'];
    ?>
        <div class="carousel-item <?php if ($active) { echo 'active'; $active = false; } ?>">
          <img src="<?php echo $desktop_view_image; ?>" class="d-block w-100 d-none d-md-block">
          <img src="<?php echo $mobile_view_image; ?>" class="d-block w-100 d-md-none">
          
          <div class="carousel-caption d-none d-md-flex">
            <h6><?php echo $title; ?></h6>
            <p><?php echo $text; ?></p>
          </div>
        </div>
    <?php } ?>
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section>
    <div class="container text-center mt-5">
        <h2>Who Are We</h2>
        <p>
            We are a passionate team dedicated to delivering exceptional service and quality products.
            Our mission is to make a positive impact in our community and provide value to our customers
            through innovative solutions and outstanding support.*Silent Soul Studios* was founded with a bold vision: to turn imaginative concepts into stunning reality. Our journey is fueled by a passion for art, driven by a fearless pursuit of creativity, and guided by a commitment to pushing boundaries. We embrace challenges, knowing that every step, whether in success or failure, shapes us into something extraordinary—like a diamond forged from raw beginnings.

Emerging as a leader in game art production, we take pride in crafting immersive worlds. Collaboration, creativity, and quality are at the heart of what we do. We thrive on challenges, delivering exceptional art within deadlines, all while maintaining a cost-effective approach. Whether you're seeking a creative partner or a game-changing solution, Silent Soul Studios is ready to bring your vision to life.
        </p>
        <a href="about.php" class="know-more btn btn-primary">Know More</a>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<?php include 'home.php'; ?>
<?php include 'footer.php'; ?>

<!-- Custom CSS for Carousel -->
<style>
  /* Center the text both horizontally and vertically */
  .carousel-caption {
      position: absolute;
      top: 65%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      z-index: 1;
      color: white;
      /* background-color: rgba(0, 0, 0, 0.5); Semi-transparent background for better readability */
      padding: 20px;
      border-radius: 10px;
  }

  /* Style for h1 in the carousel */
  .carousel-caption h6 {
      font-size: 2.5rem;
      /* font-weight: bold; */
      /* text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); */
  }

  /* Style for p in the carousel */

  /* Media query for smaller screens */
  @media (max-width: 768px) {
      .carousel-caption {
          top: 60%; /* Adjust position for smaller screens */
          transform: translate(-50%, -50%);
      }

      .carousel-caption h1 {
          font-size: 2rem;
      }

  }


  section {
    padding: 0px 0; /* Add padding for spacing */
}

section h2 {
    margin-bottom: 50px; /* Space between title and text */
}

section p {
    /* max-width: 600px; Limit width of text for better readability */
    margin: 0 auto; /* Center the text block */
}

</style>

<!-- Commented out original styles -->
<!-- 
<style>
  #carouselExampleCaptions {
      height: 100vh; /* Full viewport height */
      position: absolute;
  }

  .carousel-item {
      height: 100vh; /* Full viewport height */
  }

  .carousel-item img {
      height: 100%;
      width: 100%;
      object-fit: cover; /* Ensure image scales without distorting aspect ratio */
  }

  .carousel-caption {
      position: absolute;
      bottom: 20%;
      left: 50%;
      transform: translate(-50%, 0);
      text-align: center;
      z-index: 1; /* Ensure it appears above the images */
      color: white; /* You can change this if needed */
      background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background for better readability */
      padding: 20px; /* Adjust padding as necessary */
      border-radius: 10px; /* Optional: rounded corners */
  }

  .carousel-indicators {
      bottom: 10px; /* Adjust the position of indicators */
      z-index: 15;
  }

  .carousel-indicators button {
      background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent dot */
      border-radius: 50%; /* Make it a circle */
  }

  .carousel-indicators .active {
      background-color: rgba(255, 255, 255, 1); /* Fully white for active dot */
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
      background-image: none; /* Disable default icons */
      border: none; /* Remove border */
  }

  .carousel-control-prev-icon::before,
  .carousel-control-next-icon::before {
      content: '';
      display: inline-block;
      width: 20px;
      height: 20px;
      border-top: 2px solid white;
      border-right: 2px solid white;
  }

  .carousel-control-prev-icon::before {
      transform: rotate(-135deg); /* Left arrow */
  }

  .carousel-control-next-icon::before {
      transform: rotate(45deg); /* Right arrow */
  }

  .carousel-control-prev:hover,
  .carousel-control-next:hover {
      background-color: rgba(0, 0, 0, 0.5); /* Darken background on hover */
      border-radius: 50%; /* Round the corners */
  }

  @media (max-width: 768px) {
      .carousel-caption {
          bottom: 15%; /* Adjust caption position */
      }
  }
</style>
-->
</body>
</html>
