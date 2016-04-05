<?php

namespace app\modules\main;

/**
 * main module definition class
 */
class Module extends \yii\base\Module
{

    public $controllerNamespace = 'app\modules\main\controllers';


    public function init()
    {
        parent::init();

        $this->setLayoutPath('@frontend/views/layouts');
    }
}
