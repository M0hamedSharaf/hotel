<?php
include __DIR__ . "/../../../functions/functions.php";
if (isset($_POST['id'])) {
    $id = $_POST['id'];


    $old_image = selectWhere($conn, 'household_appliances_section', 'image',"id = $id")[0]['image'];

    $result = delete($conn, "household_appliances_section", $id);

    if ($result) {
        deleteImage('household_appliances_section',$old_image);
        addSuccessToSession('db', "تم الحذف بنجاح");
    } else {
        addErrorToSession('db', "There was an error sorry!!!");
    }
    redirect(getPage("household_appliances_section/index.php"));
} else {
    redirect(getPage("household_appliances_section/index.php"));
}
