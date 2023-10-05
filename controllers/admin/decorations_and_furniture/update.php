<?php
include __DIR__ . "/../../../functions/functions.php";
if (isset($_POST['title'])) {


    $id = $_POST['id'];

    $old_image = selectWhere($conn, 'decorations_and_furniture', 'image', "id = $id")[0]['image'];


    $Title = $_POST['title'];
    validateEmpty($Title, "Title", "error in Id Title", getPage("decorations_and_furniture/index.php"));


    if (!empty($_FILES['image']['name'])) {
        $is_valid = validateImage('image', "error in Image", getPage("decorations_and_furniture/create.php"));
        if ($is_valid == true) {
            $image = uploadImage('image', 'decorations_and_furniture', 'worker');
            if ($image == false) {
                addErrorToSession('image', 'Error In Uploading The image');
                redirect(getPage("decorations_and_furniture/create.php"));
            }
        }
    } else {
        $image = "";
    }

    $description = $_POST['description'];
    validateEmpty($description, "description", "error in description", getPage("decorations_and_furniture/index.php"));


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



    $result = update($conn, "decorations_and_furniture", $data, $id);
    if ($result) {
        if ($image != "") {
            deleteImage('decorations_and_furniture', $old_image);
        }
        addSuccessToSession('db', "تم التعديل بنجاح");
    } else {
        addErrorToSession('db', "There was an error sorry!!!");
    }
    redirect(getPage("decorations_and_furniture/index.php"));
} else {
    redirect(getPage("decorations_and_furniture/index.php"));
}
