<div class="bottomBar">
	<div id="bottomBarGradiant">
		&nbsp;
	</div>
	<div id="bottomBarContent">
		<div id="usageDiscalimer">
			&copy;Noah Huppert. All code on this domain is coded by Noah Huppert with the exception of <a style='color: #E6E6E6; text-decoration: none;' href='externalLibaries.php'><strong>these libaries</strong></a>. Do not distribute or claim as your own.
		</div>
		<div id='bottomBarItemsWraper'>
			<span style='float: left;' class='bottomBarItem'> <a style='color: #E6E6E6; text-decoration: none;' href="contactMe.php">Contact Noah Huppert</a> </span>
			<span style='float: right; cursor: pointer;' class='bottomBarItem'> Blog tools </span>
		</div>

	</div>
</div>

<script>
	var turnTableElement;
	var turnTableElementLeftNum;
	var turnTableElementRightNum;
	var turnTableElementRightNumPre;
	var turnTableElementCenter;
	var turnTableElementLeft;
	var turnTableElementRight;
	var turnTableElementRightPre;
	var date = new Date();
	var year = date.getFullYear();
	var tableMovedRecently = false;
	function init() {
		//Setting minum viewing width
		if ($(window).width() < 950) {
			$('body').css({
				'width' : '950px'
			});
		}
		if ($(window).width() > 950) {
			$('body').css({
				'width' : $(window).width(),
				'overflow-x' : 'hidden'
			});
		}

		$('.turnTableElement').css({
			'height' : ($('#turnTable').height() * 75) / 100
		});

		//Bottom Bar
		var bottomBarMarginTop;
		if (($('body').height() + 75) < $(window).height()) {
			bottomBarMarginTop = ($(window).height() - $('body').height()) + $('.bottomBar').height();
		}
		if (($('body').height() + 75) > $(window).height()) {
			bottomBarMarginTop = 80;
		}
		$('.bottomBar').css({
			'margin-top' : bottomBarMarginTop
		});
	}
</script>