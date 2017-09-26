<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 26.09.2017
 * Time: 22:35
 */

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;

class CategoryController extends AppController
{
    public function actionIndex()
    {
        $hits =Product::find()->where(['hit' => '1'])->limit(6)->all();

        return $this->render('index', compact('hits'));
    }
}