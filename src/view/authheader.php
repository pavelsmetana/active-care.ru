<?php
if (!auth_check()) : ?>
    <a href="/login">Личный Кабинет</a>
<?php else : ?>
    <a href="/logout">Выйти</a>
<?php endif;
