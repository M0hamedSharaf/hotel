<?php
include __DIR__ . "/../../../functions/functions.php";

if (isset($_POST['title'])) {



    $Title = $_POST['title'];
    validateEmpty($Title, "Title", "error in Id Number", getPage("household_appliances_section/create.php"));

    //image
    $is_valid = validateImage('image', "error in Image", getPage("household_appliances_section/create.php"));

    if ($is_valid == true) {
            $image = uploadImage('image', 'household_appliances_section', 'worker');
        if ($image == false) {
            addErrorToSession('image', 'Error In Uploading The image');
            redirect(getPage("household_appliances_section/create.php"));
        }
    }
    

    $description = $_POST['description'];
    validateEmpty($description, "description", "error in description", getPage("household_appliances_section/create.php"));




    $data = [
        'Title' => $Title,
        'image' => $image,
        'description' => $description,
    ];


    $result = insert($conn, "household_appliances_section", $data);
    if ($result) {
        addSuccessToSession('db', "تم الإضافة بنجاح");
    } else {
        addErrorToSession('db', "There was an error sorry!!!");
    }
    redirect(getPage("household_appliances_section/create.php"));
} else {
    redirect(getPage("household_appliances_section/create.php"));
}
