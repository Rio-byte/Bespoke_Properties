<?php 
if (count($errors) > 0) : ?>
    <div class="error">
        <?php foreach ($errors as $error) : ?>
            <p>
            <?php echo $error ?>
            </p>
        <?php endforeach ?>
    </div>
<?php endif ?>
<style>
    .error {
        width: 50%;
        margin: 0px auto;
        padding: 10px;
        color:white;
        text-align: center;
        border-radius: 5px;
        background-color: gray;
        font-size: 17px;
    }
</style>