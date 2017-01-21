<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $first_name
 * @property string $mid_name
 * @property string $last_name
 * @property string $address_1
 * @property string $address_2
 * @property string $city
 * @property string $state
 * @property integer $zipcode
 * @property integer $country
 * @property string $home_phone
 * @property string $cell_phone
 * @property string $email
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property integer $status
 * @property string $uploadFile
 * @property string $created_at
 * @property integer $updated_at
 * @property string $last_login_date
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            [['username'], 'unique'],

            [['email'], 'required'],
            [['email'], 'unique'],
            
            [['first_name', 'mid_name', 'last_name', 'email'], 'string', 'max' => 255],
            [['address_1', 'address_2', 'city'], 'string', 'max' => 255],
            [['state'], 'string', 'max' => 3],
            ['zipcode', 'integer', 'max' => 99999],
            [['country'], 'string', 'max' => 255],

            [['home_phone', 'cell_phone'], 'string', 'max' => 12],
            
            [['created_at', 'last_login_date', 'first_name', 'last_name', 'home_phone', 'cell_phone', 'email', 'auth_key', 'password_hash', 'uploadFile', 'created_at', 'updated_at'], 'safe'],
            [['status', 'updated_at'], 'integer'],
            [['auth_key'], 'string', 'max' => 32],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'first_name' => 'First Name',
            'mid_name' => 'Mid Name',
            'last_name' => 'Last Name',
            'address_1' => 'Address Line 1',
            'address_2' => 'Address Line 2',
            'city' => 'City',
            'state' => 'State',
            'zipcode' => 'Zipcode',
            'country' => 'Country',
            'home_phone' => 'Home Phone',
            'cell_phone' => 'Cell Phone',
            'email' => 'Email',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
            'uploadFile' => 'Upload File',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'last_login_date' => 'Last Login Date',
        ];
    }
}
