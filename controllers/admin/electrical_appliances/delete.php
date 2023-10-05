<?php
include __DIR__ . "/../../../functions/functions.php";
if (isset($_POST['id'])) {
    $id = $_POST['id'];


    $old_image = selectWhere($conn, 'electrical_appliances', 'image',"id = $id")[0]['image'];

    $result = delete($conn, "electrical_appliances", $id);

    if ($result) {
        deleteImage('electrical_appliances',$old_image);
        addSuccessToSession('db', "تم الحذف بنجاح");
    } else {
        addErrorToSession('db', "There was an error sorry!!!");
    }
    redirect(getPage("electrical_appliances/index.php"));
} else {
    redirect(getPage("electrical_appliances/index.php"));
}
