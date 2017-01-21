<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cashpricing".
 *
 * @property integer $cashpricing_id
 * @property integer $low_cash
 * @property integer $high_cash
 * @property integer $display
 */
class CashPricing extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cashpricing';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['low_cash', 'high_cash', 'display'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cashpricing_id' => Yii::t('app', 'Cashpricing ID'),
            'low_cash' => Yii::t('app', 'Minimum'),
            'high_cash' => Yii::t('app', 'Maximum'),
            'display' => Yii::t('app', 'Display'),
        ];
    }
}
