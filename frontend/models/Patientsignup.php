<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%patientsignup}}".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $mi
 * @property string $lastname
 * @property string $dob
 * @property string $drivers_or_stade_id
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip_code
 * @property string $user_allergies
 * @property string $user_blood_type
 * @property string $emergency_contact_name
 * @property string $username
 * @property string $user_password
 * @property string $user_pohone
 * @property string $email
 */
class Patientsignup extends \yii\db\ActiveRecord
{
    public $confirm_password;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%patientsignup}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_password'], 'match', 'pattern' => '#\d#s', 'message' => 'Atleast 7 letters and 1 number.'],
            [['user_password'], 'match', 'pattern' => '#[a-z].*[a-z].*[a-z].*[a-z].*[a-z].*[a-z].*[a-z]#is',  ],

            [['firstname', 'mi', 'lastname', 'drivers_or_stade_id', 'address', 'city', 'state', 'zip_code', 'user_allergies', 'user_blood_type', 'emergency_contact_name', 'username', 'user_password', 'user_pohone','user_pohone2', 'email','contact_number','user_blood_status'], 'required'],
            [['firstname', 'lastname', 'dob', 'drivers_or_stade_id', 'address', 'city', 'state', 'user_allergies', 'user_blood_type', 'emergency_contact_name', 'username', 'user_password', 'user_pohone','user_pohone2', 'email','contact_number'], 'string', 'max' => 255],
            ['confirm_password', 'compare', 'compareAttribute'=>'user_password', 'message'=>"Passwords don't match"],
            [['mi'], 'string', 'max' => 32],
            [['email'], 'email'],

            [[ 'zip_code'], 'integer']

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'First Name',
            'mi' => 'M.I',
            'lastname' => 'Lastname',
            'dob' => 'DOB',
            'drivers_or_stade_id' => 'Drivers # or State',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'zip_code' => 'Zip Code',
            'user_allergies' => 'User Allergies',
            'user_blood_type' => 'User Blood Type',
            'user_blood_status' => 'User Blood Status',

            'emergency_contact_name' => 'Emergency Contact Name',
            'username' => 'Username',
            'user_password' => 'User Password' ,
            'confirm_password' => 'Confirm Password',
            'user_pohone' => 'User Phone #1',
            'user_pohone2' => 'User Phone #2',
            'email' => 'Email',
            'contact_number'=>'Contact Number'

        ];
    }
}
