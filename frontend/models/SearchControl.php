<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "search_control".
 *
 * @property integer $search_id
 * @property string $search_panel
 * @property string $search_link
 * @property string $search_pic
 * @property integer $search_visible
 */
class SearchControl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'search_control';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['search_panel', 'search_link', 'search_pic', 'search_visible'], 'required'],
            [['search_visible'], 'integer'],
            [['search_panel', 'search_link', 'search_pic'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'search_id' => Yii::t('app', 'Search ID'),
            'search_panel' => Yii::t('app', 'Search Panel'),
            'search_link' => Yii::t('app', 'Search Link'),
            'search_pic' => Yii::t('app', 'Search Pic'),
            'search_visible' => Yii::t('app', 'Search Visible'),
        ];
    }
}
