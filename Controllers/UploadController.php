<?php

require_once "Base/Controller.php";
require_once "Bot/Bot.php";

class UploadController extends Controller
{
    protected $config;
    protected $bot;

    public function __construct() {
        $this->config = include("Config/Config.php");
        $this->bot = new Bot();
    }

    public function Upload()
    {        
        $fileId = $this->bot->sendFile();
        $shortUrl = $this->bot->getFile($fileId);

        echo $shortUrl;
    } 
}
