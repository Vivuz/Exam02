<?php 
    $name = $email = $message = "";
    $errors = array("name"=>"", "email"=>"", "message"=>"");
    $formSubmitted = false; //var to verify if the form has been sent

    //Check submit
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

            // if there are no errors, save the data and send the confirmation message        
            if (!array_filter($errors)) {
            $new_data = array('name' => $name, 'email' => $email);
            $file = 'data.json';

            // Read existing data and add new ones, avoiding duplicates            
            if (file_exists($file)) {
                $json = file_get_contents($file);
                $existing_data = json_decode($json, true);
            } else {
                $existing_data = array();
            }
            
            // Check if the data already exists to avoid duplicates            
            $duplicate = false;
            foreach ($existing_data as $data) {
                if ($data['name'] == $new_data['name'] && $data['email'] == $new_data['email']) {
                    $duplicate = true;
                    break;
                }
            }

            // If there are no duplicates, add the new data
            if (!$duplicate) {
                $existing_data[] = $new_data;
                $json_data = json_encode($existing_data, JSON_PRETTY_PRINT);
                file_put_contents($file, $json_data);
            }

            // Sets the variable for the confirmation message
            $formSubmitted = true;
            // Clear the form data
            $name = $email = $message = "";
        }
    }
?>

