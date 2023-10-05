<?php
include __DIR__ . "/../../../functions/functions.php";
if (isset($_POST['title'])) {


    $id = $_POST['id'];

    $old_image = selectWhere($conn, 'household_appliances_section', 'image', "id = $id")[0]['image'];


    $Title = $_POST['title'];
    validateEmpty($Title, "Title", "error in Id Title", getPage("household_appliances_section/index.php"));


    if (!empty($_FILES['image']['name'])) {
        $is_valid = validateImage('image', "error in Image", getPage("household_appliances_section/create.php"));
        if ($is_valid == true) {
            $image = uploadImage('image', 'household_appliances_section', 'worker');
            if ($image == false) {
                addErrorToSession('image', 'Error In Uploading The image');
                redirect(getPage("household_appliances_section/create.php"));
            }
        }
    } else {
        $image = "";
    }

    $description = $_POST['description'];
    validateEmpty($description, "description", "error in description", getPage("household_appliances_section/index.php"));


    if ($image == "") {
        $data = [
            'title' => $Title,
            'description' => $description,
        ];
    } else {
        $data = [
            'title' => $Title,
            'image' => $image,
            'description' => $description,
        ];
    }



    $result = update($conn, "household_appliances_section", $data, $id);
    if ($result) {
        if ($image != "") {
            deleteImage('household_appliances_section', $old_image);
        }
        addSuccessToSession('db', "تم التعديل بنجاح");
    } else {
        addErrorToSession('db', "There was an error sorry!!!");
    }
    redirect(getPage("household_appliances_section/index.php"));
} else {
    redirect(getPage("household_appliances_section/index.php"));
}
