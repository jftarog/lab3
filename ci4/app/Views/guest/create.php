<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>

<section>
<div class="blurbox">
    <div class="form-value">
        <form action="create" method="post">
            <?= csrf_field() ?>

            <div class="inputbox">
                <ion-icon name="body-outline"></ion-icon>
                <input type="input" name="name">
                <label for="name">Name</label>
            </div>

            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="input" name="email">
                <label for="email">E-mail</label>
            </div>

            <div class="inputbox">
                <ion-icon name="link-outline"></ion-icon>
                <input type="input" name="website">
                <label for="website">Website</label>
            </div>

            <div class="inputbox">
                <textarea name="comment" cols="45" rows="4"></textarea>
                <label for="comment">Comment</label>
            </div>
            <br>

            Gender:
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="other">Other
            <br>
            
            <br>
            <input class ="input-button" type="submit" name="submit" value="Create guest account">
        </form>
    </div>
</div>
</section>

<?= validation_list_errors() ?>

