<?php 
    session_start();

if(isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('location: login.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome-SIMINFA</title>
    <link rel="icon" href="images/ICON_SEMINFA.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
</head>
<body>

<nav class="navbar">
    <div class="logo">SIMINFA</div>
    <ul class="nav-links">
      <li><a href="#home">About Us</a></li>
      <li><a href="#information">Information</a></li>
      <li>
      <a href="#">
          <svg class="con" href="#" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901"/>
          </svg>
         </a>
         <a href="#">
          <svg class"con" href="#" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
          </svg>
         </a>
      </li>
    </ul>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>

  <!-- Card start -->
  <section id="home" class="section">
  <div class="cards">
      <div class="card">
        <img class="img" src="images/structure.png"/>
        <h3 class="card-h3">CLASS STRUCTURE</h3>
        <a class="view" href="structure.php">view.</a>
      </div>
      <div class="card">
        <img class="img" src="images/schedule.png"/>
        <h3 class="card-h3">CLASS SCHEDULE</h3>
        <a class="view" href="schedule.php">view.</a>
      </div>
      <div class="card">
        <img class="img" src="images/archive.png"/>
        <h3 class="card-h3">CLASS ARCHIVE</h3>
        <a class="view" href="archive.php">view.</a>
      </div>
    </div>
  </section>
  <!-- Card END -->

  <section id="information" class="section">
    <div class="info">
        <h1>UPDATED INFORMATION</h1>
    </div>
    <p class="see">
        <a class="see-more" href="#">see more information ></a>
    </p>
    <div class="informasi">
        <div class="info1">
            <h4>INFO SATU</h4>
            <p class="ppp">
            <a class="ppp-see" href="">See More detail ></a>
            </p>
            
        </div>
        <div class="info1">
            <h4>INFO DUA</h4>
        </div>
        <div class="info1">
        <h4>INFO TIGA</h4>
            </div>
        <div class="info1">
            <h4>INFO EMPAT</h4>
        </div>
    </div>
  </section>



    

    <footer>
        <hr />
        <p>© 2024 SIMINFA.</p>
            <form action="dashboard.php" method="POST">
                <button type="submit" name="logout">LOGOUT</button>
            </form>
    </footer>
<script src="script.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
</body>
</html>