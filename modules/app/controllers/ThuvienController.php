<?php

namespace app\modules\app\controllers;

use yii\web\Controller;

class ThuvienController extends Controller {
    public function actionChitiet() {
        $colors = ['red', 'blue', 'black'];
        $model = ['colors' => $colors];

        return $this->render('chitiet', $model);
    }

    public function actionTimkiemSach() {
        $model = [];
        return $this->render('timkiem-sach', $model);
    }
}