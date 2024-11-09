<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigitalGreen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./css/main.min.css">
</head>
<body class="index-page">
    <header>
        <div class="content-flex">
            <?php
                include_once 'components.php';
                renderMenu('index');
            ?>
        </div> <!-- Close the content-flex div inside header -->
    </header>

    <main>
        <!-- Cover section -->
        <div class="content-flex">
            <div class="cover" id="home">
                <img src="./img/photo-1497250681960-ef046c08a56e.jpg" alt="Cover Image">
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
                exit;
            }

            $json = file_get_contents($jsonFilePath);
            $projects = json_decode($json, true);
        ?>

        <section class="projects">
            <h2>My Projects</h2>
            <div id="myproject" class="myProject">
                <?php
                    if (isset($projects) && is_array($projects)) {
                        foreach ($projects as $key => $project) {
                            echo '<div class="p-title">';
                            echo '<a href="project-detail.php?id=' . $key . '" title="View details of ' . htmlspecialchars($project['title']) . '">';
                            echo '<h3>' . htmlspecialchars($project['title']) . '</h3>';
                            echo '<img src="' . htmlspecialchars($project['img']) . '" alt="' . htmlspecialchars($project['title']) . '">';
                            echo '</a>';
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquam ante consequat, dignissim nunc eget, porttitor felis. Etiam gravida est nec urna efficitur vehicula...
                    </p>
                </div>   
            </div>
        </section>

        <!-- Form section -->
        <?php 
            $name = $email = $message = "";
            $errors = array("name"=>"", "email"=>"", "message"=>"");

            if(isset($_POST["submit"])){
                // Check name
                if(empty($_POST["name"])){
                    $errors["name"] = "Hey! Don’t forget to fill this out. <br />";
                } else {
                    $name = $_POST["name"];
                    if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
                    $errors["name"] = "Oops! It looks like your name can only include letters and spaces.";
                    }
                }

                // Check email
                if(empty($_POST["email"])){
                    $errors["email"] = "Uh-oh! We need this info to proceed. <br />";
                } else {
                    $email = $_POST["email"];
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $errors["email"] = "Please provide a valid email address.";
                    }
                }

                // Check message
                if(empty($_POST["message"])){
                    $errors["message"] = "Don't leave this blank! Let us know how we can help you. <br />";
                } else {
                    $message = $_POST["message"];
                    if(!preg_match('/^[a-zA-Z0-9\s]+$/', $message)){
                    $errors["message"] = "Yikes! The message must be only letters, numbers, and spaces.";
                    }
                }
            }
        ?>

        <section class="form" id="contact">
            <h2>Have a question? Contact us</h2>
            <div class="content-flex">
                <p class="ContactQuestion">Have a question about my projects or want to collaborate? Drop me a message!</p>
                <form action="#contact" method="POST" class="form" novalidate>
                    <div class="info">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name)?>">
                        <div class="red-text"> <?php echo $errors["name"];?> </div>
                        
                        <label for="email">Your email:</label>
                        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email)?>">
                        <div class="red-text"> <?php echo $errors["email"];?> </div>
                        
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" placeholder="How can I help you today?"><?php echo htmlspecialchars($message); ?></textarea>
                        <div class="red-text"> <?php echo $errors["message"];?> </div>
                    </div>
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <?php renderFooter(); ?>
    </footer>
</body>
</html>

