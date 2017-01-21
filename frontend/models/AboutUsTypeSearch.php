<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AboutUs;

/**
 * AboutUsSearch represents the model behind the search form about `frontend\models\AboutUs`.
 */
class AboutUsTypeSearch extends AboutUsType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aboutustype_id', 'typedisplay' ], 'integer'],
            [['type','orderoftype'], 'safe'],
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
        $query = AboutUsType::find();
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

        $query->joinWith('aboutUs');

        // grid filtering conditions
        $query->andFilterWhere([
            //'aboutus_id' => $this->aboutus_id,
            //'aboutustype_id' => $this->aboutustype_id,
            'type' => $this->type,
            'orderoftype' => $this->orderoftype,
            'typedisplay' => $this->typedisplay,

        ]);

        $query->andFilterWhere(['like', 'orderoftype', $this->orderoftype])
            ->andFilterWhere(['like', 'aboutustype.type', $this->aboutustype_id]);
 

        return $dataProvider;
    }
}
