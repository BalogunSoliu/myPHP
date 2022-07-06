 
<?php include('dbconn.php') ;
session_start(); 
date_default_timezone_set('Africa/lagos');

$id = $_GET['id'];
$query=mysqli_query($con, "select * from post where post_id='$id'")or die(mysqli_error());

while($topic=mysqli_fetch_array($query)){$title=$topic['Topic'];$sdq=mysqli_real_escape_string($con,$topic['content']);
 $googleview=htmlspecialchars($sdq)  ;} ?>
<!DOCTYPE html>
<html lang="en-US">

<head>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4453622041345362"
     crossorigin="anonymous"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JRENW9XSW6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
gtag('config', 'UA-186389135-4');
  gtag('config', 'G-JRENW9XSW6');
</script>
  <!-- Custom styles for this template -->
  <meta charset="utf-8">
  <meta name="Description" CONTENT="<?php echo substr($googleview,0,120)  ?>">
<meta property="og:title" content="<?php echo $title;  ?>" /> <meta property="og:type" content="University Of Abuja Admission Guide" /> <meta property="og:url" content="http://UniabujaAdmissionGuide.Com/post.php<?php echo '?id='.$id;?>" /> <meta property="og:image" content="https://uniabujaadmissionguide.com/uniabuja_logo.png" /> <meta property="og:description" content="<?php echo substr($googleview, 0,200); ?>" />
 
 
 <meta name="twitter:card" content="summary_large_image"></meta>
<meta name="twitter:image" content="https://uniabujaadmissionguide.com/uniabuja_logo.png">
<meta name="twitter:creator" content="@iamtgenius">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <meta name="keywords" content="Uniabuja, University of Abuja , UNIABUJA Admission, UNIABUJA Post time form, UofA,  UNIABUJA Portal,  UNIABUJA School fees, UNIABUJA Post utme Results, UNIABUJA Admission List, UNIABUJA Predegree/remedial" >
  <meta name="author" content="Balogun Soliu">
  <meta name="image" content="https://www.uniabujaadmissionguide.com/uniabuja_logo.png" />
  <link href="css/blog-post.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title><?php echo $title; ?></title>
     
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<style>
  #url{width:50%;float:center}
  .reply-cont{display: none;}
  
</style>
    <!--<script src="https://code.jquery.com/jquery-3.1.1.js"></script>-->

</head>

<body style="padding-top: 56px;font-family: Serif;">
    <script>
      /*$(function() {
  $("#riply").click(function(){

  $(".reply-cont").css("display","inline");
});
}); */
    </script>
    

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a style="font-family:cursive"class="navbar-brand" href="index.php"><img id="brand-img"src="uofa.png">UofAGuide</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#category">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About UofAGuide</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#subscribe">Subscribe</a>
          </li>
          <li class="nav-item">
            <a href="https://m.facebook.com/UniabujaAdmissionGuide"><button class="btn btn-primary">Like us on <i class="fa fa-facebook"></i>acebook</button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- reply display toggle -->
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-lg-8">

       <center class="text-muted"><h1 class="my-4"><a id="sitelink" href"index.php">Uniabuja Admission Guide</a>
          <p id="site-description"> 
          
          
With God and our guide, your admission to the University of Abuja(UofA) will be a success.
</p>
<!-- Search Widget -->
<div id="search"class="card my-4">
          <div class="card-body">
            <form method="post" action="search.php">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Search for..." required>
              <span class="input-group-append">
                <button class="btn btn-secondary" name="submit">Go!</button>
              </span>
            </div> </form>
          </div>
        </div>
        </h1></center>
        
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4453622041345362"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-4453622041345362"
     data-ad-slot="8332158308"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- <h4 class="card-footer text-muted">RECENT POSTS</h4> -->
        <!-- Blog Post -->
