<?php
        $allowed_pages = array("about","gallery","seminars","adults","kids","prices","contact","partners","log");
        $page_filter = filter_var($_GET['page'],FILTER_SANITIZE_STRING);


?>