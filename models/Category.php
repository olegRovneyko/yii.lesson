<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 23.09.2017
 * Time: 17:21
 */

namespace app\models;

use yii\db\ActiveRecord;


class Category extends ActiveRecord
{

    public static function tableName()
    {
        return 'category';
    }

    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }

}