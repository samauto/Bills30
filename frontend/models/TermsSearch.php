<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Terms;

/**
 * TermsSearch represents the model behind the search form about `frontend\models\Terms`.
 */
class TermsSearch extends Terms
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['terms_id'], 'integer'],
            [['terms_sub', 'terms_pg'], 'safe'],
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
        $query = Terms::find();

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
            'terms_id' => $this->terms_id,
        ]);

        $query->andFilterWhere(['like', 'terms_sub', $this->terms_sub])
            ->andFilterWhere(['like', 'terms_pg', $this->terms_pg]);

        return $dataProvider;
    }
}
