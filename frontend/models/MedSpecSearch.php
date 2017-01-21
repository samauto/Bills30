<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MedSpec;

/**
 * MedSpecSearch represents the model behind the search form about `frontend\models\MedSpec`.
 */
class MedSpecSearch extends MedSpec
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['medspec_id', 'display'], 'integer'],
            [['special', 'description', 'scan1', 'scan2', 'scan3', 'scan4'], 'safe'],
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

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MedSpec::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'medspec_id' => $this->medspec_id,
            'display' => $this->display,
            'scan1' => $this->scan1,
            'scan2' => $this->scan2,
            'scan3' => $this->scan3,  
            'scan4' => $this->scan4,

            
        ]);

        $query->andFilterWhere(['like', 'special', $this->special])
            ->andFilterWhere(['like', 'description', $this->description]);
            //->orFilterWhere(['like', 'scan1', $this->scan1])
            //->orFilterWhere(['like', 'scan2', $this->scan2])
            //->orFilterWhere(['like', 'scan3', $this->scan3])
            //->orFilterWhere(['like', 'scan4', $this->scan4]);

        return $dataProvider;
    }
}
