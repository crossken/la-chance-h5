﻿<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">

	<!-- 固定视口宽度为设备宽度，禁止用户缩放页面 -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">

	<!-- 格式检测 -->
	<meta name="format-detection" content="telephone=no,email=no,adress=no">

	<!-- 在iOS中以全屏模式运行 -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">

	<!-- UC强制全屏 -->
	<meta name="screen-orientation" content="portrait"> <!-- 强制竖屏 -->
	<meta name="full-screen" content="yes">
	<meta name="browsermode" content="application">

	<!-- QQ强制全屏 -->
	<meta name="x5-orientation" content="portrait"> <!-- 强制竖屏 -->
	<meta name="x5-fullscreen" content="true">
	<meta name="x5-page-mode" content="app">

	<!-- 网站描述 -->
	<meta name="keywords" content="玑域科技,互联网,技术,设计,策划运营,推广">
	<meta name="description" content="玑域信息科技有限公司是一家致力于高端互联网一站式服务，为企业从传统经营模式向互联网转型提供高品质服务，涵盖界面设计、技术开发以及营销推广的策划+执行的处于高速成长期的初创型信息技术公司。">
	<meta name="copyright" content="玑域信息科技有限公司">
	<meta name="author" content="Ken,kenchung.ftd@gmail.com">

	<title>玑域科技</title>




<style>

	/*加载页面*/
	.loading {
		position: fixed;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		background-color: #000;
		z-index: 9999;
	}
	.loading>img {
		display: block;
		width: 13%;
		margin: 60% auto 0;
	}
	.progress-bar {
		width: 52%;
		margin: 60px auto 0;
		position: relative;
	}
	.progress-bar>img {
		width: 100%;
	}
	.progress-bar>div {
		position: absolute;
		top: 40%;
		height: 10%;
		background-color: #fff;
		left: 9%;
		border-radius: 2px;
	}

