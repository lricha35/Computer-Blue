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
            #myCarousel3 {     background:url(http://img2.10bestmedia.com/Images/Photos/256086/551342-10151955133918376-1941496221-n_54_990x660_201406012134.jpg);
                
                
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
					<img src = "img/bass.jpg" alt = "Orlando Trophy Bass" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Orlando Trophy Bass</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/watersport.jpg" alt = "Watersports" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Orlando Watersports Complex</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/paddleboard.jpg" alt = "Paddleboard" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Paddleboard Orlando</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/divers.jpg" alt = "Divers Direct" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Divers Direct</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/golf.jpg" alt = "Grand Cypress" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Grand Cypress</h3>
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
				<li class="active"><a href="#bass" data-toggle="tab">Orlando Trophy Bass</a></li>
				<li><a href="#water" data-toggle="tab">Orlando Watersports Complex</a></li>
				<li><a href="#paddle" data-toggle="tab">Paddleboard Orlando</a></li>
				<li><a href="#diver" data-toggle="tab">Divers Direct</a></li>
				<li><a href="#golf" data-toggle="tab">Grand Cypress</a></li>
			</ul>
		</div>
		<div class="container nav-tabs">
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="bass">
					<p>Orlando Trophy Bass fishing offers largemouth bass fishing.  Charters are on a private lake located just minutes from all the major Orlando attractions.  We offer to take you out on boats and enjoy an evening fishing with the family and friends catching the best fish around.</p>
					<!--Magic Reviews -->
					<div class="actionBox">
						<ul class="commentList">
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Orlando Trophy Bass']->fetch_assoc())
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
						<form class="form-inline" role="form" method="post" action="Outdoor%20Activities.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Orlando Trophy Bass">Orlando Trophy Bass</option>
                                    <option value="Orlando Watersports Complex">Orlando Watersports Complex</option>
                                    <option value="Paddleboard Orlando">Paddleboard Orlando</option>
                                    <option value="Divers Direct">Divers Direct</option>
                                    <option value="Grand Cypress">Grand Cypress</option>
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
				<div class="tab-pane fade" id="water">
					<p>Aktion Parks formally, The Orlando Watersports Complex is a unique watersports park designed for wakeboarding, wakeskating, wakesurfing, kneeboarding and waterskiing. Since 1999, OWC has established itself as the best place to learn how to wakeboard. OWC is set up with two full size cable systems, a two-tower system and a boat lake. The two-tower system is great for teaching new riders the basics while our beginner full size cable provides them the tools to create a solid wakeboarding foundation..</p>
					<div class="actionBox">
						<ul class="commentList">
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Orlando Watersports Complex']->fetch_assoc())
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
						<form class="form-inline" role="form" method="post" action="Outdoor%20Activities.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Orlando Trophy Bass">Orlando Trophy Bass</option>
                                    <option value="Orlando Watersports Complex">Orlando Watersports Complex</option>
                                    <option value="Paddleboard Orlando">Paddleboard Orlando</option>
                                    <option value="Divers Direct">Divers Direct</option>
                                    <option value="Grand Cypress">Grand Cypress</option>
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
				<div class="tab-pane fade" id="paddle">
					<p>We have two amazing Paddleboard and Kayak rental locations that are open 7 days a week!! The first is on the beautiful, spring fed and alligator free Lake Killarney in the heart of historic Winter Park. For a taste of "Old Florida" head down to our River Outpost at Wekiva Island and paddle board to the crystal clear Wekiva Springs!</p>
					<div class="actionBox">
						<ul class="commentList">
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Paddleboard Orlando']->fetch_assoc())
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
						<form class="form-inline" role="form" method="post" action="Outdoor%20Activities.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Orlando Trophy Bass">Orlando Trophy Bass</option>
                                    <option value="Orlando Watersports Complex">Orlando Watersports Complex</option>
                                    <option value="Paddleboard Orlando">Paddleboard Orlando</option>
                                    <option value="Divers Direct">Divers Direct</option>
                                    <option value="Grand Cypress">Grand Cypress</option>
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
				<div class="tab-pane fade" id="diver">
					<p>Do you want to buy SCUBA gear in Orlando, FL? Divers Direct is your one-stop dive shop in Orlando! Our Divers Direct dive shop in Orlando is located just around the corner from Universal Studios, and close to Wet-n-Wild. When you want to buy SCUBA equipment in Orlando FL, we've got everything you need to go diving and more in stock! Come see our dive shop in Orlando today! Divers Direct’s Orlando dive shop is a prominent dive retailer in the community. Orlando Divers Direct has been serving vacationers and locals with high quality discount dive gear since 1996. Our knowledgeable and friendly staff makes Divers Direct SCUBA shop the #1 source for SCUBA equipment in Orlando. Whether you are looking for a mask and snorkel or the whole SCUBA gear setup, Divers Direct Orlando dive shop will set you up with the perfect gear that will fit your dive or snorkel needs.</p>
					<div class="actionBox">
						<ul class="commentList">
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Divers Direct']->fetch_assoc())
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
						<form class="form-inline" role="form" method="post" action="Outdoor%20Activities.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Orlando Trophy Bass">Orlando Trophy Bass</option>
                                    <option value="Orlando Watersports Complex">Orlando Watersports Complex</option>
                                    <option value="Paddleboard Orlando">Paddleboard Orlando</option>
                                    <option value="Divers Direct">Divers Direct</option>
                                    <option value="Grand Cypress">Grand Cypress</option>
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
				<div class="tab-pane fade" id="golf">
					<p>The Villas of Grand Cypress is a AAA Four-Diamond Orlando luxury golf resort like no other. The Villas of Grand Cypress offers 45 holes of Jack Nicklaus’ signature design golf, luxurious villa-style accommodations, endless recreation, exquisite dining and much more all wrapped into a world-class 1,500 acre Orlando golf resort.</p>
					<div class="actionBox">
						<ul class="commentList">
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Grand Cypress']->fetch_assoc())
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
						<form class="form-inline" role="form" method="post" action="Outdoor%20Activities.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Orlando Trophy Bass">Orlando Trophy Bass</option>
                                    <option value="Orlando Watersports Complex">Orlando Watersports Complex</option>
                                    <option value="Paddleboard Orlando">Paddleboard Orlando</option>
                                    <option value="Divers Direct">Divers Direct</option>
                                    <option value="Grand Cypress">Grand Cypress</option>
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
			</div>
		</div>
		<p></p>
	</body>
</html