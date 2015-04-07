function init() {

	console.log("init");

	var isBawah = false;
	var elFoto = document.getElementById('foto');

	window.addEventListener("scroll", onScroll);
	function onScroll(e) {
		// console.log(window.pageYOffset);

		if ((window.pageYOffset > 400) && !isBawah) {
			elFoto.style.backgroundImage = "url('https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-xpa1/t31.0-8/1912207_10203569466181596_1969441256_o.jpg')";
			elFoto.getElementsByTagName('i')[0].style.color = "transparent";
			isBawah = true;
		} else if ((window.pageYOffset < 400) && isBawah) {
			elFoto.style.backgroundImage = null;
			elFoto.getElementsByTagName('i')[0].style.color = null;
			isBawah = false;
		}
	}

	var imgs = document.getElementsByTagName("img");
	for (var i = 0; i < imgs.length; i++) {
		imgs[i].style.width = null;
		imgs[i].style.height = null;
		imgs[i].removeAttribute("width");
		imgs[i].removeAttribute("height");
	}

}