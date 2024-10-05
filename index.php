<?php
include './include/db.php';
include './include/from.php';
include './include/select.php';
include './include/db_close.php';
?>


<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>   
<div class="position-relative overflow-hidden p-6 p-md-7  text-center bg-light">
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 m-md-2 border-bottom">
      <span class="fs-4 "  ><h2>المسابقة</h2></span>  
      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="#home"><h5>  الصفحة الرئيسية</h5></a>
        <a class="me-3 py-2 text-dark text-decoration-none"
      href="#list"><h5>الشروط  </h5></a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="#input"><h5>تسجيل البيانات  </h5></a>
        <a class="py-2 text-dark text-decoration-none" href="#"></a>
      </nav>
    </div>


    <div id="home"class="col-md-5 p-lg-5 m-100px mx-auto">
      <div class="image"><img src="./images/nour-icon.jpg"></div>
  
      <h1 class="display-4 fw-normal">أربح مع نور</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل </p>
     <h4 id="countdown"></h4>


      </div>




  <div id="list" class="container" >
    <h3>للسحب على نسخة مجانية من برنامج اتبع ما يلي </h3>
  <ul class="list-group list-group-flush">
    <li class="list-group-item  col-9 p-lg-3 mx-auto ">تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور أعلاه</li>
    <li class="list-group-item col-9 p-lg-3 mx-auto">سأقوم بيت مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع</li>
    <li class="list-group-item col-9 p-lg-3 mx-auto">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وإيميلك</li>
    <li class="list-group-item col-9 p-lg-3 mx-auto">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
    <li class="list-group-item col-9 p-lg-3 mx-auto">الرابع سيحصل على نسخة مجانية من برنامج كامتازيا</li>
  </ul>
  </div>

  </div>

 









  <div class="container" >
  <div class="position-relative  text-center ">
  <div class="col-md-5 p-lg-5 mx-auto my-5">

  <form id="input" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h3>الرجاء ادخل معلوماتك</h3>

    <div class="mb-3">
      <label for="firstname" class="form-label">الاسم الأول</label>
      <input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo $FirestName  ?>">
      <div class="form-text error"><?php echo $errors['firstnameErrors'] ?></div>
    </div>

    <div class="mb-3">
      <label for="lastname" class="form-label">الاسم الأخير</label>
      <input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $LastName  ?>">
      <div class="form-text error"><?php echo $errors['lastnameErrors'] ?></div>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">البريد الالكتروني</label>
      <input type="text" name="email" id="email" class="form-control" value="<?php echo $Email ?>">
      <div class="form-text error"><?php echo $errors['emailErrors'] ?></div>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
  </form>

    </div>
  </div>


 <div class="loader-con">
     <div id="loader">
        <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
 </div>

<div class=" d-grid gap-2 col-6 mx-auto my-5 ">
<button type="button" id="winner" class="btn btn-primary " >اختيار الرابح</button>
</div>




<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="modalLabel">الرابح في المسابقة </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user):?>
        <h1 class=" display-4 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['FirestName']) .'  '. htmlspecialchars($user['LastName']);?> </h1>
      <?php endforeach;?>
      </div>
 
    </div>
  </div>
</div>

</div> 




<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/loader.js"></script>

<script src="./js/script.js"></script>


</body>
</html>