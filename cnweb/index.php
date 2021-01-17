<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Nguyễn.T.Trung</title>
	<link rel="shortcut icon" href="favicon.png" tppabs="https://themecrazy.net/html/ultra-preview/ultra/img/favicon.png" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap.min.css" tppabs="https://themecrazy.net/html/ultra-preview/ultra/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fancybox CSS -->
    <link href="jquery.fancybox.css" tppabs="https://themecrazy.net/html/ultra-preview/ultra/css/jquery.fancybox.css" rel="stylesheet">
	<!-- Animate CSS -->
    <link href="animate.css" tppabs="https://themecrazy.net/html/ultra-preview/ultra/css/animate.css" rel="stylesheet">
	<!-- Jscrollpane CSS -->
	<link href="jquery.jscrollpane.custom.css" tppabs="https://themecrazy.net/html/ultra-preview/ultra/css/jquery.jscrollpane.custom.css" rel="stylesheet">
	<!-- Font-awesome-->
	<link rel="stylesheet" href="font-awesome.min.css" tppabs="https://themecrazy.net/html/ultra-preview/ultra/fonts/font-awesome/css/font-awesome.min.css">
	<!--Google Fonts-->
	<link href="css-family=Dosis-400,500,600,700.css" tppabs="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700" rel="stylesheet"> 
	<link href="css-family=Raleway-300,400,500,700.css" tppabs="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet"> 
	<!-- Main CSS -->
	<link href="style.css" tppabs="https://themecrazy.net/html/ultra-preview/ultra/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="html5shiv.js" tppabs="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="respond.min.js" tppabs="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head>
<body class="vertical">
	<!--Preload-->
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	
	<!-- Main Container-->
	<div id="main-container" class="main-container">
		<aside class="menu" id="menu">
			<a href="#" class="mobile-menu-opener"><i class="fa fa-bars"></i></a>
			<nav class="navbar navbar-default navbar-static-top">
				<div class="logo">
					<a href="index.html" class="navbar-brand"><img src="logo.png"  alt="Logo"></a>
				</div>
				<div id="navbar">
					<ul class="nav navbar-nav navbar-right">
						<li class="active">
							<a class="page-scroll" href="#th">Trang chủ</a>
						</li>
						<li>
							<a class="page-scroll" href="#gth">Giới thiệu</a>
						</li>
						<li>
							<a class="page-scroll" href="#kt">Kiến Thức</a>
						</li>
						<li>
							<a class="page-scroll" href="#kn">Kinh nghiệm</a>
						</li>
						<li>
							<a class="page-scroll" href="#cc">Chứng chỉ</a>
						</li>
						<li>
							<a class="page-scroll" href="#sp">Sản phẩm</a>
						</li>
						<li>
							<a class="page-scroll" href="#lh">Liên hệ</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
			
		</aside>
		<div class="content-wrapper">
			<div class="content-inner">
				<!-- Home -->
				<section class="content" id="dn">
				<a href="index2.php" class="btn btn-success pull-right">Đăng nhập </a>
				<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index2.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="style2.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Xin chào : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Thoát</a></b>
