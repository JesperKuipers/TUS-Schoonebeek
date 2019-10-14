<!DOCTYPE html>
<html>
<head>
</head>
<body>

        <?php
        $rss = new DOMDocument();
        $rss->load('https://tweakers.net/feeds/nieuws.xml');
        $feed = array();
        foreach ($rss->getElementsByTagName('item') as $node) {
            $item = array (
                'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
            );
            array_push($feed, $item);
        }
        $limit = 5;
        for($x=0;$x<$limit;$x++) {
            $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
            $link = $feed[$x]['link'];
            echo '<p style="color:red;"><a style="font-size:11px;" href="'.$link.'" title="'.$title.'">'.$title.'</a><br />';
        }
        ?>

</body>
</html>