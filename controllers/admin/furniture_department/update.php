<?php
include __DIR__ . "/../../../functions/functions.php";
if (isset($_POST['title'])) {


    $id = $_POST['id'];

    $old_image = selectWhere($conn, 'furniture_department', 'image', "id = $id")[0]['image'];


    $Title = $_POST['title'];
    validateEmpty($Title, "Title", "error in Id Title", getPage("furniture_department/index.php"));


    if (!empty($_FILES['image']['name'])) {
        $is_valid = validateImage('image', "error in Image", getPage("furniture_department/create.php"));
        if ($is_valid == true) {
            $image = uploadImage('image', 'furniture_department', 'worker');
            if ($image == false) {
                addErrorToSession('image', 'Error In Uploading The image');
                redirect(getPage("furniture_department/create.php"));
            }
        }
    } else {
        $image = "";
    }

    $description = $_POST['description'];
    validateEmpty($description, "description", "error in description", getPage("furniture_department/index.php"));


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



    $result = update($conn, "furniture_department", $data, $id);
    if ($result) {
        if ($image != "") {
            deleteImage('furniture_department', $old_image);
        }
        addSuccessToSession('db', "تم التعديل بنجاح");
    } else {
        addErrorToSession('db', "There was an error sorry!!!");
    }
    redirect(getPage("furniture_department/index.php"));
} else {
    redirect(getPage("furniture_department/index.php"));
}
