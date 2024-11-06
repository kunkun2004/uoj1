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
<?php
    $currentDateTime = new DateTime();
    $starttime1 = new DateTime('2024-10-26 16:00:00');
    $starttime2 = new DateTime('2024-10-27 10:00:00');
    $starttime3 = new DateTime('2024-10-27 14:00:00');
    $starttime4 = new DateTime('2024-10-27 16:00:00');
    $endtime1 = new DateTime('2024-10-26 17:30:00');
    $endtime2 = new DateTime('2024-10-27 11:30:00');
    $endtime3 = new DateTime('2024-10-27 15:30:00');
    $endtime4 = new DateTime('2024-10-27 17:30:00');
    if ($currentDateTime > $starttime1 && $currentDateTime < $endtime1 || $currentDateTime > $starttime2 && $currentDateTime < $endtime2 ||$currentDateTime > $starttime3 && $currentDateTime < $endtime3 ||$currentDateTime > $starttime4 && $currentDateTime < $endtime4) : 
?>
<article>
	<header>
		<h2 class="page-header">提交成功!</h2>
	</header>
	<section>
		<div>
			您的代码已经成功提交！本窗口将在3秒后自动关闭。<hr />
			<button class="btn btn-primary" onclick="history.back(-1);">返回</button>
		</div>
	</section>
</article>
<?php else: ?>
<article>
        <header>
                <h2 class="page-header">比赛已结束，提交失败!</h2>
        </header>
        <section>
                <div>
                        本窗口将在3秒后自动关闭。<hr />
                        <button class="btn btn-primary" onclick="history.back(-1);">返回</button>
                </div>
        </section>
</article>
<?php endif ?>
</body>
</html>
<?php echoUOJPageFooter() ?>
