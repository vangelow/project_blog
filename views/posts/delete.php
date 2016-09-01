<?php $this->title = "Изтрий новина"; ?>
<form method="post" id="createForm">

    <p style="font-size:24px; margin-left: 40px;"><b>Заглавие</b></p>

    <div>
        <input type="text" id="createText"  value="<?=($this->post['title'])?>" name="title" disabled>
    </div>
    <p style="font-size:24px; margin-left: 40px ;"><b>Текст</b></p>
    <textarea rows="20" cols="50"  id="createContent" name="content" disabled><?=($this->post['content'])?></textarea>
    <button type="submit" id="buttonCreate">Изтрий</button>
</form>