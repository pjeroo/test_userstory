<?php

namespace app\controllers;

use app\models\Questions;
use yii\data\ActiveDataProvider;

class IndexController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Questions::find(),
            'pagination' => [
                'pageSize' => 5,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
