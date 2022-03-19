<?php require('header.php'); ?>


    <form action="<?= PATH ?>/user/postqrs" method="post" class="container-sm" data-aos="fade-up-right">
        <div class="mb-3 ">
            <label for="qrs" class="form-label">data</label>
            <input type="text" id="qrs" name="qrs" class="form-control" placeholder="qrs">
        </div>

        <div class="mb-3 ">
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-qrcode"></i></button>
        </div>

    </form>
<?php require('footer.php'); ?>