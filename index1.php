<?php

?>
<html>
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
 </style>

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
            <a class="navbar-brand" href="index.html">
                <strong>Navigation</strong>
            </a>

                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#search">Search</a>
                    </li>

                    

                    <li class="nav-item">
                        <a class="nav-link" href="#foot">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="home" id="home">
        <div class="heroText">
            <!--<h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                INDOOR NAVIGATION
            </h1>-->
          
            <p class="text-secondary-white-color"  data-aos-delay="1000">
              Government Engineering College Sreekrishnapuram is a premier educational institute established in 1999. It is situated in Palakkad district of Kerala. The college is fully owned by Govt. of Kerala and is under the Directorate of Technical Education, Kerala. GEC Sreekrishnapuram is approved by the AICTE and is affiliated to the University of Calicut and APJ Abdul kalam Technological University </p>
        </div>

        <div class="photoWrapper">
            <img src="images/index1.jpeg" alt="Description of the image" width="100%" height="520">

       </div>

        <div class="overlay"></div>
    </section>
 

  
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
<center>
  
<section class="section-padding pb-0" id="search">
  <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="container mb-5 pb-lg-5">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-3" data-aos="fade-up">Search</h2>
            </div>

<!-- Your HTML code for the dropdown and selected items container -->
<div class="dropdown">
<div class="btn-group dropup">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Destinations
  </button>
  <ul class="dropdown-menu" id="dropdownContent">
    <li class="dropdown-option" onclick="selectItem('HOD ROOM')">HOD ROOM</li>
    <li class="dropdown-option" onclick="selectItem('J2')">J2</li>
    <li class="dropdown-option" onclick="selectItem('J7')">J7</li>
    <li class="dropdown-option" onclick="selectItem('J4')">J4</li>
    <li class="dropdown-option" onclick="selectItem('IT208')">IT208</li>
        <li class="dropdown-option" onclick="selectItem('IT209')">IT209</li>
    <li class="dropdown-option" onclick="selectItem('IT217')">IT217</li>
    <li class="dropdown-option" onclick="selectItem('IT218')">IT218</li>
  </ul>
</div>
<button type="button" id="goButton" class="btn btn-success" onclick="goToPage()">GO</button>

<div id="selected-items"></div>

<!-- Your HTML code for the dropdown and selected items container -->
<script>
  // Initialize an empty array to store the selected items
  let selectedItems = [];

  // Function to toggle the display of the dropdown menu
  function toggleDropdown() {
    var dropdownContent = document.getElementById("dropdownContent");
    dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
  }

  // Function to handle the selection of an item
  function selectItem(item) {
    var selectedItemsContainer = document.getElementById("selected-items");

    // Check if the item is already selected
    var alreadySelected = false;
    var selectedItemsElements = selectedItemsContainer.getElementsByClassName("selected-item");
    for (var i = 0; i < selectedItemsElements.length; i++) {
      if (selectedItemsElements[i].textContent === item) {
        alreadySelected = true;
        break;
      }
      
    }

    if (!alreadySelected) {
      var selectedItem = document.createElement("div");
      selectedItem.classList.add("selected-item");
      selectedItem.textContent = item;
      selectedItemsContainer.appendChild(selectedItem);

      // Store the selected item in the array
      selectedItems.push(item);
    }
  }
  $variable=0;

  // Function to navigate to the appropriate page based on the number of selected items
  function goToPage() {
    if (selectedItems.length > 0) {
      // If more than one item is selected, load final_path2.php
      window.location.href = "final_2.php?selected_items=" + encodeURIComponent(selectedItems.join(","));
    } else {
      // Handle the case where no items are selected (optional)
      // You can display an error message or take other actions as needed
    }
  }
</script>





            <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5">
                <p data-aos="fade-up" data-aos-delay="500"></p>
            </div>

        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br>
  </section>

          
         <div class="row">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.7873374358423!2d76.43263727469909!3d10.903760389252877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7d635151d9b73%3A0xecf06761ecf4f56c!2sGovt.%20Engineering%20College%20Sreekrishnapuram!5e0!3m2!1sen!2sin!4v1688092758013!5m2!1sen!2sin" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy"  overflow="hidden" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
        	
            </div>
          
   </center>
</main>

<footer class="site-footer" id="foot">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h5 class="text-white">
                    <i class="bi-geo-alt-fill me-2"></i>
                    Kerala, India
                </h5>

                </a>
            </div>

        </div>
    </section>
</footer>
  
</div>
<!-- End of .container -->
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
