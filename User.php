<?php

class User {
    // Properties
    private $id;
    private $name;
    private $email;

    // Constructor
    public function __construct($id, $name, $email) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    // Setters
    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    // Example method
    public function greet() {
        return "Hello, " . $this->name . "!";
    }
}

// Example usage
$user = new User(1, "Zakaria", "zakaria@example.com");
echo $user->greet();  // Output: Hello, Zakaria!

?>