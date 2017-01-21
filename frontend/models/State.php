<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "state".
 *
 * @property integer $state_id
 * @property string $state_name
 * @property string $state_int
 * @property integer $state_display
 */
class State extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'state';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state_name', 'state_int'], 'required'],
            [['state_display'], 'integer'],
            [['state_name'], 'string', 'max' => 255],
            [['state_int'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'state_id' => Yii::t('app', 'State ID'),
            'state_name' => Yii::t('app', 'State Name'),
            'state_int' => Yii::t('app', 'State Int'),
            'state_display' => Yii::t('app', 'State Display'),
        ];
    }
}
