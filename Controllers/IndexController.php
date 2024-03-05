<?php 

require_once "Base/Controller.php";

class IndexController extends Controller {
    
    public function Index() {
        $this->render('index');
    }
}