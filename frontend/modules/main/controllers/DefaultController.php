<?php

namespace app\modules\main\controllers;

use frontend\components\Common;
use yii\web\Controller;

/**
 * Default controller for the `main` module
 */
class DefaultController extends Controller
{

    public function actionIndex()
    {
        $this->layout = "inner";
        return $this->render('index');
    }
    public function actionService(){
        $locator = \Yii::$app->locator;
        $cache = $locator->cache;

        $cache->set("test", 232323);
        print $cache->get("test");
    }

    public function actionEvent(){
        $component = new Common();
        $component->on(Common::EVENT_NOTIFY, [$component, 'notifyAdmin']);
        $component->sendMail("igorek2013@gmail.com", "test", "Test2");
        $component->off(Common::EVENT_NOTIFY, [$component, 'notifyAdmin']);
    }

    public function actionPath(){
        //print \Yii::getAlias('@webroot');
    }
}
