<?php $this->title = "Създай новина"; ?>

<form method="post" id="createForm">

        <p style="font-size:24px; margin-left: 40px;"><b>Заглавие</b></p>

    <div>
    <input type="text" id="createText" placeholder="Заглавие" name="title">
    </div>
    <p style="font-size:24px; margin-left: 40px ;"><b>Текст</b></p>
        <textarea rows="20" cols="50" placeholder="Текст" id="createContent" name="content"> </textarea>
    <button type="submit" id="buttonCreate">Създай</button>


</form>