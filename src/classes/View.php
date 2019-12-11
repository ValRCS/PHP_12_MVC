<?php
class View
{

    public function __construct()
    {
        //add logging maybe
    }

    public function render($data = null)
    {
        $html = $this->getHeader();
        //TODO use $data when generating our HTML
        $html .= "<h1>Generating bunch of HTML</h1>";
        $html .= $this->getMain($data);
        $html .= $this->getFooter();

        echo $html;
    }

    private function getHeader()
    {
        $pagetitle = "My music page"; //TODO get title from config
        $stylefile = ""; //TODO get style from config
        $jsfile = "";
        $html = <<<MYLIMITER
<!DOCTYPE html>
<html lang="lv">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>$pagetitle</title>
<link rel="stylesheet" href="styles/$stylefile">
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script src="scripts/$jsfile" defer></script>
</head>
<body>
MYLIMITER;
        return $html;
    }

    private function getMain($data)
    {
        return "";
    }

    private function getFooter()
    {
        $year = date(DATE_RFC2822); //TODO get year dynamically
        $html = "<footer>(C)$year</footer>";
        $html .= "</body>";
        $html .= "</html>";
        return $html;
    }
}
