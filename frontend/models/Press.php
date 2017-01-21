<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "press".
 *
 * @property integer $press_id
 * @property string $press_sub
 * @property string $press_pg
 */
class Press extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'press';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['press_sub', 'press_pg'], 'required'],
            [['press_sub', 'press_pg'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'press_id' => 'Press ID',
            'press_sub' => 'Press Sub',
            'press_pg' => 'Press Pg',
        ];
    }
}
