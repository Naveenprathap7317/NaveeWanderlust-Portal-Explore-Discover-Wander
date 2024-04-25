<?php
session_start();
include("connect.php")


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link  rel="icon" href="site logo.png">
    <!-- website font style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- link the css file -->
    <link rel="stylesheet" href="style.css">

    <!-- login font style -->


</head>
<body>

<!-- start header section -->
    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>H</span>ijra</a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#book">Booking</a>
            <a href="#packages">Packages</a>
            <a href="#services">Services</a>
            <a href="#gallery">Gallery</a>
            <a href="#review">Review</a>
            <a href="#contact">Contact</a>
            
        </nav>
        
    
        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <!-- <i class="fas fa-user" id="login-btn"></i> -->
            
        </div>
        
        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder=" Search Here....">
            <label for="search-bar" class="fas fa-search"></label>

        </form>
    
    </header>


<!-- End header section -->


<!-- login form starts -->

<!-- <div class="login-form-container">

    <i id="form-close" class="fas fa-times"></i>

    <form action="">
        <h3>Login</h3>
        <input type="email" class="box" placeholder=" Enter your Email...">
        <input type="password" class="box" placeholder=" Enter your Password...">
        <input type="submit" value="login now" class="btn">
        <input type="checkbox" id="remeber">
        <label for="remeber">Remember me</label>
        <p>Forget Password? <a href="#">Click here</a></p>
        <p>Don't Have an account? <a href="login.html">Register</a></p>
    </form>
</div>
 -->

<!-- login form ends -->

<!-- home section starts -->

<section class="home" id="home">
    <div class="content">
        <h3>Adventure is Worthwhile</h3>
        <p>Discover new places with us, adventure awaits</p>
        <a href="#" class="btn">Discover More</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="vid-1.mp4"></span>
        <span class="vid-btn" data-src="vid-2.mp4"></span>
        <span class="vid-btn" data-src="vid-3.mp4"></span>
        <span class="vid-btn" data-src="vid-4.mp4"></span>
        <span class="vid-btn" data-src="vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section end -->

<!-- book section starts -->

<section class="book" id="book">
    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">
        <div class="image">
            <center>
            <img src="tourist-traveler-illustration-design-modern-minimalist-flat-vector-style-art_732449-15944.jpg" alt="" width="90%" height="50%">
            </center>
        </div>

        <form action="">
            <div class="inputBox">
                <h3>Your Destination:</h3>
                <input type="text" placeholder="place name">
            </div>
            <div class="inputBox">
                <h3>No of persons:</h3>
                <input type="number" placeholder="number of guests">
            </div>
            <div class="inputBox">
                <h3>Arrival:</h3>
                <input type="date">
            </div>
            <div class="inputBox">
                <h3>Departure:</h3>
                <input type="date">
            </div>
            <input type="submit" class="btn" value="book now">


        </form>


    </div>
</section>

<!-- book section ends -->


<!-- Packages Section starts -->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>
    <center>
    <div class="box-container">
        <div class="box">
        <img src="Amsterdam, Netherlands.jpg.webp" alt="" width="50%">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Netherlands</h3>
            <p>Netherlands: Land of tulips, windmills, canals, and a rich tapestry of cultural diversity and tolerance.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">₹49999 <span>₹69999</span> </div>
            <a href="#book" class="btn" >book now</a>
          
        </div>
    </div>
</center>
<center>
    <div class="box-container">
        <div class="box">
        <img src="Barcelona, Spain.jpg.webp" alt="" width="50%">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Barcelona</h3>
            <p>Barcelona: Where Gaudí's masterpieces dance with the Mediterranean, inspiring dreams under the Spanish sun.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">₹69999 <span>₹79999</span> </div>
            <a href="#book" class="btn" >book now</a>
        </div>
    </div>
    <div class="box-container">
        <div class="box">
        <img src="Dublin, Ireland.jpg.webp" alt="" width="50%">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Ireland</h3>
            <p>Dublin: Where history whispers in cobblestone streets, and Guinness flows in the heart of Ireland.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">₹39999 <span>₹49999</span> </div>
            <a href="#book" class="btn" >book now</a>
        </div>
    </div>
