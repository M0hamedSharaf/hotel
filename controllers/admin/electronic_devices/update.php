<?php
include __DIR__ . "/../../../functions/functions.php";
if (isset($_POST['title'])) {


    $id = $_POST['id'];

    $old_image = selectWhere($conn, 'electronic_devices', 'image', "id = $id")[0]['image'];


    $Title = $_POST['title'];
    validateEmpty($Title, "Title", "error in Id Title", getPage("electronic_devices/index.php"));


    if (!empty($_FILES['image']['name'])) {
        $is_valid = validateImage('image', "error in Image", getPage("electronic_devices/create.php"));
        if ($is_valid == true) {
            $image = uploadImage('image', 'electronic_devices', 'worker');
            if ($image == false) {
                addErrorToSession('image', 'Error In Uploading The image');
                redirect(getPage("electronic_devices/create.php"));
            }
        }
    } else {
        $image = "";
    }

    $description = $_POST['description'];
    validateEmpty($description, "description", "error in description", getPage("electronic_devices/index.php"));


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



    $result = update($conn, "electronic_devices", $data, $id);
    if ($result) {
        if ($image != "") {
            deleteImage('electronic_devices', $old_image);
        }
        addSuccessToSession('db', "تم التعديل بنجاح");
    } else {
        addErrorToSession('db', "There was an error sorry!!!");
    }
    redirect(getPage("electronic_devices/index.php"));
} else {
    redirect(getPage("electronic_devices/index.php"));
}
