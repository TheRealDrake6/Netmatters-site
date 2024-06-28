<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = test_input($_POST["name"]);
    $nameErr = "";
    if (strlen($name) < 1) {
        $nameErr = "Please fill in the name field";
    }

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


}

class FormValidator {
    private $data;
    private $requiredFields = [];
    public function __construct($postData) {
        $this->data = $postData;
    }

    public function validate() {
        $this->validateRequiredFields();
        $this->validateEmailFormat();

    }

    private function validateRequiredFields() {
        foreach ($this->requiredFields as $field) {
            if (empty($this->data[$field])) {
                throw new Exception("{$field} is required.");
            }
        }
    }

    private function validateEmailFormat() {
        if (!filter_var($this->data['email'], FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email format.");
        }
    }


}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $validator = new FormValidator($_POST);
    try {
        $validator->validate();
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