<form action="" method="post">
Name:<input type="text" name="user" placeholder="enter a text">
        <br>
        <br>
        <button type="submit" name="btn" value="set">set cookies</button><br>
        <br>
        <button type="submit" name="btn" value="display">display cookie</button>
        <br>
        <br>
        <button type="submit" name="btn" value="delete">delete cookies</button>
        <br>

<?php
    session_start();
    if(isset($_POST['btn'])){
        if($_POST['btn']=="set"){
            $value=$_POST['user'];
            $_SESSION['user']=$value;
            echo "session is set";
        }
        if($_POST['btn']=="display"){
            if(isset($_SESSION['user'])){
                echo $_SESSION['user'];
            }
    }
        if($_POST['btn']=="delete"){
            session_destroy();
            echo ("session is destroyed");
        }
}
    
?>
</form>

