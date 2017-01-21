<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "footer_menu".
 *
 * @property integer $footer_id
 * @property string $foot_head
 * @property string $foot_link
 * @property string $foot_linkname
 * @property integer $foot_visible
 */
class FooterMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'footer_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['foot_head', 'foot_link', 'foot_linkname'], 'required'],
            [['foot_visible'], 'integer'],
            [['foot_head', 'foot_link', 'foot_linkname'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'footer_id' => 'Footer ID',
            'foot_head' => 'Foot Head',
            'foot_link' => 'Foot Link',
            'foot_linkname' => 'Foot Linkname',
            'foot_visible' => 'Foot Visible',
        ];
    }
}
