<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "phisicansignup".
 *
 * @property integer $id
 * @property string $provider_name
 * @property string $provider_specialities
 * @property string $national_provider_identifier
 * @property string $provider_address
 * @property string $provider_phone
 * @property string $email
 * @property string $password
 * @property string $other_name
 * @property string $other_password
 */
class Phisicansignup extends \yii\db\ActiveRecord
{
    public $confirm_password;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%phisicansignup}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['password'], 'match', 'pattern' => '#\d#s', 'message' => 'Atleast 7 letters and 1 number.'],
            [['password'], 'match', 'pattern' => '#[a-z].*[a-z].*[a-z].*[a-z].*[a-z].*[a-z].*[a-z]#is',  ],
            [['other_password'], 'match', 'pattern' => '#\d#s', 'message' => 'Atleast 7 letters and 1 number.'],
            [['other_password'], 'match', 'pattern' => '#[a-z].*[a-z].*[a-z].*[a-z].*[a-z].*[a-z].*[a-z]#is',  ],

            [['provider_name', 'provider_specialities', 'national_provider_identifier', 'provider_phone', 'email', 'password', 'other_name', 'other_password'], 'required'],
            [['provider_address'], 'safe'],
            [['provider_name', 'national_provider_identifier', 'provider_phone', 'email', 'password', 'other_name', 'other_password'], 'string', 'max' => 255],
            ['confirm_password', 'compare', 'compareAttribute'=>'password', 'message'=>"Passwords don't match"],
            [['provider_specialities'], 'string', 'max' => 32],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'provider_name' => 'Provider Name',
            'provider_specialities' => 'Provider Specialities',
            'national_provider_identifier' => 'National Provider Identifier',
            'provider_address' => 'Provider Address',
            'provider_phone' => 'Provider Phone',
            'email' => 'Email',
            'password' => 'Password',
            'confirm_password' => 'Confirm Password',
            'other_name' => 'Other Name',
            'other_password' => 'Other Password',
        ];
    }
}