</div>
</body>
</html>

				</section>

				<section class="content" id="th">
					<div class="banner" style="background-image:url(2.jpg)/*tpa=https://themecrazy.net/html/ultra-preview/ultra/img/banner/2.jpg*/;">
						<div class="caption-info">
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
										<div class="caption-info-inner">
											<h1>Mình là Trung</h1>
											<h2 class="cd-headline clip is-full-width"> Mình đang làm về
												<span class=cd-words-wrapper>
													<b class=is-visible>Web design</b>
													<b> Graphic design</b>
													<b>Photography</b>
												</span>
											</h2>
											
											<ul class="social-link">
												<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
											</ul>
										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Home -->
				
				<!-- About Me -->
				<section class="content" id="gth">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="section-title">
									<h1>GIới thiệu về mình </h1>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
								<div class="panel-box wow fadeInLeft">
									<h2>Thông tin cơ bản</h2>
									<ul class="basic-info">
										<li><span>Họ tên:</span> <span class="info">Nguyễn Tử Trung</span></li>
										<li><span>Email:</span> <span class="info"><a href="mailto:iphone99nb@gmail.com">iphone99nb@gmail.com</a></span></li>
										<li><span>Điện thoại:</span> <span class="info">0917347176</span></li>
										<li><span>Ngày sinh:</span> <span class="info">02/11/2000</span></li>
										<li><span>Địa chỉ:</span> <span class="info">B4 BT3 ngõ 214 Nguyễn Xiển Thanh Xuân Hà Nội</span></li>
										<li><span>Quốc Tịch:</span> <span class="info">Việt Nam</span></li>
									</ul>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
								<div class="panel-box professional-profile wow fadeInRight">
									<h2>Câu nói mình thích</h2>
									<p>Một trong những hạnh phúc lớn nhất của đời người là hỗ trợ và nhìn thấy những người quanh mình hạnh phúc và phát triển bản thân vì như thế đương nhiên mình cũng hạnh phúc và phát triển bản thân; Cho không chỉ để nhận (cho để nhận) mà là cho thì đồng thời ngay tại thời điểm đó đã là nhận rồi, đâu cần phải đợi để nhận. Cho nghĩa là hạnh phúc. Cho là nhận!</p>
								</div>
							</div>
							
							<div class="col-xs-12">
								<div class="my-interests panel-box wow fadeInUp">
									<h2>Sở thích </h2>
									<p>Những thứ mà mình muốn làm mỗi khi mình stress và khi có thời gian rảnh</p>
									<ul>
										<li>
											<i class="fa fa-plane"></i>
											<span>Du lịch</span>
										</li>
										<li>
											<i class="fa fa-camera-retro"></i>
											<span>Chụp ảnh</span>
										</li>
										<li>
											<i class="fa fa-music"></i>
											<span>Nghe nhạc</span>
										</li>
										<li>
											<i class="fa fa-film"></i>
											<span>Xem phim</span>
										</li>
									</ul>
									
								</div>
							</div>
							
						</div>
					</div>
				</section>
				<!-- End About Me -->
				
				<!-- Skills -->
				<section class="content" id="kt">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="section-title">
									<h1>Kiến thức</h1>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
								<div class="panel-box">
									<h2>Kiến thức cơ bản </h2>
									<div class="progress-block wow fadeInLeft">
										<div class="single-progressbar">
											<div class="skill-text">
												<span>Giao tiếp</span>
												<span class="skill-per"></span>
											</div>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
												</div>
											</div>
										</div>
										
										<div class="single-progressbar">
											<div class="skill-text">
												<span>Làm việc nhóm</span>
												<span class="skill-per"></span>
											</div>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
												</div>
											</div>
										</div>				
										<div class="single-progressbar">
											<div class="skill-text">
												<span>Tập trung</span>
												<span class="skill-per"></span>
											</div>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
												</div>
											</div>
										</div>
										<div class="single-progressbar">
											<div class="skill-text">
												<span>Khả năng lãnh đạo</span>
												<span class="skill-per"></span>
											</div>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
								<div class="panel-box">
									<h2>Kiến thức chuyên môn </h2>
									<div class="progress-block wow fadeInRight">
										<div class="single-progressbar">
											<div class="skill-text">
												<span>Web Desgin</span>
												<span class="skill-per"></span>
											</div>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
												</div>
											</div>
										</div>
										
										<div class="single-progressbar">
											<div class="skill-text">
												<span> Graphic Design </span>
												<span class="skill-per"></span>
											</div>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
												</div>
											</div>
										</div>
										
										<div class="single-progressbar">
											<div class="skill-text">
												<span>Php & Mysql</span>
												<span class="skill-per"></span>
											</div>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
												</div>
											</div>
										</div>
	
										<div class="single-progressbar">
											<div class="skill-text">
												<span>Edit</span>
												<span class="skill-per"></span>
											</div>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</section>
				<!-- End Skills -->

				
				<!-- Experience -->
				<section class="content" id="kn">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="section-title">
									<h1>Kinh nghiệm</h1>
								</div>
							</div>
							
							<div class="col-xs-12">
								<ul class="timeline">
									<li class="wow fadeInLeft">
										<div class="timeline-badge">
											<i class="fa fa-circle"></i>
										</div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h2>Information Technology </h2>
												<h3>Thuy Loi University</h3>
												<span class="date">2018 - Hiện tại</span>
											</div>
											<div class="timeline-body">
												<p>Nơi mà lần đầu tiên mình được học các kiến thức về công nghệ thông tin</p>
											</div>
											
										</div>
									</li>
									
									<li class="timeline-inverted wow fadeInRight">
										<div class="timeline-badge">
											<i class="fa fa-circle"></i>
										</div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h2>Graphic Design</h2>
												<h3>Color Me</h3>
												<span class="date">2020 - Hiện Tại</span>
											</div>
											<div class="timeline-body">
												<p>Cung cho mình nhiều kiến thức về đồ họa và chỉnh sửa </p>
											</div>
											
										</div>
									</li>
									
									<li class="wow fadeInLeft">
										<div class="timeline-badge">
											<i class="fa fa-circle"></i>
										</div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h2>Web Desgin</h2>
												<h3>Mindx</h3>
												<span class="date"></span>
											</div>
											<div class="timeline-body">
												<p>Mình mới bắt đầu học có vẻ nó rất tốt</p>
											</div>
											
										</div>
									</li>
									
									<li  class="timeline-inverted wow fadeInRight">
										<div class="timeline-badge">
											<i class="fa fa-circle"></i>
										</div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h2>Photography</h2>
												<h3>Hera studio</h3>
												<span class="date">2019 - 2020</span>
											</div>
											<div class="timeline-body">
												<p>Nó giúp tăng khả năng về chỉnh sửa ảnh và logo</p>
											</div>
											
										</div>
										
									</li>
									
									<li class="wow fadeInLeft">
										<div class="timeline-badge">
											<i class="fa fa-circle"></i>
										</div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h2>3D design</h2>
												<h3>IT plus</h3>
												<span class="date">2018-2019</span>
											</div>
											<div class="timeline-body">
												<p>Nó là sự tò mò về 3D. Mình đã có 1 trải nghiệm thú vị</p>
											</div>
											
										</div>
									</li>
								</ul>
							</div>
							
						</div>
					</div>
				</section>
				<!-- End Experience -->
				
				
				<!-- Education -->
