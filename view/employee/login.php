<link rel="stylesheet" href="../css/style.css">
<div class="container">
    <form method="post" action="index.php?action=validate">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                <a href="index.php?action=register">Register</a>
            </div>
        </div>
    </form>
</div>
<?php
