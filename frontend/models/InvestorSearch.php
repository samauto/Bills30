<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Investor;

/**
 * InvestorSearch represents the model behind the search form about `frontend\models\Investor`.
 */
class InvestorSearch extends Investor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['invest_id'], 'integer'],
            [['invest_sub', 'invest_pg'], 'safe'],
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
        $query = Investor::find();

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
            'invest_id' => $this->invest_id,
        ]);

        $query->andFilterWhere(['like', 'invest_sub', $this->invest_sub])
            ->andFilterWhere(['like', 'invest_pg', $this->invest_pg]);

        return $dataProvider;
    }
}
