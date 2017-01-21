<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "providers".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $business_name
 * @property string $address_1
 * @property string $address_2
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $phone
 * @property string $fax
 * @property string $special_1
 */
class Providers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'providers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'business_name', 'address_1', 'address_2', 'city', 'state', 'zip', 'phone', 'fax', 'special_1'], 'required'],
            [['first_name', 'last_name', 'business_name', 'address_1', 'address_2', 'city', 'state', 'zip', 'special_1'], 'string', 'max' => 255],
            [['phone', 'fax'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Doctor ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'business_name' => 'Business Name',
            'address_1' => 'Address 1',
            'address_2' => 'Address 2',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'special_1' => 'Special 1',
        ];
    }
}
