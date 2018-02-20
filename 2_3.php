<?php

    //define a class
    class User {
        // properties (attributes)
        public $name;

        // methods (functions)
        public function sayHello() {
            return $this->name . ' says hello.';
        }
    }

    // instatiate a user object from the user class
    $user1 = new User();

    $user1->name = 'Miguel';
    echo $user1->name;
    echo "<br>";
    echo $user1->sayHello();

    echo "<br>";
    // create new user

    
    $user2 = new User();
    
    $user2->name = 'Alex';
    echo $user2->name;
    echo "<br>";
    echo $user2->sayHello();

?>