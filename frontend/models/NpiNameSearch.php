<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * DocSearch represents the model behind the search form 
 */
class NpiNameSearch extends Model
{
    public $name;
    public $firstname;
    public $lastname;
    public $city;
    public $zipcode;
    public $state;
    
    /** 
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'firstname', 'lastname', 'city', 'state'], 'string'],
            [['firstname', 'lastname', 'city', 'state'], 'safe'],            
            [['zipcode'], 'number', 'integerOnly'=> true, 'message'=>'Only numbers'],
            [['firstname'], 'match', 'not'=>true, 'pattern' => '/[^a-zA-Z_-]/', 'message' => 'Only letters',], 
            [['lastname'], 'match', 'not'=>true, 'pattern' => '/[^a-zA-Z_-]/', 'message' => 'Only letters',] 
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

        public function attributeLabels()
    {
        return [
            'name' => 'First/Last Name',
        ];
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */

    public function search($params)
    {
        $query = Model::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'doc_id' => $this->doc_id,
        ]);

        $query->andFilterWhere(['like', 'firstname', $this->$firstname]);
        $query->andFilterWhere(['like', 'lastname', $this->$lastname]);
        $query->andFilterWhere(['like', 'city', $this->city]);
        $query->andFilterWhere(['like', 'state', $this->state]);
        $query->andFilterWhere(['like', 'zipcode', $this->zipcode]);

        return $dataProvider;
    }
}
