<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "privacy".
 *
 * @property integer $privacy_id
 * @property string $privacy_sub
 * @property string $privacy_pg
 */
class Privacy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'privacy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['privacy_sub', 'privacy_pg'], 'required'],
            [['privacy_sub', 'privacy_pg'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'privacy_id' => 'Privacy ID',
            'privacy_sub' => 'Privacy Sub',
            'privacy_pg' => 'Privacy Pg',
        ];
    }
}
