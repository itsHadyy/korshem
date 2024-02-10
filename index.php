<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $email_body = "Name: $name.\n".
                    "Email: $email.\n".
                    "Message: $message. \n";


    $from="From: $name<$email>\r\nReturn-path: $email";
    $subject="Message sent using your portfolio contact form";
    if($sendflag == ""){
        mail("itshadyy@gmail.com", $subject, $email_body, "itshadyy@gmail.com");
    }
    else{
        mail("itshadyy@gmail.com", $subject, $email_body, "itshadyy@gmail.com");
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=6,user-scalable=yes">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">

        <title>Hady Korshem</title>

        <link rel="icon" href="media/Logo.webp">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-tablet.css">
        <link rel="stylesheet" href="css/style-mobile.css">


        <meta name="description"
            content="Hady Korshem - Experienced Web Developer adapts in all stages of advanced web development. Knowledgeable in user interace, testing, and debugging processes. Bringing forth expertise in the design, installation, testing and maintenance of websites. Able to effectively self-manage during independent projects, as well as collaborate in a team setting.">

        <meta name="keywords"
            content="graphic design, web design, fron-end web development, web development, html, css, javascript, jquery, vanillajs, website design, website development, responsive, responsive web design, responsive web development, web dev, how to design a website, frontend web developer, web developer in egypt, egypt, remote, freelance, web designer in egypt, web design, front-end application, Shopify, shopify developer, shopify developer in Egypt">

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>

    <body>
        <div class="container">
            <header>
                <div class="header">
                    <div class="logo">
                        <img src="media/Logo.webp" alt="Hady Korshem Logo">
                    </div>
                    <div class="links">
                        <ul>
                            <li><a href="#projects">Projects</a></li>
                            <li><a href="#skills">Skills</a></li>
                            <li><a href="#resume">Resume</a></li>
                            <li><a href="#testimonials">Testimonials</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <h1 class="title">Designer & Frontend Web Developer</h1>
                <p>I craft solid and scalable frontend products with great user experiences.</p>

                <img src="media/Header.webp" alt="HK Header" class="header-img">
            </header>

            <div class="home">
                <div class="home01" id="resume">
                    <h1 class="title">Hi, I'm Hady Korshem</h1>
                    <p>Dive into the mesmerizing world of a frontend web developer's spellbinding creations, carefully
                        crafted to bewitch your senses and leave a lasting impression.</p>
                    <h2>I Build & Design Stuff!</h2>
                    <a href="HadyKorshem_Resume.pdf" download>
                        <button class="cool-button" data-text="Hady Korshem">
                            <span>Download My Resume</span>
                        </button>
                    </a>
                </div>

                <div class="grid">
                    <a href="#projects" class="card-l projects">
                        <div class="card card-l">
                            <h2>Projects</h2>
                            <p>Enthralling web experiences.</p>
                            <div class="card-image card01"></div>
                        </div>
                    </a>

                    <a href="#skills" class="skills">
                        <div class="card">
                            <h2>Skills</h2>
                            <p>Magical coding abilities.</p>
                            <div class="card-image card02"></div>
                        </div>
                    </a>

                    <div class="card contact" id="contact">
                        <h2>Contact</h2>
                        <p>Let's queue up a chat!</p>
                        <form action="index.php" class="contact-form">
                            <input type="text" placeholder="Name" required name="name">
                            <input type="email" placeholder="Email" required name="email">
                            <textarea name="" id="" cols="30" rows="3"
                                placeholder="Hi, I think I need a website for our company X. How soon can you hop on to discuss this!"
                                name="message"></textarea>
                            <input type="submit" value="Send Message">
                        </form>
                    </div>

                    <div class="card card-l testimonials" id="testimonials">
                        <h2>Testimonials</h2>
                        <p>Praises from enchanted clients.</p>
                        <div class="slideshow-container">

                            <div class="mySlides fade">
                                <p>“I think highly of Hady. He is intelligent, careful, mature, thorough, and
                                    enthusiastic in his work. He has a pleasing, caring and leading personality and
                                    relates well with peers and faculty members. I have great confidence that Hady will
                                    be a valuable asset to your institution. I fully recommend him to be appointed as a
                                    front-end or/and back-end web developer,
                                    and
                                    I
                                    have strong reasons that he will shine
                                    in whatever work situation he takes up.”</p>
                                <h3> <a href="http://www.aliallam.net/">Dr. Ali Allam</a></h3>
                                <p>Lecturer & Researcher, Arab Academy for Science & Technology</p>
                                <p><a href="http://www.aliallam.net/"><i>aliallam.net</i></a></p>
                            </div>

                            <div class="mySlides fade">
                                <p>“I wasn't completely aware of the word professional until I worked with Hady, he
                                    always
                                    knew
                                    where he is heading and when he
                                    should take his next step. Also, he is detail-oriented in an unbelievable way, he
                                    never
                                    settles for less, he always manages his
                                    tasks perfectly and he is aware of where he is standing afterwards he set a plan for
                                    his
                                    next step! On the other hand, Hady is not
                                    anywhere near the word selfish he is always informative he loves to share all the
                                    information he carries and he share it in a very
                                    professional yet so simple way. Hady is a great addition to any place or even a
                                    person
                                    actually! I would always be proud that I knew
                                    Hady in this phase in my life as I have learnt a lot from him actually and I am
                                    pretty
                                    sure
                                    anyone would be too!”</p>
                                <h3>Nadeen Galal</h3>
                                <p>SDGs Ambassador / Teaching Assistant</p>
                            </div>

                            <div class="mySlides fade">
                                <p>“We meet people everyday but few of them only leave an imprint, and one of those few
                                    people
                                    is
                                    Hady.
                                    I was totally impressed by Hady’s ability to handle any situation calmly and
                                    patiently,
                                    even
                                    with the toughest situations.
                                    This natural skill of his, has helped us throughout our journey. Hady is very
                                    passionate
                                    and
                                    has great vision for his work.
                                    His focus keeps everything moving smoothly, he makes sure all the deadlines are met,
                                    and
                                    makes sure that whatever project he is working on meets the highest standards.
                                    Hady is a joy to work with. He handled 'The Club Plus’s' Website, with aplomb and
                                    diligence,
                                    displaying the ability to follow creative direction while adding his own
                                    creative input in a diplomatic and useful way. His work led to an increase in
                                    click-troughs.
                                    I genuinely and highly recommend Hady,
                                    he’s an extremely valuable person to have in your network.”</p>
                                <h3>Mirette I. Iskander</h3>
                                <p>Regional HR Specialist - OBS</p>
                            </div>

                            <span class="prev" onclick="plusSlides(-1)" aria-label="Previous Button">&#10094;</span>
                            <span class="next" onclick="plusSlides(1)" aria-label="Next Button">&#10095;</span>

                        </div>
                        <br>

                        <div style="text-align:center; margin-top:20px;">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                </div>

                <div class="home02" id="skills">
                    <h1 class="title">Skills</h1>
                    <div class="grid">
                        <h4>
                            Armed with a powerful coding wand, I dexterously conjure up enchanting visuals
                            backed by an intricate spellbook of technologies. I'm probably not the typical designer
                            positioned behind an Illustrator artboard adjusting pixels, but I design. Immersed in
                            stylesheets tweaking font sizes and contemplating layouts is where you'll find me. I'm
                            committed to creating fluent user experiences while staying fashionable. In
                            building/developing my designs and web pages, I'm equipped with just the right tools, and
                            can absolutely function independently of them to deliver fast, resilient solutions optimized
                            for scale—performance and scalability are priorities on my radar. <br>
                        </h4>
                        <ul class="home02-grid">
                            <li class="skill">HTML5</li>
                            <li class="skill">CSS3</li>
                            <li class="skill">JavaScript</li>
                            <li class="skill">jQuery</li>
                            <li class="skill">ReactJS</li>
                            <li class="skill">VanillaJS</li>
                            <li class="skill">CSS Frameworks</li>
                            <li class="skill">PHP</li>
                            <li class="skill">Python</li>
                            <li class="skill">Responsive Design</li>
                            <li class="skill">Git & Github</li>
                            <li class="skill">Testing / Debugging</li>
                        </ul>
                    </div>

                    <!-- <h3>My coding wand is a potent tool, weaving intricate spells of technology that bring enchanting
                        visuals to life with ease.</h3> -->

                </div>

                <div class="home03" id="projects">
                    <h1 class="title">Featured Projects</h1>
                    <p>
                        Selected projects I've worked on in the past. Want to see more? <a
                            href="mailto:hady@korshem.com"><i><u>Email me.</u></i></a>
                    </p>
                    <div class="grid">
                        <div class="project">
                            <a href="https://outdoors.korshem.com">
                                <img src="media/projects/outdoors.webp" alt="The Great Outdoors"  loading="lazy">
                            </a>
                            <p>
                                <a href="https://outdoors.korshem.com" class="local_link">The Great Outdoors</a>
                                <br>
                                <a href="https://outdoors.korshem.com"><i>outdoors.korshem.com</i></a>
                            </p>
                        </div>

                        <div class="project">
                            <a href="https://bay.korshem.com">
                                <img src="media/projects/bay.webp" alt="The Bay Logo"  loading="lazy">
                            </a>
                            <p>
                                <a href="https://bay.korshem.com" class="local_link">The Bay -- 18</a>
                                <br>
                                <a href="https://bay.korshem.com"><i>bay.korshem.com</i></a>
                            </p>
                        </div>

                        <!-- <div class="project" >
                            <a href="https://thoughts.korshem.com">
                                <img src="media/thoughts.jpg" alt="Thoughts Logo">
                            </a>
                            <p>
                                <a href="https://thoughts.korshem.com" class="local_link">Thoughts - Personal Blog</a>
                                <br>
                                <a href="https://thoughts.korshem.com"><i>thoughts.korshem.com</i></a>
                            </p>
                        </div> -->

                        <div class="project">
                            <a href="https://ivory-hk.com">
                                <img src="media/projects/ivory.webp" alt="ivory."  loading="lazy">
                            </a>
                            <p>
                                <a href="https://ivory-hk.com" class="local_link">ivory.</a> <br>
                                <a href="https://ivory-hk.com"><i>ivory-hk.com</i></a>
                            </p>
                        </div>

                        <div class="project">
                            <a href="https://gaia.korshem.com">
                                <img src="media/projects/gaia.webp" alt=" Logo"  loading="lazy">
                            </a>
                            <p>
                                <a href="https://gaia.korshem.com" class="local_link">GAIA - E-Commerce</a> <br>
                                <a href="https://gaia.korshem.com"><i>gaia.korshem.com</i></a>
                            </p>
                        </div>

                    </div>

                    <!-- Hidden Projects Section-->

                    <div class="moreButton">
                        <button id="more">Want to see more!</button>
                    </div>

                    <section id="hiddenSection">
                        <div class="grid">
                            <div class="project">
                                <a href="https://stroop.korshem.com">
                                    <img src="media/projects/stroop.webp" alt=" Logo"  loading="lazy">
                                </a>
                                <p>
                                    <a href="https://stroop.korshem.com" class="local_link">STROOP - Development
                                        Agency</a>
                                    <br>
                                    <a href="https://stroop.korshem.com"><i>stroop.korshem.com</i></a>
                                </p>
                            </div>

                            <div class="project">
                                <a href="https://lavie.korshem.com">
                                    <img src="media/projects/lavie.webp" alt=" Logo"  loading="lazy">
                                </a>
                                <p>
                                    <a href="https://lavie.korshem.com" class="local_link">LaVie - Luxurious
                                        Restaurant</a>
                                    <br>
                                    <a href="https://lavie.korshem.com"><i>LaVie.korshem.com</i></a>
                                </p>
                            </div>

                            <div class="project">
                                <a href="https://haus.korshem.com">
                                    <img src="media/projects/haus.webp" alt=" Logo"  loading="lazy">
                                </a>
                                <p>
                                    <a href="https://haus.korshem.com" class="local_link">HAUS - Landing Page</a> <br>
                                    <a href="https://haus.korshem.com"><i>haus.korshem.com</i></a>
                                </p>
                            </div>

                            <div class="project">
                                <a href="https://cd.korshem.com">
                                    <img src="media/projects/coffee_design.webp" alt=" Logo"  loading="lazy">
                                </a>
                                <p>
                                    <a href="https://cd.korshem.com" class="local_link">Coffee & Design - Landing
                                        Page</a>
                                    <br>
                                    <a href="https://cd.korshem.com"><i>cd.korshem.com</i></a>
                                </p>
                            </div>

                            <div class="project">
                                <a href="https://grange.korshem.com">
                                    <img src="media/projects/grange.webp" alt="Grange Logo"  loading="lazy">
                                </a>
                                <p>
                                    <a href="https://grange.korshem.com" class="local_link">Grange - Landing
                                        Page</a>
                                    <br>
                                    <a href="https://grange.korshem.com"><i>grange.korshem.com</i></a>
                                </p>
                            </div>

                            <!-- <div class="project">
                                <a href="spectrum.html">
                                    <img src="spectrum/spectrum.jpg" alt="Spectrum">
                                </a>
                                <p>
                                    <a href="spectrum.html" class="local_link">Spectrum</a>
                                    <br><br>
                                </p>
                            </div> -->

                            <div class="project">
                                <a href="https://abowafa.com">
                                    <img src="media/projects/wafa.webp" alt=" Logo"  loading="lazy">
                                </a>
                                <p>
                                    <a href="https://abowafa.com" class="local_link">Abo ElWafa - Filmmaker</a> <br>
                                    <a href="https://abowafa.com"><i>abowafa.com</i></a>
                                </p>
                            </div>

                            <!-- <div class="project">
                                <a href="travel.html">
                                    <img src="media/travel.jpg" alt="Travel">
                                </a>
                                <p>
                                    <a href="travel.html" class="local_link">Traveling Agency - Landing Page</a>
                                    <br><br>
                                </p>
                            </div>
    
                            <div class="project">
                                <a href="wall_of_wonder.html">
                                    <img src="media/wall_of_wonder.jpg" alt="Wall of Wonder">
                                </a>
                                <p>
                                    <a href="wall_of_wonder.html" class="local_link">Wall of Wonder - Landing Page</a>
                                    <br><br>
                                </p>
                            </div>
    
                            <div class="project">
                                <a href="stroopSalad.html">
                                    <img src="media/stroopsalad.png" alt="StroopSalad">
                                </a>
                                <p>
                                    <a href="stroopSalad.html" class="local_link">StroopSalad - Landing Page</a>
                                    <br><br>
                                </p>
                            </div>
    
                            <div class="project">
                                <a href="hunters.html">
                                    <img src="media/hunters.png" alt="Hunters' Coffee">
                                </a>
                                <p>
                                    <a href="hunters.html" class="local_link">Hunters' Coffee</a>
                                    <br><br>
                                </p>
                            </div>
    
                            <div class="project">
                                <a href="billy.html">
                                    <img src="media/billy.png" alt="Billy's Burger">
                                </a>
                                <p>
                                    <a href="billy.html" class="local_link">Billy's Burger</a>
                                    <br><br>
                                </p>
                            </div> -->

                            <div class="project">
                                <a href="https://korshem.com/">
                                    <img src="media/projects/hk.webp" alt="Hady Korshem"  loading="lazy">
                                </a>
                                <p>
                                    <a href="https://korshem.com/" class="local_link">Hady Korshem - Portfolio</a> <br>
                                    <a href="https://korshem.com/"><i>korshem.com</i></a>
                                </p>
                            </div>

                            <!-- <div class="project">
                                <a href="club.html">
                                    <img src="media/TheClubPlus.png" alt="The Club Plus">
                                </a>
                                <p>
                                    <a href="club.html" class="local_link">The Club Plus</a>
                                    <br><br>
                                </p>
                            </div> -->
                        </div>
                    </section>

                    <!-- <div class="projects-section">
                        <p>Like my work and want something similar for your company? Sure, let's get to business!</p>
                        <a href="HadyKorshem_Resume.pdf" download>
                            <button class="cool-button" data-text="Shoot!">
                                <span>Start a conversation!</span>
                            </button>
                        </a>
                    </div> -->

                </div>

            </div>

            <footer>

                <a href="https://korshem.com">
                    <img src="media/Logo02.webp" alt="Hady Korshem Logo" width="80px">
                </a>



                <h5>Living, learning, & leveling up<br>one day at a time.</h5>



                <div class="social-media">
                    <ul>
                        <li><a href="https://github.com/itsHadyy" aria-label="GitHub"><i class="fa fa-github"
                                    aria-hidden="true"></i></a>
                        </li>

                        <li><a href="mailto:hady@korshem.com" aria-label="Email"><i class="fa fa-envelope"
                                    aria-hidden="true"></i></a>
                        </li>

                        <li><a href="https://www.linkedin.com/in/korshem/" aria-label="LinkedIn"><i
                                    class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                        <li><a href="https://twitter.com/itshadyy" aria-label="Twitter"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a>
                        </li>

                        <li><a href="https://www.instagram.com/itshadyy/" aria-label="Instagram"><i
                                    class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

                <p>Handcrafted by Hady Korshem &copy; 2023</p>

            </footer>
        </div>

        <script src="script/script.js"></script>
        <script src="script/transitions.js"></script>
    </body>

</html>