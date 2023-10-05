<?php
include $_SERVER['DOCUMENT_ROOT'] . "/functions/functions.php";
$electronic_devicess = select($conn, 'electronic_devices', '*');

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
                            <h3 class="card-title">الإجهزة الألكترونية</h3>
                        </div>

                        <div>
                            <?php if (isset($_SESSION['success']['db'])) : ?>
                                <p class="alert alert-success">
                                    <?= $_SESSION['success']['db']; ?>
                                </p>
                            <?php elseif (isset($_SESSION['errors']['db'])) : ?>
                                <p class="text-danger">
                                    <?= $_SESSION['errors']['db']; ?>
                                </p>
                            <?php endif; ?>
                        </div>

                        <div class="card-body">



                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>العنوان</th>
                                        <th>الصور</th>
                                        <th>الوصف</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($electronic_devicess as $electronic_devices) : ?>
                                        <tr>
                                            <td><?= $electronic_devices['id']; ?>
                                            </td>

                                            <td><?= $electronic_devices['title']; ?>
                                            </td>

                                            <td>
                                                <img src="<?= getImage('electronic_devices/' . $electronic_devices['image']) ?>" alt="" style="width:100px">
                                            </td>

                                            <td><?= $electronic_devices['description']; ?></td>
                                            <td>
                                                <a class="btn btn-success" href="<?= getPage("electronic_devices/edit.php") ?>?id=<?= $electronic_devices['id']; ?>">
                                                    <i class="fas fa-marker"></i>
                                                </a>
                                                <form action="<?= getController("admin/electronic_devices/delete.php") ?>" method="POST">
                                                    <input type="hidden" name="id" value="<?= $electronic_devices['id']; ?>">
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>العنوان</th>
                                        <th>الصور</th>
                                        <th>الوصف</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->

            </div>
    </section>
    <?php include layout("footer.php"); ?>