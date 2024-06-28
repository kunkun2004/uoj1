<?php
	requireLib('shjs');
	requireLib('mathjax');
	echoUOJPageHeader(UOJLocale::get('help')) 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Close Page</title>
    <script type="text/javascript">
        // 设置3秒后自动关闭网页
        setTimeout(function() {
            window.close();
        }, 3000);
    </script>
</head>
<body>
    <h1>This page will close in 3 seconds.</h1>
<article>
	<header>
		<h2 class="page-header">提交成功!</h2>
	</header>
	<section>
		<div>
			您的代码已经成功提交！<hr />
			<button class="btn btn-primary" onclick="history.back(-1);">返回</button>
		</div>
	</section>
</article>
</body>
</html>
<?php echoUOJPageFooter() ?>
