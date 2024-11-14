<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="./css/main.min.css">


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

<h2>My Projects</h2>
<div id="myproject" class="myProject">
    <?php
        if (isset($projects) && is_array($projects)) {
            foreach ($projects as $key => $project) {
                echo '<div class="p-title">';
                echo '<a href="project-detail.php?id=' . $key . '" title="View details of ' . htmlspecialchars($project['title']) . '">';
                echo '<h3>' . htmlspecialchars($project['title']) . '</h3>';
                echo '<div class="card">'; // begin of the card
                echo '<div class="card-inner">';
                echo '<div class="card-front">';
                echo '<img src="' . htmlspecialchars($project['img']) . '" alt="' . htmlspecialchars($project['title']) . '">';
                echo '</div>'; // end of card-front
                echo '<div class="card-back">'; //begin of the back card
                echo '<p>Want to see more? Click to uncover the details!</p>'; // message on the back of the card
                echo '</div>'; // end of the back card
                echo '</div>'; // end of card-inner
                echo '</div>'; // end of the card
                echo '</a>';
                echo '</div>';
            }
        } else {
            echo "No projects available.";
        }
    ?>
</div>