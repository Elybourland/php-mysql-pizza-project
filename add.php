<?php 

    // $_GET request

    // if(isset($_GET['submit'])) {
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    // }

    // $_POST request (more secure/hidden)

    $title = $email = $ingredients = '';
    $errors = array('email' => '', 'title' => '', 'ingredients' => '');

    if(isset($_POST['submit'])) {

        // check email

        if(empty($_POST['email'])) {
            $errors['email'] = 'An email is required <br />';
        } else {
            $email = $_POST['email'];

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email must be a valid email address';
            }
        }

        // check title

        if(empty($_POST['title'])) {
            $errors['title'] = 'A pizza title is required <br />';
        } else {
            $title = $_POST['title'];

        // !preg_match with regex

            if(!preg_match('/^[a-zA-Z\s]+$/', $title)) {
                $errors['title'] = 'Title must be letters and spaces only';
            }
        }

        // check ingredients

        if(empty($_POST['ingredients'])) {
            $errors['ingredients'] = 'At least one ingredient is required <br />';
        } else {
            $ingredients = $_POST['ingredients'];

        // !preg_match with regex (comma separated) 

            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
                $errors['ingredients'] = 'Ingredients must be a comma separated list';
            }

        }

        // Filter - check for errors, if none, redirects to index.php

        if(array_filter($errors)) {
            // echo 'Errors in the form';
        } else {
            // echo 'Form is valid';
            header('Location: index.php');
        }

     } // end of POST check

?>

<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php'); ?>

    <section class="container grey-text">
    
        <h4 class="center">Add a Pizza</h4>
        <form action="add.php" method="POST" class="white">
        
            <label>Your Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
            <div class="red-text"><?php echo $errors['email']; ?></div>

            <label>Pizza Title:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
            <div class="red-text"><?php echo $errors['title']; ?></div>

            <label>Ingredients (comma separated):</label>
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
            <div class="red-text"><?php echo $errors['ingredients']; ?></div>

            <div class="center">
            
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            
            </div>
        
        </form>
    
    </section>

    <?php include('templates/footer.php'); ?>
    

</html>