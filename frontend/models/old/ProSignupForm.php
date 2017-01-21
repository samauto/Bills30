<?php
namespace frontend\models;

use common\models\Provider;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class ProSignupForm extends Model
{
    public $first_name;
    public $last_name;
    public $username;
    public $email;
    public $password;
    public $verifyCode;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // first name, last name, & username is required
            ['username', 'filter', 'filter' => 'trim'],
            ['first_name', 'required', 'message' => 'This field is required'],
            ['last_name', 'required', 'message' => 'This field is required'],
            ['username', 'required','message' => 'This field is required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            // email address is required
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required','message' => 'This field is required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            // email address is required
            ['password', 'required','message' => 'This field is required'],
            ['password', 'string', 'min' => 6],

            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

     /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function prosignup()
    {
        if ($this->validate()) {
            $user = new Provider();
            $user->first_name = $this->first_name;
            $user->last_name = $this->last_name;
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
