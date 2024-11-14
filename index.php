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
        </div>
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
        <section class="projects">
            <?php include "project.php"?>
        </section>

        <!--Section dividers -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 500" fill="#D85C34">
            <path d="M173.9 384.8c-.1-6.4-.2-12.7-.1-18.8 98.4-118.8 92.2-226.4-13.7-311 18.6 147-121.6 172.1-7.1 324.1-1.7-125.9 29.8-199.5 31.1-202.6 1.2-2.8 4.4-4 7.2-2.8 1.3.6 2.1 2.7 1.1 5.3s-32.1 76.6-29.3 206.1c.8 37.4 16 57.1 16.6 57.9a5.4 5.4 0 0 0 7.7.9 5.4 5.4 0 0 0 .9-7.7c-.1-.2-13.6-17.7-14.3-51.4Z"></path>
            <path d="M396 382.3c-4.9-9.3-9-18.5-12.4-27.6 23.7-141.5 206.9-156.8 1.1-299.8 0 155.9-190.1 159-14.5 320.1-28.6-62.5-20.5-112.2-7.9-143.6a155.3 155.3 0 0 1 38.3-57c2.3-2 7.4-2.5 7.7.6.3 2.7-2.6 4.1-3.8 5.4-8 8.5-22.1 25.8-32.2 51.1-13.4 33.4-21.8 87.6 13.9 155.9a158.6 158.6 0 0 1 18.1 52.6c.2 2.8 2.6 5 5.4 5s5.7-2.8 5.5-5.9c0-1-2.3-24.3-19.3-56.7Z"></path>
            <path d="M597.2 351.7C612.4 212.9 717.6 195.6 599 55c-19 123.4-201.8 74-17.1 312.7-22.3-54-37.4-118.7-22.6-150.1a5.5 5.5 0 0 1 7.3-2.6c1.8.9 2.5 3 1.8 4.8-14.8 36.2 6 111.6 32.2 167.4 15.2 32.5 29.1 55 29.2 55.2 1.6 2.6 5 3.4 7.5 1.8 2.6-1.6 3.4-5 1.8-7.5a586.3 586.3 0 0 1-41.8-85Z"></path>
            <path d="M770.6 55c49.8 110-210.3 181.1-9.1 325.3-15.5-83.7 2.9-137.2 21.5-167.5 15-24.6 35.2-41.9 46.8-47.5 2.9-1.4 5.2 2.8 2.6 4.6a144 144 0 0 0-39.4 42.9c-18.9 31-37.8 86.2-20.4 173.1 6.7 33.4 2.2 52.1 2.2 52.2a5.4 5.4 0 0 0 5.3 6.8c2.4 0 4.7-1.6 5.3-4.1.2-.8 5.2-21-2-57.1l-1.5-7.7c167.9-109.5 129.3-244.9-11.2-321.1Z"></path>
        </svg>

        <!-- About me section -->
        <section class="about" id="aboutme">
            <h2>About me</h2>
            <div class="content-flex">
                <div class="description">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget dolor malesuada, egestas sapien ut, tincidunt odio. Sed auctor tempor tortor, non sollicitudin urna aliquam ut. Donec eget justo ut lorem convallis mollis a at felis. Morbi lobortis felis vel neque efficitur, et tempor eros placerat. Fusce id enim ut neque elementum dictum. Nullam nec eros auctor, fermentum lectus nec, lacinia felis. Aliquam erat volutpat. Nulla facilisi. Donec sagittis dui et nisi convallis, nec varius elit sollicitudin.
                    <br><br>
                    Vivamus efficitur, mi ac blandit sollicitudin, arcu libero tincidunt purus, in elementum nulla orci ac velit. Fusce fringilla sem sit amet nunc luctus, a vulputate velit laoreet. Nam vulputate erat non tortor condimentum, ac tincidunt ante aliquam. Etiam ultricies mi ut magna cursus, vel auctor ipsum luctus. Ut et vehicula lectus. Ut suscipit dui sit amet massa scelerisque, vel sodales magna tempus. Integer varius risus sed nisi dictum, ac hendrerit magna consectetur.</p>
                </div>   
            </div>
        </section>

        <!--Section dividers -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 500" fill="#D85C34">
            <path d="M173.9 384.8c-.1-6.4-.2-12.7-.1-18.8 98.4-118.8 92.2-226.4-13.7-311 18.6 147-121.6 172.1-7.1 324.1-1.7-125.9 29.8-199.5 31.1-202.6 1.2-2.8 4.4-4 7.2-2.8 1.3.6 2.1 2.7 1.1 5.3s-32.1 76.6-29.3 206.1c.8 37.4 16 57.1 16.6 57.9a5.4 5.4 0 0 0 7.7.9 5.4 5.4 0 0 0 .9-7.7c-.1-.2-13.6-17.7-14.3-51.4Z"></path>
            <path d="M396 382.3c-4.9-9.3-9-18.5-12.4-27.6 23.7-141.5 206.9-156.8 1.1-299.8 0 155.9-190.1 159-14.5 320.1-28.6-62.5-20.5-112.2-7.9-143.6a155.3 155.3 0 0 1 38.3-57c2.3-2 7.4-2.5 7.7.6.3 2.7-2.6 4.1-3.8 5.4-8 8.5-22.1 25.8-32.2 51.1-13.4 33.4-21.8 87.6 13.9 155.9a158.6 158.6 0 0 1 18.1 52.6c.2 2.8 2.6 5 5.4 5s5.7-2.8 5.5-5.9c0-1-2.3-24.3-19.3-56.7Z"></path>
            <path d="M597.2 351.7C612.4 212.9 717.6 195.6 599 55c-19 123.4-201.8 74-17.1 312.7-22.3-54-37.4-118.7-22.6-150.1a5.5 5.5 0 0 1 7.3-2.6c1.8.9 2.5 3 1.8 4.8-14.8 36.2 6 111.6 32.2 167.4 15.2 32.5 29.1 55 29.2 55.2 1.6 2.6 5 3.4 7.5 1.8 2.6-1.6 3.4-5 1.8-7.5a586.3 586.3 0 0 1-41.8-85Z"></path>
            <path d="M770.6 55c49.8 110-210.3 181.1-9.1 325.3-15.5-83.7 2.9-137.2 21.5-167.5 15-24.6 35.2-41.9 46.8-47.5 2.9-1.4 5.2 2.8 2.6 4.6a144 144 0 0 0-39.4 42.9c-18.9 31-37.8 86.2-20.4 173.1 6.7 33.4 2.2 52.1 2.2 52.2a5.4 5.4 0 0 0 5.3 6.8c2.4 0 4.7-1.6 5.3-4.1.2-.8 5.2-21-2-57.1l-1.5-7.7c167.9-109.5 129.3-244.9-11.2-321.1Z"></path>
        </svg>
        
        <!-- Form section -->
        <?php include "contact.php"?>
        <section class=form id="contact">    
            <!--<section class="form" id="contact">-->
            <h2>Have a question? Contact us</h2>
            <div class="content-flex">
                <?php if ($formSubmitted): ?>
                    <p class="success-message">Thank you for sending your request! We will contact you as soon as possible.</p>
                <?php endif; ?>
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

