<?php
include 'view/admin/nav.php';
?>
<div class="container-add">
    <h1>Thêm Danh mục</h1>

    <form action="" method="POST">
                        <?php foreach ($list_category as $category):  extract($category) ?>

        <input type="text" name="name" id="" value="<?= $dm_name ?>">
        <button name="submit" type="submit">Sửa danh Mục</button>
    </form>

    <?= $thongBao ?>
</div>