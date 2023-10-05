<?php
include __DIR__ . "/../../../functions/functions.php";

if (isset($_POST['title'])) {



    $Title = $_POST['title'];
    validateEmpty($Title, "Title", "error in Id Number", getPage("furniture_department/create.php"));

    //image
    $is_valid = validateImage('image', "error in Image", getPage("furniture_department/create.php"));

    if ($is_valid == true) {
            $image = uploadImage('image', 'furniture_department', 'worker');
        if ($image == false) {
            addErrorToSession('image', 'Error In Uploading The image');
            redirect(getPage("furniture_department/create.php"));
        }
    }
    

    $description = $_POST['description'];
    validateEmpty($description, "description", "error in description", getPage("furniture_department/create.php"));




    $data = [
        'Title' => $Title,
        'image' => $image,
        'description' => $description,
    ];


    $result = insert($conn, "furniture_department", $data);
    if ($result) {
        addSuccessToSession('db', "تم الإضافة بنجاح");
    } else {
        addErrorToSession('db', "There was an error sorry!!!");
    }
    redirect(getPage("furniture_department/create.php"));
} else {
    redirect(getPage("furniture_department/create.php"));
}
