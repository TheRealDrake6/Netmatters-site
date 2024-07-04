<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="hamburger/hamburger.css">
        <link rel="stylesheet" href="scss/application.css">
        <title>Full Service Digital Agency | Cambridgeshire & Norfolk | Netmatters</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">  
</head>
<body style="overflow: auto;">
        <div class="overlay" style="display: none;"></div>
        <div class="clickableoverlay" style="display: none;"></div>
        <div class="main-body">
            <?php include 'header.php';?>
        </div>
        <div class="breadcrumb-container">
            <div class="main-container">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Our Offices</li>
                </ul>
            </div>
        </div>
        <div class="news">
            <div class="main-container">
                <div class="news-title">
                    <h2>Our Offices</h2>
                </div>
                <div class="news-box">
                    <div class="news-1">
                        <a href="#" class="article"></a>
                        <div class="news-container-img">
                            <a href="#" class="news-img-link">
                                <img src="images/cambridge.jpg" class="news-img" alt="Cambridge Office">
                            </a>
                        </div>
                        <div class="office-text-1">
                            <a href="#">Cambridge Office</a>
                            <p>Unit 1.31,<br>
                            St John's Innovation Centre,<br>
                            Cowley Road, Milton,<br>
                            Cambridge,<br>
                            CB4 0WS</p>
                            <h3>01223 37 57 72</h3>
                            <span class="read-more read-more-web-design">View More</span>
                        </div>
                    </div>
                    <div class="news-1">
                        <a href="#" class="article"></a>
                        <div class="news-container-img">
                            <a href="#" class="news-img-link">
                                <img src="images/wymondham.jpg" class="news-img" alt="Wymondham Office">
                            </a>
                        </div>
                        <div class="office-text-1">
                            <a href="#">Wymondham Office</a>
                            <p>Unit 15,<br>
                            Penfold Drive,<br>
                            Gateway 11 Business Park,<br>                                
                            Wymondham, Norfolk,<br>
                            NR18 0WZ</p>
                            <h3>01603 70 40 20</h3>
                            <span class="read-more read-more-web-design">View More</span>
                        </div>
                    </div>
                    <div class="news-1">
                        <a href="#" class="article"></a>
                        <div class="news-container-img">
                            <a href="#" class="news-img-link">
                                <img src="images/yarmouth-2.jpg" class="news-img" alt="Great Yarmouth Office">
                            </a>
                        </div>
                        <div class="office-text-1">
                            <a href="#">Great Yarmouth Office</a>
                            <p>Suite F23,<br>
                            Beacon Innovation Centre,<br>
                            Beacon Park, Gorleston,<br>
                            Great Yarmouth, Norfolk,<br>
                            NR31 7RA</p>
                            <h3>01493 60 32 04</h3>
                            <span class="read-more read-more-web-design">View More</span>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <div class="bottom-section">
            <div class="contact-row">
                <div class="contact-details">
                    <div>
                        <div class="contact-block">
                            <p>
                                <strong>Email us on:</strong>
                                <br>
                            </p>
                            <p>
                                <a href="#" class="h3 text-web">sales@netmatters.com</a>
                            </p>
                            <p>
                                <strong>Business hours:</strong>
                            </p>
                            <p>
                                <strong>Monday - Friday 07:00 - 18:00</strong>
                            </p>
                            <div class="accordion">Out of Hours IT Support </div>
                            <div class="panel">
                                <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                                <p>
                                    <strong>Monday - Friday 18:00 - 22:00 Saturday</strong>
                                    <strong>08:00 - 16:00</strong>
                                    <br>
                                    <strong>Sunday 10:00 - 18:00</strong>
                                </p>
                                <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form id="contact-form" method="post" action="validate.php">
                        <div class="contact-row">
                            <div class="input-col">
                                <div class="form-group">
                                    <label for="name" class="required">Your Name</label>
                                    <input class="form-control" name="name" type="text" value id="name" id="name" >
                                </div>
                            </div>
                            <div class="input-col">
                                <div class="form-group">
                                    <label for="company">Company Name</label>
                                    <input class="form-control" name="company" type="text" value id="company" id="company">
                                </div>
                            </div>
                            <div class="input-col">
                                <div class="form-group">
                                    <label for="email" class="required">Your Email</label>
                                    <input class="form-control" name="email" type="text" value id="email" id="email" >
                                </div>
                            </div>
                            <div class="input-col">
                                <div class="form-group">
                                    <label for="telephone" class="required">Your Telephone Number</label>
                                    <input class="form-control" name="telephone" type="text" value id="telephone" id="telephone" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="message" class="required">Message</label>
                                <textarea class="form-control" name="message" cols="50" rows="10" id="message" id="message" >Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?</textarea>
                        </div>
                        <div class="marketing-info contact-tick">
                            <span class="checkbox">
                                <input class="marketing-check" id="check" type="checkbox">
                                <label for="check">
                                    
                                </label>
                            </span>
                            <label for="check" class="newsletter-marketing">
                                please tick this box if you wish to recieve marketing information from us. Please see our 
                                <a href="index.php" target="_blank">Privacy Policy</a>
                                for more information on how we keep your data safe.
                            </label>
                        </div>
                        <div class="form-group form-label recaptcha-terms">
                            <span>
                                This site is protected by reCAPTCHA and the Google 
                                <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">Privacy Policy</a>
                                 and
                                <a href="https://policies.google.com/terms" target="_blank" rel="noopener noreferrer">Terms of Service</a>
                                 apply
                            </span>
                        </div>
                        <div class="action-block">
                            <button class="subscribe-btn form-btn">Send Enquiry</button>
                            <small class="helper-text">
                                <span class="text-danger">*</span>
                                 Fields Required
                            </small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include 'footer.php';?>
        <?php include 'menu.php';?>
        <?php include 'databaseconnect.php';?>
        <?php include 'validate.php';?>
        <script src="js/jquery.js"></script>
        <script src="js/variables.js"></script>
        <script src="js/validation.js"></script>
        <script src="js/hamburger.js"></script>
        <script src="js/stickynav.js"></script>
        <script src="js/accordion.js"></script>
        <!-- <script src="js/cookies.js"></script> -->
</body>