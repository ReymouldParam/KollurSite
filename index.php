<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kollur</title>

    <?php
        include 'includes/header-links.php'
    ?>

    <!-- External CSS styles -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body background="assets/images/blueprint-bg-3.jpg">

<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>

    <?php
        include 'includes/header.php';
    ?>

    <section class="home-section-1" id="home-section">
        <div class="home-section-1-container">
            <div class="section-1-inner-1">
                <div class="section-1-content">
                    <h1 class="main-heading" id="landingPara1"></h1>
                    <h4 class="sub-heading" id="landingPara2"></h4>
                    <div class="btn-container">
                        <button class="btn section-1-btn" onclick="navigateAmenities()">Amenities</button>
                        <button class="btn section-1-btn" onclick="navigateContact()">Contact</button>
                    </div>
                </div>
            </div>           
        </div>
            <img src="assets/images/apartment-2.png" class="home-section-1-absolute-img-1" alt="apartment-image">
            <div class="home-section-1-overlay"></div>
    </section>

    
    <section class="aboutus-section">
        <div class="aboutus-container">
            <div class="home-section-1-aboutus" id="aboutUs-section-fadein-left">
                <h1 class="main-heading">About Us</h1>
                <p class="aboutus-content">Luxury meets convenience in our futuristic & beautiful residences. Experience the comfort and privacy of a luxurious home, complemented by the modern amenities and hassle-free living of an upscale apartment. Indulge in elegant finishes, spacious interiors, and personalized services, creating a refined lifestyle that redefines your expectations. Welcome to a new level of future era living.</p>
            </div>
            <div class=" aboutus-image-container" id="aboutus-fadein-top">
                <img src="assets/images/blueprint-bg-2.jpg" alt="aboutus-image">
            </div>
        </div>
    </section>
    
    <section class="video-section">
        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>


    <section class="home-section-2" id="ourHighlights-section">
        <div class="home-section-2-container">
            <h1 class="main-heading">Project Highlights</h1>
            <div class="highlights-container">
                <div class="highlights-container-row">
                    <div class="highlights-row-inner">
                        <div class="highlights-item-container">
                            <div class="highlights-img-container">
                                <img src="assets/images/highlights/1.png" alt="">
                            </div>
                            <h4 class="sub-heading highlights-heading">1 BLOCK</h4>

                            <div class="highlights-overlay">
                                <h2 class="sub-heading highlights-heading">1 BLOCK</h2>
                                <p>
                                    A luxary apartment for sale with 1 block and 4 floors.A luxary apartment for sale with 1 block and 4 floors. A luxary apartment for sale with 1 block and 4 floors. 
                                </p>
                            </div>
                        </div>
                        <div class="highlights-item-container">
                        <div class="highlights-img-container">
                                <img src="assets/images/highlights/2.png" alt="">
                            </div>
                            <h4 class="sub-heading highlights-heading">1 BLOCK</h4>

                            <div class="highlights-overlay">
                                <h2 class="sub-heading highlights-heading">1 BLOCK</h2>
                                <p>
                                    A luxary apartment for sale with 1 block and 4 floors.A luxary apartment for sale with 1 block and 4 floors. A luxary apartment for sale with 1 block and 4 floors. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="highlights-row-inner">
                        <div class="highlights-item-container">
                        <div class="highlights-img-container">
                                <img src="assets/images/highlights/3.png" alt="">
                            </div>
                            <h4 class="sub-heading highlights-heading">1 BLOCK</h4>

                            <div class="highlights-overlay">
                                <h2 class="sub-heading highlights-heading">1 BLOCK</h2>
                                <p>
                                    A luxary apartment for sale with 1 block and 4 floors.A luxary apartment for sale with 1 block and 4 floors. A luxary apartment for sale with 1 block and 4 floors. 
                                </p>
                            </div>
                        </div>
                        <div class="highlights-item-container">
                        <div class="highlights-img-container">
                                <img src="assets/images/highlights/4.png" alt="">
                            </div>
                            <h4 class="sub-heading highlights-heading">1 BLOCK</h4>

                            <div class="highlights-overlay">
                                <h2 class="sub-heading highlights-heading">1 BLOCK</h2>
                                <p>
                                    A luxary apartment for sale with 1 block and 4 floors.A luxary apartment for sale with 1 block and 4 floors. A luxary apartment for sale with 1 block and 4 floors. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="highlights-container-row">
                    <div class="highlights-row-inner">
                        <div class="highlights-item-container">
                        <div class="highlights-img-container">
                                <img src="assets/images/highlights/5.png" alt="">
                            </div>
                            <h4 class="sub-heading highlights-heading">1 BLOCK</h4>

                            <div class="highlights-overlay">
                                <h2 class="sub-heading highlights-heading">1 BLOCK</h2>
                                <p>
                                    A luxary apartment for sale with 1 block and 4 floors.A luxary apartment for sale with 1 block and 4 floors. A luxary apartment for sale with 1 block and 4 floors. 
                                </p>
                            </div>
                        </div>
                        <div class="highlights-item-container">
                        <div class="highlights-img-container">
                                <img src="assets/images/highlights/1.png" alt="">
                            </div>
                            <h4 class="sub-heading highlights-heading">1 BLOCK</h4>

                            <div class="highlights-overlay">
                                <h2 class="sub-heading highlights-heading">1 BLOCK</h2>
                                <p>
                                    A luxary apartment for sale with 1 block and 4 floors.A luxary apartment for sale with 1 block and 4 floors. A luxary apartment for sale with 1 block and 4 floors. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="highlights-row-inner">
                        <div class="highlights-item-container">
                        <div class="highlights-img-container">
                                <img src="assets/images/highlights/1.png" alt="">
                            </div>
                            <h4 class="sub-heading highlights-heading">1 BLOCK</h4>

                            <div class="highlights-overlay">
                                <h2 class="sub-heading highlights-heading">1 BLOCK</h2>
                                <p>
                                    A luxary apartment for sale with 1 block and 4 floors.A luxary apartment for sale with 1 block and 4 floors. A luxary apartment for sale with 1 block and 4 floors. 
                                </p>
                            </div>
                        </div>
                        <div class="highlights-item-container">
                        <div class="highlights-img-container">
                                <img src="assets/images/highlights/1.png" alt="">
                            </div>
                            <h4 class="sub-heading highlights-heading">1 BLOCK</h4>

                            <div class="highlights-overlay">
                                <h2 class="sub-heading highlights-heading">1 BLOCK</h2>
                                <p>
                                    A luxary apartment for sale with 1 block and 4 floors.A luxary apartment for sale with 1 block and 4 floors. A luxary apartment for sale with 1 block and 4 floors. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- absolute images -->
        
    </section>

    <!--**************************-->
    <!-- section three gallery -->
    <!--**************************-->

    <section class="home-section-3" id="gallery-section">
        <div class="home-section-3-container">
            <h1 class="main-heading">Gallery</h1>
            <div class="gallery-main-container">
                <div class="gallery-carousel">
                    <div class="gallery-img-container" data-value="0">
                        <img src="assets/images/gallery/balcony-view1.png" alt="gallery-image">
                    </div>
                    <div class="gallery-img-container"  data-value="1">
                        <img src="assets/images/gallery/Bedroom1.png" alt="gallery-image">
                    </div>
                    <div class="gallery-img-container"  data-value="2">
                        <img src="assets/images/gallery/Gym-View1.png" alt="gallery-image">
                    </div>
                    <div class="gallery-img-container"  data-value="3">
                        <img src="assets/images/gallery/Multipurpose-Hall1.png" alt="gallery-image">
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery-popup-container">
            <div class="gallery-popup-inner-container">
                <div class="gallery-popup-carousel">
                    <div class="gallery-popup-img-container">
                        <img src="assets/images/gallery/balcony-view1.png" alt="gallery-image">
                    </div>
                    <div class="gallery-popup-img-container">
                        <img src="assets/images/gallery/Bedroom1.png" alt="gallery-image">
                    </div>
                    <div class="gallery-popup-img-container">
                        <img src="assets/images/gallery/Gym-View1.png" alt="gallery-image">
                    </div>
                    <div class="gallery-popup-img-container">
                        <img src="assets/images/gallery/Multipurpose-Hall1.png" alt="gallery-image">
                    </div>
                </div>
            </div>
            <button class="close-gallery-popup-btn" onclick="closeGalleryPopup()">x</button>
        </div>
    </section>
    <!-- section for amenities -->

    <section class="home-section-amenities" id="amenities-section">
        <div class="amenities-section-container">
            <h1 class="main-heading">Amenities</h1>
            <div class="amenities-carousel">
                <div class="popup-container" id="amenities-section-slider">
                    <div class="writing">
                        <div class="popup">
                            <img src="assets/images/amenities/gym.jpg" alt="amenities-image">
                        </div>
                        <div class="letter">
                            <p>GYM</p>
                        </div>  
                    </div>
                    <div class="writing">
                        <div class="popup">
                            <img src="assets/images/amenities/interior.jpg" alt="amenities-image">
                        </div>
                        <div class="letter">
                            <p>INTERIOR</p>
                        </div>
                    </div>
                    <div class="writing">
                        <div class="popup">
                            <img src="assets/images/amenities/playarea.jpg" alt="amenities-image">
                        </div>
                        <div class="letter">
                            <p>PLAY AREA</p>
                        </div>
                    </div>
                    <div class="writing">
                        <div class="popup">
                            <img src="assets/images/amenities/swimming.jpg" alt="amenities-image">
                        </div>
                        <div class="letter">
                            <p>SWIMMING POOL</p>
                        </div>
                    </div>
                    <div class="writing">
                        <div class="popup">
                            <img src="assets/images/amenities/gym.jpg" alt="amenities-image">
                        </div>
                        <div class="letter">
                            <p>GYM</p>
                        </div>  
                    </div>
                    <div class="writing">
                        <div class="popup">
                            <img src="assets/images/amenities/interior.jpg" alt="amenities-image">
                        </div>
                        <div class="letter">
                            <p>INTERIOR</p>
                        </div>
                    </div>
                    <div class="writing">
                        <div class="popup">
                            <img src="assets/images/amenities/playarea.jpg" alt="amenities-image">
                        </div>
                        <div class="letter">
                            <p>PLAY AREA</p>
                        </div>
                    </div>
                    <div class="writing">
                        <div class="popup">
                            <img src="assets/images/amenities/swimming.jpg" alt="amenities-image">
                        </div>
                        <div class="letter">
                            <p>SWIMMING POOL</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </section>


    <!-- ***************************
         Section four location
    ************************** -->

    <section class="home-section-4" id="location-section">
        <div class="home-section-4-container">
            <h1 class="main-heading">Location</h1>
            <div class="location-main-container">
                <div class="map-container">
                <iframe
                width="600"
                height="450"
                frameborder="0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDcAkUX5wu6apU6WsyaNye8gqgDi8qnkWY&q=17.50446845222854,78.47750812503234"
                allowfullscreen
                ></iframe>
                <!-- replace q value in above google maps (src attribute) api link with required latitude and longitude -->
                </div>
                <div class="location-info-container">
                    <div class="location-info">
                        <h2 class="sub-heading">Suchitra, Hyderabad</h2>
                        <p>Kokapet boasts of Hyderabad city’s ambition and achievement. The My Home 99 site is pitched in Kokapet’s hilly terrain as a lounging respite for dreamy lifestyles. Its sprawling 1.74 acres expanse faces the magnificent Osman Sagar Lake on the South-West.</p>
                        <p>Situated in the niche of the My Home Grava IT Hub, the site lies in the heart of the city’s new-found convenience. It is 2 kms from the Outer Ring Road rendering it minutes away from the IT hub, Financial District, international schools, hospitals, recreational parks, and what nots. You can simply walk to work or ride a bicycle for a light sweat energizing you for the day to come. Important</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ****************
    section contact us
    **************** -->

    <section class="home-section-5" id="contactUs-section">
        <div class="home-section-5-container">
            <h1 class="main-heading">Contact Us</h1>
            <div class="contactus-main-container">
                <div class="contact-column">
                    <div class="img-container">
                        <img src="" alt="company logo" class="contact-logo">
                    </div>
                    <h3 class="sub-heading">Address</h3>
                    <p><i class='bx bxs-map'></i> Plot no 81, Green Avenue, Jeedimentla Village, Hyderabad, Telangana, 500067</p>
                    <h3 class="sub-heading">Follow Us On</h3>
                    <p><i class='bx bxl-instagram-alt' ></i></i> <i class='bx bxl-facebook' ></i> <i class='bx bxl-twitter' ></i></p>
                </div>
                <div class="contact-column">
                    <h3 class="sub-heading">Enquiry</h3>
                    <p><i class='bx bxs-phone'></i> 9999999999</p>
                    <p><i class='bx bxl-gmail' ></i> contact@kollu.com</p>
                </div>
                <div class="contact-column">
                    <form action="" method="post">
                        <label for="formName">Name </label>
                        <input type="text" id="formName" name="name" placeholder="Enter Full Name">
                        <label for="formEmail">Email </label>
                        <input type="email" id="formEmail" name="email" placeholder="Enter Email">
                        <label for="phoneNumber">Mobile Number </label>
                        <input type="tel" name="phone" id="phoneNumber" placeholder="Enter Mobile Number">
                        <label for="formMessage">Message </label>
                        <textarea name="message" id="formMessage" placeholder="Enter Your Message" cols="30" rows="5"></textarea>
                        <button type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
        include 'includes/footer.php'
    ?>
</body>
</html>
