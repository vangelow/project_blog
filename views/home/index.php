
<?php $this->title = "Блога на Станимир Иванов"; ?>


<main xmlns="http://www.w3.org/1999/html">


    <div  id="indexContent">
        <h2 >Последни новини</h2>
        <p>--------------------------------------------</p>
    <?php
    foreach ($this->posts as $post) : ?>
        
        <h2><a href="<?=APP_ROOT?>/home/view/<?=htmlspecialchars($post['post_id'])?>" id="postTitleLink"><?=htmlentities($post['title'])?></a></h2>
        <?php
        $string=($post['content']);
        if(strlen($string) >255) {
            $stringCut = mb_substr($string, 0, 255,'utf-8');
          $trimmedString = trim($stringCut, " ");
        echo ($trimmedString);
        ?>....<a href="<?=APP_ROOT?>/home/view/<?= htmlspecialchars($post['post_id']) ?>">Покажи цялата новина</a>
        <?php
        } else {
        ?>
            <p><?=htmlentities($post['content'])?></p>
        <?php  } ?>
        <p><b>Автор: </b><?= $post['full_name'] ?></p>
        <p><b>Дата: </b><?= $post['date'] ?></p>






    <?php endforeach;?>
    </div>
</main>
    