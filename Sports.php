<!DOCTYPE html>

<html lang="en">
    
    <?php 
    
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
            #myCarousel3 {     background:url(http://hotelcdn.travelpony.com/8160/disneys-all-star-sports-resort-orlando-61.jpg);
                
                
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
					<img src = "img/magic.jpg" alt = "Magic" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Orlando Magic</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/ucf.jpg" alt = "UCF Football" class = "img-responsive">
					<div class="carousel-caption">
						<h3>UCF Football</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/ucfbasketball.jpg" alt = "UCF Basketball" class = "img-responsive">
					<div class="carousel-caption">
						<h3>UCF Basketball</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/orlandocity.jpg" alt = "Orlando City" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Orlando City SC</h3>
					</div>
				</div>
				<div class = "item">
					<img src = "img/predators.jpg" alt = "Predators" class = "img-responsive">
					<div class="carousel-caption">
						<h3>Orlando Predators</h3>
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
				<li class="active"><a href="#magic" data-toggle="tab">Orlando Magic</a></li>
				<li><a href="#ucff" data-toggle="tab">UCF Football</a></li>
				<li><a href="#ucfb" data-toggle="tab">UCF Basketball</a></li>
				<li><a href="#soccer" data-toggle="tab">Orlando City SC</a></li>
				<li><a href="#afl" data-toggle="tab">Orlando Predators</a></li>
			</ul>
		</div>
		<div class="container nav-tabs">
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="magic">
					<p>The Orlando Magic is a professional basketball team based in Orlando, Florida. The Magic are part of the Southeast Division of the Eastern Conference in the National Basketball Association (NBA). The franchise was established in 1989 as an expansion franchise, and such notable NBA stars as Shaquille O'Neal, Penny Hardaway, Patrick Ewing, Grant Hill, Tracy McGrady, Steve Francis, Dwight Howard, Vince Carter, and Rashard Lewis have played for the club throughout its young history. The franchise has also been in the playoffs for more than half of its existence (14 playoff appearances in 24 years).                </p>
					<!--Magic Reviews -->
					<div class="actionBox">
						<ul class="commentList">
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Orlando Magic']->fetch_assoc())
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
                        
						<form class="form-inline" role="form" method="post" action="Sports.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Orlando Magic">Orlando Magic</option>
                                    <option value="UCF Football">UCF Football</option>
                                    <option value="UCF Basketball">UCF Basketball</option>
                                    <option value="Orlando City SC">Orlando City SC</option>
                                    <option value="Orlando Predators">Orlando Predators</option>
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
				<div class="tab-pane fade" id="ucff">
					<p>The UCF Knights football team represents The University of Central Florida (UCF) in the sport of American football. The Knights compete in the Division I Football Bowl Subdivision (FBS) of the National Collegiate Athletic Association (NCAA) and the Eastern Division of the American Athletic Conference (The American). The Knights play their home games at the 45,000 seat Bright House Networks Stadium, which is located on UCF's main campus in Orlando, Florida, United States.</p>
					<div class="actionBox">
						<ul class="commentList">
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['UCF Football']->fetch_assoc())
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
						<form class="form-inline" role="form" method="post" action="Sports.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Orlando Magic">Orlando Magic</option>
                                    <option value="UCF Football">UCF Football</option>
                                    <option value="UCF Basketball">UCF Basketball</option>
                                    <option value="Orlando City SC">Orlando City SC</option>
                                    <option value="Orlando Predators">Orlando Predators</option>
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
				<div class="tab-pane fade" id="ucfb">
					<p>The UCF Knights men's basketball team represents The University of Central Florida located in Orlando, Florida, United States. UCF competes in Division I of the National Collegiate Athletic Association (NCAA), and the American Athletic Conference (The American). The Knights play their home games in the CFE Arena located on the university's main campus.</p>
					<div class="actionBox">
						<ul class="commentList">
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['UCF Basketball']->fetch_assoc())
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
						<form class="form-inline" role="form" method="post" action="Sports.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Orlando Magic">Orlando Magic</option>
                                    <option value="UCF Football">UCF Football</option>
                                    <option value="UCF Basketball">UCF Basketball</option>
                                    <option value="Orlando City SC">Orlando City SC</option>
                                    <option value="Orlando Predators">Orlando Predators</option>
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
				<div class="tab-pane fade" id="soccer">
					<p>Orlando City Soccer Club is an American professional soccer team based in Orlando, Florida that competes in Major League Soccer (MLS). Orlando City SC was announced as the league's twenty-first franchise on November 19, 2013. The team's expansion rights were purchased by Brazilian businessman Flávio Augusto da Silva and Phil Rawlins, owners of the USL Pro Orlando City Soccer Club.</p>
					<div class="actionBox">
						<ul class="commentList">
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Orlando City SC']->fetch_assoc())
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
						<form class="form-inline" role="form" method="post" action="Sports.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Orlando Magic">Orlando Magic</option>
                                    <option value="UCF Football">UCF Football</option>
                                    <option value="UCF Basketball">UCF Basketball</option>
                                    <option value="Orlando City SC">Orlando City SC</option>
                                    <option value="Orlando Predators">Orlando Predators</option>
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
				<div class="tab-pane fade" id="afl">
					<p>The Orlando Predators are a professional arena football team based in Orlando, Florida. The team is part of the South Division of the American Conference (AC) of the Arena Football League (AFL). Orlando Predators LLC, a company owned by David A. Siegel, purchased the Orlando Predators in July 2014. Under the new ownership, the Predators will return to Amway Center for the 2015 season.</p>
					<div class="actionBox">
						<ul class="commentList">
                            <?php 

                                //$orlando;
//$_SESSION['Orlando Magic']
    getComments($db);

                            
                                while($magic = $_SESSION['Orlando Predators']->fetch_assoc())
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
						<form class="form-inline" role="form" method="post" action="Sports.php">
                            
                            <div class="form-group">
								<input class="form-control" name="comment" type="textbox" placeholder="Your comments" size="200">
                            </div>
                            <div class="form-group">
								
                                <select class="form-control" id="rate1" name="event">
                                    <option value="Orlando Magic">Orlando Magic</option>
                                    <option value="UCF Football">UCF Football</option>
                                    <option value="UCF Basketball">UCF Basketball</option>
                                    <option value="Orlando City SC">Orlando City SC</option>
                                    <option value="Orlando Predators">Orlando Predators</option>
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