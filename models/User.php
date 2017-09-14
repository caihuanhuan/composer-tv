<?php

namespace mdm\tv\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class User extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%t_user}}';
    }

    /**
    * 获取信息
    */
    public static function getUser($id)
    {
        $ret = self::find()->where('id=:id', [':id' => $id])->asArray()->one();
        return $ret;
    }

}
