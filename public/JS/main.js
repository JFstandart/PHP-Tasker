	var interval = 0;
	setInterval(function(interval) {
		interval > 9 ? interval = 0 : interval++;
		var backgroundList = ['../Img/Img0.jpg', '../Img/Img1.jpg', '../Img/Img2.jpg', '../Img/Img3.jpg', '../Img/Img4.jpg', '../Img/Img5.jpg', '../Img/Img6.jpg', '../Img/Img7.jpg', '../Img/Img8.jpg', '../Img/Img9.jpg'];
		var BackgroundObject = document.querySelector(".background-title").style.background = `url('${backgroundList[interval]}') no-repeat fixed right top;`;
	}, 1000, interval);


	function changeBackground() {
		document.getElementById("background").style.background = '#FFFFFF url("public/Img/Img'+ 1 + '.jpg") no-repeat fixed contain 100%';
	}