</center>

    <center>
    <div class="box-container">
        <div class="box">
        <img src="Budapest, Hungary.jpg.webp" alt="" width="50%">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Hungary</h3>
            <p>Budapest: Where the Danube's embrace holds a city of thermal baths, history, and enchanting architecture.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">₹49999 <span>₹69999</span> </div>
            <a href="#book" class="btn" >book now</a>
        </div>
    </div>
</center>
<center>
    <div class="box-container">
        <div class="box">
        <img src="Cyprus.jpg.webp" alt="" width="50%">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Cyprus</h3>
            <p>Cyprus: Where ancient ruins meet sun-kissed shores, and history's whispers mingle with Mediterranean breezes.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">₹89999 <span>₹99999</span> </div>
            <a href="#book" class="btn" >book now</a>
        </div>
    </div>
</center>
<center>
    <div class="box-container">
        <div class="box">
        <img src="Greek Islands.jpg.webp" alt="" width="50%">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Greek</h3>
            <p>Greek essence: Olive groves, azure seas, ancient myths, and hospitality warm as the Mediterranean sun.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">₹59999 <span>₹69999</span> </div>
            <a href="#book" class="btn" >book now</a>
        </div>
    </div>
</center>
<center>
    
    <div class="box-container">
        <div class="box">
        <img src="Lisbon, Portugal.jpg.webp" alt="" width="50%">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Portugal</h3>
            <p>Lisbon: Where cobbled streets lead to Fado's soulful melodies, and sunsets paint the Tagus golden</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">₹29999 <span>₹79999</span> </div>
            <a href="#book" class="btn" >book now</a>
        </div>
    </div>
</center>
    <center>
    <div class="box-container">
        <div class="box">
        <img src="Madeira Island, Portugal.jpg.webp" alt="" width="50%">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Madeira Island</h3>
            <p>Madeira Island: Where rugged cliffs meet emerald seas, and lush landscapes whisper tales of exploration.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">₹49999 <span>₹69999</span> </div>
            <a href="#book" class="btn" >book now</a>
        </div>
    </div>
</center>
    <center>
    <div class="box-container">
        <div class="box">
        <img src="Munich.jpg.webp" alt="" width="50%">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Munich</h3>
            <p>Munich: Where Bavarian charm meets modern vibrancy, and beer flows in the heart of Germany</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">₹129999 <span>₹139999</span> </div>
            <a href="#book" class="btn" >book now</a>
        </div>
    </div>
</center>
    <center>
    <div class="box-container">
        <div class="box">
        <img src="Paris, France.jpg.webp" alt="" width="50%">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>France</h3>
            <p>Paris: City of lights, where romance dances along the Seine, and history whispers in every arrondissement.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">₹39999 <span>₹49999</span> </div>
            <a href="#book" class="btn" >book now</a>
        </div>
    </div>
</center>
    <center>
    <div class="box-container">
        <div class="box">
        <img src="Rome, Italy.jpg.webp" alt="" width="50%">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Italy</h3>
            <p>Rome: Eternal city, where ancient ruins stand proud, and every cobblestone tells a story of millennia.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">₹49999 <span>₹69999</span> </div>
            <a href="#book" class="btn" >book now</a>
        </div>
    </div>
</center>
    <center>
    <div class="box-container">
        <div class="box">
        <img src="The Canary Islands, Spain.jpg.webp" alt="" width="50%">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Spain</h3>
            <p>Canary Islands: Where volcanic landscapes meet golden beaches, and Atlantic breezes carry whispers of adventure and relaxation.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">₹59999 <span>₹89999</span> </div>
            <a href="#book" class="btn" >book now</a>
        </div>
    </div>
