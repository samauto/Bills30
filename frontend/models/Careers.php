<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "careers".
 *
 * @property integer $careers_id
 * @property string $careers_sub
 * @property string $careers_pg
 */
class Careers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'careers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['careers_sub', 'careers_pg'], 'required'],
            [['careers_sub', 'careers_pg'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'careers_id' => 'Careers ID',
            'careers_sub' => 'Careers Sub',
            'careers_pg' => 'Careers Pg',
        ];
    }
}
