<?php
$server="localhost";
$username="root";
$password="";

$con= mysqli_connect($server,$username,$password);
if(!$con){
    die("connection failed due to ".mysqli_connect_error());
}

$name=$_POST['name'];
$address=$_POST['Address'];
$contact=$_POST['contact'];
$passport=$_POST['passport'];
$sql="INSERT INTO `flight`.`register` (`Name`, `Address`, `Contact`, `Passport`) VALUES ('$name', '$address', '$contact', '$passport');";
if(($con->query($sql))==true){ 
}
else{
  echo "error : $sql <br> $con->error";
}
header('location:main.html');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid ">
      <a class="navbar-brand bg-dark" href="#"><img src="img/vacation-01.jpg" alt="" srcset="" height="40px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.html">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="booking.html">Book Flight</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search for Location" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container">
    <h2>$ Most Searched Places to visit</h2>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/mumbai.jpg" class="d-block" alt="...">
          <div class="carousel-caption d-none d-md-block font-weight-bold">
            <h5>Mumbai</h5>
            <p>Mumbai (formerly called Bombay) is a densely populated city on India’s west coast. A financial center,
              it's India's largest city. On the Mumbai Harbour waterfront stands the iconic Gateway of India stone arch,
              built by the British Raj in 1924. Offshore, nearby Elephanta Island holds ancient cave temples dedicated
              to the Hindu god Shiva. The city's also famous as the heart of the Bollywood film industry.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/manali.jpg" class="d-block" alt="...">
          <div class="carousel-caption d-none d-md-block font-weight-bold">
            <h5>Manali</h5>
            <p>
              Manali is a high-altitude Himalayan resort town in India's northern Himachal Pradesh state. It has a
              reputation as a backpacking center and honeymoon destination. Set on the Beas River, it`s a gateway for
              skiing in the Solang Valley and trekking in Parvati Valley. It's also a jumping-off point for paragliding,
              rafting and mountaineering in the Pir Panjal mountains, home to 4,000m-high Rohtang Pass.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/kanyakumari.jpg" class="d-block" alt="...">
          <div class="carousel-caption d-none d-md-block font-weight-bold">
            <h5 class="text-dark">Kanyakumari</h5>
            <p>Kanyakumari is a coastal town in the state of Tamil Nadu on India's southern tip. Jutting into the
              Laccadive Sea, the town was known as Cape Comorin during British rule and is popular for watching sunrise
              and sunset over the ocean. It's also a noted pilgrimage site thanks to its Bagavathi Amman Temple,
              dedicated to a consort of Shiva, and its Our Lady of Ransom Church, a center of Indian Catholicism.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <h2>Peoples Favourite:-</h2>
  </div><div id="cards">

    <div class="card">
      <img src="img/kanyakumari.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Kanyakumari</h5>
      <a href="booking.html" class="btn btn-primary">Book_Ticket</a>
    </div>
  </div>
  <div class="card">
    <img src="img/manali.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Manali</h5>

      <a href="booking.html" class="btn btn-primary">Book_Ticket</a>
    </div>
  </div>
  <div class="card">
    <img src="img/andaman.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Andaman</h5>
      <p class="card-text">
        <a href="booking.html" class="btn btn-primary">Book_Ticket</a>
      </div>
    </div>
    <div class="card">
      <img src="img/kashmir.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title">Kashmir</h5>
      <p class="card-text">
        <a href="booking.html" class="btn btn-primary">Book_Ticket</a>
      </div>
    </div>
    <div class="card">
      <img src="img/nicobar.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nicobar</h5>
        <p class="card-text">
        <a href="booking.html" class="btn btn-primary">Book_Ticket</a>
      </div>
    </div>
    <div class="card">
      <img src="img/ladakh.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Ladakh</h5>
      <p class="card-text">
        <a href="booking.html" class="btn btn-primary">Book_Ticket</a>
      </div>
    </div>
  </div>
  <div class="about">
            <h3>
                About us:
            </h3>
            <p class="info">
                Cleartrip.com is centered on making travel simple and has been designed to let you look for cheap flights or complete your flight booking in just a few clicks. The booking experience is seamless and fast with our features like Expressway – which allows for easy checkout, Shortlist – this lets you compare multiple itineraries across dates, Fare alert – here we inform you of price drops or hikes, and even EMI options for expensive air tickets. Our round-the-clock customer service ensures all your queries and concerns are addressed efficiently and resolved
            </p>
            <h3>
                Why us:
            </h3>
            <p class="info">
                Flight ticket booking or planning your travel is made simpler with our round trip and multicity options. When you hit enter, your search list page shows the results for both onward and return in a split screen format letting you choose flights in one go for a round trip. The multicity search page shows a list of complete itineraries that removes the hassle of you calculating time, transfers and layovers letting you finish your online flight booking. To ensure you get the best price we highlight offers, sales and other promotions on the checkout page. Post booking, our portal allows for easy cancellations or amendments without having to make calls to the airlines.
            </p>
  </div>
  <footer>
    <p>CopyRight © All Rights Reserved</p>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>