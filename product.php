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
    <aside>
        <h2>Sign up now!</h2>
        <br>
        <p>And get 25% off</p>
    </aside>

    <!-- Course introduction -->

    <section class="TA_about_us">
        <h3>Our courses</h3>
        <p>
            <strong>Swinburne University of Technology</strong> is a world-class university creating social and economic
            impacts through
            science, technology and innovation. Founded in 1908 by the Honourable George and Ethel Swinburne as the
            'Eastern Suburbs Technical College', Swinburne has continued to evolve, gaining university status in 1992.
        </p>
        <p>
            At Swinburne, we offer courses that connect you with your chosen industry and flexible study options to give
            your career a headstart. </p>
        <h3>“Achievement through learning!”</h3>
        <h4>For over a century Swinburne has committed to innovative education, strong industry engagement and social
            inclusion.</h4>
    </section><br>

    <hr id="index-hr">

    <!-- Courses -->

    <section id="TA1">
        <div class="TA_title">Courses</div>

        <div class="TA2">
            <div class="TA2-1">
                <!-- Image source: google.com --> <img src="images/film.jpg" class="TA2_image" alt="media course 1">
                <h2>Cinematography Basics:Filmmaking Style</h2>
                <p class="TA_course_price">$130</p>
                <ul>
                    <li>20 lessons (40 hours)</li>
                    <li>Level: Intermediate</li>
                </ul>
                <!-- Image source: google.com --> <img src="./images/kathryn_strong.jpg" class="TA_author1_img" alt="first tutor">
                <p class="TA_author1">Riley Mason</p>
                <button type="button" class="TA2-1_button">Add to cart</button>
                <div class="TA2-1-1">
                    <h2 style="color:orangered;">Cinematography Basics: Filmmaking Style</h2>
                    <p class="TA2-1-1_content">This unit provides a firm overview of the technical foundation in how to
                        effectively use the camera, lighting, and other tools to convey your message. The course starts
                        by examining the art of photography and video, and how to properly harness the medium to
                        communicate your message.</p>
                    <p>General Skills Outcome:</p>
                    <ol>
                        <li>.Produce any kind of video</li>
                        <li>Tell a story visually.</li>
                        <li>Employ camera work creatively.</li>
                        <li>Employ lighting to tell a story or set a mood.</li>
                        <li>Prepare video footage for editing.</li>
                    </ol>
                </div>
            </div>
            <div class="TA2-2">
                <!-- Image source: google.com --> <img src="./images/campaign_planning.jpg" class="TA2_image" alt="media course 2">
                <h2>Public Relations Project and Campaign Planning</h2>
                <p class="TA_course_price">$100</p>
                <ul>
                    <li>10 lessons (48 hours)</li>
                    <li>Level: Intermediate</li>
                </ul>
                <!-- Image source: google.com --> <img src="./images/Samir_Hancock.jpg" class="TA_author1_img" alt="second tutor">
                <p class="TA_author1">Samir Hancock</p>
                <button type="button" class="TA2_button">Add to cart</button>
                <div class="TA2-2-2">
                    <h2 style="color:orangered;">Public Relations Project and Campaign Planning</h2>
                    <p class="TA2-2-2_content">This unit exposes students to advanced public relations practice, with a
                        special emphasis on the development and deployment of PR projects and campaigns. It embraces
                        ideas and approaches and skills fundamental to managing oral, written and mediated communication
                        plans. </p>
                    <p>General Skills Outcome:</p>
                    <ol>
                        <li>Teamwork skill.</li>
                        <li>Analysis skill.</li>
                        <li>Problem solving skill.</li>
                        <li>Communication skill.</li>
                        <li>Ability to work independently.</li>
                    </ol>
                </div>
            </div>
            <div class="TA2-3">
                <!-- Image source: google.com --> <img src="./images/principles-advertising.jpg" class="TA2_image" alt="media course 3">
                <h2>Principles</h2>
                <h2>Of Advertising</h2>
                <p class="TA_course_price">$100</p>
                <ul>
                    <li>10 lessons (48 hours)</li>
                    <li>Level: Intermediate</li>
                </ul>
                <!-- Image source: google.com --> <img src="./images/jenson_harrel.jpg" class="TA_author1_img" alt="third tutor">
                <p class="TA_author1">Jenson Harrel</p>
                <button type="button" class="TA2-1_button">Add to cart</button>
                <div class="TA2-3-3">
                    <h2 style="color:orangered;">Principles of Advertising</h2>
                    <p class="TA2-3-3_content">This unit is designed to build understanding of the doctrines on which
                        the advertising industry functions, and of advertising’s role in integrated brand promotion
                        through contemporary principles, theories and practices in the industry.</p>
                    <p>General Skills Outcome:</p>
                    <ol>
                        <li>Teamwork skill.</li>
                        <li>Analysis skill.</li>
                        <li>Problem solving skill.</li>
                        <li>Communication skill.</li>
                        <li>Ability to work independently.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="TA3">
            <div class="TA2-1">
                <!-- Image source: google.com --> <img src="images/itp.png" class="TA2_image" alt="cs course 1">
                <h2>Introduction to Programming</h2>
                <p class="TA_course_price">$60</p>
                <ul>
                    <li>6 lessons (43.5 hours)</li>
                    <li>Level: Beginner</li>
                </ul>
                <!-- Image source: google.com --> <img src="./images/kathryn_strong.jpg" class="TA_author1_img" alt="fourth tutor">
                <p class="TA_author1">Roger Lara</p>
                <button type="button" class="TA2-1_button">Add to cart</button>
                <div class="TA2-1-1">
                    <h2 style="color:orangered;">Introduction to Programming</h2>
                    <p class="TA2-1-1_content">This course introduces the fundamental concepts of procedural
                        programming. Topics include data types, control structures, functions, arrays, files, and the
                        mechanics of running, testing, and debugging. The course also offers an introduction to the
                        historical and social context of computing and an overview of computer science as a discipline.
                    </p>
                    <p>General Skills Outcome:</p>
                    <ol>
                        <li>Apply code reading and debugging techniques.</li>
                        <li>Describe the principles of structured programming.</li>
                        <li>Construct small programs, using the programming languages covered, that include the use of
                            arrays, functions and procedures, parameter.</li>
                        <li>Use modular and functional decomposition to break problems down.</li>
                    </ol>
                </div>
            </div>
            <div class="TA2-2">
                <!-- Image source: google.com --> <img src="images/network.jpg" class="TA2_image" alt="cs course 2">
                <h2>Networking</h2>
                <h2>Fundamentals</h2>
                <p class="TA_course_price">$100</p>
                <ul>
                    <li>28 lessons (60 hours)</li>
                    <li>Level: Beginner</li>
                </ul>
                <!-- Image source: google.com --> <img src="./images/Samir_Hancock.jpg" class="TA_author1_img" alt="fifth tutor">
                <p class="TA_author1">Amina Nixon</p>
                <button type="button" class="TA2_button">Add to cart</button>
                <div class="TA2-2-2">
                    <h2 style="color:orangered;">Networking Fundamentals</h2>
                    <p class="TA2-2-2_content">The course is a comprehensive program designed to teach students
                        networking and internetworking technology skills. It introduces networking standards, concepts,
                        topology, media and terminology including LANs, WANs, the OSI model, cabling, IP addressing,
                        subnetting, network hardware and various protocols. Additional material is supplied that goes
                        beyond the scope of the Cisco curriculum.</p>
                    <p>General Skills Outcome:</p>
                    <ol>
                        <li>Demonstrate use of networking mathematics, terminology, and models.</li>
                        <li>Explain the fundamental principles and concepts of the seven-layer OSI model.</li>
                        <li>Analyze and troubleshoot multiple-layer problems.</li>
                        <li>Construct and test cabling for LANs and WANs.</li>
                        <li>Perform mathematical tasks.</li>
                    </ol>
                </div>
            </div>
            <div class="TA2-3">
                <!-- Image source: google.com --> <img src="images/data.jpg" class="TA2_image" alt="cs course 3">
                <h2>Fundamentals of Data Visualisation</h2>
                <p class="TA_course_price">$100</p>
                <ul>
                    <li>10 lessons (48 hours)</li>
                    <li>Level: Intermediate</li>
                </ul>
                <!-- Image source: google.com --> <img src="./images/jenson_harrel.jpg" class="TA_author1_img" alt="sixth tutor">
                <p class="TA_author1">Sean Liu</p>
                <button type="button" class="TA2-1_button">Add to cart</button>
                <div class="TA2-3-3">
                    <h2 style="color:orangered;">Fundamentals of Datat Visualisation</h2>
                    <p class="TA2-3-3_content">This course explores the design, development, and evaluation of such
                        information visualizations. By combining aspects of design, computer graphics, HCI, and data
                        science, you will gain hands-on experience with creating visualizations, using exploratory
                        tools, and architecting data narratives. Topics include user-centered design, web-based
                        visualization, data cognition and perception, and design evaluation.</p>
                    <p>General Skills Outcome:</p>
                    <ol>
                        <li> Describe the processes within the Data Analytics Lifecycle.</li>
                        <li>Analysis skill</li>
                        <li>Develop and execute an analytics plan for a given case study.</li>
                        <li>Evaluate suitable techniques and tools for specific data science tasks.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="TA4">
            <div class="TA2-1">
                <!-- Image source: google.com --> <img src="images/teamwork.jpg" class="TA2_image" alt="business course 1">
                <h2>Developing Teamwork</h2>
                <h2>Skills</h2>
                <p class="TA_course_price">$50</p>
                <ul>
                    <li>5 lessons (29 hours)</li>
                    <li>Level: Beginner</li>
                </ul>
                <!-- Image source: google.com --> <img src="./images/kathryn_strong.jpg" class="TA_author1_img" alt="seventh tutor">
                <p class="TA_author1">Savannah Haynes</p>
                <button type="button" class="TA2-1_button">Add to cart</button>
                <div class="TA2-1-1">
                    <h2 style="color:orangered;">Developing Teamwork Skills</h2>
                    <p class="TA2-1-1_content">This unit introduces students to the field of Public Festivals and
                        Events. In covering ideas and skills fundamental to managing and planning festivals, functions
                        and events, it aims to build not only competence and understanding of the scope and scale of
                        events but also students’ confidence in functioning as ethical operators in practical
                        environments.</p>
                    <p>General Skills Outcome:</p>
                    <ol>
                        <li>Defining Success.</li>
                        <li>The First Stage of Team Development – Forming.</li>
                        <li>The Second Stage of Team Development – Storming.</li>
                        <li>The Third Stage of Team Development – Norming.</li>
                        <li>The Fourth Stage of Team Development – Performing.</li>
                        <li>Solving Problems as a Team.</li>
                    </ol>
                </div>
            </div>
            <div class="TA2-2">
                <!-- Image source: google.com --> <img src="images/speaking.jpg" class="TA2_image" alt="business course 2">
                <h2>The Art of Public</h2>
                <h2>Speaking</h2>
                <p class="TA_course_price">$100</p>
                <ul>
                    <li>8 lessons (36.5 hours)</li>
                    <li>Level: Intermediate</li>
                </ul>
                <!-- Image source: google.com --> <img src="./images/Samir_Hancock.jpg" class="TA_author1_img" alt="eighth tutor">
                <p class="TA_author1">Stuart Pittman</p>
                <button type="button" class="TA2_button">Add to cart</button>
                <div class="TA2-2-2">
                    <h2 style="color:orangered;">The Art of Public Speaking</h2>
                    <p class="TA2-2-2_content">This course is for everyone - for teachers, business owners, professional
                        presenters, managers, coaches and motivational speakers. Public Speaking is a great way to show
                        the leadership and communication Skills. Learn techniques to master the art of public speaking,
                        plan your speech, anticipate any challenges and how to handle those, overcome anxiety and fears
                        and how to inspire your audience.</p>
                    <p>General Skills Outcome:</p>
                    <ol>
                        <li>How to plan a great public speech.</li>
                        <li>How to prepare yourself physically and psychologically.</li>
                        <li>How to engage & energize the audience.</li>
                        <li>Impressive opening of speech.</li>
                    </ol>
                </div>
            </div>
            <div class="TA2-3">
                <!-- Image source: google.com --> <img src="images/logistics.jpg" class="TA2_image" alt="business course 3">
                <h2>Global Logistics and Supply Chain Management</h2>
                <p class="TA_course_price">$100</p>
                <ul>
                    <li>12 lessons (36.5 hours)</li>
                    <li>Level: Intermediate</li>
                </ul>
                <!-- Image source: google.com --> <img src="./images/jenson_harrel.jpg" class="TA_author1_img" alt="ninth tutor">
                <p class="TA_author1">Hugh Riddle</p>
                <button type="button" class="TA2-1_button">Add to cart</button>
                <div class="TA2-3-3">
                    <h2 style="color:orangered;">Global Logistics and Supply Chain Management</h2>
                    <p class="TA2-3-3_content">This unit aims to provide students with the necessary knowledge, and
                        skills to enable them to analyse the theories of logistics and supply chain management and to
                        apply these theories in solving typical logistics and supply chain issues, focuses on the
                        application of logistics and supply chain thinking in today’s global market. An other aim of
                        this unit is to equip students with appropriate competencies that enable them to innovatively
                        apply supply chain knowledge for the purpose of improving company profits, alleviating human
                        suffering, and sustaining the planet.</p>
                    <p>General Skills Outcome:</p>
                    <ol>
                        <li>Teamwork skill.</li>
                        <li>Analysis skill.</li>
                        <li>Problem solving skill.</li>
                        <li>Communication skill.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <?php include("includes/footer.inc"); ?>
</body>
</html>