<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="./css/main.min.css">

<?php
// Function to render the menu
function renderMenu($currentPage) {
    echo '
        <div class="content-flex">
            <!-- Menu Section -->
            <nav id="hamburger-menu" class="hamburger-menu">
                <a href="#hamburger-menu" class="open-menu"> 
                    <span></span>
                </a>
                <a href="#main" class="close-menu"> 
                    <span></span>
                </a>
                <a href="index.php" class="logo">DG</a>
                <ul id="menu">
                    <li><a class="menuvoice" href="' . ($currentPage === 'index' ? '#home' : 'index.php#home') . '" title="Home">Home</a></li>
                    <li><a class="menuvoice" href="' . ($currentPage === 'index' ? '#myproject' : 'index.php#myproject') . '" title="My Projects">My Projects</a></li>
                    <li><a class="menuvoice" href="' . ($currentPage === 'index' ? '#aboutme' : 'index.php#aboutme') . '" title="About Me">About Me</a></li>
                    <li><a class="menuvoice" href="' . ($currentPage === 'index' ? '#contact' : 'index.php#contact') . '" title="Contact Us">Contact Us</a></li>
                </ul>
            </nav>
        </div>';
}

// Function to render the footer
function renderFooter() {
    echo '
        <div id="footer-content">
            <!-- Contacts Section -->
            <div class="contacts">
                <h2 class="contact2">Contacts</h2>
                <div class="email-container">
                    <p>Email:</p>
                    <a href="mailto:viviana.manunta@gmail.com">viviana.manunta@gmail.com</a>
                </div>
                <p>Telephone: +39 340*******</p>
                <address>Corso Italia 15, Pisa, 56125, Italy</address>
            </div>

            <!-- Social Media Section -->
            <div class="social-media">
                <h2>Follow Me</h2>
                <div class="icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <!-- Rights Section -->
            <div class="rights">
                <p>© 2024 All rights reserved.</p>
            </div>
        </div>';
}
?>
