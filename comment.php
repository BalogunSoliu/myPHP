<?php
date_default_timezone_set('Africa/lagos');
include('PHPMailer.php') ;
include('Exception.php') ;
if (isset($_POST['comment'])){
 $comment_san = mysqli_real_escape_string($con, $_POST['comment_content']);
$comment = htmlspecialchars($comment_san);
$name_san= mysqli_real_escape_string($con, $_POST['name']);
$name = htmlspecialchars($name_san);
$email = $_POST['cemail'];
$pid = $_POST['id'];
$commentId= $_POST['comid'];
$_SESSION['cemail'] = $email;
$_SESSION['name'] = $name;


$msg = wordwrap($comment,70);

// send email
mail("soliu@uniabujaadmissionguide.com","New Comment from ".$name_san,"Post url: uniabujaadmissionguide.com/post.php?id=".$pid."#".$commentId."\n Comment: ".$msg."\n Comment: ".$email);




$sql_query=mysqli_query($con, "insert into comment (content,post_id,date_posted,Username,Email) values ('$comment','$pid','".date('F d, Y - h:i:sa')."','$name','$email')") ;
if($sql_query){header('location:post.php?id='.$id);}

?>

<?php
}
?>
