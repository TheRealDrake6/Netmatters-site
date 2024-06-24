<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and validate name
    $name = test_input($_POST["name"]);
    $nameErr = "";
    if (strlen($name) < 1) {
        $nameErr = "Please fill in the name field";
    }
    
    // Sanitize and validate email
    $email = test_input($_POST["email"]);
    $emailErr = "";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
    
    $message = test_input($_POST["message"]);
    $messageErr = "";
    if (strlen($message) < 1) {
        $messageErr = "Please fill in the message field";
    }

    $telephone = test_input($_POST["telephone"]);
    $telephoneErr = "";
    if (!preg_match("/^[0-9]*$/",$telephone)) {
        $telephoneErr = "Please use numbers to fill in the telephone field";
    }

    // ... Additional validation checks ...
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($nameErr != "" || $emailErr != "" || $messageErr != "" || $telephoneErr != "") {
    echo "<b>Error:</b>";
    echo "<br>" . $nameErr;
    echo "<br>" . $emailErr;
    echo "<br>" . $messageErr;
    echo "<br>" . $telephoneErr;
} else {
    // Process the form data

}

class FormValidator {
    private $data;
    private $requiredFields = [];
    public function __construct($postData) {
        $this->data = $postData;
    }

    public function validate() {
        // Common validation rules
        $this->validateRequiredFields();
        $this->validateEmailFormat();
        // Add more validation methods as needed
    }

    private function validateRequiredFields() {
        // Check if required fields are present
        foreach ($this->requiredFields as $field) {
            if (empty($this->data[$field])) {
                throw new Exception("{$field} is required.");
            }
        }
    }

    private function validateEmailFormat() {
        // Check if email field is in a valid format
        if (!filter_var($this->data['email'], FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email format.");
        }
    }

    // Define other validation methods...
}

// Usage
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $validator = new FormValidator($_POST);
    try {
        $validator->validate();
        // If validation passes, process the form
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
try{
    $db= new mysqli("localhost","root","","netmatters-database");
}   catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

if (isset($_POST['name']) && isset($_POST['company']) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['message'])){
    $company = $_POST['company'];

    $is_instert = $db->query("INSERT INTO `contact`(`name`, `company`, `email`, `telephone`, `message`) VALUES ('$name','$company','$email','$telephone','$message')");

    if ($is_instert == TRUE){
        echo "Form submitted successfully";
        exit();
    }
}

?>