<?php	
	$query = mysqli_query($con, "SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent from post LEFT JOIN member on member.user_id = post.user_id where post_id='$id'")or die(mysqli_error());

						while($post_row=mysqli_fetch_array($query)){
						$id = $post_row['post_id'];	
						$posted_by = $post_row['firstname']." ".$post_row['lastname'];
						$post = $post_row['content'];
					$url =	$post_row['url'];
					?>
		<?php			
		$count_query=mysqli_query($con, "select count('comment_id') as Totalcomment from comment where post_id='$id'") or die (mysqli_error());
while($row = mysqli_fetch_array($count_query)){$comment_count= $row['Totalcomment'];
  $_SESSION['Totalcomment']=$comment_count;
} ?>

        <!-- Title -->
      <h2 class="card-title" ><?php echo $post_row['Topic'];?></h2>

        <!-- Author -->
        <p class="lead">
          By
          <a href="#about">Balogun Soliu<?php #echo $posted_by; $_SESSION['by']=$posted_by;?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on <?php echo date('F d, Y - h:i:sa', $post_row['date_created']); ?></p><p><a href="index.php">«Home </a><a href="category.php<?php echo '?id='.$post_row['category'];?>">»<?php echo $post_row['category']; ?></a>

        <hr>
        <!-- Preview Image -->
       <div><center>
        <?php

//post image


$img= '<img class="image-fluid rounded" style="width:90%" src=" ';
$img2 = '">';
 if($post_row['url'] != ""){ echo $img.$url.$img2;}
else{}
?>
</center>
        <hr>

        <!-- Post Content -->
        <p style="word-wrap:break-word;font-size:"><?php echo $post;  ?></p><hr></div>
      
        <div class="container">
<small><i class="label label-primary padding"><i class="fa fa-share-alt"></i>Share,let others benefit</i><br><br>

<a href="https://www.facebook.com/sharer.php?u=https://www.uniabujaadmissionguide.com/post.php<?php echo '?id='.$id ?>/"><i class="fa fa-facebook-square fa-2x"></i></a>
 <a href="https://twitter.com/intent/tweet/?text=<?php echo $title; ?>&url=https://www.uniabujaadmissionguide.com/post.php<?php echo '?id='.$id?>/"><i class="fa fa-twitter-square fa-2x"style="color:#00aced"></i></a>
 <a href="whatsapp://send?text=<?php echo $post_row['category']; ?>:<?php echo $title.' - '; ?>https://www.uniabujaadmissionguide.com/post.php<?php echo '?id='.$id; ?>"><i class="fa fa-whatsapp fa-2x" style="color:green"></i></a>
 <a href="mailto:?body=<?php echo $title; ?>https://www.uniabujaadmissionguide.com/post.php<?php echo '?id='.$id; ?>"><i class="fa fa-envelope fa-2x" style="color:grey"></i></a>
 <a href="https://web.skype.com/share?flowId=3d82af67b4014fbe9210cb7dd7971022&url=https://uniabujaadmissionguide.com<?php echo $post_row['category']; ?>-<?php echo $title; ?>.php&source=button&lang=en-US"><i class="fa fa-skype fa-2x" style="color:00beed"></i></a></small>
</div>
<a href="https://m.facebook.com/UniabujaAdmissionGuide"><button class="btn btn-primary">Like us on <i class="fa fa-facebook"></i>acebook</button></a>
         <?php } ?>
        <hr>
<!--Page Scroll to top button -->



		<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>

		<!-- page scroll to top button -->
		<?php  #REPLY INSERTION 
if(isset($_POST['submitreply'])){
  $r_san = mysqli_real_escape_string($con, $_POST['reply']);

$reply = htmlspecialchars($r_san);
$ry_san= mysqli_real_escape_string($con, $_POST['replier']);
$replier = htmlspecialchars($ry_san);
  $cmid = $_POST['commentid'];
  $cemail1 = $_POST['cemail1'];
  $comment = mysqli_real_escape_string($con, $_POST['commentreplied']);
  $postid = $_POST['postid'];
  $msg = wordwrap($reply,70);

// send email
mail($cemail1,"New Response from ".$replier,"Post url: uniabujaadmissionguide.com/post.php?id=".$postid."#".$cmid."\n Comment: ".$msg."\n Comment: ");


  $rep_query = mysqli_query($con, "insert into replies (comment_id,comment_replied,replier,REmail,reply,post_id,date_replied) values('$cmid', '$comment', '$replier','$REmail','$reply','$postid','".date('F d, Y - h:i:sa')."')")or die(mysqli_error($con));
}
?>
		<?php 

	$count_query=mysqli_query($con, "select count('comment_id') as Totalcomment from comment where post_id='$id'") or die (mysqli_error());
