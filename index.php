<?php 
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php'; ?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto ">
    <img src="images/wafi5.png" alt="" width="50%">
        <h1 class="display-4 fw-normal">اربح مع وافي</h1>
        <p class="lead fw-normal">باقي على فتح التسجيل</p>
        <h3 id="time"></h3>
        <p class="lead fw-normal">جوائز قيمه للسحب</p>
       
        
</ul>
    </div>

<div class="container">
<h3>شروط الدخول في السحب</h3>
<ul class="list-group list-group-flush">
<li class="list-group-item"> تابع البث كامل على اليوتيوب </li>
<li class="list-group-item"> البث سيكون لمده ساعه متواصله عباره عن اسئله واجوبه للجميع</li>
<li class="list-group-item"> خلال البث سيتم ارسال رابط التسجيل للمسابقه</li>
<li class="list-group-item"> نهايه البث سيتم الاختيار بشكل عشوائي</li>
<li class="list-group-item"> الفائز يحصل على تطبيق مجاني</li>

</div>
</div>




<div class="container">
<div class="position-relative text-right bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <h3>يرجى ادخال المعلومات</h3>
            <div class="mb-3">
                <label class="form-label">الاسم الاول</label>
                <input type="text" name="firstName"  class="form-control" id="firstName" value="<?php echo $firstName ?>" >
                <div class="form-text error"><?php echo $errors['firstNameError']?></div>
            </div>

            <div class="mb-3">
                <label class="form-label">الاسم الاخير</label>
                <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName ?>" >
                <div class="form-text error"><?php echo $errors['lastNameError']?></div>
            </div>

            <div class="mb-3">
                <label class="form-label">البريد الالكتروني</label>
                <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>" >
                <div class="form-text error"><?php echo $errors['emailError']?></div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
        </form>
    </div>
</div>



<div class=""loader-con>
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>






 <div class="d-grid gap-2 col-12 mx-auto">
<button type="button" id="winner" class="btn btn-primary">
 اختيار الرابح
</button>
</div>

<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <?php foreach($users as $user): ?>
<?php endforeach; ?>  
        <h5 class="modal-title" id="modalLabel">الرابج في المسابقه</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <?php foreach($users as $user): ?>
<?php endforeach; ?>  
        <h1 class="modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']); ?></h1>
        ...
      </div>
    </div>
    </div>
  </div>
</div>






<?php include_once './parts/footer.php'; ?>
