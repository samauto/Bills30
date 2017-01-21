<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "faqtype".
 *
 * @property integer $faq_type_id
 * @property string $type
 *
 * @property Faq[] $faqs
 */
class Faqtype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faqtype';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'faq_type_id' => 'Faq Type ID',
            'type' => 'Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaqs()
    {
        return $this->hasMany(Faq::className(), ['faq_type_id' => 'faq_type_id']);
    }
}
