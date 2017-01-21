<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "doctor_prices".
 *
 * @property integer $doc_prices_id
 * @property integer $doc_id
 * @property integer $Family
 * @property integer $Cardiac
 */
class DoctorPrices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'doctor_prices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['doc_id', 'Family', 'Cardiac'], 'required'],
            [['doc_id', 'Family', 'Cardiac'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'doc_prices_id' => 'Doc Prices ID',
            'doc_id' => 'Doc ID',
            'Family' => 'Family',
            'Cardiac' => 'Cardiac',
        ];
    }
}
