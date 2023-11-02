<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
       <style>
       
       .nav {
		  position: relative;
		}

		#logo {
		  position: absolute;
		  top: 5px;
		  left: 20px;
		  width: 50px; /* Adjust the width as needed */
		  height: auto; /* Maintain aspect ratio */
		}
		.image-container {
		  display: flex;
		}

		.image-container a{
		  flex: 1;
		  margin-right: 20px; /* Adjust as needed */
		}

		
       </style>
            
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>indoor navigation system</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/magnific-popup.css">

        <link href="css/aos.css" rel="stylesheet">

        <link href="css/templatemo-nomad-force.css" rel="stylesheet">
<!--

TemplateMo 567 Nomad Force

https://templatemo.com/tm-567-nomad-force

-->




 </head>
    
    <body>
    
        <main>
		 <nav class="navbar navbar-expand-lg bg-light shadow-lg">
                <div class="container">
                    <img id="logo" src="images/logo.webp" alt="Logo">
                    <!--<a class="navbar-brand" href="index.html">
                        <strong>Navigation</strong>
                    </a>-->

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">

                        
                            <li class="nav-item active">
                                <a class="nav-link" href="#hero">Home</a>
                            </li>

                          <!--  <li class="nav-item">
                                <a class="nav-link" href="#about">Let find</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#portfolio">Single Destination</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#news">Multiple Destination</a>
                            </li>
                            -->
				 <li class="nav-item">
                                <a class="nav-link" href="#service">Services</a>
                            </li>
				
				 <li class="nav-item">
                                <a class="nav-link" href="#about">About Us</a>
                            </li>
				
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <section class="hero" id="hero">
                <div class="heroText">
                    <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                        INDOOR NAVIGATION
                    </h1>

                    <p class="text-secondary-white-color"  data-aos-delay="1000">
                        Find the short path to your <strong class="custom-underline">DESTINATION</strong>
                    </p>
                </div>

                <div class="videoWrapper">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="videos/792bd98f3e617786c850493560e11c45.jpg">
                        <source src="videos/814dc43e870597176cad645798825c03.mp4" type="video/mp4">

                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="overlay"></div>
            </section>

           
            <section class="section-padding" id="portfolio">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-5 text-center" data-aos="fade-up">Services</h2>
                        </div>


	<link rel="stylesheet"
		href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
	</script>
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js">
	</script>
</head>

<body>
	<div class="container">
		
		
	</div>

	<script>
		
		// Define an array of search suggestions
		var searchSuggestions = ['GeeksforGeeks', 'Geeks',
								'Geeksforfun', 'WelcomeGeeks'];

		// Initialize the Typeahead plugin on the search input field
		$('#search').typeahead({
			source: searchSuggestions
		});
	</script>
    
</body>

</div>
			 <div class="image-container" id="service">
  <a href="index1.php">
   <center> <img src="images/gec1.jpeg" class="img-fluid portfolio-image" alt="" style="width:450px;height:300px;">
    <p style="font-size:30px;">GEC Sreekrishnapuram</p></center>
  </a>


</div>

                   
                        </div>

                    </div>
                </div>
            </section>


            <section class=" contact section-padding" id="contact">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-7 col-12 mx-auto">

                            <h2 class="mb-4 text-center" data-aos="fade-up">Dont' be shy, write to us</h2>

                            <form action="#" method="post" class="contact-form" role="form" data-aos="fade-up">

                                <div class="row">
                                    
                                    <div class="col-lg-6 col-6">
                                        <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>

                                        <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>
                                    </div>

                                    <div class="col-lg-6 col-6">
                                        <label for="email" class="form-label">Email <sup class="text-danger">*</sup></label>

                                        <input type="email" name="email" id="email" pattern="[^ @]@[^ @]" class="form-control" placeholder="Email address" required>
                                    </div>

                                    <div class="col-12 my-4">
                                        <label for="message" class="form-label">How can we help?</label>

                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Tell us about the project" required></textarea>
                                        
                                    </div>

                                 

                                <div class="col-lg-5 col-12 mx-auto mt-5">
                                    <button type="submit" class="form-control">Send Message</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
            <script>
    // Function to extract URL parameter
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }

    // Extract NFC tag's name from URL parameter
    var nfcName = getParameterByName('nfc_name');

    // Use nfcName for further customization or linking
    console.log('NFC Tag Name:', nfcName);

    var outputElement = document.getElementById("output");
        outputElement.textContent = nfcname;

    // You can use nfcName to customize your website's behavior or content
    // based on the NFC tag's name.
</script>

    <p id="output"></p>

    <script>
        var outputElement = document.getElementById("output");
        outputElement.textContent = nfcname;
    </script>

       <!-- Footer -->
<footer class="bg-dark text-center text-white" id="about">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
  
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <strong>Sign up for our newsletter</strong>
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example21" class="form-control" />
                <label class="form-label" for="form5Example21">Email address</label>
              </div>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-light mb-4">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
  
      <!-- Section: Text -->
     
      <!-- Section: Text -->
  
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">ABOUT
               
               
                
                
                </h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white"> About Navigation</a>
              </li>
              <li>
                <a href="#!" class="text-white"> Team</a>
              </li>
              <li>
                <a href="#!" class="text-white">Patents And Certifications</a>
              </li>
              <li>
                <a href="#!" class="text-white">Media</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">KNOWLEDGE CENTER
                
               
               </h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white"> Blogs
                    </a>
              </li>
              <li>
                <a href="#!" class="text-white"> Case Studies
                    </a>
              </li>
              <li>
                <a href="#!" class="text-white">
                    </a>
              </li>
              <li>
                <a href="#!" class="text-white"></a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">OTHER LINKS</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Careers</a>
              </li>
              <li>
                <a href="#!" class="text-white">Life@Navigation</a>
              </li>
              <li>
                <a href="#!" class="text-white">Job Opportunities</a>
              </li>
              <li>
                <a href="#!" class="text-white">Contact Us</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase"></h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white"></a>
              </li>
              <li>
                <a href="#!" class="text-white"></a>
              </li>
              <li>
                <a href="#!" class="text-white"></a>
              </li>
              <li>
                <a href="#!" class="text-white"></a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">group_18 services</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>