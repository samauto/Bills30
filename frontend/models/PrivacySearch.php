<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Privacy;

/**
 * PrivacySearch represents the model behind the search form about `frontend\models\Privacy`.
 */
class PrivacySearch extends Privacy
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['privacy_id'], 'integer'],
            [['privacy_sub', 'privacy_pg'], 'safe'],
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
        $query = Privacy::find();

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
            'privacy_id' => $this->privacy_id,
        ]);

        $query->andFilterWhere(['like', 'privacy_sub', $this->privacy_sub])
            ->andFilterWhere(['like', 'privacy_pg', $this->privacy_pg]);

        return $dataProvider;
    }
}
