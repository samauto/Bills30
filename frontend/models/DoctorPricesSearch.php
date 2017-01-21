<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DoctorPrices;

/**
 * DoctorPricesSearch represents the model behind the search form about `frontend\models\DoctorPrices`.
 */
class DoctorPricesSearch extends DoctorPrices
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['doc_prices_id', 'doc_id', 'Family', 'Cardiac'], 'integer'],
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
        $query = DoctorPrices::find();

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
            'doc_prices_id' => $this->doc_prices_id,
            'doc_id' => $this->doc_id,
            'Family' => $this->Family,
            'Cardiac' => $this->Cardiac,
        ]);

        return $dataProvider;
    }
}
