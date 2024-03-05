<?php

require_once "Funcs.php";

class Bot
{
    private $config;

    public function __construct()
    {
        $this->config = include("Config/Config.php");
    }

    public function sendFile()
    {
        $uploadDir = "uploads/";
        $uploadFile = $uploadDir . basename($_FILES['document']['name']);
        move_uploaded_file($_FILES['document']['tmp_name'], $uploadFile);
        $document = new CURLFile($uploadFile);

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $this->config['sendDocUrl']);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, ["chat_id" => $this->config["chat_id"], 'document' => $document]);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $result = curl_exec($curl);
        curl_close($curl);

        $curlResp = json_decode($result, true);

        $fileId = $curlResp['result']['document']['file_id'];

        return $fileId;
    }

    public function getFile($fileId)
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $this->config['getFileUrl'] . $fileId);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($curl);
        curl_close($curl);

        $json = json_decode($response, true);
        
        if ($json['ok'] == false) {
            echo "[Upload Error] {$json['description']}";
            return;
        }

        $downloadLink = $this->config['downloadUrl'] . $json['result']['file_path'];
        $shortUrl = $this->getShortLink($downloadLink);

        return $shortUrl;
    }

    private function getShortLink($link)
    {
        $curl = curl_init();

        $fields = [
            'url' => $link
        ];

        $headers = [
            'Accept:application/json',
            'Content-Type:application/json'
        ];

        curl_setopt($curl, CURLOPT_URL, $this->config['smolurl']);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($fields));

        $response = curl_exec($curl);
        curl_close($curl);

        $json = json_decode($response, true);

        return $json['data']['short_url'];
    }

    public function getUpdates()
    {
        $curl = curl_init();

        $headers = [
            "Content-Type:application/json"
        ];

        curl_setopt($curl, CURLOPT_URL, $this->config['updatesUrl']);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($curl);
        curl_close($curl);

        $json = json_decode($response, true);

        echo var_dump($json);
    }
}
