<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="./css/main.min.css">

<?php
    // Enable error reporting for debugging
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Include the components file to access the renderMenu function
    include_once 'components.php';
    renderMenu('project-detail');

    // Specify the path to the JSON file
    $jsonFilePath = 'projects.json'; 

    // Check if the ID is passed via the query string
    if (array_key_exists('id', $_GET) && $_GET['id'] !== '') {
        // Get the project ID from the query string and treat it as an integer
        $projectId = intval($_GET['id']); 

        // Check if the JSON file exists
        if (file_exists($jsonFilePath)) {
            // Load the JSON file
            $json = file_get_contents($jsonFilePath);
            // Decode JSON into a PHP array
            $projects = json_decode($json, true);

            // Check if the project ID exists in the JSON data
            if (array_key_exists($projectId, $projects)) {
                $project = $projects[$projectId]; // Get the project details
            } else {
                echo "Project not found."; // If the project does not exist
                exit;
            }
        } else {
            echo "Error: JSON file not found."; // If the JSON file does not exist
            exit;
        }
    } else {
        echo "No project ID provided."; // If the project ID is not provided in the URL
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($project['title']); ?></title>
    <link rel="stylesheet" href="./css/main.min.css">
</head>
<body>
    <main>
        <div class="project-detail">
            <div class="left-column">
                <h1><?php echo htmlspecialchars($project['title']); ?></h1>
                <img src="<?php echo htmlspecialchars($project['img']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
            </div>

            <div class="right-column">
                <p><?php echo nl2br(htmlspecialchars($project['description'])); ?></p>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 DigitalGreen</p>
    </footer> <!-- Fixed missing angle bracket here -->
</body>
</html>

