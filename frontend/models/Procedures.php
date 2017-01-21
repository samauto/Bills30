<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Procedures".
 *
 * @property integer $procedures_id
 * @property string $procedures_type
 * @property integer $display
 */
class Procedures extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Procedures';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['display'], 'integer'],
            [['procedure_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'procedures_id' => Yii::t('app', 'Procedure ID'),
            'procedure_type' => Yii::t('app', 'Procedure / Tests'),
            'display' => Yii::t('app', 'Display'),
        ];
    }
}
