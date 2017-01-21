<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "aboutus".
 *
 * @property integer $aboutus_id
 * @property integer $aboutustype_id
 * @property string $subsection
 * @property integer $suborder
 */
class AboutUs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aboutus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aboutustype_id', 'suborder', 'aboutdisplay'], 'integer'],
            [['subsection'], 'string', 'max' => 5000],
            //[['aboutustype_id'], 'exist', 'skipOnError' => true, 'targetClass' => Aboutustype::className(), 'targetAttribute' => ['aboutustype_id' => 'aboutustype_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aboutus_id' => 'Aboutus ID',
            'aboutustype_id' => 'SubTitle',
            'subsection' => 'Subsection',
            'suborder' => 'Order_Of_SubSection',
            'aboutdisplay' => 'Display',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAboutustype()
    {
        return $this->hasMany(Aboutustype::className(), ['aboutustype_id' => 'aboutustype_id']);
    }


}
