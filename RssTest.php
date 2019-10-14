<!DOCTYPE HTML>
<html>
<head>
    
</head>
<body>
    <div id="TweakersDiv">
<div id="tnetHeadlines">Fout</div>
<script>

    var TNET = (function()
    {
        var updateTimer = 0; // seconds, use 0 if you don't want auto refresh
        var numHeadlines = 10;

        var writeHeadlines = function(headlines)
        {
            var tnetDiv = document.getElementById('tnetHeadlines');
            if (headlines.length && tnetDiv)
            {
                for (var i = 0, headline, html = []; i < numHeadlines && (headline = headlines[i]); i++)
                {
                    html.push('<a href="' + headline.link + '">' + headline.title + '<\/a>');
                }

                tnetDiv.innerHTML = html.join('<br>');
            }

            if (updateTimer)
                setTimeout(update, updateTimer * 1000);
        };

        var script;
        var update = function()
        {
            if (script)
                script.parentNode.removeChild(script);

            var f = document.getElementsByTagName('script')[0];

            script = document.createElement('script'); script.async = true;
            script.src = 'http://tweakers.net/feeds/nieuws.json?jsonp=TNET.write';
            f.parentNode.insertBefore(script, f);
        }

        update();

        return {write:writeHeadlines};
        
    })();

</script> 
    </div>
</body>
</html>