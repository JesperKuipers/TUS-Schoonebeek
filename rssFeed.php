<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="css/rssFeed.css"/>
</head>
<body>
<?php
function rssFeed()
{
    ?>
    <div class="rssFeed">
        <div class="tweakers-logo"><a href="https://tweakers.net/"><img class="tweakers-logo"
                                                                        src="img/Tweakers_logo.png" </a></div>
        <div id="tweakers-text">
            <?php

            $rss = new DOMDocument();
            $rss->load('https://tweakers.net/feeds/nieuws.xml');
            $feed = array();
            foreach ($rss->getElementsByTagName('item') as $node) {
                $item = array(
                    'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                    'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                    'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                    'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
                );
                array_push($feed, $item);
            }
            $limit = 7;
            for ($x = 0; $x < $limit; $x++) {
                $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
                $link = $feed[$x]['link'];
                $description = $feed[$x]['desc'];
                $date = date('l F d, Y', strtotime($feed[$x]['date']));
                echo '<h2 id="RSS_H2"><a href="' . $link . '" title="' . $title . '">' . $title . '</a></h2>';
                echo '<p>Posted on ' . $date . '</p>';
                echo '<p>' . $description . '</p>';
            }
            ?>
        </div>
    </div>
    <?php
}

?>
</body>
</html>
