<?php require_once "views/partials/header.php"; ?>

<div class="container d-flex flex-column justify-content-center align-items-center">
    <div class="card">
        <div class="card-header d-flex flex-row justify-content-between align-items-center">
            <h1>File transfer</h1>
            <div>
                <a class="about-link" href="/index">Upload file</a>
                <a class="about-link" href="#">Sign Up</a>
                <a class="about-link" href="#">Log In</a>
            </div>
        </div>
        <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <div class="form-container d-flex flex-column justify-content-center align-items-center">
                <h2 class="card-body-text">Simple and reliable file transfers</h2>
                <form method="post" class="upload-form" enctype="multipart/form-data">
                    <label for="document" class="upload-button">
                        Upload
                        <input type="file" id="document" name="document" class="upload-input" hidden>
                    </label>
                </form>
            </div>
            <div class="progress-bar-container">
                <p>
                <h3>Wait while file is uploading...</h3>
                </p>
                <div class="progress-bar">
                    <div class="meter"></div>
                </div>
            </div>
            <div class="upload-result-container">
                <input type="text" class="d-link form-control" value="" readonly>
            </div>
        </div>
    </div>
    <div class="bottom-bar d-flex flex-column">
        <div class="cards d-flex flex-row">
            <div class="card card1 d-flex flex-row justify-content-center align-items-center">
                <img src="../Static/Img/send-file.512.png">
                <h4>Send file up to 20Mb</h4>
            </div>
            <div class="card card2 d-flex flex-row justify-content-center align-items-center">
                <img src="../Static/Img/send-arrow.512.png">
                <h4>File will be send with Telegram Bot</h4>
            </div>
        </div>
        <div class="info"></div>
    </div>
</div>

<?php require_once "views/partials/footer.php"; ?>