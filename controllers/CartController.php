<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 28.09.2017
 * Time: 21:27
 */

namespace app\controllers;

use app\models\Product;
use app\models\Cart;
use Yii;

class CartController extends AppController
{

    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        if (empty($product))
            return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($product);
       /* debug($session['cart']);
        debug($session['cart.qty']);
        debug($session['cart.sum']);*/
        $this->layout = false;
        return $this->render('cart-model', compact('session'));
    }

}