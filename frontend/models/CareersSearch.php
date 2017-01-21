<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Careers;

/**
 * CareersSearch represents the model behind the search form about `frontend\models\Careers`.
 */
class CareersSearch extends Careers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['careers_id'], 'integer'],
            [['careers_sub', 'careers_pg'], 'safe'],
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
        $query = Careers::find();

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
            'careers_id' => $this->careers_id,
        ]);

        $query->andFilterWhere(['like', 'careers_sub', $this->careers_sub])
            ->andFilterWhere(['like', 'careers_pg', $this->careers_pg]);

        return $dataProvider;
    }
}
