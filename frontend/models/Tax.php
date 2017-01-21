<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "taxonomy".
 *
 * @property integer $Tax_Id
 * @property string $Medicare_Specialty_Code
 * @property string $Medicare_Provider_Supplier_Type
 * @property string $Provider_Taxonomy_Code
 * @property string $Provider_Taxonomy_Type
 * @property string $Provider_Taxonomy_Class
 * @property string $Provider_Taxonomy_Special
 */
class Tax extends \yii\db\ActiveRecord
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
            [['Tax_Id'], 'integer'],
            [['Provider_Taxonomy_Code'], 'required'],
            [['Medicare_Specialty_Code'], 'string', 'max' => 2],
            [['Medicare_Provider_Supplier_Type'], 'string', 'max' => 74],
            [['Provider_Taxonomy_Code'], 'string', 'max' => 11],
            [['Provider_Taxonomy_Type'], 'string', 'max' => 77],
            [['Provider_Taxonomy_Class'], 'string', 'max' => 82],
            [['Provider_Taxonomy_Special'], 'string', 'max' => 79],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Tax_Id' => Yii::t('app', 'Tax  ID'),
            'Medicare_Specialty_Code' => Yii::t('app', 'Medicare  Specialty  Code'),
            'Medicare_Provider_Supplier_Type' => Yii::t('app', 'Medicare  Provider  Supplier  Type'),
            'Provider_Taxonomy_Code' => Yii::t('app', 'Provider  Taxonomy  Code'),
            'Provider_Taxonomy_Type' => Yii::t('app', 'Provider  Taxonomy  Type'),
            'Provider_Taxonomy_Class' => Yii::t('app', 'Provider  Taxonomy  Class'),
            'Provider_Taxonomy_Special' => Yii::t('app', 'Provider  Taxonomy  Special'),
        ];
    }
}
