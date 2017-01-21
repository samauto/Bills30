<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Press;

/**
 * PressSearch represents the model behind the search form about `frontend\models\Press`.
 */
class PressSearch extends Press
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['press_id'], 'integer'],
            [['press_sub', 'press_pg'], 'safe'],
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
        $query = Press::find();

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
            'press_id' => $this->press_id,
        ]);

        $query->andFilterWhere(['like', 'press_sub', $this->press_sub])
            ->andFilterWhere(['like', 'press_pg', $this->press_pg]);

        return $dataProvider;
    }
}
