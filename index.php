<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group 4: Hau Linh Chi, Nguyen Vu Duy Minh, Tran Huy Vu, Bui Thai Anh, Phan Sy Tuan">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&family=Rubik:wght@400;500;700&family=Ubuntu:ital,wght@0,400;0,500;0,700;1,500&family=Playfair+Display:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>TCAMV</title>
</head>
<body>
<?php
    include("includes/header.inc");
    include("includes/menu.inc");
    ?>
    <section>
        <div class="chi-hero">
            <div class="hero-left">
                <h1>Start your learning journey</h1>
                <br>
                <p>Learn anything with our wide selection of courses in three trending university majors:
                    <br>
                    Business,
                    Media &
                    Communication and Computer Science.
                    <br>
                    <br>
                    Expand your skill set now!
                </p>
                <div class="hero-buttons">
                    <a href="product.html" id="hero-product">View all courses</a>
                    <a href="about.html" id="hero-about">About TCAMV</a>
                </div>
            </div>
            <div class="hero-right">
                <!-- Image source: google.com --> <img src="images/heroimage.png" alt="Hero Image">
            </div>
        </div>
    </section>

    <!-- Course types -->

    <section>
        <div class="coursetypes-container">

            <div class="coursetypes-h">
                <br>
                <h2>Course types</h2>
            </div>
            <div class="coursetypes">
                <div class="type1">
                    <!-- Image source: google.com --> <img src="images/computerscienceicon.png"
                        alt="Computer Science courses">
                    <p>Computer Science</p>
                </div>
                <div class="type2">
                    <!-- Image source: google.com --> <img src="images/businessicon.png" alt="Business courses">
                    <p>Business</p>
                </div>
                <div class="type3">
                    <!-- Image source: google.com --> <img src="images/mediaicon.png"
                        alt="Media & Communication courses">
                    <p>Media & Communication</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured courses -->

    <section>
        <div class="featuredcourses-container">

            <div class="featuredcourses-h">
                <br>
                <h2>Featured courses</h2>
            </div>

            <div class="featuredcourses">
                <div class="featuredcourses1">
                    <div class="fcourse1">
                        <div class="fcourseinfo">
                            <!-- Image source: google.com --> <img src="images/fcourse1.jpg" alt="Featured course 1">
                            <br>
                            <h3>DEVELOPING TEAMWORK SKILLS</h3>
                            <p class="fcourseprice">$50</p>
                            <p>5 lessons (29 hours)</p>
                        </div>
                        <br>
                        <div class="fcourseauthor">
                            <!-- Image source: google.com --> <img src="images/author1.png" alt="Author 1 Avatar">
                            <p>&nbsp;Savannah Haynes</p>
                        </div>
                        <div class="fcourse-button">
                            <a href="product.html">View course</a>
                        </div>
                    </div>
                    <div class="fcourse2">
                        <div class="fcourseinfo">
                            <!-- Image source: google.com --> <img src="images/fcourse2.jpg" alt="Featured course 2">
                            <br>
                            <h3>INTRODUCTION TO PROGRAMMING</h3>
                            <p class="fcourseprice">$60</p>
                            <p>6 lessons (43.5 hours)</p>
                        </div>
                        <br>
                        <div class="fcourseauthor">
                            <!-- Image source: google.com --> <img src="images/author2.png" alt="Author 2 Avatar">
                            <p>&nbsp;Roger Lara</p>
                        </div>
                        <div class="fcourse-button">
                            <a href="product.html">View course</a>
                        </div>

                    </div>
                    <div class="fcourse3">
                        <div class="fcourseinfo">
                            <!-- Image source: google.com --> <img src="images/fcourse3.jpg" alt="Featured course 3">
                            <br>
                            <h3>NETWORKING FUNDAMENTALS</h3>
                            <p class="fcourseprice">$100</p>
                            <p>28 lessons (60 hours)</p>
                        </div>
                        <br>
                        <div class="fcourseauthor">
                            <!-- Image source: google.com --> <img src="images/author3.png" alt="Author 3 Avatar">
                            <p>&nbsp;Amina Nixon</p>
                        </div>
                        <div class="fcourse-button">
                            <a href="product.html">View course</a>
                        </div>

                    </div>
                </div>

                <div class="featuredcourses2">
                    <div class="fcourse4">
                        <div class="fcourseinfo">
                            <!-- Image source: google.com --> <img src="images/fcourse4.jpg" alt="Featured course 4">
                            <br>
                            <h3>FUNDAMENTALS OF DATA VISUALISATION</h3>
                            <p class="fcourseprice">$80</p>
                            <p>10 lessons (48 hours)</p>
                        </div>
                        <br>
                        <div class="fcourseauthor">
                            <!-- Image source: google.com --> <img src="images/author4.png" alt="Author 4 Avatar">
                            <p>&nbsp;Sean Liu</p>
                        </div>
                        <div class="fcourse-button">
                            <a href="product.html">View course</a>
                        </div>

                    </div>
                    <div class="fcourse5">
                        <div class="fcourseinfo">
                            <!-- Image source: google.com --> <img src="images/fcourse5.jpg" alt="Featured course 5">
                            <br>
                            <h3>CINEMATOGRAPHY BASICS: FILMMAKING STYLE</h3>
                            <p class="fcourseprice">$130</p>
                            <p>20 lessons (40 hours)</p>
                        </div>
                        <br>
                        <div class="fcourseauthor">
                            <!-- Image source: google.com --> <img src="images/author5.png" alt="Author 5 Avatar">
                            <p>&nbsp;Riley Mason</p>
                        </div>
                        <div class="fcourse-button">
                            <a href="product.html">View course</a>
                        </div>
                    </div>
                    <div class="fcourse6">
                        <div class="fcourseinfo">
                            <!-- Image source: google.com --> <img src="images/fcourse6.jpg" alt="Featured course 6">
                            <br>
                            <h3>THE ART OF PUBLIC SPEAKING</h3>
                            <p class="fcourseprice">$100</p>
                            <p>8 lessons (36.5 hours)</p>
                        </div>
                        <br>
                        <div class="fcourseauthor">
                            <!-- Image source: google.com --> <img src="images/author6.png" alt="Author 6 Avatar">
                            <p>&nbsp;Stuart Pittman</p>
                        </div>
                        <div class="fcourse-button">
                            <a href="product.html">View course</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="minh-navigate-button-container">
                <a href="product.html" class="minh-navigate-button">Show me more</a>
            </div><br>
        </div>
    </section>

    <!-- Discount/Image map Section -->
    <!-- Enhancement -->

    <div id="saleoff">
        <!-- Image source: google.com --> <img src="images/rsz_imagemap.png" alt="Sale off 50% all new courses"
            usemap="#imagemap">

        <map name="imagemap">
            <area target="_self" alt="View all new discount Computer Science courses" href="product.html"
                coords="498,163,576,189" shape="rect">
            <area target="_self" alt="View all new discount Business courses" href="product.html"
                coords="674,230,752,254" shape="rect">
            <area target="_self" alt="View all new discount Media courses" href="product.html" coords="851,164,928,189"
                shape="rect">
        </map>
    </div>

    <!-- About Section -->

    <section id="minh-about-section">
        <div class="minh-about-container">
            <div class="minh-inner-container">
                <h1>About TCAMV</h1>
                <p>
                    TCAMV is an online learning website made specifically for learners who want to excel in three
                    trending university majors: Business, Media & Communication and Computer Science. We offer
                    high-quality and affordable courses for students of all levels. Our experienced tutors will create
                    an engaging, interactive learning experience that you will not find anywhere else.
                </p>
                <a class="minh-about-button" href="product.html">Learn more</a>
            </div>
        </div>
    </section>

    <!-- Review Section -->

    <section id="minh-review-container">
        <div class="minh-review-heading">
            <h1>What Our Clients Say</h1>
        </div>
        <hr class="minh-hr"><br>

        <div class="minh-review-box-container">
            <div class="minh-review-box-top">
                <div class="minh-review-profile">
                    <div class="minh-review-profile-img">
                        <!-- Image source: google.com --> <img src="images/testimonial1.jpg" alt="Testimonial 1">
                    </div>
                    <div class="minh-review-profile-name">
                        <p>Aisha Williams</p>
                    </div>
                    <div class="minh-review-profile-sm">
                        <p>@aishaw1201</p>
                    </div>
                </div>
                <div class="minh-review-content">
                    <p>Taking online courses at TCAMV has been a game-changer for me. With online courses, I can learn
                        at my own pace and on my own schedule. It has allowed me to advance my career and achieve my
                        goals.</p>
                </div>
            </div>

            <div class="minh-review-box-top">
                <div class="minh-review-profile">
                    <div class="minh-review-profile-img">
                        <!-- Image source: google.com --> <img src="images/testimonial2.jpg" alt="Testimonial 2">
                    </div>
                    <div class="minh-review-profile-name">
                        <p>Malik Jackson</p>
                    </div>
                    <div class="minh-review-profile-sm">
                        <p>@mal1kjackson</p>
                    </div>
                </div>
                <div class="minh-review-content">
                    <p>I was skeptical about online courses at first, but I have to say, I was pleasantly surprised. The
                        quality of the courses was top-notch, and the instructors were knowledgeable and engaging. I
                        really enjoyed learning at TCAMV.</p>
                </div>
            </div>

            <div class="minh-review-box-top">
                <div class="minh-review-profile">
                    <div class="minh-review-profile-img">
                        <!-- Image source: google.com --> <img src="images/testimonial3.jpg" alt="Testimonial 3">
                    </div>
                    <div class="minh-review-profile-name">
                        <p>Ethan Davis</p>
                    </div>
                    <div class="minh-review-profile-sm">
                        <p>@ethandvs</p>
                    </div>
                </div>
                <div class="minh-review-content">
                    <p>Courses at TCAMV have truly opened up a world of opportunities for me. Being a student majoring
                        in Computer Science, I must state that taking Computer Science classes at TCAMV has been a
                        fantastic experience for me.</p>
                </div>
            </div>
        </div>
        <br>
    </section>

    <!-- Link to team video -->
    <div class="video">
        <a href="" target="_blank">Please click here to see group 4 Video</a>
    </div>
    <?php include("includes/footer.inc"); ?>
</body>
</html