while($row = mysqli_fetch_array($count_query)){$comment_count= $row['Totalcomment'];

  $_SESSION['Totalcomment']=$comment_count;
$a=0;
$b=$a++;
  echo '<p style="font-size:1rem"><span class="badge badge-primary">'.$comment_count.'</span> Comment(s)</p><br>';}
  $comment_query = mysqli_query ($con, "SELECT * ,UNIX_TIMESTAMP() - date_posted AS TimeSpent FROM comment where post_id = '$id'") or die (mysqli_error());
							while ($comment_row=mysqli_fetch_array($comment_query)){
							$comment_id = $comment_row['comment_id'];
							$comment_by = $comment_row['Username'];
					$comment = $comment_row['content'];
                $cemail = $comment_row['Email'];
				$c_id=$comment_id."A";	
				$c_id2=$comment_id."c";	
				//reply mysqli_fetch_array
				$r_query = mysqli_query ($con, "SELECT * ,UNIX_TIMESTAMP() - date_replied AS Time FROM replies where post_id = '$id' and comment_id = '$comment_id'") or die (mysqli_error());
							
            ?>
		<div class='container-fluid'style='border:1px solid #bbb;word-wrap: break-word'>
  <p><span style="margin-top:4px;font-size:;border-radius:3rem;float:left;" class="badge badge-info" id="<?php echo $c_id2; ?>"><?php echo substr($comment_by,0,1); ?> </span><span style="margin-left:7px"><b style=""><?php echo $comment_by; ?></b><br><span class="text-muted" style="margin-left:7px"><?php echo $comment_row['date_posted']; ?></span>
 </span> </p>
  <p><?php echo $comment.'<br>'; ?><br><button id="<?php echo $c_id; ?>" tpe="butto" class="fa fa-reply" style="float:right;background:white">Reply</button></p>
  <br>
  <!--Reply section -->
     <div style="display:none" id="<?php echo $cid;?>" class="reply-cont<?php echo $c_id; ?>">
    <form role="form" method="post"><div class="form-group">
      <input type="hidden" name="commentid" id="repid" value="<?php echo $comment_id;?>">
      <input type="hidden" name="commentreplied" value="<?php echo $comment; ?>">
      <input type="hidden" name="cemail1" value="<?php echo $cemail; ?>">
            <input class="form-control rpi" type="text" placeholder="Name" name="replier" required>
        <input type="hidden" name="postid" value="<?php echo $id;  ?>">
            <textarea name="reply"class="form-control rpi" rows="2"placeholder="Type your reply to <?php echo $comment_by;?>" required></textarea>
            </div>
            <button name="submitreply"type="submit" class="btn btn-primary rpi">Reply</button>
            </form></div>
  <?php while ($r_row=mysqli_fetch_array($r_query)){
    
    ?>
  <!--reply output -->
  <br>
  <div class="r_output"style="margin-left:15%;background:#eee;padding:0"><p><br><span style="font-size:;border-radius:3rem;float:left;" class="badge badge-primary"><?php echo substr($r_row['replier'],0,1); ?> </span><span style="margin-left:7px"><b style=""><?php echo $r_row['replier']; ?></b><br><span class="text-muted" style="margin-left:7px"><?php echo $r_row['date_replied']; ?></span>
  
  <p><?php echo $r_row['reply']; ?></p></div>
  <?php } ?>
  <script>
      $(function() {
  $("#<?php echo $c_id; ?>").click(function(){

  $(".reply-cont<?php echo $c_id; ?>").css("display","inline");
});
});
    </script>


  <script>
   </script>
  <!--what is div doing here--></div><br>

     <?php }//Reply PHP Coding.... Reply ?>

 </br><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4453622041345362"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-4453622041345362"
     data-ad-slot="8332158308"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    <!--comment policy-->
    <div style="border:solid 2px #999;padding:3%;color:orange"id="subscribe">
      <h4><center>Comment Policy:</center></h4>
      Uniabujaadmissionguide.com welcomes reader comments. Please follow the simple rules:<br>
      <ul><li>Stay on topic</li>
      <li>Refrain from personal attack</li>
      <li>Avoid Profanity</li>
      <li>No spamming</li>
      </ul>
      We reserve the right to remove comments if we deem it necessary.
      
      </ul>
    </div></br></br>
        <!-- Comments Form -->
        <div id="mc_embed_signup" style="border:solid 1px #999">
  
<form action="https://wordpress.us8.list-manage.com/subscribe/post?u=d953f8b39a59d2c0a560f587e&amp;id=e21612a5ab" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll" >
	<div style="color:white"class="card-header bg-dark"><h5>Get New Updates Straight By Email</h5><br>
Enter your email address & Click subscribe</div>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-NAME">Name  <span class="asterisk" >*</span>
</label>
	<input type="text" value="" name="NAME" class="required" id="mce-NAME">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect go-->
