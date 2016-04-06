<?php
/**
 * @link http://www.yiiassets.com
 * 4/6/2016 AD 4:55 PM
 * @copyright Copyright (c) 2016 served
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 * @license BSD-3-Clause
 */

namespace backend\models;


use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\behaviors\BlameableBehavior;

class Notification extends \common\models\Notification{

    public function behaviors()
    {
        return [
            [
              'class' => TimestampBehavior::className(),
              'createdAtAttribute' => 'created_at',
              'updatedAtAttribute' => 'updated_at',
              'value' => new Expression('NOW()'),
            ],
            [
              'class' => BlameableBehavior::className(),
              'createdByAttribute' => 'created_by',
              'updatedByAttribute' => 'updated_by',
         ],
        ];
    }
}