<footer id="site-footer">
    <p>Validators:
        <a href="http://validator.w3.org/check/referer">HTML5</a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
        <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>
    </p>
    <p>Specifications:
        <a href="https://htmlcheatsheet.com/">Cheatsheet</a>
        <a href="https://www.w3.org/TR/2017/REC-html52-20171214/">HTML5</a>
        <a href="https://www.w3.org/TR/html401/">HTML4</a>
        <a href="https://www.w3.org/TR/css-syntax-3/">CSS3</a>
        <a href="https://www.w3.org/TR/CSS22/">CSS2.2</a>
        <a href="https://www.w3.org/TR/2011/REC-CSS2-20110607/">CSS2.1</a>
    </p>
    <p>Manuals: <a href="http://php.net/manual/en/index.php">PHP</a></p>
    <?php
    $numFiles = count(get_included_files());
    $memoryUsed = round(memory_get_peak_usage(true) / 1000000, 2);
    $loadTime = round(microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'], 4);
    ?>
    <p>Time to load: <?=$loadTime;?> ms.
        Files included: <?=$numFiles;?>.
        Memory used: <?=$memoryUsed;?> MB</p>
    <p>Copyright &copy; <?=date("Y");?> Bernard Che Longho, <a href="mailto:lobe16@student.bth.se">lobe16@student.bth.se</a>
    </p>
    <div id="social_icons">
        <a href="https://twitter.com/blongho/">
            <picture>
                <source srcset="img/icon_twitter_large.png" media="(min-width: 980px)">
                <source srcset="img/icon_twitter_medium.png" media="(min-width: 600px)">
                <source srcset="img/icon_twitter_small.png" media="(max-width: 600px)">
                <source srcset="img/icon_twitter_xsmall.png" media="(max-width: 320px)">
                <img src="img/icon_twitter_large.png" alt="twitter icon">
            </picture>
        </a>

    </div>
</footer>

</body>
</html>
