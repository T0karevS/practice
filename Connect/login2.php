<?php
$login = $_POST['login'];
$password = MD5($_POST['password']);
$db = new PDO( "mysql:host = localhost;dbname=knigiru", "root", "root");
$query = $db->query("SELECT COUNT(*) as count FROM users where `login` = '$login' and `password` = '$password'");
$query->setFetchMode(PDO::FETCH_ASSOC);
$row = $query->fetch();
$members = $row['count'];
if($members==0)
{
    header('Location: ../login.php');
}
else
{
   
    header('location: ../index.php');
}
?>
<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>