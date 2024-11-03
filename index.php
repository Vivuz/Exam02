<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigitalGreen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./css/main.min.css">

</head>
<body>
    <header>
        <div class="content-flex">
        <!-- menu' section -->
        <nav id="menu" class="hamburger-menu"> 
            <input id="control" type="checkbox">
            <label class="label-control" for="control">
                <span></span>
            </label>
            <p class="logo">DG</p>
            <ul class="menu">
                <li><a href="#home" title="Home">Home</a></li>
                <li><a href="#myproject" title="My Projects">My Projects</a></li>
                <li><a href="#aboutme" title="About me">About Me</a></li>
                <li><a href="#contact" title="Contacts">Contact Us</a></li>
            </ul>
        </nav>
        </div>
    </header>
    <main>
        <!-- Cover section -->
        <div class="content-flex">
            <div class="cover" id="home">
                <img src="./img/photo-1497250681960-ef046c08a56e.jpg" alt="Cover Image"> <!-- path of the img -->
                <h1>DigitalGreen</h1>
                <p>Explore my projects and learn more about me.</p>
            </div>
        </div>
        
        <!-- Project section -->
        <?php
            // Enable error reporting for debugging
            ini_set('display_errors', 1);
            error_reporting(E_ALL);

            // Specify the path to the JSON file
            $jsonFilePath = 'projects.json'; 

            // Check if the JSON file exists
            if (!file_exists($jsonFilePath)) {
                echo "Error: The JSON file does not exist.";
                exit; // Stop execution
            }

            // Load the JSON file
            $json = file_get_contents($jsonFilePath);

            // Check if the JSON file was successfully loaded
            if ($json === false) {
                echo "Error: Unable to read the JSON file.";
                exit; // Stop execution
            }

            // Decode JSON into a PHP array
            $projects = json_decode($json, true);

            // Check if JSON decoding was successful
            if ($projects === null) {
                echo "Error: JSON decoding failed. Check JSON syntax.";
                exit; // Stop execution
            }

            // Debug output: print the projects array
            echo "<pre>";
            //print_r($projects);
            echo "</pre>";
        ?>

        <section class="projects">
            <h2>My Projects</h2>
            <div id="myproject" class="myProject">
                <?php
                    if (isset($projects) && is_array($projects)) {
                    // Loop through each project in the array and generate HTML elements for it
                        foreach ($projects as $project) {
                            echo '<div class="p-title">'; // Create a container for each project with a title and an image
                            echo '<h3>' . htmlspecialchars($project['title']) . '</h3>'; // Display the project title, making it HTML-safe
                            echo '<img src="' . htmlspecialchars($project['img']) . '" alt="' . htmlspecialchars($project['title']) . '">'; // Display the project image, using the image path from JSON and making it HTML-safe
                            echo '<p>' . htmlspecialchars($project['description']) . '</p>'; // Display project description.
                            echo '</div>';
                        }
                    } else {
                        echo "No projects available.";
                    } 
                ?>
            </div>
        </section>

        <!-- About me section -->
        <section class="about" id="aboutme">
            <h2>About me</h2>
            <div class="content-flex">
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquam ante consequat, dignissim nunc eget, porttitor felis. Etiam gravida est nec urna efficitur vehicula. Nunc congue ut augue sit amet tempus. Nunc imperdiet est sit amet tempus sagittis. Vivamus luctus orci sed lobortis ultricies. Phasellus quis gravida eros, sed interdum urna. Vestibulum sit amet dui sit amet eros molestie ornare vitae at est. Suspendisse imperdiet et augue non ullamcorper. Duis maximus, justo vel rutrum congue, neque nibh scelerisque mauris, at ultrices tortor urna viverra leo. Duis et diam lorem. Vestibulum quis sem ut libero tincidunt dapibus. Maecenas non rhoncus odio, non mollis massa. Sed eget orci vitae elit finibus tempus. Morbi venenatis sem nec auctor maximus. Donec sollicitudin tortor ac ex vehicula ultrices.
                    </p>
                </div>   
            </div>
        </section>
        
        <!-- Form section -->
        <?php 
            $name = $email =$message = "";
            $errors = array("name"=>"", "email"=>"", "message"=>"");

            if(isset($_POST["submit"])){

                //check name
                if(empty($_POST["name"])){
                    $errors["name"] = "Hey! Don’t forget to fill this out. <br />";
                } else {
                    $name = $_POST["name"];
                    if(!preg_match('/^[a-zA-Z\s]+$/', $name)){ // Check if $name contains only letters and spaces
                    $errors["name"] = "Oops! It looks like your name can only include letters and spaces.";
                    }
                }

                //check email
                if(empty($_POST["email"])){
                    $errors["email"] = "Uh-oh! We need this info to proceed. <br />";
                } else {
                    $email = $_POST["email"];
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $errors["email"] = "Please provide a valid email address so we can get back to you.";
                    }
                }

                //check message
                if(empty($_POST["message"])){
                    $errors["message"] = "Don't leave this blank! Let us know how we can help you. <br />";
                    } else {
                    $message = $_POST["message"];
                    if(!preg_match('/^[a-zA-Z0-9\s]+$/', $message)){
                    $errors["message"] = "Yikes! Seems like the message must be only letters, numbers and spaces";
                    }
                }

            } //end of the POST check   
            ?>

        <section class="form" id="contact">
            <h2>Have a question? Contact us</h2>
            <div class="content-flex">
                <p class="ContactQuestion">Have a question about my projects or want to collaborate? Drop me a message!</p>
                <section class="container"></section>
                <form action="index.php" method="POST" class="form" novalidate>
                    <div class="info">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name)?>">
                        <div class="red-text"> <?php echo $errors["name"];?> </div>
                        <label for="email">Your email:</label>
                        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email)?>">
                        <div class="red-text"> <?php echo $errors["email"];?> </div>
                        <label for="message">Message:</label>
                        <textarea class="message" name="message" placeholder="How can I help you today?" value="<?php echo htmlspecialchars($message)?>"></textarea>
                        <div class="red-text"> <?php echo $errors["message"];?> </div>
                    </div>
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
        </section>
        
    </main>
    <footer>
    <div id="footer-content">
        <!-- Contacts Section -->
        <div class="contacts">
            <h2 class="contact2">Contacts</h2>
            <div class="email-container">
                <p>Email:</p>
                <a href="mailto:viviana.manunta@gmail.com">viviana.manunta@gmail.com</a>
            </div>
            <p>Telephone: +39 340*******</p>
            <address>Corso Italia 15, Pisa, 56125, Italia</address>
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
    </div>
</footer>
</body>
</html>