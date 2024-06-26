<?php
        requireLib('shjs');
        requireLib('mathjax');
        echoUOJPageHeader(UOJLocale::get('help'))
?>
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

<?php echoUOJPageFooter() ?>
