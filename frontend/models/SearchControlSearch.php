<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SearchControl;

/**
 * SearchControlSearch represents the model behind the search form about `frontend\models\SearchControl`.
 */
class SearchControlSearch extends SearchControl
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['search_id', 'search_visible'], 'integer'],
            [['search_panel', 'search_link', 'search_pic'], 'safe'],
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
        $query = SearchControl::find();

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
            'search_id' => $this->search_id,
            'search_visible' => $this->search_visible,
        ]);

        $query->andFilterWhere(['like', 'search_panel', $this->search_panel])
            ->andFilterWhere(['like', 'search_link', $this->search_link])
            ->andFilterWhere(['like', 'search_pic', $this->search_pic]);

        return $dataProvider;
    }
}
