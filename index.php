<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" />
  </head>
  <body>
    <section class="hero">
         <div class="container">
          <div class="row">

		   <div class="col-lg-6 offset-lg-3">

			<div class="cardbox shadow-lg bg-white">

			 <div class="cardbox-heading">
			  <!-- START dropdown-->
			  <div class="dropdown float-right">
			   <button class="btn btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
				<em class="fa fa-ellipsis-h"></em>
			   </button>
			   <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
				<a class="dropdown-item" href="#">Hide post</a>
				<a class="dropdown-item" href="#">Stop following</a>
				<a class="dropdown-item" href="#">Report</a>
			   </div>
			  </div><!--/ dropdown -->
			  <div class="media m-0">
			   <div class="d-flex mr-3">
				<a href=""><img class="img-fluid rounded-circle"  src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/4.jpg" alt="User"></a>
			   </div>
			   <div class="media-body">
			    <p class="m-0">Ali saeed</p>
				<small><span><i class="icon ion-md-pin"></i> Nairobi, Kenya</span></small>
				<small><span><i class="icon ion-md-time"></i> 10 hours ago</span></small>
			   </div>
       </div>
     </div>

			 <div class="cardbox-item">
			  <img class="img-fluid" style="width:100%;" src="https://media.istockphoto.com/photos/the-silhouette-of-lovers-on-the-top-of-the-mountain-during-sunset-picture-id1207031236?b=1&k=6&m=1207031236&s=170667a&w=0&h=gVYGgeFM9ZxUxO8Ge9nAR1guigZFhdB2itmSc1qHkmg=" alt="Image">
			 </div>
			 <div class="cardbox-base">
			  <ul class="float-right">
			   <li><a><i class="fa fa-comments"></i></a></li>
			   <li><a><em class="mr-5">12</em></a></li>
			   <li><a><i class="fa fa-share-alt"></i></a></li>
			   <li><a><em class="mr-3">03</em></a></li>
			  </ul>
			  <ul>
			   <li><a><i class="fa fa-thumbs-up"></i></a></li>
			   <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/3.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
			   <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/1.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
			   <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/5.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
			   <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/2.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
			   <li><a><span>242 Likes</span></a></li>
			  </ul>
			 </div>
       <!-- Our systems spotted a bad comment!
This comment was automatically suspended for containing obscene words -->
       <?php
          if(isset($_POST['comment'])){
          $commant= $_POST['comment'];
          $filnal = explode(" ", $commant);
          $badwords = array('bad','shit' /* you can add as much as u can  */);
          $filter_Code = array('11_badwords_f','22.badword_f' /* you can name it what u love !*/);
          $filtering = str_ireplace($badwords, $filter_Code, $filnal);
          if(in_array("11_badwords_f"/* <== this is the code you creat in $filter_Code */, $filtering)){
             /* If the code "" is found in the comment, change the comment from the comment that was sent to the comment Warning! */
            $filnal = '  <div class="alert alert-warning"><br>
                     <strong>Commenting suspended!</strong>This comment may contain content that may be offensive to some users..
                     </div>';
                    echo $filnal;
          }
          elseif(in_array("22.badword_f", $filtering)){     /* Define your code and give permission to change the comment */
            $filnal = '  <div class="alert alert-danger">
                     <strong>Abusive comment!</strong> !<br>
                     Our systems spotted a bad comment!
             This comment was automatically suspended for containing obscene words .
                     </div>';
                    echo $filnal;
          }
          else {
            $filnal = $commant;
          echo '  <div class="media m-0">
            <div class="d-flex mr-3">
            <a href=""><img class="rounded-circle" src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/6.jpg" alt="..."></a>
            </div>
            <div class="media-body">
             <p class="m-0">Ahmad ali</p>
           <small><span><i class="icon ion-md-pin"></i>'.$filnal.'</span></small>
            </div>
           </div>';
          }

      }
        ?>
        <form action="" method="post">
			 <div class="cardbox-comments">
			  <span class="comment-avatar float-left">
			   <a href=""><img class="rounded-circle" src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/6.jpg" alt="..."></a>
			  </span>
			  <div class="search">
			   <input placeholder="Write a comment" type="text" name="comment" style="">
			   <button><i class="fa fa-camera"></i></button>
			  </div>
			 </div>
     </form>

			</div>

           </div>

          </div>
         </div>
        </section>
  </body>
</html>
