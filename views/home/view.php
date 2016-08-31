<?php $this->title = htmlentities($this->post['title']) ?>


<div  id="indexContent">
<h2><?=htmlentities($this->post['title'])?></h2>
<p><?=htmlentities($this->post['content'])?></p>
<p><b>Автор: </b><?= $this->post['full_name'] ?></p>
<p><b>Дата: </b><?= $this->post['date'] ?>
    <?php if ($this->isAdmin){ ?>

    <a href="<?=APP_ROOT?>/posts/delete/<?= htmlentities($this->post['post_id']);?>" id="delete"><b>Изтрий</b></a>
    <a href="<?=APP_ROOT?>/posts/edit/<?=htmlentities($this->post['post_id']);?>" id="delete"><b>Поправи</b></a></p>
    <?php
    } ?>
    <div>
<h2>Коментари</h2>
        <br>

        <?php  foreach ($this->comments as $comment) :  ?>

            <?php
            if($comment['postID']==$this->post['post_id']) {?>
        <div id="commentID"><b>Коментар от <?= $comment['full_name']?> :</b>
            <div style="float:right;">
                <?=htmlspecialchars($comment['commentDate'])?>
            </div>
            <br><br>
        <?=htmlspecialchars($comment['comment'])?>

        </div>

        <?php }?>
        <?php endforeach; ?>
    </div>


    <div id="indexContent">
        <form method="post">
            <div style="padding:10px 0px; ;"><b>Напишете коментар</b></div>
            <textarea rows="10" cols="50"  name="comment" style="width:1000px; font-size:24px"> </textarea>
           <button type="submit" id="buttonComment"><a href="<?=APP_ROOT?>/home/view/<?=htmlentities($this->post['post_id']);?>">Създай коментар  </a></button>
        </form>

    </div>

</div>