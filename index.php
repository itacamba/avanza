<?php include('form_process.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/5eb26f0a00.js" crossorigin="anonymous"></script>
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Freight Sans Pro -->
    <link rel="stylesheet" href="https://use.typekit.net/bwj1mbu.css">
    <link rel="icon" type="image/png"  href="./images/favicon.png">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="./animations.css">
    <title>Avanza | Full Service Digital Marketing in Virginia</title>
</head>
<body>
    <?php
    if($form_message == 'success'){
    ?>
    <h1 id="green-message">Success!</h1>
    <?php
    } else if($form_message == 'failed'){
    ?>
    <h1 id="red-message">Make sure Form is filled correctly</h1>
    <?php
    }
    ?>
    <div id="offer-banner">
        <p>Now offering free services to our first 5 local clients </p>
    </div>
    <div id="main-banner">
        <header>
            <div class="logo">
              <img src="./images/logo.png" alt="">
            </div>
            <div id="menu-icon">
                <div class="menu-line"></div>
                <div class="menu-line"></div>
                <div class="menu-line"></div>
            </div>
            <div id="mobile-nav">
                <div id="mobile-nav-links">
                    <div id="mobile-nav-header">
                        <div id="x">x</div>
                        <div id="mobile-nav-call">
                            <a href="tel:5719829406"><i class="fas fa-phone-alt"></i>Call</a>
                        </div>
                    </div>
                    <a data-scroll href="#services" >SERVICES</a>
                    <a data-scroll href="#process" class="" >APPROACH</a>
                    <a data-scroll href="#projects" class="" >WORK</a>
                    <a data-scroll href="#contact-section">LET'S CONNECT</a>

                    <div class="contact-social">
                        <a href="https://m.facebook.com/AvanzaDigitalUSA" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/digital_avanza" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/avanza-digital" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://g.co/kgs/L2wSGn" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                </div>

            </div>
            <nav id="nav">
                <a data-scroll href="#services" >SERVICES</a>
                <a data-scroll href="#process" class="" >APPROACH</a>
                <a data-scroll href="#projects" class="">WORK</a>
                <a data-scroll href="#contact-section">LET'S CONNECT</a>
            </nav>
        </header>

        <div id="banner-content" class="container-90">
            <div id="big-a">
                <img src="./images/biga.png" alt="">
            </div>
            <h1>We drive persistent growth for local businesses-</h1>
            <p>We are not satisfied with doing the bare minimum,</p>
            <p>We understand what it takes to run and grow a business.</p>
            <a href="#contact-section" class="green-btn">Learn More</a>
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
            <a class="learn-more" href="#contact-section">Learn More >></a>
        </div>

    </div>

    <div id="process">
        <h1>This is how we do it</h1>
        <p>We listen, think, craft, and connect you to your ideal audiences.</p>
        <div id="process-container">
            <div class="each-process">
                <div class="each-process-icon">
                    <img src="./images/1-initial-consult.png" alt="">
                </div>
                <div class="each-process-content">
                    <h3>Initial Consultation</h3>
                    <p>We immerse ourselves in your world. What is your mission?
                        who is your audience? how do we reach them? Together
                        we define the path to achieve your goals.
                    </p>
                </div>
            </div>

            <div class="each-process">
                <div class="each-process-icon">
                    <img src="./images/2-plan-execut.png" alt="">
                </div>
                <div class="each-process-content">
                    <h3>Plan Execution</h3>
                    <p>Once approved, we’ll deliver the online marketing solution
                         you have chosen for your business. We’ll create inspiring
                          paths that lead customers to you through their social 
                          channels.
                    </p>
                </div>
            </div>

            <div class="each-process">
                <div class="each-process-icon">
                    <img src="./images/3-strategy-prop.png" alt="">
                </div>
                <div class="each-process-content">
                    <h3>Strategy Proposal</h3>
                    <p>From the information we’ve gathered, we will create and
                         present a marketing plan to fit your business needs. 
                         The result is engaging, effective content that drives 
                         brand interactions.
                    </p>
                </div>
            </div>

            <div class="each-process">
                <div class="each-process-icon">
                    <img src="./images/4-test-measure.png" alt="">
                </div>
                <div class="each-process-content">
                    <h3>Test & Measuring</h3>
                    <p>While our agency works on your campaigns, we’ll measure
                         the vital metrics that matter such as traffic and conversions.
                          Numbers don’t lie.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="projects">
        <h1>Featured Projects</h1>
        <p>Here are some of our most loved projects.</p>
        <div id="projects-container">
            <div class="project">
                <div class="project-img light-shadow">
                    <img src="./images/carla-project.png" alt="">
                </div>
            </div>
            <div class="project">
                <div class="project-img light-shadow">
                    <img src="./images/hardcover-project.png" alt="">
                </div>
            </div>
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
                <div class="contact-social">
                    <a href="https://m.facebook.com/AvanzaDigitalUSA" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/digital_avanza" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/avanza-digital"><i class="fab fa-linkedin-in" target="_blank"></i></a>
                    <a href="https://g.co/kgs/L2wSGn" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                </div>
            </div>

            <div id="contact-form" class="light-shadow">
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" id="form-node" >
                    <h3>We'd love to know more about you!</h3>   
                    <p><?= $error ?></p> 
                    <p class="error"></p>
                    <div id="name-email">
                        <input type="text" value="<?= $name ?>" placeholder="*Your Name" name="name" id="name" require />

                        <input type="email" value="<?= $email ?>" placeholder="*Email" name="email"id="email" require/>


                    </div>
                    <input type="tel" value="<?= $phone ?>" placeholder="*Phone Number (000-000-0000)"  name="phone" id="phone" require/>
                    
                    <input type="text" value="<?= $company ?>" placeholder="*Company Name" name="company" id="company"/>
                    
                    <input type="text" placeholder="Your Website URL (optional)" name="website_url" id="website_url"/>
                    <textarea type="text" value="<?= $message ?>" name="message" id="message" rows="1" placeholder="*Your Message" require></textarea>
                    

                    <h4>What services can we provide for you?</h4>
                    <div id="contact-checkboxes">
                        <div class="service-checkboxes">
                            <div id="checkboxes-left">
                                <div>
                                    <input name="seo" type="checkbox" id="seo">
                                    <label for="seo">SEO </label>
                                </div>
                                <div>
                                    <input name="web_design" id="web_design" type="checkbox">
                                    <label for="web_design" >Web Design </label>
                                </div>
                            </div>
                            <div id="checkboxes-right">
                                <div>
                                    <input name="advertising" id="advertising" type="checkbox">
                                    <label for="advertising">Advertising </label>
                                </div>
                                <div>
                                    <input  name="social_media" id="social_media" type="checkbox">
                                    <label for="social_media">Social Media </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Submit" name="submit">
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
                    <div class="testimonial-stars">
                        <img src="./images/stars.png" alt="">
                    </div>
                </div>
                <div class="testimonial-content">
                        These guys have done a great job helping me with my 
                        portfolio design. They have been very responsive 
                        and listened to all information I had to give and 
                        delivered great results in a timely manner. 
                        Thank you!
                </div>
            </div>
            <div class="testimonial">
                <div class="customer-info">
                    <div class="info-img">
                        <img src="./images/gigi-mercer.png" alt="">
                    </div>
                    <div class="info-content">
                        <h2>Gigi Mercer</h2>
                        <p>Founder of Silver Hour </p>
                    </div>
                    <div class="testimonial-stars">
                        <img src="./images/stars.png" alt="">
                    </div>
                </div>
                    <div class="testimonial-content">
                        Avanza made our website beautiful, informative and user 
                        friendly. The SEO service they offer helped our online 
                        presence tremendously. Not only are they great at their 
                        job, but they are creative and pleasant to work with. 
                        I’d definitely work with them again!
                    </div>
                </div>
                <div class="testimonial">
                    <div class="customer-info">
                        <div class="info-img">
                            <img src="./images/hardcover-profile.png" alt="">
                        </div>
                        <div class="info-content">
                            <h2>Samantha Hauvine</h2>
                            <p>Writer & Author</p>
                        </div>
                        <div class="testimonial-stars">
                            <img src="./images/stars.png" alt="">
                        </div>
                    </div>
                    <div class="testimonial-content">
                        Working with the Avanza team has been a 
                        most pleasant experience! Their dedication
                        and passion for what they do is exemplified 
                        by their customer support and attentiveness
                        to the specific needs of our business.
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <footer class="horizontal-gradient">
        <div class="custom-shape-divider-top-1604353830">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
            </svg>
        </div>
        <div id="footer-header">
            <h1>Ready to grow your business?</h1>
            <p>Click the button below for a free proposal</p>
            <div class="footer-contact-btn">
                <a href="#contact-section" class="green-btn">Get Quote</a>
            </div>
        </div>
        <div id="footer-social">
            <div class="thin-white-line"></div>
            <div id="social-links">
                <a href="https://m.facebook.com/AvanzaDigitalUSA" target="blank_"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.linkedin.com/company/avanza-digital" target="_blank"><i class="fab fa-linkedin-in" ></i></a>
                <a href="https://twitter.com/digital_avanza" target="blank_"><i class="fab fa-twitter"></i></a>
                <a href="" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                <!-- <a href=""><i class="fab fa-instagram"></i></a> -->
            </div>
            <div class="thin-white-line"></div>
        </div>
        <div id="copy-right">
            Copyright © 2020 Avanza. Herndon, VA
        </div>
    </footer>

    <div id="form-success">
        <div class="logo center top-25" id="success-logo">
            <img src="./images/a-logo.png" alt="">
        </div>
        <div id="success-text">
            <h1 class="center top-25">Thank you for contacting us!</h1>
            <p class="center top-25">You will receive an answer straight to your inbox in less than 24 hours.</p>
        </div>
    </div>
    <div id="form-failed">
        Problem Sending Form
    </div>




    <script src="index.js"></script>
    <!-- added smooth scrolling from library  https://github.com/cferdinandi/smooth-scroll -->
    <script src="cferdi_smoothscroll.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 100
        });
    </script>
    <!-- added JQuery Ajax to prevent refreshing page when submitting the form -->
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous">
    </script>
    <script src="form_submit_jquery.js"></script>
</body>
</html>
