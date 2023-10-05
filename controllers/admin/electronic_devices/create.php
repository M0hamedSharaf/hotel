<?php
include __DIR__ . "/../../../functions/functions.php";

if (isset($_POST['title'])) {



    $Title = $_POST['title'];
    validateEmpty($Title, "Title", "error in Id Number", getPage("electronic_devices/create.php"));

    //image
    $is_valid = validateImage('image', "error in Image", getPage("electronic_devices/create.php"));

    if ($is_valid == true) {
            $image = uploadImage('image', 'electronic_devices', 'worker');
        if ($image == false) {
            addErrorToSession('image', 'Error In Uploading The image');
            redirect(getPage("electronic_devices/create.php"));
        }
    }
    

    $description = $_POST['description'];
    validateEmpty($description, "description", "error in description", getPage("electronic_devices/create.php"));




    $data = [
        'Title' => $Title,
        'image' => $image,
        'description' => $description,
    ];


    $result = insert($conn, "electronic_devices", $data);
    if ($result) {
        addSuccessToSession('db', "تم الإضافة بنجاح");
    } else {
        addErrorToSession('db', "There was an error sorry!!!");
    }
    redirect(getPage("electronic_devices/create.php"));
} else {
    redirect(getPage("electronic_devices/create.php"));
}
