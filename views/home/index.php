
<?php $this->title = "Блога на Станимир Иванов"; ?>


<main xmlns="http://www.w3.org/1999/html">


    <div  id="indexContent">
        <h2 >Последни новини</h2>
        <p>--------------------------------------------</p>
    <?php

    foreach ($this->posts as $post) : ?>

        <h2><?=htmlentities($post['title'])?></h2>
        <p><?=htmlentities($post['content'])?></p>

    <?php endforeach;?>
    </div>
</main>
    