<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "refund".
 *
 * @property integer $refund_id
 * @property string $refund_sub
 * @property string $refund_pg
 */
class Refund extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'refund';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['refund_sub', 'refund_pg'], 'required'],
            [['refund_sub', 'refund_pg'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'refund_id' => Yii::t('app', 'Refund ID'),
            'refund_sub' => Yii::t('app', 'Refund Sub'),
            'refund_pg' => Yii::t('app', 'Refund Pg'),
        ];
    }
}
