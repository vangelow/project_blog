<?php $this->title = 'Login'; ?>

<h1 xmlns="http://www.w3.org/1999/html"><?= htmlspecialchars($this->title) ?></h1>

<form>
    <div class="container">
        <div id="usernameID"><b>Username</b></div>
        <input type="text" placeholder="Enter Username" name="username" required></br>

        <div id="passwordID"><b>Password</b></div>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
    </div>
</form>
