$(function() {
	/**
	 * ページ内スクロール
	 */
	$('.ul-listItems a[href^="#"]').click(function(){
		var speed = 1000;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top - 50;
		$("html, body").animate({scrollTop:position}, speed, "swing");
		return false;
	});


	/**
	 * 現在スクロール位置によるグローバルナビのアクティブ表示
	 */
	var scrollMenu = function() {
		// 配列宣言
		// ここにスクロールで点灯させる箇所のidを記述する
		// 数値は全て0でOK
		var array = {
			'#concept': 0,
			'#company': 0,
			'#profile': 0,
		};

		var $globalNavi = new Array();

		// 各要素のスクロール値を保存
		for (var key in array) {
			if ($(key).offset()) {
				array[key] = $(key).offset().top - 10; // 数値丁度だとずれるので10px余裕を作る
				$globalNavi[key] = $('.ul-listItems a[href="' + key + '"]');
			}
		}

		// スクロールイベントで判定
		$(window).scroll(function () {
			for (var key in array) {
				if ($(window).scrollTop() > array[key] - 100) {
					$('.ul-listItems a').each(function() {
						$(this).removeClass('is-active');
					});
					$globalNavi[key].addClass('is-active');
				}
			}
		});
	}
	// 実行
	scrollMenu();
});