</center>
    <center>
    <div class="box-container">
        <div class="box">
        <img src="Transylvania, Romania.jpg.webp" alt="" width="50%">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Romania</h3>
            <p>Transylvania: Land of Gothic castles, misty forests, and legends that linger in the Carpathian Mountains.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">₹69999 <span>₹99999</span> </div>
            <a href="#book" class="btn" >book now</a>
        </div>
    </div>
</center>


</section>

<!-- Packages Section ends -->

<!-- service section starts -->

<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>
    
    <div class="box-container">
        <center>
        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Affordable hotels: where comfort meets budget-friendly stays, welcoming travelers with open doors and cozy accommodations, creating memorable experiences without breaking the bank</p>
        </div>
    </center>

    <div class="box-container">
        <center>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>Food and drinks: the universal language of pleasure, satisfying appetites and quenching thirsts, bringing people together in shared moments of culinary delight.</p>
        </div>
    </center>

    <div class="box-container">
        <center>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>Safety guide</h3>
            <p>Safety guide: a beacon of caution and protection, guiding travelers through unknown paths, ensuring their well-being amidst new adventures and destinations.</p>
        </div>
    </center>

    <div class="box-container">
        <center>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the world</h3>
            <p>Around the world: a kaleidoscope of cultures, landscapes, and experiences, where every corner holds a story and every journey sparks a new adventure in life's grand tapestry.</p>
        </div>
     
    </center>
    <div class="box-container">
        <center>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p>Fastest travel: racing against time, chasing destinations, and embracing the thrill of speed, where each moment counts in the pursuit of discovery.</p>
        </div>
    </center>

      
    <div class="box-container">
        <center>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>Adventure</h3>
            <p>Adventurous spirit: daring to explore the unknown, seeking thrill in every step, and finding beauty in the wild, where freedom knows no bounds.</p>
        </div>
    </center>
    
    </div>
</section>

<!-- service section ends -->

<!-- gallery sections starts -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>G</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">

        <div class="box">

            <img src="1.jpg" alt="" width="70%">
            <div class="content">
                <h3>Amazing places!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quas tempore quasi? Earum, laudantium, consectetur ut iure!</p>
                <a href="#" class="btn">see more...</a>
            </div>
        </div>

        <div class="box">

            <img src="2.jpg" alt="" width="70%">
            <div class="content">
                <h3>Amazing places!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quas tempore quasi? Earum, laudantium, consectetur ut iure!</p>
                <a href="#" class="btn">see more...</a>
            </div>
        </div>

        <div class="box">

            <img src="3.jpg" alt="" width="70%">
            <div class="content">
                <h3>Amazing places!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quas tempore quasi? Earum, laudantium, consectetur ut iure!</p>
                <a href="#" class="btn">see more...</a>
            </div>
        </div>
        <div class="box">

            <img src="4.jpg" alt="" width="70%">
            <div class="content">
                <h3>Amazing places!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quas tempore quasi? Earum, laudantium, consectetur ut iure!</p>
                <a href="#" class="btn">see more...</a>
            </div>
        </div>
        
        <div class="box">

            <img src="5.jpg" alt="" width="55%">
            <div class="content">
                <h3>Amazing places!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quas tempore quasi? Earum, laudantium, consectetur ut iure!</p>
                <a href="#" class="btn">see more...</a>
            </div>
        </div>
        <div class="box">

            <img src="6.jpg" alt="" width="55%">
            <div class="content">
                <h3>Amazing places!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quas tempore quasi? Earum, laudantium, consectetur ut iure!</p>
                <a href="#" class="btn">see more...</a>
            </div>
        </div>
    </div>
        

</section>



<!-- gallery sections ends -->

