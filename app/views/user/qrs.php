<?php require('header.php'); ?>
    <table class="table table-success table-striped"  data-aos="flip-down">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">qr</th>
            <th scope="col">download</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
<?php $i=1;
foreach($qr as $q):?>
    <tr>
        <th scope="row"><?= $i ?></th>
        <td><img class="img-thumbnail" src="<?= PATH ."/". $q->QrPath ?>" alt="<?= PATH ."/". $q->QrPath ?>"></td>
        <td><a href="<?= PATH ."/". $q->QrPath ?>" class="btn btn-primary" download>download</a></td>
        <td>   <form action="<?= PATH ?>/user/deleteQr" method="post">
                <input type="submit" value="delete" class="btn btn-primary">
                <input type="hidden" id="qrs" name="id" value="<?= $q->id ?>"><br>
                <input type="hidden" id="path" name="path" value="<?= $q->QrPath ?>"><br>

            </form></td>
    </tr>

<?php $i++;
endforeach; ?>
        </tbody>
    </table>






<?php require('footer.php'); ?>