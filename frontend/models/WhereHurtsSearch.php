<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\WhereHurts;

/**
 * WhereHurtsSearch represents the model behind the search form about `frontend\models\WhereHurts`.
 */
class WhereHurtsSearch extends WhereHurts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hurts_id', 'display'], 'integer'],
            [['hurts_type', 'hurts_link', 'hurts_pic'], 'safe'],
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
        $query = WhereHurts::find();

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
            'hurts_id' => $this->hurts_id,
            'display' => $this->display,
        ]);

        $query->andFilterWhere(['like', 'hurts_type', $this->hurts_type])
            ->andFilterWhere(['like', 'hurts_link', $this->hurts_link])
            ->andFilterWhere(['like', 'hurts_pic', $this->hurts_pic]);

        return $dataProvider;
    }
}
