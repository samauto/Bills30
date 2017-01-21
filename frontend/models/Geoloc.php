<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "geoloc".
 *
 * @property integer $NPI
 * @property string $address
 * @property double $latitude
 * @property double $longitude
 * @property integer $streetid
 * @property string $left_right
 */
class Geoloc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'geoloc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NPI'], 'required'],
            [['NPI', 'streetid'], 'integer'],
            [['latitude', 'longitude'], 'number'],
            [['address', 'left_right'], 'string', 'max' => 255],
            [['NPI'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'NPI' => Yii::t('app', 'Npi'),
            'address' => Yii::t('app', 'Address'),
            'latitude' => Yii::t('app', 'Latitude'),
            'longitude' => Yii::t('app', 'Longitude'),
            'streetid' => Yii::t('app', 'Streetid'),
            'left_right' => Yii::t('app', 'Left Right'),
        ];
    }
}
