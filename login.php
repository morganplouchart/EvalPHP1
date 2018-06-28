<?php
        $header = file_get_contents('./templates/header.php');
        echo $header;
        session_start();  

$createCookie = setcookie('login', 'neo@matrix.com', time() + 3600*3600, null, null, false, true);
$createCookie1 = setcookie('password', 'admin', time() + 3600*3600, null, null, false, true);

const login = 'neo@matrix.com';
const password = 'admin';

if (isset($_POST['login']) && isset($_POST['password']))
{
    if(preg_match("/^[a-zA-Z0-9_.-]{3,}[@][a-zA-Z0-9_.-]{3,}[.][a-zA-Z0-9_.-]{2,5}$/", login)) {
     
    if ($_POST['login'] === login && $_POST['password'] === password)
    {
        $_SESSION['login'] = $_POST['login']; 
        header('Location: /evalPHP');
    }
    else
    {
        echo "<script>alert('Wrong login or password');</script>";
        echo "<noscript>Wrong login or password</noscript>";
    }
    }
}
?>
<div class="content">
    <div class="row">
        <div class="col-4">
            <form method="post">
            Login:<br><input name="login"><br>
            Password:<br><input name="password"><br>
            <input type="submit">
            </form>
        </div>
    </div>
</div>

<?php
        $footer = file_get_contents('./templates/footer.php');
        echo $footer;  
?>