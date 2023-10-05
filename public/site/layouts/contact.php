<?php
include $_SERVER['DOCUMENT_ROOT'] . "/functions/functions.php";
?>
<?php include frontLayout('head.php'); ?>

<!-- Topbar Start -->
<div class="container-fluid bg-dark py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white pr-3" href="">أسئلة وأجوبة</a>
                    <span class="text-white">|</span>
                    <a class="text-white px-3" href="">مساعدة</a>
                    <span class="text-white">|</span>
                    <a class="text-white pl-3" href="">يدعم</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container position-relative" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="" class="navbar-brand">
                <h1 class="m-0 display-5 text-white"><span class="text-primary">i</span>DESIGN</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="<?=ashome('index.php')?>" class="nav-item nav-link">الصفحة الرئيسية</a>
                    <a href="contact.html" class="nav-item nav-link active">اتصال</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


<!-- Under Nav Start -->
<div class="container-fluid bg-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 text-left mb-3 mb-lg-0">
                <div class="d-inline-flex text-left">
                    <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                    <div class="d-flex flex-column">
                        <h5>مكتبنا</h5>
                        <p class="m-0">الاسكندرية كينج المريوط</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                <div class="d-inline-flex text-left">
                    <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                    <div class="d-flex flex-column">
                        <h5>البريد الالكتروني</h5>
                        <p class="m-0"> mohamed@sade.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                <div class="d-inline-flex text-left">
                    <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                    <div class="d-flex flex-column">
                        <h5>اتصل بنا</h5>
                        <p class="m-0">+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Under Nav End -->


<!-- Page Header Start -->
<div class="container-fluid bg-secondary py-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="mb-4 mb-md-0 text-primary text-uppercase">M.S</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn btn-outline-primary" href="">الصفحة الرئيسية</a>
                    <i class="fas fa-angle-double-right text-primary mx-2"></i>
                    <a class="btn btn-outline-primary disabled" href="">اتصل بنا</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Start -->


<!-- Contact Start -->
<div class="container-fluid bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                    <div class="d-inline-flex border border-secondary p-4 mb-4">
                        <h1 class="flaticon-office font-weight-normal text-secondary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h4>مكتبنا </h4>
                            <p class="m-0 text-white">الاسكندرية كينج المريوط</p>
                        </div>
                    </div>
                    <div class="d-inline-flex border border-secondary p-4 mb-4">
                        <h1 class="flaticon-email font-weight-normal text-secondary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h4>البريد الالكتروني</h4>
                            <p class="m-0 text-white"> mohamed@sade.com</p>
                        </div>
                    </div>
                    <div class="d-inline-flex border border-secondary p-4">
                        <h1 class="flaticon-telephone font-weight-normal text-secondary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h4>اتصل بنا</h4>
                            <p class="m-0 text-white">+012 345 6789</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 mb-5 my-lg-5 py-5 pl-lg-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate" action="<?= getController("admin/users/create.php") ?>" method="POST">
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="name" placeholder="أدخل إسمك" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control p-4" id="email" placeholder="أدخل بريدك الإلكترونية" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="subject" placeholder="موضوعات" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control p-4" rows="6" id="message" placeholder="رسالتك" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">ارسال البيانات</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?php include frontLayout('footer.php'); ?>