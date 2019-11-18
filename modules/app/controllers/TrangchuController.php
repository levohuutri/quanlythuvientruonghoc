<?php

namespace app\modules\app\controllers;

use yii\web\Controller;

class TrangchuController extends Controller {
    public function actionIndex() {
        $colors = ['red', 'blue', 'black'];
        $model = ['colors' => $colors];

        return $this->render('index', $model);
    }

    public function actionDangnhap() {
        $model = [];
        return $this->render('login', $model);
    }
}