<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "where_hurts".
 *
 * @property integer $hurts_id
 * @property string $hurts_type
 * @property string $hurts_link
 * @property string $hurts_pic
 * @property integer $display
 */
class WhereHurts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'where_hurts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hurts_type', 'hurts_link', 'hurts_pic'], 'required'],
            [['display'], 'integer'],
            [['hurts_type', 'hurts_link', 'hurts_pic'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hurts_id' => Yii::t('app', 'Hurts ID'),
            'hurts_type' => Yii::t('app', 'Hurts Type'),
            'hurts_link' => Yii::t('app', 'Hurts Link'),
            'hurts_pic' => Yii::t('app', 'Hurts Pic'),
            'display' => Yii::t('app', 'Display'),
        ];
    }
}
