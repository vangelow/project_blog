<?php $this->title = 'Регистрация'; ?>

<form method="post" id="formRegLog">
    <div class="container">
        <div id="usernameID"><b>Username</b></div>
        <input type="text" id="inputText" placeholder="Enter Username" name="username" required></br>

        <div id="passwordID"><b>Password</b></div>
        <input type="password" id="inputText" placeholder="Enter Password" name="password" required>

        <div id="passwordID"><b>Confirm password</b></div>
        <input type="password" id="inputText" placeholder="Confirm password" name="password_confirm" required>
        <div id="usernameID"><b>Full name</b></div>
        <input type="text" id="inputText" placeholder="Enter Fullname" name="full_name" required>
        <div>
        <button type="submit" id="buttonRegLog">Регистрация</button>
        </div>
    </div>
</form>