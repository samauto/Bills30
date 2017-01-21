<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sales".
 *
 * @property integer $sales_id
 * @property string $sales_sub
 * @property string $sales_pg
 */
class Sales extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sales';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sales_sub', 'sales_pg'], 'required'],
            [['sales_sub', 'sales_pg'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sales_id' => 'Sales ID',
            'sales_sub' => 'Sales Sub',
            'sales_pg' => 'Sales Pg',
        ];
    }
}
