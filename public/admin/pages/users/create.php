<?php
include $_SERVER['DOCUMENT_ROOT'] . "/functions/functions.php";

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
              <h3 class="card-title">إنشاء مستخدمين</h3>
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



              <form id="quickForm" action="<?= getController("admin/users/create.php") ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">الإسم</label>
                    <input type="text" name="name" class="form-control" id="name">
                    <?php if (isset($_SESSION['errors']['name'])) : ?>
                      <p class="text-danger"><?= $_SESSION['errors']['name'] ?></p>
                    <?php endif ?>
                  </div>
                  <div class="form-group">
                    <label for="email">البريد الإلكتروني </label>
                    <input type="email" name="email" class="form-control" id="email">
                    <?php if (isset($_SESSION['errors']['email'])) : ?>
                      <p class="text-danger"><?= $_SESSION['errors']['email'] ?></p>
                    <?php endif ?>
                  </div>
                  <div class="form-group">
                    <label for="subject">موضوعات</label>
                    <input type="subject" name="subject" class="form-control" id="subject">
                    <?php if (isset($_SESSION['errors']['subject'])) : ?>
                      <p class="text-danger"><?= $_SESSION['errors']['subject'] ?></p>
                    <?php endif ?>
              
                  <div class="form-group">
                    <label for="message">رسالتك</label>
                    <input type="text" name="message" class="form-control" id="message">
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