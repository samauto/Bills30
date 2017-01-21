<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "faq".
 *
 * @property integer $faq_id
 * @property integer $faq_type_id
 * @property string $question
 * @property string $answer
 *
 * @property Faqtype $faqType
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faq';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['faq_type_id'], 'integer'],
            [['question', 'answer'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'faq_id' => 'Faq ID',
            'faq_type_id' => 'FAQ Type',
            'question' => 'Question',
            'answer' => 'Answer',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaqType()
    {
        return $this->hasOne(Faqtype::className(), ['faq_type_id' => 'faq_type_id']);
    }
}
