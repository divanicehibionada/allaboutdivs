<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

  <title>Divanice Hibionada</title>
    <!--.................Custom Css Link.................-->
  <link rel="stylesheet" href="style1.css">
</head>
<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="img/logo.png" alt="logo">Divanice Hibionada</a>
        </div>
        <div class="toggle">
            <a href="#"><ion-icon name="menu-outline"></ion-icon></a>
        </div>
        <ul class="menu">
            <li><a href="#Home">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#PersonalInformation">Personal Information</a></li>
            <li><a href="#Skills">Skills</a></li>
            <li><a href="#Contact">Contact</a></li>
	          <a href="login.php" class="btn btn-dark" >Logout</a>
        </ul>
    </nav>
    <header>
        <div class="container header-container">
            <div class="header-left">
                <img src="img/profile.png" alt="">
            </div>
            <div class="header-right">
                <p><b>Hello, I'm</b></p>
                <h1>Divanice Hibionada</h1>
                <h2>BSIT Student</h2>
                <div class="header-action-aria">
                    <a href="img/DIVANICE G.pdf" class="btn" download="img/DIVANICE G.pdf">Download CV</a>
                    <a href="#Contact" class="btn btn-dark" >Contact info</a>
                </div>
                <div class="header-social">
                    <a href="https://www.linkedin.com/feed/"><img src="img/linkedin (1).png" class="icon1"></a>
                    <a href="https://github.com/divanicehibionada"><img src="img/github.png" class="icon1"></a>
                    <a href="https://www.facebook.com/divanice.hibionada.37/"><img src="img/facebook.png" class="icon1"></a>
                    <a href="https://mail.google.com/mail/u/0/?hl=en-GB#inbox"><img src="img/email.png" class="icon1"></a>
                    <a href="+63 9615589077"><img src="img/phone-call.png" class="icon1"></a>
                </div>
            </div>
        </div>
    </header>

    <section id="About">
        <p class="heading-p">Get To Know Me More</p>
        <h1 class="heading">About Me</h1>
        <div class="container about-container">
            <div class="about-left">
                <img src="img/aboutme.jpg" alt=""> <!--picture-->
            </div>
            <div class="about-right">
                <div class="basic-about">
                    <div class="about-box">
                        <p>
                            I'm Divanice Hibionada, a 22-year-old BSIT-MI 2nd year student at National University Fairview. 
                            Tennis has been a significant part of my life since childhood, and I proudly represented Region 6 in Palarong Pambansa during my second year of high school. 
                            Beyond the courts, I find joy in cooking homely dishes and expressing my creativity through drawings, coloring, and painting. 
                            Passionate about technology and always eager to learn, I'm navigating my academic journey with enthusiasm and embracing every opportunity for personal and professional growth.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="PersonalInformation">
        <a href="#PersonalInformation" class="arrow"><img src="img/arrow.png" class="icon1"></a>
        <p class="heading-p">Explore My </p>
        <h1 class="heading">Personal Information</h1>
        <div class="container personinfo-container">
            <div class="basic-perinfo">
                <div class="perinfo-box">
                    <p>
                        Birth Date: November 12, 2001 <br>
                        Age: 22 y/o <br>
                        Gender: Female <br>
                        Height: 5'1 ft. <br>
                        Weight: 45lbs. <br>
                        Civil Status: Single <br>
                        Religion: Roman Catholic <br>
                        Nationality: Filipino <br>
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="Skills section" id="Skills">
      <a href="#Skills" class="arrow"><img src="img/arrow.png" class="icon1"></a>
      <div class="container flex-center">
        <p class="heading-p">Get To Know My </p>
        <h1 class="heading">Skills</h1>
        <div class="skill-box">
          <ul class="bars">
            <li class="bar">
              <div class="info">
                <span>HTML</span>
                <span>80%</span>
              </div>
              <div class="line html"></div>
            </li>
            <li class="bar">
              <div class="info">
                <span>CSS</span>
                <span>80%</span>
              </div>
              <div class="line css"></div>
            </li>
            <li class="bar">
              <div class="info">
                <span>JAVA</span>
                <span>60%</span>
              </div>
              <div class="line java"></div>
            </li>
            <li class="bar">
              <div class="info">
                <span>PYTHON</span>
                <span>50%</span>
              </div>
              <div class="line python"></div>
            </li>
            <li class="bar">
              <div class="info">
                <span>FL STUDIO 21</span>
                <span>85%</span>
              </div>
              <div class="line flstudio"></div>
            </li>
            <li class="bar">
              <div class="info">
                <span>CANVA</span>
                <span>100%</span>
              </div>
              <div class="line canva"></div>
            <li class="bar">
              <div class="info">
                <span>DESIGNING</span>
                <span>90%</span>
              </div>
              <div class="line design"></div>
            </li>
          </ul>
        </div>
      </div>
      
    </section>

    <section id="Contact">
        <a href="#Contact" class="arrow"><img src="img/arrow.png" class="icon1"></a>
        <p class="heading-p">Get in Touch</p>
        <h1 class="heading">Contact Me</h1>
        <div class="contact-container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon1"><img src="img/email.png" ></div>
                    <div class="text">
                        <h5>Email</h5>
                        <p>Divahibionada12@gmail.com</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon1"><img src="img/phone-call.png" ></div>
                    <div class="text">
                        <h5>Phone Number</h5>
                        <p>+63 961 588 9077</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon1"><img src="img/facebook.png" ></div>
                    <div class="text">
                        <h5>Facebook</h5>
                        <a href="https://www.facebook.com/divanice.hibionada.37/">
                        <p>Divanice Hibionada</p></a>
                    </div>
                </div>
                <div class="box">
                    <div class="icon1"><img src="img/github.png"></div>
                    <div class="text">
                        <h5>Github</h5>
                        <a href="https://github.com/om2511/Portfolio-Website">
                        <p>divanicehibionada</p></a>
                    </div>
                </div>
                <div class="box">
                    <div class="icon1"><img src="img/linkedin (1).png"></div>
                    <div class="text">
                        <h5>LinkedIn</h5>
                        <a href="https://www.linkedin.com/in/divanice-hibionada-527033252/">
                        <p>Divanice Hibionada</p></a>
                    </div>
                </div>
            </div>
            <div class="comment-section">
                <h4>Leave a Comment</h4>
                <form action="submit_comment.php" method="post" class="comment-form">
                    <textarea name="comment" class="comment-textarea" placeholder="Your Feedback" required></textarea>
                    <br>
                    <button class="comment-submit">Submit</button>
                </form>
            </div>
        </div>
    </section> 

    <footer>
        <p>&copy; Copyright Divanice Hibionada 2024. All Rights Reserved. </p>
    </footer>
    <br>
    <br>
    
</body>
</html>