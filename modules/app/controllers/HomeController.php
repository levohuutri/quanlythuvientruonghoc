<?php

namespace app\modules\app\controllers;

use yii\web\Controller;

class HomeController extends Controller {
    public function actionIndex() {
        $model = [];
        return $this->render('index', $model);
    }
}