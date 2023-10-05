<?php
include __DIR__ . "/../../../functions/functions.php";
if (isset($_POST['name'])) {
    $id = $_POST['id'];
   
    $name = $_POST['name'];
    validateString($name, "name", "error in name", getPage("users/index.php"));

    $email = $_POST['email'];
    validateEmail($email, "email", "email is bad", getPage("users/index.php"));

    $subject = $_POST['subject'];
    validateEmpty($subject, "subject","error in subject", getPage("users/index.php"));

    $message = $_POST['message'];
    validateEmpty($message, "message", "error in message", getPage("users/index.php"));

   
    $data = [
        'name' => $name,
        'email' => $email,
        'subject' => $subject,
        'message' => $message,
    ];

    $result = update($conn, "users", $data, $id);
    if ($result) {
        addSuccessToSession('db', "تم التعديل بنجاح");
    } else {
        addErrorToSession('db', "There was an error sorry!!!");
    }
    redirect(getPage("users/index.php"));
} else {
    redirect(getPage("users/index.php"));
}
