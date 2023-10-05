<?php
include __DIR__ . "/../../../functions/functions.php";
if (isset($_POST['title'])) {


    $id = $_POST['id'];

    $old_image = selectWhere($conn, 'electrical_appliances', 'image', "id = $id")[0]['image'];


    $Title = $_POST['title'];
    validateEmpty($Title, "Title", "error in Id Title", getPage("electrical_appliances/index.php"));


    if (!empty($_FILES['image']['name'])) {
        $is_valid = validateImage('image', "error in Image", getPage("electrical_appliances/create.php"));
        if ($is_valid == true) {
            $image = uploadImage('image', 'electrical_appliances', 'worker');
            if ($image == false) {
                addErrorToSession('image', 'Error In Uploading The image');
                redirect(getPage("electrical_appliances/create.php"));
            }
        }
    } else {
        $image = "";
    }

    $description = $_POST['description'];
    validateEmpty($description, "description", "error in description", getPage("electrical_appliances/index.php"));


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



    $result = update($conn, "electrical_appliances", $data, $id);
    if ($result) {
        if ($image != "") {
            deleteImage('electrical_appliances', $old_image);
        }
        addSuccessToSession('db', "تم التعديل بنجاح");
    } else {
        addErrorToSession('db', "There was an error sorry!!!");
    }
    redirect(getPage("electrical_appliances/index.php"));
} else {
    redirect(getPage("electrical_appliances/index.php"));
}
