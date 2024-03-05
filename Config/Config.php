<?php

return [
    'updatesUrl' => "https://api.telegram.org/bot" . getenv("TOKEN") . "/getUpdates",
    'sendDocUrl' => "https://api.telegram.org/bot" . getenv('TOKEN') . "/sendDocument",
    'chat_id' => -4116122555,
    'getFileUrl' => "https://api.telegram.org/bot" . getenv('TOKEN') . "/getFile?file_id=",
    'smolurl' => "https://smolurl.com/api/links",
    'downloadUrl' => "https://api.telegram.org/file/bot" . getenv('TOKEN') . "/",
];
