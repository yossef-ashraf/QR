<?php require('header.php'); ?>

    <form action="<?= PATH ?>/user/postQrUser" method="post" class="container-sm" data-aos="fade-up-right">
        <div class="mb-3 ">
            <label for="name" class="form-label">name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="name">
        </div>

        <div class="mb-3 ">
            <label for="phone" class="form-label">phone</label>
            <input type="text" id="phone" name="phone" class="form-control" placeholder="phone">
        </div>

        <div class="mb-3 ">
            <label for="email" class="form-label">email</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="email">
        </div>

        <div class="mb-3 ">
            <label for="addressLabel" class="form-label">addressLabel</label>
            <input type="text" id="addressLabel" name="addressLabel" class="form-control" placeholder="qrs">
        </div>


        <div class="mb-3 ">
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-qrcode"></i></button>
        </div>

    </form>


<?php require('footer.php'); ?>