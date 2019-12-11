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
        return "";
    }

    private function getMain($data)
    {
        return "";
    }

    private function getFooter()
    {
        return "";
    }
}
