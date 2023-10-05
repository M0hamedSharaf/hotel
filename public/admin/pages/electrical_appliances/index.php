<?php
include $_SERVER['DOCUMENT_ROOT'] . "/functions/functions.php";
$electrical_appliancess = select($conn, 'electrical_appliances', '*');

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
                            <h3 class="card-title">الأجهزة الكهربائية</h3>
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
                                    <?php foreach ($electrical_appliancess as $electrical_appliances) : ?>
                                        <tr>
                                            <td><?= $electrical_appliances['id']; ?>
                                            </td>

                                            <td><?= $electrical_appliances['title']; ?>
                                            </td>

                                            <td>
                                                <img src="<?= getImage('electrical_appliances/' . $electrical_appliances['image']) ?>" alt="" style="width:100px">
                                            </td>

                                            <td><?= $electrical_appliances['description']; ?></td>
                                            <td>
                                                <a class="btn btn-success" href="<?= getPage("electrical_appliances/edit.php") ?>?id=<?= $electrical_appliances['id']; ?>">
                                                    <i class="fas fa-marker"></i>
                                                </a>
                                                <form action="<?= getController("admin/electrical_appliances/delete.php") ?>" method="POST">
                                                    <input type="hidden" name="id" value="<?= $electrical_appliances['id']; ?>">
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