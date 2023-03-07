<h2><?= esc($title) ?></h2>
<?= session()->getFlashdata('error') ?>

<section>
<div class="blurbox">
    <div class="form-value">
        <form action="create" method="post">
            <?= csrf_field() ?>

            <div class="inputbox">
                <ion-icon name="reorder-four-outline"></ion-icon>
                <input type="input" name="title">
                <label for="title">Title</label>
            </div>

            <div class="inputbox">
                <textarea name="body" cols="45" rows="4"></textarea>
                <label for="body">Text</label>
            </div>

            <input class ="input-button" type="submit" name="submit" value="Create news item">
        </form>
    </div>
</div>
</section>
<?= validation_list_errors() ?>
