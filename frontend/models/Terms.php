<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "terms".
 *
 * @property integer $terms_id
 * @property string $terms_sub
 * @property string $terms_pg
 */
class Terms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'terms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['terms_sub', 'terms_pg'], 'required'],
            [['terms_sub', 'terms_pg'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'terms_id' => Yii::t('app', 'Terms ID'),
            'terms_sub' => Yii::t('app', 'Terms Sub'),
            'terms_pg' => Yii::t('app', 'Terms Pg'),
        ];
    }
}
