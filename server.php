<?php 
$db=new PDO('mysql:host=localhost;dbname=ajax','root','');
$page=isset($_GET['p'])?$_GET['p']:'';

if($page=='add'){
 $name=$_POST['name'];
 $year=$_POST['year'];
 $branch=$_POST['branch'];
 $game=$_POST['game'];
 $stmt=$db->prepare("insert into users values('',?,?,?,?)");
 $stmt->bindParam(1,$name);
 $stmt->bindParam(2,$year);
 $stmt->bindParam(3,$branch);
 $stmt->bindParam(4,$game);

 if ($stmt->execute()) {
    echo "Success";
 }else{
    echo "Fail".mysqli_error();
 }
}else if($page=='edit'){

}if($page=='del'){

}else{

 }
?>