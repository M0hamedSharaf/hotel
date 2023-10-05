<?php
include __DIR__ . "/../../../functions/functions.php";
if (isset($_POST['id'])) {
    $id = $_POST['id'];


    $old_image = selectWhere($conn, 'electronic_devices', 'image',"id = $id")[0]['image'];

    $result = delete($conn, "electronic_devices", $id);

    if ($result) {
        deleteImage('electronic_devices',$old_image);
        addSuccessToSession('db', "تم الحذف بنجاح");
    } else {
        addErrorToSession('db', "There was an error sorry!!!");
    }
    redirect(getPage("electronic_devices/index.php"));
} else {
    redirect(getPage("electronic_devices/index.php"));
}
