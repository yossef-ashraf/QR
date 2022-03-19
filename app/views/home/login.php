<?php require('header.php');?>



<form action="<?= PATH ?>/log/PostLogin" method="post" class="container-sm" data-aos="fade-up-right">
    <div class="mb-3 ">
        <label for="email" class="form-label">email</label>
        <input type="text" id="email" name="email" class="form-control" placeholder="email">
    </div>

    <div class="mb-3 ">
        <label for="pass" class="form-label">password</label>
        <input type="text" id="pass" name="pass" class="form-control" placeholder="password">
    </div>
    <div class="mb-3 ">
        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-arrow-right-to-bracket"></i></button>
    </div>

</form>


<?php require('footer.php'); ?>





<!-- <img src="<?php //echo $fileName ?>" alt=""> -->
<?php//foreach($data as $c): ?>
<?php// endforeach; ?>