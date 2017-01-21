<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "taxonomy".
 *
 * @property integer $tax_id
 * @property string $tax_code
 * @property string $tax_group
 * @property string $tax_class
 * @property string $tax_spec
 */
class Taxonomy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'taxonomy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tax_code', 'tax_group', 'tax_class', 'tax_spec'], 'required'],
            [['tax_code'], 'string', 'max' => 50],
            [['tax_group', 'tax_class', 'tax_spec'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tax_id' => Yii::t('app', 'Tax ID'),
            'tax_code' => Yii::t('app', 'Tax Code'),
            'tax_group' => Yii::t('app', 'Tax Group'),
            'tax_class' => Yii::t('app', 'Tax Class'),
            'tax_spec' => Yii::t('app', 'Tax Spec'),
        ];
    }


}
