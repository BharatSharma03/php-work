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

    </form>
    <?php 

    // if(isset($_POST['set'])){
    //     $value=$_POST['user'];
    //     setcookie("user",$value);
    //     echo $value;
    // }
    if(isset($_POST['btn'])){
        if($_POST['btn']=="set"){
            $value=$_POST['user'];
            // echo $value;
            setcookie("user",$value);
            echo "cookie is set";
             
        }
        if($_POST['btn']=="display"){
            if(isset($_COOKIE['user'])){
                echo $_COOKIE['user'];

            }
        }

        if($_POST['btn']=="delete"){
            if(isset($_COOKIE['user'])){
                setcookie("user",null,-1);
                echo "cookie is deleted";
            }
        }
    }
      
    ?>
