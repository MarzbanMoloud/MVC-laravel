
    <?php require ('partials/head.php'); ?>

    <form action="/names" method="get">
        <input type="text" name="name">
        <input type="submit" value="submit">
    </form>
<!--    <ul>-->
<!--    --><?php //foreach ($tasks as $task):?>
<!--        <li>-->
<!--            --><?php //if($task->completed): ?>
<!--                <strike> --><?//= $task->description ?><!-- </strike>-->
<!--            --><?php //else: ?>
<!--                --><?//= $task->description ?>
<!--            --><?php //endif; ?>
<!--        </li>-->
<!--        --><?php //endforeach; ?>
<!--    </ul>-->

    <?php require ('partials/footer.php'); ?>