<!-- review section starts -->
<section class="review" id="review">
    <h1 class="heading">
        <span>R</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <div class="swiper review-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slider">
                    <div class="box">
                        <img src="a.jpg" alt="">
                        <h3>Chris Hemsworth</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nobis explicabo facilis beatae repellat rerum magni hic expedita, repudiandae quibusdam, ad saepe nesciunt quae optio earum quas, sunt vero aut.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img src="b.jpg" alt="">
                    <h3>Ellyse Perry</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nobis explicabo facilis beatae repellat rerum magni hic expedita, repudiandae quibusdam, ad saepe nesciunt quae optio earum quas, sunt vero aut.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img src="c.jpg" alt="">
                    <h3>Karen Gillan</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nobis explicabo facilis beatae repellat rerum magni hic expedita, repudiandae quibusdam, ad saepe nesciunt quae optio earum quas, sunt vero aut.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img src="d.jpg" alt="">
                    <h3>Johny depp</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nobis explicabo facilis beatae repellat rerum magni hic expedita, repudiandae quibusdam, ad saepe nesciunt quae optio earum quas, sunt vero aut.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>


            <div class="swiper-slide">
                <div class="box" >
                    <img src="e.jpg" alt="">
                    <h3>Ozge Torer</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nobis explicabo facilis beatae repellat rerum magni hic expedita, repudiandae quibusdam, ad saepe nesciunt quae optio earum quas, sunt vero aut.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>


        </div>
        <div class="swiper-pagination"></div>
    </div>




</section>


<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- review section ends -->

<!-- contact section starts -->
 
<section class="contact" id="contact">


    <h1 class="heading">
        <span>C</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
        <span>s</span>
    </h1>

    <div class="row">
        <div class="image">
            <img src="travel.png" alt="" width="100%">
        </div>
    

        <form action="">

            <div class="inputBox">
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="Number">
                <input type="text" placeholder="Subject">
            </div>
            <textarea  placeholder="Message" name="" id="" cols="30" rows="10"></textarea><br>
            <input type="submit" class="btn" value="send Message">
        </form>
    </div>
</section>


<!-- contact section ends -->

<!-- brand section starts -->
<section class="brand-container">

    <div class="swiper container  brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="f.jpg" alt=""></div>
            <div class="swiper-slide"><img src="g.jpg" alt=""></div>
            <div class="swiper-slide"><img src="h.jpg" alt=""></div>
            <div class="swiper-slide"><img src="i.jpg" alt=""></div>
            <div class="swiper-slide"><img src="j.jpg" alt=""></div>
            <div class="swiper-slide"><img src="k.jpg" alt=""></div>
        </div>
    </div>
</section>


<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!-- brand section ends -->

<!-- footer section starts -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi sapiente atque animi voluptatum explicabo vero amet tempora mollitia reprehenderit velit non minus, deleniti minima facere accusantium eum voluptas repellendus rerum?</p>

        </div>

        <div class="box">
            <h3>Branch Location</h3>
            <a href="#">India</a>
            <a href="#">Saudi Arabia</a>
            <a href="#">Russia</a>
            <a href="#">China</a>
            <a href="#">Korea</a>
        </div>


        <div class="box">
            <h3>Quick Links</h3>
            <a href="#">Home</a>
            <a href="#">Book</a>
            <a href="#">Packages</a>
            <a href="#">Services</a>
            <a href="#">Gallery</a>
            <a href="#">Review</a>
            <a href="#">Contact</a>
        </div>

        
        <div class="box">
            <h3>Follow Us</h3>
           
             <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo" width="40" style="margin-right: 10px;">
            
            <img src="instagram.webp" alt="instagram" width="40" style="margin-right: 10px;"> 
            
            <img src="X.png" alt="Twitter" width="40" style="margin-right: 10px;">
            
            <img src="linkedin.png" alt="Linkedin" width="40" style="margin-right: 10px;">
        </div>

    </div>

    <h1> <div class="credit"> Created By <span></span> | All Rights Reserved</div>
    </h1>
</section>


<!-- footer section ends -->


<!-- link the js file -->
<script src="script.js"></script>    

</body>
</html>