<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d953f8b39a59d2c0a560f587e_e21612a5ab" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
  </div>
</form>
</div>
       
            </br>
          <h4><span>Leave a Comment</span><small class="text-muted"></small></h4>
            <?php if($_SESSION['firstname']){ ?>
            <form role="form" method="post" ><div class="form-group">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            
            <textarea name="comment_content"class="form-control" rows="3" placeholder="Dear Admin, Please comment here" required></textarea></br>
            </div>
            <button name="comment"type="submit" class="btn btn-primary">Comment</button>
            </form>
            <br>
            <?php
            if (isset($_POST['comment'])){
            $comment = mysqli_real_escape_string($con,  $_POST['comment_content']);
            $name = $_SESSION['firstname'].' '.$_SESSION['lastname'];
            $pid = $_POST['id'];
            $sql_query=mysqli_query($con, "insert into comment (content,post_id,date_posted,Username) values ('$comment','$pid','".date('F d, Y - h:i:sa')."','$name')") ;
            if($sql_query){header('location:post.php?id='.$id);}; ?>
            <?php } } //else if below
           elseif($_SESSION['cemail']){ ?>
            <form role="form" method="post" ><div class="form-group">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            
            <textarea name="comment_content"class="form-control" rows="3" placeholder="Dear <?php echo $_SESSION['name']; ?>Please comment here" required></textarea></br>
            </div>
            <button name="comment"type="submit" class="btn btn-primary">Comment</button>
            </form>
            <br>
            <?php
            if (isset($_POST['comment'])){
            $comment = mysqli_real_escape_string($con,  $_POST['comment_content']);
            $name = $_SESSION['name'];
            $pid = $_POST['id'];
            $commentId= $_POST['comid'];
            $email = $_SESSION['cemail'];
            $msg = wordwrap($comment,70);

// send email
mail("soliu@uniabujaadmissionguide.com","New Comment from ".$name,"Post url: uniabujaadmissionguide.com/post.php?id=".$pid."#".$commentId."\n Comment: ".$msg."\n Comment: ".$email);

            $sql_query=mysqli_query($con, "insert into comment (content,post_id,date_posted,Username,Email) values ('$comment','$pid','".date('F d, Y - h:i:sa')."','$name','$email')") ;
            if($sql_query){header('location:post.php?id='.$id);}; ?>
            <?php } }
            
            
            else{ $_SESSION['firstname']="";?>
            <form id="login_form"role="form" method="post">
            
            <div class="form-group">
            <?php include "comment.php"; ?>
            
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="comid" value="<?php echo $c_id2; ?>">
            <small>Name (required) <small>
            <input name="name" id="us" type="text" class="form-control" placeholder="Username" required>
            <small>Comment: 
            <p><b>Enter your email below to receive responses directly to your email</b></p></small>
            <input name="cemail" id="cem" type="email" class="form-control" placeholder="E-mail" required>
            <textarea name="comment_content"class="form-control" rows="3" placeholder="Type your comments here" required></textarea>
            </div>
            <button name="comment"type="submit" class="btn btn-primary">Comment</button>
            </form> <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4453622041345362"
     crossorigin="anonymous"></script>
<!-- responsiveAds -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4453622041345362"
     data-ad-slot="5732177018"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
            <script>/*
      jQuery(document).ready(function(){

			jQuery("#login_form").submit(function(e){

					e.preventDefault();
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "post.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Thanks!", { header: 'Comment Posted' });*/
						</script>
            <?php } ?>
            <br>
            
            
            
  <!--comment end -->
					</div>
		
        </br>
     <!-- Sidebar Widgets Column -->
     <div class="col-md-4"></hr>
     <!-- About Widget -->
        <div class="card my-4">
          <h5 style="color:white" class="card-header bg-dark">About Author</h5>
          <div id="about" style="font-size:1rem"class="card-body">
         <img id="author-img"src="profile.jpg">   Soliu Balogun(Uniabuja Balo)
 Infopreneur, Programmer, Web Designer, Web Developer, Mechanical Engineer, Blogger.<b><br>Contact:<a href="mailto:soliu@uniabujaadmissionguide.com?subject=Uniabuja-enquiry">Send a mail</a></b>
          </div>
        </div><br><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4453622041345362"
     crossorigin="anonymous"></script>