</style>
<link rel="stylesheet" href="css/swiper-3.3.1.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/index.css">
</head>
<body>

	<!-- 加载页面 -->
	<div class="loading">
		<img src="images/logo-big.png">
		<div class="progress-bar">
			<img src="images/progress-bg.png">
			<div id="nowprogress"></div>
		</div>
	</div>

	<!-- 加载页面脚本-1 -->
	<script>
		var pdWidth,loadingTimer2,loadState,loadingPrgress2;
		var nowProgress = document.getElementById('nowprogress');
		nowProgress.style.width = '0%';
		var loadingTimer = setInterval(function(){
			pbWidth = parseFloat(nowProgress.style.width);
			if (pbWidth<80) {
				nowProgress.style.width = pbWidth + 0.5 +'%';
			} else if (loadState){
				clearInterval(loadingTimer);
				loadingTimer2 = setInterval(loadingPrgress2,10);
			}
		},10);
	</script>

	<audio id="music" src="background.mp3" loop="loop"></audio>

	<!-- 页面主体 -->
	<div class="swiper-container" id="main-swiper">
		<div class="swiper-wrapper">

			<!-- 字幕页 -->
			<div class="swiper-slide" id="subtitles" data-hash="sub">
				<div class="sub">
					<img src="images/sub.png">
				</div>
				<img src="images/logo-big.png" class="logo-big" id="sub-logo">
				<a href="" class="skipSub"><span class="skip1">s</span><span class="skip2">k</span><span class="skip3">i</span><span class="skip4">p</span><span class="skip5"> </span><span class="skip6">></span><span class="skip7">></span></a>

				<a href="" class="start-btn"><img src="images/go-wrapper.png" class="go-wrapper"><img src="images/start.png" class="start-word"></a>
				<!-- <a href="" class="skipSub">skip >></a> -->
			</div>

			<!-- 启动页 -->
			<div class="swiper-slide" id="slide1" data-hash="slide1">
				<img src="images/s1-circle1.png" id="s1-c1" class="s1-c1 circle ani-pause">
				<img src="images/s1-circle2.png" id="s1-c2" class="s1-c2 circle ani-pause">
				<img src="images/s1-circle3.png" id="s1-c3" class="s1-c3 circle ani-pause">
				<img src="images/earth.png" id="s1-earth">
				<a href="#" class="s1-fp ani-pause"><img src="images/s1-fingerprint.png"></a>
				<img src="images/s1-subline.png" id="s1-sbl">
				<div id="s1-pos"><img src="images/s1-position.png"></div>

			</div>

			<!-- 欢迎页 -->
			<div class="swiper-slide" id="slide2" data-hash="slide2">
				<img src="images/s2-title.png" id="s2-title">
				<a href="" id="s2-btn">
					<img src="images/s2-robot.png" id="s2-robot">
					<div id="s2-hand">
						<img src="images/s2-hand.png" id="s2-finger">
						<img src="images/s2-small-circle.png" id="s2-sc">
						<img src="images/s2-big-circle.png" id="s2-bc">                     
					</div>                  
					<div class="waves">
						<img src="images/wave.png">
					</div>
					<canvas id="canvas1" width="90" height="110"></canvas>
					<canvas id="canvas2" width="90" height="110"></canvas>
					<canvas id="canvas3" width="90" height="110"></canvas>
					<canvas id="canvas4" width="90" height="110"></canvas>
					<canvas id="canvas5" width="90" height="110"></canvas>
					<canvas id="canvas6" width="90" height="110"></canvas>
				</a>
				<div id="s2-word1">
					<p class="s2-para1">您好</p>
					<p class="s2-para-a3">已安全抵达地球</p>
					<p class="s2-para2">很高兴为您服务</p>
				</div>
				<div id="s2-para">
					<p id="now-date"></p>
					<img src="images/s2-word2.png" id="s2-word2">
				</div>
				<img src="images/logo.png" class="s2-logo" id="s2-logo">
			</div>

			<!-- slide3 -->
			<div class="swiper-slide" id="slide3" data-hash="slide3">
				<img src="images/s3-title.png" id="s3-title">
				<div id="s3-word1">
					<!-- <p class="s3-para-a3">数据获取完毕</p> -->
					<p class="s3-para1">是否</p>
					<p class="s3-para2">重新执行上次任务</p>
				</div>
				<a href="" id="s3-go" class="go"><img src="images/go-wrapper.png" class="go-wrapper"><img src="images/go.png" class="go-word"></a>
				<img src="images/logo.png" class="s2-logo" id="s3-logo">
			</div>

			<!-- slide3plus -->
			<div class="swiper-slide" id="slide3plus" data-hash="slide3plus">
				<img src="images/s3-title.png" id="s3plus-title">
				<div id="s3plus-word1">
					<p class="s3plus-para1">时光探测仪已开启</p>
					<p class="s3plus-para2">读取地球科技发展数据…</p>
				</div>
				<a href="" id="s3plus-go" class="go"><img src="images/go-wrapper.png" class="go-wrapper"><img src="images/go.png" class="go-word"></a>
				<img src="images/logo.png" class="s2-logo" id="s3plus-logo">
			</div>

			<!-- 技术革命动画页面 -->
			<div class="swiper-slide" id="ani" data-hash="slide4">
				<div id="ani-main">
					<div class="swiper-container" id="ani-swiper">
						<div class="swiper-wrapper">

							<!-- 蒸汽时代 -->
							<div class="swiper-slide">
								<!-- 注：元素的排序影响层叠渲染 -->
								<img src="images/steam-house.png" class="steam-house">
								<img src="images/ani-land.png" class="ani-land">
								<div id="steam-fulltrain">
									<img src="images/steam-tire.png" id="steam-tire1">
									<img src="images/steam-tire.png" id="steam-tire2">
									<img src="images/steam-train.png" id="steam-train">
								</div>
								<img src="images/steam-railway.png" class="steam-railway">
								<img src="images/steam-cloud1.png" class="steam-cloud1">
								<img src="images/steam-cloud2.png" class="steam-cloud2">
								<img src="images/steam-cloud3.png" class="steam-cloud3">
							</div>

							<!-- 电气时代 -->
							<div class="swiper-slide">
								<img src="images/elec-house.png" class="elec-house">
								<img src="images/ani-land.png" class="ani-land">                                
								<img src="images/elec-bus.png" class="elec-bus">
								<img src="images/elec-car.png" class="elec-car">
								<img src="images/steam-cloud2.png" class="elec-cloud2">
								<img src="images/steam-cloud3.png" class="elec-cloud3">
							</div>

							<!-- 信息时代 -->
							<div class="swiper-slide">
								<img src="images/info-house.png" class="info-house">
								<img src="images/ani-land.png" class="ani-land">                                
								<img src="images/info-phone.png" class="info-phone">
								<img src="images/info-signal.png" class="info-signal">
								<img src="images/info-robot.png" class="info-robot">
								<img src="images/steam-cloud1.png" class="info-cloud1">
								<img src="images/steam-cloud2.png" class="info-cloud2">
							</div>

						</div>
					</div>
					<img src="images/ani-bg.png" id="ani-bg">
				</div>
				<img src="images/ani-circle.png" id="ani-circle">
			</div>

			<!-- slide4 -->
			<div class="swiper-slide" id="slide4" data-hash="slide5">
				<img src="images/s4-title.png" id="s4-title" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.7s" swiper-animate-delay="0s" class="ani">
				<div id="s4-word1">
					<p class="s4-para-a4">数据获取完毕</p>        
					<p class="s4-para1">从2016年资料中获</p>
					<p class="s4-para2">取信息关联性90%</p>
					<p class="s4-para3">是否恢复</p>
				</div>
				<div id="s4-lr">
					<img src="images/s4-loading.png">
					<div class="loading-mask"></div>
				</div>
				<a href="" id="s4-go" class="go"><img src="images/go-wrapper.png" class="go-wrapper"><img src="images/go.png" class="go-word"></a>
				<img src="images/logo.png" class="s2-logo ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.7s" swiper-animate-delay="0.6s">
			</div>

			            <!-- slide5 -->
            <div class="swiper-slide" id="slide5" data-hash="slide6">
                <img src="images/s5-title.png" id="s5-title" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.7s" swiper-animate-delay="0s" class="ani">
                <div class="s5-doc ani" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="1.2s">
                    <img src="images/s5-doc-wrap.png" class="s5-doc-wrap">
                    <p class="s5-percentage">0%</p>
                    <img src="images/s5-square.png" class="s5-square" id="s5-s1">
                    <img src="images/s5-square.png" class="s5-square" id="s5-s2">
                    <img src="images/s5-square.png" class="s5-square" id="s5-s3">
                    <img src="images/s5-square.png" class="s5-square" id="s5-s4">
                    <img src="images/s5-square.png" class="s5-square" id="s5-s5">
                    <img src="images/s5-doc-word.png" class="s5-doc-word">
                    <div class="s5-doc-logo">
                        <img src="images/logo.png" id="s5-doc-logo">
                        <img src="images/dot.png" id="logo-dot1" class="logo-dot">
                        <img src="images/dot.png" id="logo-dot2" class="logo-dot">
                        <img src="images/dot.png" id="logo-dot3" class="logo-dot">
                        <img src="images/dot.png" id="logo-dot4" class="logo-dot">
                    </div>  
                    <img src="images/dot.png" id="doc-dot1" class="doc-dot">
                    <img src="images/dot.png" id="doc-dot2" class="doc-dot">
                    <img src="images/dot.png" id="doc-dot3" class="doc-dot">
                    <img src="images/dot.png" id="doc-dot4" class="doc-dot right-dot">
                    <img src="images/dot.png" id="doc-dot5" class="doc-dot right-dot">
                    <img src="images/dot.png" id="doc-dot6" class="doc-dot right-dot">
                    <img src="images/dot.png" id="doc-dot7" class="doc-dot right-dot">
                    <img src="images/dot.png" id="doc-dot8" class="doc-dot right-dot">
                </div>
                <div id="s5-word1">
                    <p class="s5-para1">目标：玑域科技</p>
                    <p class="s5-para2">匹配度：90%</p>
                    <p class="s5-para-a3">是否打开文件夹</p>
                </div>
                <a href="" id="s5-yes" class="go"><img src="images/go-wrapper.png" class="go-wrapper"><img src="images/yes.png" class="go-word" id="yes-img"></a>
                <a href="" id="s5-no" class="go"><img src="images/go-wrapper.png" class="go-wrapper"><img src="images/no.png" class="go-word"></a>
                <img src="images/logo.png" class="s2-logo ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.7s" swiper-animate-delay="0.6s">
            </div>


            <!-- slide6 -->
            <div class="swiper-slide" id="slide6" data-hash="slide7">
                <img src="images/s6-title.png" class="s6-title">
                <div id="s6-main">
                    <img src="images/s6-left-top.png" class="s6-lt">
                    <img src="images/s6-right-bottom.png" class="s6-rb">
                    <img src="images/s6-circle.png" class="s6-circle">
                    <img src="images/s6-word1.png" class="s6-word1">
                </div>
                <div id="s6-btn-wrapper">
                    <a href="" id="s6-tech" class="s6-btn"><img src="images/s6-small.png"><img src="images/s6-tech-word.png"></a>
                    <a href="" id="s6-design" class="s6-btn"><img src="images/s6-small2.png"><img src="images/s6-design-word.png"></a>
                    <a href="" id="s6-planning" class="s6-btn"><img src="images/s6-small3.png"><img src="images/s6-planning-word.png"></a>
                </div>
                <a href="" id="s6-go" class="go"><img src="images/go-wrapper.png" class="go-wrapper"><img src="images/go.png" class="go-word"></a>
                <img src="images/logo.png" class="s2-logo">
            </div>


                        <!-- 技术 -->
            <div class="swiper-slide showdoc" id="tech" data-hash="slide8">
                <div id="tech-main">
                    <img src="images/showdoc-bg.png" class="showdoc-bg ani" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="0.6s">
                    <img src="images/showdoc-title.png" class="showdoc-title ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.7s" swiper-animate-delay="0s">
                    <div class="showdoc-bl"><img src="images/showdoc-boder-left.png"></div>
                    <div class="showdoc-br"><img src="images/showdoc-boder-right.png"></div>
                    <a href="" id="tech-back" swiper-animate-effect="lightSpeedIn" swiper-animate-duration="1s" swiper-animate-delay="2.2s" class="ani showdoc-back">
                        <img src="images/showdoc-back.png">
                        <img src="images/dot.png" class="showback-dot showback-dot1">
                        <img src="images/dot.png" class="showback-dot showback-dot2">
                    </a>
                    <img src="images/tech-title.png" id="tech-title" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="1.2s" class="ani">
                    <img src="images/tech-word.png" id="tech-word" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="1.2s" class="ani">
                    <img src="images/tech-1.png" id="tech-1" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="1.6s" class="ani">
                    <img src="images/tech-2.png" id="tech-2" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.7s" swiper-animate-delay="1.6s" class="ani">
                </div>
                <img src="images/logo.png" class="s2-logo ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.7s" swiper-animate-delay="2s">
            </div>

            <!-- 设计 -->
            <div class="swiper-slide showdoc" id="design" data-hash="slide9">
                <div id="design-main">
                    <img src="images/showdoc-bg.png" class="showdoc-bg ani" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="0.6s">
                    <img src="images/showdoc-title.png" class="showdoc-title ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.7s" swiper-animate-delay="0s">
                    <div class="showdoc-bl"><img src="images/showdoc-boder-left.png"></div>
                    <div class="showdoc-br"><img src="images/showdoc-boder-right.png"></div>
                    <a href="" id="design-back" swiper-animate-effect="lightSpeedIn" swiper-animate-duration="1s" swiper-animate-delay="2.2s" class="ani showdoc-back">
                        <img src="images/showdoc-back.png">
                        <img src="images/dot.png" class="showback-dot showback-dot1">
                        <img src="images/dot.png" class="showback-dot showback-dot2">
                    </a>
                    <img src="images/design-title.png" id="design-title" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="1.2s" class="ani">
                    <img src="images/design-word.png" id="design-word" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="1.2s" class="ani">
                    <img src="images/design-1.png" id="design-1" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.7s" swiper-animate-delay="1.6s" class="ani">
                    <img src="images/design-2.png" id="design-2" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.7s" swiper-animate-delay="1.6s" class="ani">
                </div>
                <img src="images/logo.png" class="s2-logo ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.7s" swiper-animate-delay="2s">
            </div>

            <!-- 策划 -->
            <div class="swiper-slide showdoc" id="planning" data-hash="slide10">
                <div id="planning-main">
                    <img src="images/showdoc-bg.png" class="showdoc-bg ani" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="0.6s">
                    <img src="images/showdoc-title.png" class="showdoc-title ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.7s" swiper-animate-delay="0s">
                    <div class="showdoc-bl"><img src="images/showdoc-boder-left.png"></div>
                    <div class="showdoc-br"><img src="images/showdoc-boder-right.png"></div>
                    <a href="" id="tech-back" swiper-animate-effect="lightSpeedIn" swiper-animate-duration="1s" swiper-animate-delay="2.8s" class="ani showdoc-back">
                        <img src="images/showdoc-back.png">
                        <img src="images/dot.png" class="showback-dot showback-dot1">
                        <img src="images/dot.png" class="showback-dot showback-dot2">
                    </a>
                    <img src="images/planning-title.png" id="planning-title" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="1.2s" class="ani">
                    <img src="images/planning-word.png" id="planning-word" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="1.2s" class="ani">
                    <img src="images/planning-1.png" id="planning-1" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.7s" swiper-animate-delay="1.6s" class="ani">
                    <img src="images/planning-2.png" id="planning-2" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="2s" class="ani">
                    <img src="images/planning-3.png" id="planning-3" swiper-animate-effect="fadeIn" swiper-animate-duration="0.7s" swiper-animate-delay="2.2s" class="ani">
                </div>
                <img src="images/logo.png" class="s2-logo ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.7s" swiper-animate-delay="2.6s">
            </div>

            <!-- slide7 -->
            <div class="swiper-slide" id="slide7" data-hash="slide11">
                <img src="images/s7-title.png" id="s7-title" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.7s" swiper-animate-delay="0s" class="ani">
                <div id="s7-word">
                    <p class="s7-para1">主人</p>
                    <p class="s7-para2">发现神秘代码</p>
                    <p class="s7-para3">是否查看</p>
                </div>
                <a href="" id="s7-go" class="go"><img src="images/go-wrapper.png" class="go-wrapper"><img src="images/go.png" class="go-word"></a>
                <img src="images/logo.png" class="s2-logo ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.7s" swiper-animate-delay="0.6s">
            </div>

		</div>
	</div>
	<script src="js/zepto.js"></script>
	<script src="js/swiper-3.3.1.jquery.min.js"></script>
	<script src="js/swiper.animate1.0.2.min.js"></script>
	<script src="js/index.js"></script>
	
<?php require_once 'share/index.php';?>
</body>
</html>