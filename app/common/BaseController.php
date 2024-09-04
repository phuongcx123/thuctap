<?php

namespace App\Common;

use eftec\bladeone\BladeOne;

class BaseController    
{
    protected function views($view, $data = []) {
        $templatePath = __DIR__ . '/../views';
        $compiledPath = __DIR__ . '/../views/Compiles';

        $blade = new BladeOne($templatePath, $compiledPath ,BladeOne::MODE_DEBUG);

        echo $blade->run($view, $data);
    }
  
}