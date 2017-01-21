<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Fraud;

/**
 * FraudSearch represents the model behind the search form about `frontend\models\Fraud`.
 */
class FraudSearch extends Fraud
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fraud_id'], 'integer'],
            [['fraud_sub', 'fraud_pg'], 'safe'],
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
        $query = Fraud::find();

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
            'fraud_id' => $this->fraud_id,
        ]);

        $query->andFilterWhere(['like', 'fraud_sub', $this->fraud_sub])
            ->andFilterWhere(['like', 'fraud_pg', $this->fraud_pg]);

        return $dataProvider;
    }
}
