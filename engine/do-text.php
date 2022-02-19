<?php

    require_once 'db.php';

    if(isset($_POST["submit"]))
    {
        $commentSenderName = isset($_SESSION['display-name']) ? $_SESSION['display-name'] : "";
        $subject = mysqli_real_escape_string($db, $_POST['subject']);
    
        $comment= "INSERT INTO comments(comment_sender_name,comment) VALUES ('$commentSenderName','$subject')";
        $comment= mysqli_query($db, $comment) or die(mysqli_error($db));
        if($comment){
            $smsg = "Your Comment Submitted Successfully";
        }else{
            $fmsg = "Failed to Submit Your Comment";
        }
    }
?>
