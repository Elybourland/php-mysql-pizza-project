<?php 

// classes

class User {

    private $email;
    private $name;

    public function __construct($name, $email) {

        // $this->email = 'mario@thenetninja.co.uk';
        // $this->name = 'mario';
        $this->email = $email;
        $this->name = $name;

    }

    public function login() {

        // echo 'the user logged in';
        echo $this->name . ' logged in';

    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        if(is_string($name) && strlen($name) > 1) {
            $this->name = $name;
            return "name has been updated to $name";
        } else {
            return 'not a valid name';
        }
    }

}

// $userOne = new User();

// $userOne->login();
// echo $userOne->email;

$userTwo = new User('yoshi', 'yoshi@thenetninja.co.uk');

// echo $userTwo->getName();

// echo $userTwo->setName(50);
echo $userTwo->setName('ely');
echo $userTwo->getName();

// echo $userTwo->name . '<br />';
// echo $userTwo->email;

// $userTwo->login();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- <h3><?php echo $userTwo->name; ?></h3>
<h3><?php echo $userTwo->email; ?></h3> -->

    
</body>
</html>