<!-- responsiveAds -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4453622041345362"
     data-ad-slot="5732177018"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
     <!-- Categories Widget -->
     <div class="card my-4">
     <h5 style="color:white"class="card-header bg-dark">Categories</h5>
     <div class="card-body">
     <div class="row">
     <div id="category"class="col-lg-6">
  <ul style="font-size:1rem"class="list-unstyled mb-0 list-group list-group-flush">
                    <?php

 $cat_query=mysqli_query($con, "select distinct category from post")or die(mysqli_error());

while($cat=mysqli_fetch_assoc($cat_query)){ $pot = $cat['category'];
 $count_query=mysqli_query($con, "select count('Topic') as ctp from post where category ='$pot'")or die(mysqli_error());

while($cat2=mysqli_fetch_assoc($count_query)){ $pot2 = $cat2['ctp'];
 ?>
 <a href="category.php<?php echo '?id='.$pot; ?>"><li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $pot;  ?>
    <span class="badge badge-primary badge-pill"><?php echo $pot2;?></span>
  </li></a>
   <?php }} ?>
     
     </ul>
     </div>
     </div>
     </div>
     </div>
     
     <!-- Side Widget -->
     <div class="card my-4">
     <h5 style="color:white"class="card-header bg-dark">More Updates</h5>
     <div class="card-body">
     <?php
     
     $arch = mysqli_query($con, "select * from post order by post_id desc limit 16 offset 0")or die(mysqli_error());
     
     if(mysqli_num_rows($arch)>0){
     while($list = mysqli_fetch_assoc($arch)){
     $pt = $list['Topic'];
     $id = $list['post_id'];
     ?>
   <ul style="font-size:1rem"class="list-unstyled mb-0 list-group ">
              <li class="list-group-item"> 
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4453622041345362"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-4453622041345362"
     data-ad-slot="8332158308"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script><a href="post.php<?php echo '?id='.$id; ?>"><?php echo $pt.'<br>';?></a></li>
            </ul>
     <?php }} ?>
     </div>
     </div>
     </div>
     </div>
     <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4453622041345362"
     crossorigin="anonymous"></script>
<!-- responsiveAds -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4453622041345362"
     data-ad-slot="5732177018"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
     <div id="mc_embed_signup" class="card my-4">
  
<form action="https://wordpress.us8.list-manage.com/subscribe/post?u=d953f8b39a59d2c0a560f587e&amp;id=e21612a5ab" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll" >
	<div style="color:white"class="card-header bg-dark"><h5>Get New Updates Straight By Email</h5><br>
Enter your email address & Click subscribe</div>
<div class="card-body">
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" >
</div>
<div class="mc-field-group">
	<label for="mce-NAME">Name  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="NAME" class="required" id="mce-NAME" >
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect go-->
<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d953f8b39a59d2c0a560f587e_e21612a5ab" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
  </div>
</form>
</div>
     <!-- /.row -->
     
     </div>
     <!-- /.container -->
     
     <!-- Footer -->
     <footer  style="color:white;font-size:1rem" class="py-5 bg-dark">
     <div class="container"><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4453622041345362"
     crossorigin="anonymous"></script>
<!-- responsiveAds -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4453622041345362"
     data-ad-slot="5732177018"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
     <p class="m-0 text-center">Copyright &copy; <a href="index.php">uniabujaadmissionguide.com </a>2020</br>Disclaimer: UofAGuide spreads news based on available information, and thus, does not take any responsibility of inaccurate information.</p><br>
           <center> <a href="https://m.facebook.com/UniabujaAdmissionGuide"><span>Like us on <i class="fa fa-facebook"></i>acebook</span></a></center><br>Contact Us: soliu@uniabujaadmissionguide.com</center>
     </div>
     <!-- /.container -->
     </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


     </body>
  <script>
  
 /*    $(function() {

  $(".fa-reply").click(function() {

    $(".reply-cont").toggleClass("reply-cont");
  });
});*/
//Get the button:
     mybutton = document.getElementById("myBtn");
     
     
     // When the user scrolls down 20px from the top of the document, show the button
     window.onscroll = function() {scrollFunction()};
     
     function scrollFunction() {
     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
     mybutton.style.display = "block";
     } else {
     mybutton.style.display = "none";
     }
     }
     
     // When the user clicks on the button, scroll to the top of the document
     function topFunction() {
     document.body.scrollTop = 0; // For Safari
     document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
     }
     
     </script>
     <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='NAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
</script>
     </html>