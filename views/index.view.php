
<?php require ('partials/head.php'); ?>

<ul>
    <?php foreach($users as $user): ?>
        <li><?= $user->name ?></li>
    <?php endforeach; ?>
</ul>

    <form action="/names" method="post">
        <input type="text" name="name">
        <input type="submit" value="submit">
    </form>

<?php require ('partials/footer.php'); ?>
