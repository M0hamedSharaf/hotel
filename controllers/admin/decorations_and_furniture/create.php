<?php
include __DIR__ . "/../../../functions/functions.php";

if (isset($_POST['title'])) {



    $Title = $_POST['title'];
    validateEmpty($Title, "Title", "error in Id Number", getPage("decorations_and_furniture/create.php"));

    //image
    $is_valid = validateImage('image', "error in Image", getPage("decorations_and_furniture/create.php"));

    if ($is_valid == true) {
            $image = uploadImage('image', 'decorations_and_furniture', 'worker');
        if ($image == false) {
            addErrorToSession('image', 'Error In Uploading The image');
            redirect(getPage("decorations_and_furniture/create.php"));
        }
    }
    

    $description = $_POST['description'];
    validateEmpty($description, "description", "error in description", getPage("decorations_and_furniture/create.php"));




    $data = [
        'Title' => $Title,
        'image' => $image,
        'description' => $description,
    ];


    $result = insert($conn, "decorations_and_furniture", $data);
    if ($result) {
        addSuccessToSession('db', "تم الإضافة بنجاح");
    } else {
        addErrorToSession('db', "There was an error sorry!!!");
    }
    redirect(getPage("decorations_and_furniture/create.php"));
} else {
    redirect(getPage("decorations_and_furniture/create.php"));
}
