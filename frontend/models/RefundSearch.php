<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Refund;

/**
 * RefundSearch represents the model behind the search form about `frontend\models\Refund`.
 */
class RefundSearch extends Refund
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['refund_id'], 'integer'],
            [['refund_sub', 'refund_pg'], 'safe'],
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
        $query = Refund::find();

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
            'refund_id' => $this->refund_id,
        ]);

        $query->andFilterWhere(['like', 'refund_sub', $this->refund_sub])
            ->andFilterWhere(['like', 'refund_pg', $this->refund_pg]);

        return $dataProvider;
    }
}
