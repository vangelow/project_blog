<?php $this->title = "Post Title" ?>


<div  id="indexContent">
<h2><?=htmlentities($this->post['title'])?></h2>
<p><?=htmlentities($this->post['content'])?></p>
<p><b>Автор: </b><?= $this->post['full_name'] ?></p>
<p><b>Дата: </b><?= $this->post['date'] ?></p>
</div>