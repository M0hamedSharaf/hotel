<?php
include __DIR__ . "/../../../functions/functions.php";
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    validateString($name, "name", "error in name", getPage("users/create.php"));

    $email = $_POST['email'];
    validateEmail($email, "email", "email is bad", getPage("users/create.php"));

    $subject = $_POST['subject'];
    validateEmpty($subject, "subject","error in subject", getPage("users/create.php"));

    $message = $_POST['message'];
    validateEmpty($message, "message", "error in message", getPage("users/create.php"));

   
    $data = [
        'name' => $name,
        'email' => $email,
        'subject' => $subject,
        'message' => $message,
    ];

    $result = insert($conn, "users", $data);
    if ($result) {
        addSuccessToSession('db', "تم التسجيل بنجاح");
    } else {
        addErrorToSession('db', "There was an error sorry!!!");
    }
    redirect(getPage("users/create.php"));
} else {
    redirect(getPage("users/create.php"));
}
