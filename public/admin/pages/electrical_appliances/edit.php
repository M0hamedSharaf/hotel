<?php
include $_SERVER['DOCUMENT_ROOT'] . "/functions/functions.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $oldData = selectWhere($conn, 'electrical_appliances', '*', "id = $id")[0];
}
$users = select($conn, 'users', '*');
?>

<?php include layout("header.php"); ?>

<?php include layout("navbar.php"); ?>

<?php include layout("aside.php"); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">لوحة تحكم للموقع</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                        <h3 class="card-title">تعديل الإجهزة الكهربائية</h3>
                        </div>

                        <div class="card-body">
                            <?php if (isset($_SESSION['success']['db'])) : ?>
                                <p class="alert alert-success">
                                    <?= $_SESSION['success']['db']; ?>
                                </p>
                            <?php elseif (isset($_SESSION['errors']['db'])) : ?>
                                <p class="text-danger">
                                    <?= $_SESSION['errors']['db']; ?>
                                </p>
                            <?php endif; ?>


                            <form id="quickForm" action="<?= getController("admin/electrical_appliances/update.php") ?>" method="POST"  enctype="multipart/form-data">
                                <div class="card-body">

                                    <input type="hidden" name="id" value="<?= $oldData['id'] ?>">



                                    <div class="form-group">
                                        <label for="title">العنوان</label>
                                        <input type="text" name="title" class="form-control" id="title" value="<?= $oldData['title'] ?>">
                                        <?php if (isset($_SESSION['errors']['title'])) : ?>
                                            <p class="text-danger"><?= $_SESSION['errors']['title'] ?></p>
                                        <?php endif ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">الصور</label>
                                        <input type="file" name="image" class="form-control" id="image">
                                        <?php if (isset($_SESSION['errors']['image'])) : ?>
                                            <p class="text-danger"><?= $_SESSION['errors']['image'] ?></p>
                                        <?php endif ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="description">الوصف</label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control">
                                            <?= $oldData['description'] ?>
                                        </textarea>
                                        <?php if (isset($_SESSION['errors']['description'])) : ?>
                                            <p class="text-danger"><?= $_SESSION['errors']['description'] ?></p>
                                        <?php endif ?>
                                    </div>
                                </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">إرسال</button>
                        </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->

            </div>
    </section>

    <?php include layout("footer.php"); ?>