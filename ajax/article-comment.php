<?php
include_once ("../classes/commentArticle.php");

$commentArticle = new commentArticle();

if(isset($_GET['id']) && $_GET['id'] != NULL ){
    $commentArticles = $commentArticle->getImgByCommentArticlerticleId($_GET["id"]);
    $data = array();
    if($commentArticles != false) 
    {
        while($i = $commentArticles->fetch_assoc())
        {
            $nameUser = $commentArticle->getNameUserCommentArticle($i['userId']);
            if($nameUser!=false){
                $m = $nameUser->fetch_assoc();
            }
            $data[] = array(
                'name' => $m['name'],
                'datetime' => $i['datetime'],
                'content' => $i['content'],
                'userId' => $i['userId'],
                'commentId' => $i['commentId'],
                'image' => $i['image']
            );
        }
    }   
    echo json_encode($data);	  
}
else if(isset($_GET['commentId']) && $_GET['commentId'] != NULL){
    $commentId = $_GET['commentId'];
    $delUser = $commentArticle->delete_comment($commentId);
    echo 'alert("',$delUser,'")';
}
?>