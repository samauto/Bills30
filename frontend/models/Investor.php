<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "investor".
 *
 * @property integer $invest_id
 * @property string $invest_sub
 * @property string $invest_pg
 */
class Investor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'investor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['invest_sub', 'invest_pg'], 'required'],
            [['invest_sub', 'invest_pg'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'invest_id' => 'Invest ID',
            'invest_sub' => 'Invest Sub',
            'invest_pg' => 'Invest Pg',
        ];
    }
}
