<!DOCTYPE html>

<html lang="en">
    
    <?php 
    
    require_once "connectdb.php";

 require_once "connectdb.php";

        if(isset($_POST['comment']) && isset($_POST['rate']) && isset($_POST['event']))
            {
                addComment($_POST['comment'],$_POST['event'],$_POST['rate'],$db);
            }

getcomments($db);

    ?>
    
	<head>
		<title>Travel Advisor</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<style>
			h2 {
			border: 0.25em double black;
			text-align: center;
			margin-top: 100px;
			}
			h3 {
			width: 30%;
			background-color: black;
			position: absolute;
			right: 35%;
			bottom: 25px;
			} 
			#desc {
			font-weight: bold;
			text-decoration: underline;
			position: absolute;
			right: 47%;
			margin-top: 40px;
			}
			#rev {    
			font-weight: bold;
			text-decoration: underline; 
			position: absolute;
			right: 49%;
			margin-top: 30px;
			}
            .carousel-inner > .item > img {
            /*  position: absolute;*/
                top: 0;
                left: 0;
                min-width: 40%;
                max-width: 100%;
                min-height: 380px;
                max-height: 380px;
                width: auto;
                margin-right:auto;
                margin-left:auto;
                height:auto;

            }
			.img-responsive {
			margin: auto;
			margin-top: 90px;
			}
			.nav-tabs {
			margin-left: 5%;
			margin-top: 5%;
			margin-right: 5%;
			}
			.detailBox {
			width:320px;
			border:1px solid #bbb;
			margin:50px;
			position: absolute;
			right: 35%;
			}
			.titleBox {
			background-color:#fdfdfd;
			padding:10px;
			}
			.titleBox label{
			color:#444;
			margin:0;
			display:inline-block;
			}
			.commentBox {
			padding:10px;
			border-top:1px dotted #bbb;
            width:60%;
			}
			.commentBox .form-group:first-child, .actionBox         .form-group:first-child {
			width:60%;
			}
			.commentBox .form-group:nth-child(2), .actionBox .form-group:nth-child(2) {
			width:20%;
			}
			.actionBox .form-group * {
			width:100%;
			}
			.taskDescription {
			margin-top:10px 0;
			}
			.commentList {
			padding:0;
			list-style:none;
			max-height:200px;
			overflow:auto;
			}
			.commentList li {
			margin:0;
			margin-top:10px;
			}
			.commentList li > div {
			display:table-cell;
			}
			.commenterImage {
			width:30px;
			margin-right:5px;
			height:100%;
			float:left;
			}
			.commenterImage img {
			width:100%;
			border-radius:50%;
			}
			.commentText p {
			margin:0;
			}
			.sub-text {
			color:#aaa;
			font-family:verdana;
			font-size:11px;
			}
			.actionBox {
			border-top:1px dotted #bbb;
			padding:10px;
			}
			.aus {
			position: absolute;
			right: -20%;
			color: blue;
			}
            #myCarousel3 {     background:url(http://www.glenbrookresortvilla.com/images/graphics/millenia.jpg);
                
                
            }
		</style>
	</head>
	<body>
		<?php include("Navbar.php");?>
		<!-- Carousel -->
		<div id = "myCarousel3" class = "carousel slide container">
			<ol class = "carousel-indicators">
				<li data-target = "#myCarousel3" data-slide-to = "0" class = "active"></li>
				<li data-target = "#myCarousel3" data-slide-to = "1"></li>
				<li data-target = "#myCarousel3" data-slide-to = "2"></li>
				<li data-target = "#myCarousel3" data-slide-to = "3"></li>
				<li data-target = "#myCarousel3" data-slide-to = "4"></li>
			</ol>
			<div class = "carousel-inner">
				<div class = "item active">
					<img src = "img/outlets.jpg" alt = "Orlando International Premium Outlets" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Orlando International Premium Outlets</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/millenia.jpg" alt = "Mall at Millenia" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Mall at Millenia</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/mall.jpg" alt = "Florida Mall" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Florida Mall</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/pointe.jpg" alt = "Pointe Orlando" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Pointe Orlando</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/downtown.jpg" alt = "Downtown Disney" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Downtown Disney</h3>
					</div>
				</div>
			</div>
			<a class = "carousel-control left" href = "#myCarousel3" data-slide = "prev"></a>
			<span class = "icon-prev"></span>
			<a class = "carousel-control right" href = "#myCarousel3" data-slide = "next"></a>
			<span class = "icon-next"></span>
		</div>
		<!-- Descriptions -->
		<div class="container">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#outlets" data-toggle="tab">Orlando International Premium Outlets</a></li>
				<li><a href="#millenia" data-toggle="tab">Mall at Millenia</a></li>
				<li><a href="#mall" data-toggle="tab">Florida Mall</a></li>
				<li><a href="#pointe" data-toggle="tab">Pointe Orlando</a></li>
				<li><a href="#downtown" data-toggle="tab">Downtown Disney</a></li>
			</ul>
		</div>
		<div class="container nav-tabs">
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="outlets">
					<p>180 OUTLET STORES: Find impressive savings at BCBG Max Azria, Coach, Cole Haan, J.Crew, Kenneth Cole, Lacoste, Michael Kors, Neiman Marcus Last Call, Polo Ralph Lauren, Saks Fifth Avenue Off 5th, Thomas Pink, Tourneau, White House Black Market.</p>
					<!--Magic Reviews -->
					<div class="actionBox">
						<ul class="commentList">
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Orlando International Pre']->fetch_assoc())
                                    {
                                    $posteremail = $magic['pemail'];
                                    $sql = "SELECT photo from users where email = '$posteremail'";
                                    $result = mysqli_query($db,$sql);
                                    $photo = $result->fetch_assoc();
                                    $posterimg = $photo['photo'];
                                    
                                    echo "<li> <div class='commenterImage'> <img src='$posterimg' /></div>";
                                    
                                    echo '<div class="commentText"> <p>'.$magic['user'].": ". $magic['comment'].'</p>';
                                    
                                    echo '<span class="date sub-text">'.$magic['cdate'];
                                    
                                    echo '<div class="glyphicon glyphicon-star">'.$magic['stars'].'</div> </span> </div> ';
                                    
                                    echo "</li>";
                                    
                                }

                            ?>
						</ul>
						<form class="form-inline" role="form" method="post" action="Shopping.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Orlando International Pre">Orlando International Premium Outlets</option>
                                    <option value="Mall at Millenia">Mall at Millenia</option>
                                    <option value="Florida Mall">Florida Mall</option>
                                    <option value="Pointe Orlando">Pointe Orlando</option>
                                    <option value="Downtown Disney">Downtown Disney</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
								
                            </div>
                                <select class="form-control" id="rate1" name="rate">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <label for="sel1"><div class="glyphicon glyphicon-star"></div></label>
                            <button class="btn btn-default" type="submit">Add</button>
						</form>
					</div>
					<!-- Magic Reviews -->
				</div>
				<div class="tab-pane fade" id="millenia">
					<p>The Mall at Millenia offers an extraordinary experience for those of us who call Orlando home or those visiting Orlando for business or pleasure.</p>
					<div class="actionBox">
						<ul class="commentList">
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Mall at Millenia']->fetch_assoc())
                                    {
                                    $posteremail = $magic['pemail'];
                                    $sql = "SELECT photo from users where email = '$posteremail'";
                                    $result = mysqli_query($db,$sql);
                                    $photo = $result->fetch_assoc();
                                    $posterimg = $photo['photo'];
                                    
                                    echo "<li> <div class='commenterImage'> <img src='$posterimg' /></div>";
                                    
                                    echo '<div class="commentText"> <p>'.$magic['user'].": ". $magic['comment'].'</p>';
                                    
                                    echo '<span class="date sub-text">'.$magic['cdate'];
                                    
                                    echo '<div class="glyphicon glyphicon-star">'.$magic['stars'].'</div> </span> </div> ';
                                    
                                    echo "</li>";
                                    
                                }

                            ?>
						</ul>
						<form class="form-inline" role="form" method="post" action="Shopping.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Orlando International Pre">Orlando International Premium Outlets</option>
                                    <option value="Mall at Millenia">Mall at Millenia</option>
                                    <option value="Florida Mall">Florida Mall</option>
                                    <option value="Pointe Orlando">Pointe Orlando</option>
                                    <option value="Downtown Disney">Downtown Disney</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
								
                            </div>
                                <select class="form-control" id="rate1" name="rate">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <label for="sel1"><div class="glyphicon glyphicon-star"></div></label>
                            <button class="btn btn-default" type="submit">Add</button>
						</form>
					</div>
				</div>
				<div class="tab-pane fade" id="mall">
					<p>The Florida Mall, located only minutes from the Orlando International Airport, is Central Florida’s largest and most remarkable shopping center. Welcoming more than 20 million visitors per year and spanning nearly 1.8 million square feet, The Florida Mall offers an experiential environment with more than 250 unique entertainment, retail and dining options.</p>
					<div class="actionBox">
						<ul class="commentList">
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Florida Mall']->fetch_assoc())
                                    {
                                    $posteremail = $magic['pemail'];
                                    $sql = "SELECT photo from users where email = '$posteremail'";
                                    $result = mysqli_query($db,$sql);
                                    $photo = $result->fetch_assoc();
                                    $posterimg = $photo['photo'];
                                    
                                    echo "<li> <div class='commenterImage'> <img src='$posterimg' /></div>";
                                    
                                    echo '<div class="commentText"> <p>'.$magic['user'].": ". $magic['comment'].'</p>';
                                    
                                    echo '<span class="date sub-text">'.$magic['cdate'];
                                    
                                    echo '<div class="glyphicon glyphicon-star">'.$magic['stars'].'</div> </span> </div> ';
                                    
                                    echo "</li>";
                                    
                                }

                            ?>
						</ul>
						<form class="form-inline" role="form" method="post" action="Shopping.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Orlando International Pre">Orlando International Premium Outlets</option>
                                    <option value="Mall at Millenia">Mall at Millenia</option>
                                    <option value="Florida Mall">Florida Mall</option>
                                    <option value="Pointe Orlando">Pointe Orlando</option>
                                    <option value="Downtown Disney">Downtown Disney</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
								
                            </div>
                                <select class="form-control" id="rate1" name="rate">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <label for="sel1"><div class="glyphicon glyphicon-star"></div></label>
                            <button class="btn btn-default" type="submit">Add</button>
						</form>
					</div>
				</div>
				<div class="tab-pane fade" id="pointe">
					<p>A place where you can elevate your dining experience at restaurants offering everything from casual fare to haute cuisine. Where you can discover a diverse collection of specialty shops. And where, when the sun sets, you can find a place pulsing with energy, music & live entertainment.</p>
					<div class="actionBox">
						<ul class="commentList">
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Pointe Orlando']->fetch_assoc())
                                    {
                                    $posteremail = $magic['pemail'];
                                    $sql = "SELECT photo from users where email = '$posteremail'";
                                    $result = mysqli_query($db,$sql);
                                    $photo = $result->fetch_assoc();
                                    $posterimg = $photo['photo'];
                                    
                                    echo "<li> <div class='commenterImage'> <img src='$posterimg' /></div>";
                                    
                                    echo '<div class="commentText"> <p>'.$magic['user'].": ". $magic['comment'].'</p>';
                                    
                                    echo '<span class="date sub-text">'.$magic['cdate'];
                                    
                                    echo '<div class="glyphicon glyphicon-star">'.$magic['stars'].'</div> </span> </div> ';
                                    
                                    echo "</li>";
                                    
                                }

                            ?>
						</ul>
						<form class="form-inline" role="form" method="post" action="Shopping.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Orlando International Pre">Orlando International Premium Outlets</option>
                                    <option value="Mall at Millenia">Mall at Millenia</option>
                                    <option value="Florida Mall">Florida Mall</option>
                                    <option value="Pointe Orlando">Pointe Orlando</option>
                                    <option value="Downtown Disney">Downtown Disney</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
								
                            </div>
                                <select class="form-control" id="rate1" name="rate">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <label for="sel1"><div class="glyphicon glyphicon-star"></div></label>
                            <button class="btn btn-default" type="submit">Add</button>
						</form>
					</div>
				</div>
				<div class="tab-pane fade" id="downtown">
					<p>World-class restaurants, dazzling entertainment and unique shops line the waterfront at the Downtown Disney area, a fun-filled district that includes The Landing, West Side and Marketplace! Here, you can shop in the world’s largest Disney store, dine amid prehistoric creatures, bowl a game at the 30-lane alley and so much more—over 80 venues and counting, featuring complimentary parking and admission.</p>
					<div class="actionBox">
						<ul class="commentList">
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Downtown Disney']->fetch_assoc())
                                    {
                                    $posteremail = $magic['pemail'];
                                    $sql = "SELECT photo from users where email = '$posteremail'";
                                    $result = mysqli_query($db,$sql);
                                    $photo = $result->fetch_assoc();
                                    $posterimg = $photo['photo'];
                                    
                                    echo "<li> <div class='commenterImage'> <img src='$posterimg' /></div>";
                                    
                                    echo '<div class="commentText"> <p>'.$magic['user'].": ". $magic['comment'].'</p>';
                                    
                                    echo '<span class="date sub-text">'.$magic['cdate'];
                                    
                                    echo '<div class="glyphicon glyphicon-star">'.$magic['stars'].'</div> </span> </div> ';
                                    
                                    echo "</li>";
                                    
                                }

                            ?>
						</ul>
						<form class="form-inline" role="form">
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Your comments" />
							</div>
							<div class="form-group">
								<button class="btn btn-default">Add</button>
							</div>
                            <select class="form-control" id="rate1" name="rate1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <label for="sel1"><div class="glyphicon glyphicon-star"></div></label>
						</form>
					</div>
				</div>
			</div>
		</div>
		<p></p>
	</body>
</html