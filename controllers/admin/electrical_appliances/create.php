<?php
include __DIR__ . "/../../../functions/functions.php";

if (isset($_POST['title'])) {



    $Title = $_POST['title'];
    validateEmpty($Title, "Title", "error in Id Number", getPage("electrical_appliances/create.php"));

    //image
    $is_valid = validateImage('image', "error in Image", getPage("electrical_appliances/create.php"));

    if ($is_valid == true) {
            $image = uploadImage('image', 'electrical_appliances', 'worker');
        if ($image == false) {
            addErrorToSession('image', 'Error In Uploading The image');
            redirect(getPage("electrical_appliances/create.php"));
        }
    }
    

    $description = $_POST['description'];
    validateEmpty($description, "description", "error in description", getPage("electrical_appliances/create.php"));




    $data = [
        'Title' => $Title,
        'image' => $image,
        'description' => $description,
    ];


    $result = insert($conn, "electrical_appliances", $data);
    if ($result) {
        addSuccessToSession('db', "تم الإضافة بنجاح");
    } else {
        addErrorToSession('db', "There was an error sorry!!!");
    }
    redirect(getPage("electrical_appliances/create.php"));
} else {
    redirect(getPage("electrical_appliances/create.php"));
}