<section class="content" id="cc">
	
				
				<!-- End Education -->
				<head>
    <style type="text/css">
        .wrapper{
            width: 1450px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 20px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Chứng chỉ và danh hiệu</h2>
                        <a href="create.php" class="btn btn-success pull-right">Thêm thông tin </a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM chungchi";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>id</th>";
                                        echo "<th>Tên</th>";
                                        echo "<th>Nơi cấp</th>";
										echo "<th>Danh hiệu</th>";
										echo "<th>Năm nhận</th>";
                                    
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['ten'] . "</td>";
                                        echo "<td>" . $row['noicap'] . "</td>";
										echo "<td>" . $row['danhhieu'] . "</td>";
										echo "<td>" . $row['namnhan'] . "</td>";
                                    
                                        echo "<td>";
                                            echo "<a href='update.php?id=". $row['id'] ."' title='Cập nhật' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?id=". $row['id'] ."' title='Xóa ' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>Chưa có bản ghi nào!.</em></p>";
                        }
                    } else{
                        echo "Lỗi kết nối  $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    mysqli_close($conn);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
</section>
				
				<!-- Portfolio -->
				<section class="content" id="sp">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="section-title">
									<h1>Sản phẩm của mình </h1>
								</div>
							</div>
						<div class="row">
							<div class="col-xs-12">
								<ul class="portfolio_items">
									<li class="web-design print-design mix">
										<div class="post_thumb">
											<img src="a1.png" alt="" />
											<div class="portfolio-overlay">
												<div class="overlay-inner">
													<h3>Sản phẩm của mình nè</h3>
													<a href="a1.png" class="fancybox"><i class="fa fa-camera"></i></a>
													<a href="#"><i class="fa fa-link"></i></a>
												</div>
											</div>
										</div><!--end post thumb-->
									</li>
									
									<li class="animation mix">
										<div class="post_thumb">
											<img src="a2.png"  alt="" />
											<div class="portfolio-overlay">
												<div class="overlay-inner">
													<h3>Sản phẩm của mình nè</h3>
													<a href="a2.png" class="fancybox"><i class="fa fa-camera"></i></a>
													<a href="https://wheretogoo.github.io/"><i class="fa fa-link"></i></a>
												</div>
											</div>
										</div><!--end post thumb-->
									</li>
									
									<li class="print-design web-design mix">
										<div class="post_thumb">
											<img src="a3.png" alt="" />
											<div class="portfolio-overlay">
												<div class="overlay-inner">
													<h3>Sản phẩm của mình nè</h3>
													<a href="a3.png" class="fancybox"><i class="fa fa-camera"></i></a>
													<a href="http://mindx-gpa.herokuapp.com/"><i class="fa fa-link"></i></a>
												</div>
											</div>
										</div><!--end post thumb-->
									</li>
									
									<li class="animation photography mix">
										<div class="post_thumb">
											<img src="a4.jpg" alt="" />
											<div class="portfolio-overlay">
												<div class="overlay-inner">
													<h3>Sản phẩm của mình nè</h3>
													<a href="a4.jpg" class="fancybox"><i class="fa fa-camera"></i></a>
													<a href="#"><i class="fa fa-link"></i></a>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<section class="content" id="contact">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="section-title">
									<h1>Liên hệ </h1>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
								<ul class="panel-box">
									<li>
										<div class="contact-list">
											<i class="fa fa-map-marker"></i>
											<div class="contact-info">
												<p>b4 bt3 Nguyễn Xiển<br> Thanh Xuân Hà Nội</p>
											</div>
										</div>
									</li>
									<li>
										<div class="contact-list">
											<i class="fa fa-phone"></i>
											<div class="contact-info">
												<p>SDT: 0917347176</p>
											</div>
										</div>
									</li>
									<li>
										<div class="contact-list">
											<i class="fa fa-envelope"></i>
											<div class="contact-info">
												<p><a href="mailto:iphone99nb@gmail.com">iphone99nb@gmail.com.</a></p>
											</div>
										</div>
									</li>
								</ul>
								
							</div>
						</div>
					</div>
				</section>
				<!-- End Contact -->
				<html>

<head>
<style>
body {
    font-family: Arial;
    width: 550px;
}

.comment-form-container {
    background: #F0F0F0;
    border: #e0dfdf 1px solid;
    padding: 20px;
    border-radius: 2px;
}

.input-row {
    margin-bottom: 20px;
}

.input-field {
    width: 100%;
    border-radius: 2px;
    padding: 10px;
    border: #e0dfdf 1px solid;
}

.btn-submit {
    padding: 10px 20px;
    background: #333;
    border: #1d1d1d 1px solid;
    color: #f0f0f0;
    font-size: 0.9em;
    width: 100px;
    border-radius: 2px;
    cursor:pointer;
}

ul {
    list-style-type: none;
}

.comment-row {
    border-bottom: #e0dfdf 1px solid;
    margin-bottom: 15px;
    padding: 15px;
}

.outer-comment {
    background: #F0F0F0;
    padding: 20px;
    border: #dedddd 1px solid;
}

span.commet-row-label {
    font-style: italic;
}

span.posted-by {
    color: #09F;
}

.comment-info {
    font-size: 0.8em;
}
.comment-text {
    margin: 10px 0px;
}
.btn-reply {
    font-size: 0.8em;
    text-decoration: underline;
    color: #888787;
    cursor:pointer;
}
#comment-message {
    margin-left: 20px;
    color: #189a18;
    display: none;
}
</style>
<script src="jquery-3.2.1.min.js"></script>


