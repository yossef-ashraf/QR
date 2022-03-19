<?php require('header.php'); ?>

<form action="<?= PATH ?>/log/RegisterLogin" method="post" class=" container-sm" data-aos="fade-up-right">
    <div class="mb-3 ">
        <label for="email" class="form-label">name</label>
        <input type="text" id="email" name="name" class="form-control" placeholder="name">
    </div>

    <div class="mb-3 ">
        <label for="email" class="form-label">email</label>
        <input type="text" id="email" name="email" class="form-control" placeholder="email">
    </div>

    <div class="mb-3 ">
        <label for="email" class="form-label">password</label>
        <input type="text" id="email" name="pass" class="form-control" placeholder="password">
    </div>

    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-arrow-right-from-bracket"></i></button>

</form> 


<?php require('footer.php'); ?>