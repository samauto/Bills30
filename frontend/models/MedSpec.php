<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "med_spec".
 *
 * @property integer $medspec_id
 * @property string $special
 * @property string $description
 * @property integer $display
 * @property string $scan1
 * @property string $scan2
 * @property string $scan3
 * @property string $scan4
 */
class MedSpec extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'med_spec';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['display'], 'integer'],
            [['special'], 'string', 'max' => 38],
            [['description'], 'string', 'max' => 425],
            [['scan1', 'scan2', 'scan3', 'scan4'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'medspec_id' => Yii::t('app', 'Medspec ID'),
            'special' => Yii::t('app', 'Special'),
            'description' => Yii::t('app', 'Description'),
            'display' => Yii::t('app', 'Display'),
            'scan1' => Yii::t('app', 'Scan1'),
            'scan2' => Yii::t('app', 'Scan2'),
            'scan3' => Yii::t('app', 'Scan3'),
            'scan4' => Yii::t('app', 'Scan4'),
        ];
    }
}
