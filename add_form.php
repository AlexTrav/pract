<?php if ($user_id): ?>
<div id ="add_new_photo">
    <form action="new_photo.php" method="post">
        <input id="new_photo_src" type="text" placeholder="Картинка" name="image">
        <input id="new_photo_src" type="text" placeholder="Подпись" name="text">
        <button id="add_photo">Добавить</button>
        <button id="cancel">Отменить</button>
        </form>
</div>
<?php endif ?>