
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5eb26f0a00.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./styles.css">
    <script src="index.js"></script>
    <title>Avanza | Digital Services</title>
</head>
<body>
    <div id="offer-banner">
        <p>Now offering free services to our first 5 local clients</p>
    </div>
    
    <div id="main-banner">
        <header>
            <div id="logo">
              <img src="./images/logo.png" alt="">
            </div>
            <div id="menu-icon">
                <div class="menu-line"></div>
                <div class="menu-line"></div>
                <div class="menu-line"></div>
            </div>
            <div id="mobile-nav">
                <a href="" id="x">x</a>
                <a href="">WORK</a>
                <a href="">APPROACH</a>
                <a href="">SERVICES</a>
                <a href="">LET'S TALK</a>
            </div>
            <nav id="nav">
                <a href="">WORK</a>
                <a href="">APPROACH</a>
                <a href="">SERVICES</a>
                <a href="">GET A QUOTE</a>
            </nav>
        </header>

        <div id="banner-content" class="container-90">
            <div id="big-a">
                <img src="./images/biga.png" alt="">
            </div>
            <h1>We drive persistent growth for local businesses-</h1>
            <p>We are not satisfied with doing the bare minimum,</p>
            <p>We understand what it takes to run and grow a business.</p>
            <button class="green-btn">Learn More</button>
        </div>
        <div class="custom-shape-divider-bottom-1600263895">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>
    <div id="services" class="container-90">
        <h1>our digital solutions</h1>
        <div id="services-container">
            <div class="service">
                <div class="service-img">
                    <img src="./images/seo.png" alt="seo-icon">
                </div>
                <div class="service-content">
                    <h1>SEO</h1>
                    <p>Custom strategies focused on building awareness,
                        converting more customers.
                    </p>
                </div>
            </div> 
            <div class="service">
                <div class="service-img">
                    <img src="./images/social.png" alt="social-media-icon">
                </div>
                <div class="service-content">
                    <h1>Social Media</h1>
                    <p>Custom strategies focused on building awareness,
                        converting more customers.
                    </p>
                </div>
            </div>  
            <div class="service">
                <div class="service-img">
                    <img src="./images/websites.png" alt="social-media-icon">
                </div>
                <div class="service-content">
                    <h1>Websites</h1>
                    <p>Our websites are build with conversion in mind. 
                    We believe design should be both beautiful, 
                    engaging and functional.
                    </p>
                </div>
            </div>  
            <div class="service">
                <div class="service-img">
                    <img src="./images/advertising.png" alt="social-media-icon">
                </div>
                <div class="service-content">
                    <h1>Advertising</h1>
                    <p>Custom strategies focused on building awareness,
                        converting more customers.
                    </p>
                </div>
            </div>  
        </div>
    </div>
    <div id="activate-brand" >
        <div id="activate-left">
            <div id="blue-line"></div>
            <h1>Activate<br>your brand's<br>potential.</h1>
        </div>
        <div id="activate-right">
            <p>Avanza is a digital agency and product innovation firm that offers strategy,
                design, and technology services to the world's most ambitious small businesses
                and brands. Leveraging our design driven approach to build cutting-edge digital
                solutions.
            </p>
            <a class="learn-more" href="">Learn More >></a>
        </div>
    </div>

    <div id="contact-section" class="vertical-gradient">

        <div id="contact-section-content" >

            <div id="contact-lets-work">
                <div id="contact-text">
                    <h1>Let's Work Together!</h1>
                    <p>To request a quote or want to meet up for coffee.<br>
                        Contact us directly or fill out the form and we
                        will get back to you promptly.
                    </p>
                </div>
                <div id="contact-social">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div id="contact-form" class="light-shadow">
                <form action="webform.php" method="POST" id="form-node">
                    <h3>We'd love to know more about you!</h3>
                    <p class="form-error"></p>
                    <div id="name-email">
                        <input id="name" type="text" placeholder="*Your Name" name="name" require>
                        <input type="email" placeholder="*Email" name="email" require>
                    </div>
                    <input type="text" placeholder="*Company Name" name="company">
                    <input type="text" placeholder="Your Website URL (optional)" name="website-url">
                    <textarea name="message" rows="1" placeholder="*Your Message" require></textarea>
                    <h4>What services can we provide for you?</h4>
                    <div id="contact-checkboxes">
                        <div class="service-checkboxes">
                            <div id="checkboxes-left">
                                <div>
                                    <input id="seo" name="seo" type="checkbox">
                                    <label for="seo">SEO </label>
                                </div>
                                <div>
                                    <input id="web-design" name="web-design" type="checkbox">
                                    <label for="web-design">Web Design </label>
                                </div>
                            </div>
                            <div id="checkboxes-right">
                                <div>
                                    <input id="advertising" name="advertising" type="checkbox">
                                    <label for="advertising">Advertising </label>
                                </div>
                                <div>
                                    <input id="social-media" name="social-media" type="checkbox">
                                    <label for="social-media">Social Media </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Submit">
                </form>
            </div>

        </div>

        <div class="custom-shape-divider-bottom-1602159274">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>

    </div>

    <div id="testimonials">
        <h1>Our Clients Get Results</h1>
        <div id="testimonial-boxes" class="container-90">
            <div class="testimonial">
                <div class="customer-info">
                    <div class="info-img">
                        <img src="./images/carla-round-portrait.png" alt="">
                    </div>
                    <div class="info-content">
                        <h2>Carla Sahagun</h2>
                        <p>Software Engineer</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    Avanza has been extremely helpful working with my 
                    small team of developers. The article is intended
                    for novice illustrators and Adobe Photoshop.
                </div>
            </div>
            <div class="testimonial">
                <div class="customer-info">
                    <div class="info-img">
                        <img src="./images/carla-round-portrait.png" alt="">
                    </div>
                    <div class="info-content">
                            <h2>Carla Sahagun</h2>
                            <p>Software Engineer</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        Avanza has been extremely helpful working with my 
                        small team of developers. The article is intended
                        for novice illustrators and Adobe Photoshop.
                    </div>
                </div>
                <div class="testimonial">
                    <div class="customer-info">
                        <div class="info-img">
                            <img src="./images/carla-round-portrait.png" alt="">
                        </div>
                        <div class="info-content">
                            <h2>Carla Sahagun</h2>
                            <p>Software Engineer</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        Avanza has been extremely helpful working with my 
                        small team of developers. The article is intended
                        for novice illustrators and Adobe Photoshop.
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <footer class="horizontal-gradient">
        <div class="custom-shape-divider-top-1603992979">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
        <div id="footer-header">
            <h1>Ready to grow your business?</h1>
            <p>Click the button below for a free proposal</p>
            <button class="green-btn">Get Quote</button>
        </div>
        <div id="footer-social">
            <div class="thin-white-line"></div>
            <div id="social-links">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-linkedin-in"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
            </div>
            <div class="thin-white-line"></div>
        </div>
        <div id="copy-right">
            Copyright © 2020 Avanza. Herndon, VA
        </div>
    </footer>

</body>
</html>