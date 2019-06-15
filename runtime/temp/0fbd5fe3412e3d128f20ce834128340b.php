<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:98:"E:\wamp64\www\NewWWW\PHP_WebSite\thinkphp_5.0.24\public/../application/index\view\index\index.html";i:1560607908;}*/ ?>
<block name="style">
	<link rel="stylesheet" type="text/css" href="/newWWW/PHP_WebSite/thinkphp_5.0.24/public/static/css/bootstrap.min.css" />
</block>
<block>
	<button id="btn" class="btn btn-success">click</button>
	<?php echo $name; ?>
</block>
<block name="script">
	<script src="/newWWW/PHP_WebSite/thinkphp_5.0.24/public/static/js/jquery-3.4.1.min.js"></script>
	<script>
		let btn = document.querySelector('#btn');
		let btnClick = () => {
			$.ajax({
				type: 'POST',
				url: 'index/index/abc',
				data: { test: 123 },
				success: function(res) {
					console.log(res);
				},
				dataType: 'json',
			});
		};
		btn.addEventListener('click', btnClick);
	</script>
</block>
