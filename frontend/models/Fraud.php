<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "fraud".
 *
 * @property integer $fraud_id
 * @property string $fraud_sub
 * @property string $fraud_pg
 */
class Fraud extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fraud';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fraud_sub', 'fraud_pg'], 'required'],
            [['fraud_sub', 'fraud_pg'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fraud_id' => 'Fraud ID',
            'fraud_sub' => 'Fraud Sub',
            'fraud_pg' => 'Fraud Pg',
        ];
    }
}
