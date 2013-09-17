<?php

namespace kissalista;

class View {
    
    private $viewName;
    private $error = null;
    
    public function __construct($view) {
        $this->viewName = $view;
    }
    
    public function setError($error) {
        $this->error = $error;
    }
    
    private function getViewDirectory() {
        return 'views/';
    }

    private function displayContent() {
        require $this->getViewDirectory().$this->viewName.'.php';
    }
    
    public function display($template = 'template.php') {
        require $this->getViewDirectory().$template;
    }
    
}