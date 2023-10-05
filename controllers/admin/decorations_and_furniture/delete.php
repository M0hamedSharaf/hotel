<?php
include __DIR__ . "/../../../functions/functions.php";
if (isset($_POST['id'])) {
    $id = $_POST['id'];


    $old_image = selectWhere($conn, 'decorations_and_furniture', 'image',"id = $id")[0]['image'];

    $result = delete($conn, "decorations_and_furniture", $id);

    if ($result) {
        deleteImage('decorations_and_furniture',$old_image);
        addSuccessToSession('db', "تم الحذف بنجاح");
    } else {
        addErrorToSession('db', "There was an error sorry!!!");
    }
    redirect(getPage("decorations_and_furniture/index.php"));
} else {
    redirect(getPage("decorations_and_furniture/index.php"));
}
