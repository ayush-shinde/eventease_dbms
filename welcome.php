<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Event Ease Login</title>
    <link rel="icon" type="image/x-icon" href="img/fav.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<!-- Bootstrap css -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
   

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- Javascript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>


<body>

    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Sidebar -->
        <nav class="sidebar">

            <nav class="sidenavbar">
                <h1>Hey!</h1>
            </nav>

            <nav class="sidesubnavbar">
                <img src="img/rewards.webp">
                <p>Unlock special offers & great benifits</p>
                <button class="login" onclick="document.getElementById('id01').style.display='block'">Login / Register</button>
            </nav>

            <a href="#">
                <div class="lefticon">
                    <ion-icon name="notifications-outline"></ion-icon>
                </div>
                <div class="text">Notifications</div>
                <div class="righticon">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>
            </a>
            <a class="btn-disabled" href="#">
                <div class="lefticon">
                    <ion-icon name="ticket-outline"></ion-icon>
                </div>
                <div class="text">Purchase History<br>
                    <div class="subtext">View all your bookings & Purchases</div>
                </div>
                <div class="righticon">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </div>
            </a>
            <a class="btn-disabled" href="#">
                <div class="lefticon">
                    <ion-icon name="tv-outline"></ion-icon>
                </div>
                <div class="text">Stream Library<br>
                    <div class="subtext">Rented & Purchased Movies</div>
                </div>
                <div class="righticon">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </div>
            </a>
            <a href="#">
                <div class="lefticon">
                    <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                </div>
                <div class="text">Help & Support<br>
                    <div class="subtext">View commonly asked queries and Chat</div>
                </div>
                <div class="righticon">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>
            </a>
            <a class="btn-disabled" href="#">
                <div class="lefticon">
                    <ion-icon name="settings-outline"></ion-icon>
                </div>
                <div class="text">Accounts & Settings<br>
                    <div class="subtext">Location, Payments, Addresses & More</div>
                </div>
                <div class="righticon">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </div>
            </a>
            <a href="#">
                <div class="lefticon">
                    <ion-icon name="gift-outline"></ion-icon>
                </div>
                <div class="text">Rewards<br>
                    <div class="subtext">View your rewards & unlock new ones</div>
                </div>
                <div class="righticon">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>
            </a>
            <a href="#">
                <div class="lefticon">
                    <ion-icon name="heart-outline"></ion-icon>
                </div>
                <div class="text">BookASmile</div>
                <div class="righticon">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>
            </a>

        </nav>
        <!-- End sidebar -->

        <!-- Dark overlay -->
        <div class="overlay"></div>

        <!-- Content -->
        <div class="content">

            <nav class="navbar">
                <img src="img/poster/logo eventease.jpeg" class="brand-logo" alt="" />
                <div class='input'>
                    <ion-icon name="search"></ion-icon>
                    <input className='search'
                        placeholder='Search for Movies, Sports, Stand Ups and Concerts'></input>
                </div>
                <div class="right-container">
                    <a href="#" class="location">Worcester<ion-icon name="caret-down-sharp"></ion-icon></a>
                    <button class="signin"
                        onclick="document.getElementById('id01').style.display='block'">Sign In</button>

                    <div id="id01" class="modal">

                        <div class="modal-content">
                            <div class="getstart">
                                <h3>Get Started</h3>
                                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                    title="Close Modal">

                                    <ion-icon name="close-outline"></ion-icon>
                                </span>
                            </div>

                             <div class="container">
                                <a href="register.php" class="button">
                                    <div class="logo">
                                        <img src="img/googlelogo.svg">
                                    </div>
                                    <div class="text">Log In</div>
                                </a>
                                <a href="#" class="button">
                                    <div class="logo">
                                        <ion-icon name="mail-outline" style="font-size: 22px;"></ion-icon>
                                    </div>
                                    <div class="text">Continue with Email</div>
                                </a>
                                <a href="#" class="button">
                                    <div class="logo">
                                        <ion-icon name="logo-apple" style="font-size: 22px;"></ion-icon>
                                    </div>
                                    <div class="text">Continue with Apple</div>
                                </a> 
                             </div>
                            <h2>OR</h2>

                            <div class="phone">
                                <img alt="indian flag" src="img/indianflag.svg"> 
                                 <img src = "https://cdn.britannica.com/79/4479-050-6EF87027/flag-Stars-and-Stripes-May-1-1795.jpg" height="12" width="18">
                                <div class="code">+1</div>
                                <input id="mobileNo" type="tel" pattern="[0-9]*"
                                    placeholder="Continue with mobile number" class="mobileNo">
                            </div>

                            <p>I agree to the <u>Terms & Conditions</u>&<u>Privacy Policy</u></p> 

                        </div>

                    </div>

                    <a href="#" class="btn-customized open-menu">
                        <ion-icon name="menu-outline"></ion-icon>
                    </a>
                </div>
            </nav>

            <nav class="subnavbar">
                <ul class='navitem'>
                    <li><a href='index2.html'>Movies</a></li>
                    <li><a href='#Movies'>Stream<span>NEW</span></a></li>
                    <li><a href='#Movies'>Events</a></li>
                    <li><a href='#Movies'>Concerts</a></li>
                    <li><a href='#Movies'>Sports</a></li>
                    <li><a href='#Movies'>Activities</a></li>
                    <li><a href='#Movies'>Buzz</a></li>
                </ul>
                <ul class='navitem1'>
                    <li><a href='#Movies'>ListYourShow<span>NEW</span></a></li>
                    <li><a href='#Movies'>Corporates</a></li>
                    <li><a href='#Movies'>Offers</a></li>
                    <li><a href='#Movies'>Gift Cards</a></li>
                </ul>
            </nav>

            <div class="carousel-container">
                <div class="carousel">
                    <!-- <div class="slider">
                    <img src="img/banner/banner1.webp" alt="">
                </div> -->
                </div>
            </div>

            <script src="js/data.js"></script>
            <script src="js/app.js"></script>

            <h1 class="title">Recommended Movies</h1>
            <div class="movies-list">
                <div class="card-container">

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/johnwick41.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>83% &ThinSpace; 964 votes</p>
                            </div>
                        </div>
                        <h3>John Wick Chapter: 4</h3>
                        <p class="detail">Drama/Thriller</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/Avatar2.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="thumbs-up-sharp" style="color: green;"></ion-icon>
                                <p>91% &ThinSpace; 21k votes</p>
                            </div>
                        </div>
                        <h3>Avatar: The Way of Water</h3>
                        <p class="detail">Fantasy/Science Fiction</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/Champions.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>85% &ThinSpace; 14k votes</p>
                            </div>
                        </div>
                        <h3>Champions</h3>
                        <p class="detail">Comedy/Drama</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/Scream6.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>79% &ThinSpace; 562 votes</p>
                            </div>
                        </div>
                        <h3>Scream 6</h3>
                        <p class="detail">Horror/Mystery</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/Supermario.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>77% &ThinSpace; 14k votes</p>
                            </div>
                        </div>
                        <h3>The Super Mario Bros Movie</h3>
                        <p class="detail">Animation/Comedy</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/Air.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>82% &ThinSpace; 27k votes</p>
                            </div>
                        </div>
                        <h3>Air</h3>
                        <p class="detail">Action/Drama</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/EEAAO.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="thumbs-up-sharp" style="color: green;"></ion-icon>
                                <p>91k likes</p>
                            </div>
                        </div>
                        <h3>Everything Everywhere All At Once</h3>
                        <p class="detail">Adventure/Science Fiction</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/GoG3.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>76% &ThinSpace; 21k votes</p>
                            </div>
                        </div>
                        <h3>Guardian Of the Galaxy Vol. 3</h3>
                        <p class="detail">Thriller/Fantasy</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/LM.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="thumbs-up-sharp" style="color: green;"></ion-icon>
                                <p>111 likes</p>
                            </div>
                        </div>
                        <h3>The Little Mermaid</h3>
                        <p class="detail">Fantasy/Animation</p>
                    </div>

                </div>
            </div>


 <!-- Concerts  -->
            <h1 class="title"> Concerts </h1>
            <div class="movie-list">
                <div class="card-container">

                     <div class="movie">
                        <div class="card">
                            <img src="img/poster/BBB.webp" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>83% &ThinSpace; 964 votes</p>
                            </div>
                        </div>
                        <h3>Burn, Burn, Burn Tour</h3>
                       <p class="detail">Country</p> 
                    </div> 

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/TS1.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="thumbs-up-sharp" style="color: green;"></ion-icon>
                                <p>91% &ThinSpace; 21k votes</p>
                            </div>
                        </div>
                        <h3>Taylor Swift: The Eras Tour</h3>
                         <p class="detail">Pop/Rock</p> 
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/BTS.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>99% &ThinSpace; 777k votes</p>
                            </div>
                        </div>
                        <h3>BTS: Map of the Soul Tour</h3>
                        <p class="detail">K-pop</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/IRrr.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>79% &ThinSpace; 562 votes</p>
                            </div>
                        </div>
                        <h3>Weezer Indie Rock Road Trip</h3>
                        <p class="detail">Alternative Rock</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/HS.webp" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>77% &ThinSpace; 14k votes</p>
                            </div>
                        </div>
                        <h3>Harry Styles: Love on Tour</h3>
                        <p class="detail">Pop</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/ED.jpeg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>82% &ThinSpace; 27k votes</p>
                            </div>
                        </div>
                        <h3>Ed Sheeran +-=/* Tour</h3>
                        <p class="detail">R&B/Pop</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/MW.jpeg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="thumbs-up-sharp" style="color: green;"></ion-icon>
                                <p>91k likes</p>
                            </div>
                        </div>
                        <h3>Morgan Wallen World Tour</h3>
                        <p class="detail">Country</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/LT.jpeg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>76% &ThinSpace; 21k votes</p>
                            </div>
                        </div>
                        <h3>Faith in the Future Tour</h3>
                        <p class="detail">Alternative Indie/Pop</p>
                    </div>

                    

                </div>
            </div>



<!-- Sports -->
            <h1 class="title">Sports </h1>
            <div class="movies-list">
                <div class="card-container">

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/bravehearts.jpeg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>83% &ThinSpace; 964 votes</p>
                            </div>
                        </div>
                        <h3>Worcester Bravehearts</h3>
                        <p class="detail">Hockey</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/woosox2.jpeg" class="card-img" alt="" height="10">
                            <div class="card-body">
                                <ion-icon name="thumbs-up-sharp" style="color: green;"></ion-icon>
                                <p>91% &ThinSpace; 21k votes</p>
                            </div>
                        </div>
                        <h3>Worcester Red Sox vs. Columbus Clippers</h3>
                        <p class="detail">Baseball</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/sports1.jpeg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>85% &ThinSpace; 14k votes</p>
                            </div>
                        </div>
                        <h3>Worcester Railers vs. Adirondack Thunder</h3>
                        <p class="detail">Basketball</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/volleyball.avif" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>79% &ThinSpace; 562 votes</p>
                            </div>
                        </div>
                        <h3>One Ball, One Goal</h3>
                        <p class="detail">Volleyball</p>
                    </div>

                  

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/soccer.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="thumbs-up-sharp" style="color: green;"></ion-icon>
                                <p>91k likes</p>
                            </div>
                        </div>
                        <h3>WPI vs Wheaton Playoffs</h3>
                        <p class="detail">Soccer</p>
                    </div>

                    
                </div>
            </div>


            <div class="strip">
                <img src="img/strip.webp" style="height:105px;" alt="">
            </div>

            <h1 class="title-enter">The Best of Entertainment</h1>
            <div class="enter-list">
                <div class="enter-container">

                    <div class="card">
                        <img src="img/enter/enter1.webp" class="card-img" alt="">
                    </div>

                    <div class="card">
                        <img src="img/enter/enter2.webp" class="card-img" alt="">
                    </div>

                    <div class="card">
                        <img src="img/enter/enter3.webp" class="card-img" alt="">
                    </div>

                    <div class="card">
                        <img src="img/enter/enter4.webp" class="card-img" alt="">
                    </div>

                    <div class="card">
                        <img src="img/enter/enter5.webp" class="card-img" alt="">
                    </div>

                    <div class="card">
                        <img src="img/enter/enter6.webp" class="card-img" alt="">
                    </div>

                    <div class="card">
                        <img src="img/enter/enter7.webp" class="card-img" alt="">
                    </div>

                    <div class="card">
                        <img src="img/enter/enter8.webp" class="card-img" alt="">
                    </div>

                    <div class="card">
                        <img src="img/enter/enter9.webp" class="card-img" alt="">
                    </div>

                    <div class="card">
                        <img src="img/enter/enter10.webp" class="card-img" alt="">
                    </div>

                    <div class="card">
                        <img src="img/enter/enter11.webp" class="card-img" alt="">
                    </div>

                    <div class="card">
                        <img src="img/enter/enter12.webp" class="card-img" alt="">
                    </div>

                </div>
            </div>

        </div>
        <!-- End content -->

    </div>
    <!-- End wrapper -->

</body>

</html>
