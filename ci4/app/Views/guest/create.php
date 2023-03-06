<style>
    section {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    h2 {
        font-size: 2em;
        color: #fff;
        text-align: center;
    }
    .form-box {
        position: relative;
        width: auto;
        padding: 50px;
        background: transparent;
        border: 2px solid rgba(255,255,255,0.5);
        border-radius: 20px;
        backdrop-filter: blur(15px);
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .inputbox {
        position: relative;
        margin: 30px 0;
        width: 310px;
        border-bottom: 2px solid #fff;
    }
    .inputbox label {
        position: absolute;
        top: 50%;
        left: 5px;
        color: #fff;
        font-size: 1em;
        pointer-events: none;
    }
    input:valid ~ label {
        top:-10px;
    }
    textarea:valid ~ label {
        top:-20px;
    }
    .inputbox input {
        width: 100%;
        height: 50px;
        background: transparent;
        border: none;
        outline: none;
        font-size: 1em;
        padding:0 35px 0 5px;
        color: #fff;
    }
    .inputbox textarea {
        width: 100%;
        height: 50px;
        background: transparent;
        border: none;
        outline: none;
        font-size: 1em;
        padding:0 35px 0 5px;
        color: #fff;
    }
    .inputbox ion-icon{
        position: absolute;
        right: 8px;
        color: #fff;
        font-size: 1.2em;
        top: 20px;
    }

    .input-button{
        width: 100%;
        height: 40px;
        border-radius: 40px;
        background: #fff;
        border: none;
        outline: none;
        cursor: pointer;
        font-size: 1em;
        font-weight: 600;
    }
</style>

<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>

<section>
<div class="form-box">
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

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>