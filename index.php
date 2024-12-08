<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Financial Advisory website</title>
        <link rel="stylesheet" href="stylesheet.css">
        <link rel="icon" href="amasikaLogo.jpg" type="image/jpg">
    </head>
    <body>
        <script src="script.js"></script>
         <!-- Nav for the header below -->
         <div class="headers">
            <a href="#link_to_home"><img id="logo" src="amasikaLogo.jpg" alt="logo"></a>
            <nav class="navbar">
                <div class="center-links">
                    <a href="#link_to_home">Home</a>
                    <a href="#link_services">Services</a>
                    <a href="#link_plans">Plan & Price</a>
                    <a href="#contact_us">Contact Us</a>
                </div>
                <div class="right-links">
                    <a class="login" href="login.html">Login</a>
                    <a class="sign-up" href="sign-up.html">Sign-Up</a>
                </div>
            </nav>
        </div>
        
        <!--slide the images --> 
        <div class="slideshow-container">
        <div id="link_to_home"></div>
        <div class="mySlides fade">
            <div class="numbertext">1 / 6</div>
                <img src="image1.jpg" alt="Image 1" style="width:100%">
            <div class="text">One on One Advisory</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 6</div>
                <img src="image2.jpg" alt="Image 2" style="width:100%">
            <div class="text">Group Advisory</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 6</div>
                <img src="image3.jpg" alt="Image 3" style="width:100%">
            <div class="text">Get Advisory with Your Patner</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 6</div>
                <img src="image4.jpg" alt="Image 4" style="width:100%">
            <div class="text">All devices are supported</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 6</div>
            <img src="image5.jpg" alt="Image 5" style="width:100%">
            <div class="text">Amasika Is Home</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">6 / 6</div>
                <img src="image6.jpg" alt="Image 6" style="width:100%">
            <div class="text">We Support All Industries</div>
        </div>
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
        </div>
        <div class="timer">
            <h2>Promo Plans: </h2>
            <p id="timer"></p>
        </div>
        <div id="about-us">
            <h1>Amasika Advisory</h1>
            <blockquote>
                "Financial literacy isn't a luxury,"It's a right." 
                <cite>— Ohene, CEO</cite>
            </blockquote>
            
            <h2>The Coin That Changed Everything</h2>
            <button onclick="myFunction()" id="myBtn">Read more</button>
            <span id="readMore">...</span>
            <span id="more">
                <p>Ohene remembered the exact moment everything shifted. It was a dusty afternoon, his grandmother's weathered hands holding up a single coin, sunlight glinting off its surface. 
                </br></br>"This coin," she said, her eyes sparkling with wisdom, "is more powerful than you can imagine."
                He was just twelve then, watching her carefully polish the coin that seemed to hold some mysterious secret. "Money isn't just about having," she continued, "it's about understanding." </br>
                Years later, those words echoed in the sleek conference room where AmaSika Advisory was born. Ohene and his co-founders weren't just starting a company—they were starting a revolution of financial understanding.</br>
                The coin his grandmother had kept? It sat on his desk—a reminder that true wealth begins with a single moment of clarity.
                "Financial literacy isn't a luxury," Ohene would tell clients. "It's a right." </br>
                One coin. Infinite possibilities.
                </p>
            </span>
        </div>
        <div class="container">
            <div class="section vision">
                <img src="image7.jpg" alt="Vision Image" class="section-img">
                <h2>Vision</h2>
                <p>Empower individuals, businesses, and communities by fostering financial literacy and delivering innovative, culturally grounded financial solutions that drive sustainable prosperity and growth.</p>
            </div>
            <div class="section mission">
                <img src="image8.png" alt="Mission Image" class="section-img">
                <h2>Mission</h2>

                <ul>
                    <li>Provide expert financial advisory services that combine global best practices with localized insights.</li>
                    <li>Promote financial education and awareness, enabling clients to make informed decisions.</li>
                    <li>Bridge cultural and financial gaps between regions by integrating diverse financial perspectives.</li>
                </ul>
            </div>
        </div>

        <div id="link_services"></div>
        <div class="services">
            <h2>Our Services</h2>
            <ul>
                <li>
                    <p>Personalized financial planning tailored for retirement, education, and major purchases.</p>
                </li>
                <li>
                    <p>AI-assisted financial advisory for informed decision-making and validation.</p>
                </li>
                <li>
                    <p>Interactive data visualization with charts, diagrams, and alerts.</p>
                </li>
                <li>
                    <p>Secure client portal for tracking financial goals and accessing personalized plans.</p>
                </li>
                <li>
                    <p>Extensive educational resources to promote financial literacy.</p>
                </li>
            </ul>
        </div>
        <div id="link_plans"></div>
        <div class="av_plans"><h2>Our Plans</h2></div>
        <!-- fetching the plan.php -->
        <?php include 'plan.php'; ?>
        <div class="contact_container">
            <h1>Contact Us</h1>
            <p>We value your questions and feedback! Feel free to reach out to us:</p>

            <!-- General Inquiries -->
            <a class="link" href="mailto:info@amasikaadvisory.com">
                <div class="contact-department">
                    <div class="icon">📧</div>
                    <h4>General Inquiries</h4>
                    <p>Email: info@amasikaadvisory.com</p>
                    <p>Phone: +1 123-456-7890</p>
                    <p>Hours: Mon-Fri, 9:00 AM - 6:00 PM</p>
                </div>
            </a>

            <!-- Customer Support -->
            <a class="link" href="mailto:support@amasikaadvisory.com">
                <div class="contact-department">
                    <div class="icon">🛠️</div>
                    <h4>Customer Support</h4>
                    <p>Email: support@amasikaadvisory.com</p>
                    <p>Phone: +1 987-654-3210</p>
                    <p>Hours: 24/7</p>
                </div>
            </a>

            <!-- Partnerships -->
            <a class="link" href="mailto:partnerships@amasikaadvisory.com">
                <div class="contact-department">
                    <div class="icon">🤝</div>
                    <h4>Partnerships</h4>
                    <p>Email: partnerships@amasikaadvisory.com</p>
                    <p>Phone: +1 555-123-4567</p>
                    <p>Hours: Mon-Fri, 10:00 AM - 5:00 PM</p>
                </div>
            </a>

            <p>We look forward to hearing from you!</p>
        </div>
    </body>
</html>
