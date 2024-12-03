<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/structure.css"/>
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    font-family: 'Arial', sans-serif;
    background-image: url(images/bg-homepage.png);
    color: #333;
  }
  
  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-image: url(images/bg-1.png);
    color: #fff;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 10;
  }
  
  .logo {
    font-size: 24px;
    font-weight: bold;
  }
  
  .nav-links {
    list-style: none;
    display: flex;
  }
  
  .nav-links li {
    margin: 0 15px;
  }

  .get {
    border: white;
    box-sizing: border-box;
    border-radius: 5px;
  }
  
  .nav-links a {
    border: #00b4d8;
    color: white;
    text-decoration: none;
    font-size: 18px;
    position: relative;
    padding: 5px 0;
    transition: color 0.3s ease;
  }

  .con {
    margin-inline: 10px;
  }
  
  .nav-links a::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #fff;
    visibility: hidden;
    transform: scaleX(0);
    transition: all 0.3s ease-in-out;
  }
  
  .nav-links a:hover::before {
    visibility: visible;
    transform: scaleX(1);
  }
  
  .nav-links a:hover {
    color: #00b4d8;
  }
  
  .burger {
    display: none;
    cursor: pointer;
    flex-direction: column;
    justify-content: space-between;
    height: 21px;
  }
  
  .burger div {
    width: 25px;
    height: 3px;
    background-color: white;
    transition: all 0.3s ease;
  }

  .section {
    padding: 100px;
    height: 100vh;
    text-align: center;
    font-weight: bold;
  }

  .svg {
    display: flex;
    justify-content: left;
    color: white;
    margin-right: 10px;
  }

  .str {
    color: white;
    display: flex;
    justify-content: left;
    margin-bottom: 10px;
  }

  .cards {
    margin-top: 30px;
    height: 0;
  }
  
  .card {
    background-image: url(images/menu.png);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    color: white;
    padding: 10px;
    height: 50px;
    width: 30%;
    margin: 10px;
    transition: transform 0.3s ease;
  }
  
  .card:hover {
    transform: translateY(-10px);
  }

  .visi {
    display: flex;
    justify-content: right;
    align-items: right;
    margin-left: 800px;
    width: 50vh;
    color: white;
  }

  .img {
    display: flex;
    justify-items: left;
    width: 120px;
    height: 80px;
  }

  .card-h3 {
    display: flex;
    justify-items: left;
    margin-top: 0;
    margin-bottom: 20px;
  }

  .card-svg {
    display: flex;
    margin-left: 180px;
  }

  .view {
    display: flex;
    justify-content: right;
    color: white;
  }

  .view:hover {
    color: rgb(32, 120, 179);
  }

  
  

</style>
<body>

<!-- NAVBAR START -->
<nav class="navbar">
    <div class="logo">SIMINFA</div>
    <ul class="nav-links">
      <li class="get"><a href="#">Get in Touch</a></li>
      <li><a href="#">
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
  <!-- NAVBAR END -->

  <!-- SECSION HEADER START -->
  <section id="home" class="section">
  <h4 class="str">
    <a class="svg" href="dashboard.php">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
  </svg> 
    </a>
    CLASS ARCHIVE</h4>
  <hr/>
  <div class="cards">
      <div class="card">
        <h3 class="card-h3">SEMESTER 1
        <svg class="card-svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
        </svg>
        </h3>
      </div>
      <div class="card">
        <h3 class="card-h3">SEMESTER 2
        <svg class="card-svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
        </svg>
        </h3>
      </div>
      <div class="card">
        <h3 class="card-h3">SEMESTER 3
        <svg class="card-svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
        </svg>
        </h3>
      </div>
      <div class="card">
        <h3 class="card-h3">SEMESTER 4
        <svg class="card-svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
        </svg>
        </h3>
      </div>
      <div class="card">
        <h3 class="card-h3">SEMESTER 5
        <svg class="card-svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
        </svg>
        </h3>
      </div>
      <div class="card">
        <h3 class="card-h3">SEMESTER 6
        <svg class="card-svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
        </svg>
        </h3>
      </div>
      <div class="card">
        <h3 class="card-h3">SEMESTER 7
        <svg class="card-svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
        </svg>
        </h3>
      </div>
      <div class="card">
        <h3 class="card-h3">SEMESTER 8
        <svg class="card-svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
        </svg>
        </h3>
      </div>
    </div>
  </section>
  <!-- SECTION HEADER END -->
</body>
</html>