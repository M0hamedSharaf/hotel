<?php
include __DIR__ . "/../../../functions/functions.php";
if (isset($_POST['id'])) {
    $id = $_POST['id'];


    $old_image = selectWhere($conn, 'furniture_department', 'image',"id = $id")[0]['image'];

    $result = delete($conn, "furniture_department", $id);

    if ($result) {
        deleteImage('furniture_department',$old_image);
        addSuccessToSession('db', "تم الحذف بنجاح");
    } else {
        addErrorToSession('db', "There was an error sorry!!!");
    }
    redirect(getPage("furniture_department/index.php"));
} else {
    redirect(getPage("furniture_department/index.php"));
}
