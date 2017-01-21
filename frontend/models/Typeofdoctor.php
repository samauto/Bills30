<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "typeofdoctor".
 *
 * @property integer $type_id
 * @property string $doctor_type
 * @property integer $displaydoc
 */
class Typeofdoctor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'typeofdoctor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['doctor_type'], 'required'],
            [['displaydoc'], 'integer'],
            [['doctor_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type_id' => Yii::t('app', 'Type ID'),
            'doctor_type' => Yii::t('app', 'Doctor Type'),
            'displaydoc' => Yii::t('app', 'Displaydoc'),
        ];
    }
}
