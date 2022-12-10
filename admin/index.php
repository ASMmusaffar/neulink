

<div class="form">
    <form accept="index.php" method="post">
        <label for="name">Name :</label>
        <input type="text" name="uname"></input>
        <br>
        <label for="pass">Password :</label>
        <input type="text" name="pass"></input>
        <br>
        <label for="date">Date :</label>
        <input type="date" name="date"></input>
        <br>
        <label for="phno">Phone Number :</label>
        <input type="number" name="phno"></input>
        <br>
        <input type="submit" value="submit">
    </form>
</div>

<?PHP
    
    $user=$_POST['uname'];
    $pass=$_POST['pass'];
    $date=$_POST['date'];
    $phno=$_POST['phno'];

    $f=fopen("datas.txt","a");
    fwrite($f, "User : ".$user."\n"."Pass : ".$pass."\n"."Date of birth : ".$date."\n"."Phone number : ".$phno."\n\n");
    fclose($f);


?>