<body>
    <h1>Feedback cho mình </h1>
    <div class="comment-form-container">
        <form id="frm-comment">
            <div class="input-row">
                <input type="hidden" name="comment_id" id="commentId"
                    placeholder="Name" /> <input class="input-field"
                    type="text" name="name" id="name" placeholder="Tên và email" />
            </div>
            <div class="input-row">
                <textarea class="input-field" type="text" name="comment"
                    id="comment" placeholder="Hãy viết gì đó ">  </textarea>
            </div>
            <div>
                <input type="button" class="btn-submit" id="submitButton"
                    value="Gửi" /><div id="comment-message">Gửi thành công</div>
            </div>

        </form>
    </div>
    <div id="output"></div>
    <script>
            function postReply(commentId) {
                $('#commentId').val(commentId);
                $("#name").focus();
            }

            $("#submitButton").click(function () {
                   $("#comment-message").css('display', 'none');
                var str = $("#frm-comment").serialize();

                $.ajax({
                    url: "comment-add.php",
                    data: str,
                    type: 'post',
                    success: function (response)
                    {
                        var result = eval('(' + response + ')');
                        if (response)
                        {
                            $("#comment-message").css('display', 'inline-block');
                            $("#name").val("");
                            $("#comment").val("");
                            $("#commentId").val("");
                           listComment();
                        } else
                        {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
                });
            });
            
            $(document).ready(function () {
                   listComment();
            });

            function listComment() {
                $.post("comment-list.php",
                        function (data) {
                               var data = JSON.parse(data);
                            
                            var comments = "";
                            var replies = "";
                            var item = "";
                            var parent = -1;
                            var results = new Array();

                            var list = $("<ul class='outer-comment'>");
                            var item = $("<li>").html(comments);

                            for (var i = 0; (i < data.length); i++)
                            {
                                var commentId = data[i]['comment_id'];
                                parent = data[i]['parent_comment_id'];

                                if (parent == "0")
                                {
                                    comments = "<div class='comment-row'>"+
                                    "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                                    "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                                    "<div><a class='btn-reply' onClick='postReply(" + commentId + ")'>Reply</a></div>"+
                                    "</div>";

                                    var item = $("<li>").html(comments);
                                    list.append(item);
                                    var reply_list = $('<ul>');
                                    item.append(reply_list);
                                    listReplies(commentId, data, reply_list);
                                }
                            }
                            $("#output").html(list);
                        });
            }

            function listReplies(commentId, data, list) {
                for (var i = 0; (i < data.length); i++)
                {
                    if (commentId == data[i].parent_comment_id)
                    {
                        var comments = "<div class='comment-row'>"+
                        " <div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                        "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                        "<div><a class='btn-reply' onClick='postReply(" + data[i]['comment_id'] + ")'>Reply</a></div>"+
                        "</div>";
                        var item = $("<li>").html(comments);
                        var reply_list = $('<ul>');
                        list.append(item);
                        item.append(reply_list);
                        listReplies(data[i].comment_id, data, reply_list);
                    }
                }
            }
        </script>
</body>

</html>
				<footer>
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="copyright text-center">
									<p> © Nguyễn Trung 2020.</p>
								</div>
							</div>
						</div>
					</div>
				</footer>
				
				<div class="back-top" style="display: block;">
					<a href="#"><i class="fa fa-angle-up"></i></a>
				</div>
				
			</div>
			<!-- End Content Inner -->
		</div>
		<!-- End Content Wrapper -->
	</div>
	<!-- End Main Container-->
	<script src="jquery.js" tppabs="https://themecrazy.net/html/ultra-preview/ultra/js/jquery.js" type="text/javascript"></script>
	<script src="bootstrap.min.js" tppabs="https://themecrazy.net/html/ultra-preview/ultra/js/bootstrap.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="jquery.easing.1.3.js" tppabs="https://themecrazy.net/html/ultra-preview/ultra/js/jquery.easing.1.3.js"></script>
	<script src="newsticker.js" tppabs="https://themecrazy.net/html/ultra-preview/ultra/js/newsticker.js" type="text/javascript"></script>
	<script src="jquery.fancybox.pack.js" tppabs="https://themecrazy.net/html/ultra-preview/ultra/js/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="wow.js" tppabs="https://themecrazy.net/html/ultra-preview/ultra/js/wow.js" type="text/javascript"></script>
	<script src="waypoints.min.js" tppabs="https://themecrazy.net/html/ultra-preview/ultra/js/waypoints.min.js" type="text/javascript"></script>
	<script src="jquery.counterup.min.js" tppabs="https://themecrazy.net/html/ultra-preview/ultra/js/jquery.counterup.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js-js-sensor=false&key=AIzaSyCYI9QbpcEgmUSfnoBplXycjesknwlFW-w.js" tppabs="https://maps.google.com/maps/api/js?js?sensor=false&key=AIzaSyCYI9QbpcEgmUSfnoBplXycjesknwlFW-w"></script>
	<script src="gmap3.min.js" tppabs="https://themecrazy.net/html/ultra-preview/ultra/js/gmap3.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="jquery.jscrollpane.min.js" tppabs="https://themecrazy.net/html/ultra-preview/ultra/js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="jquery.mousewheel.js" tppabs="https://themecrazy.net/html/ultra-preview/ultra/js/jquery.mousewheel.js"></script>
	<script src="jquery.mixitup.min.js" tppabs="https://themecrazy.net/html/ultra-preview/ultra/js/jquery.mixitup.min.js" type="text/javascript"></script>
	<script src="form-validator.min.js" tppabs="https://themecrazy.net/html/ultra-preview/ultra/mail/js/form-validator.min.js" type="text/javascript"></script>
	<script src="contact-form-script.js" tppabs="https://themecrazy.net/html/ultra-preview/ultra/mail/js/contact-form-script.js" type="text/javascript"></script>
	<script src="script-vertical.js" tppabs="https://themecrazy.net/html/ultra-preview/ultra/js/script-vertical.js" type="text/javascript"></script>
	
</body>
</html>
