<?php

class AppController{

    private $request;

    public function __construst(){
        $this->request = $_SERVER['REQUEST_METHOD'];
    }

    protected function isPost(){

        return $this->request === 'POST';
    }

    protected function isGet(){

        return $this->request === 'GET';
    }

    protected function render(string $template = null, array $variables = []){

        $templatePath = 'public/views/'.$template.'.php';
        $output = 'File not found';

        if (file_exists($templatePath)){
            extract($variables);

            ob_start();
            include $templatePath;
            $output = ob_get_clean();
        }

        print $output;
    }
}