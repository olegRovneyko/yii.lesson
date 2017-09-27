<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 27.09.2017
 * Time: 22:18
 */

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;

class ProductController extends AppController
{
    public function actionIndex()
    {

    }

    public function actionView($id)
    {
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        $this->setMeta('E-SHOPPER | ' . $product->name, $product->keywords, $product->description);
        return $this->render('view', compact('product', 'hits'));
    }
}