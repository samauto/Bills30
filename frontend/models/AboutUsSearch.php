<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AboutUs;

/**
 * AboutUsSearch represents the model behind the search form about `frontend\models\AboutUs`.
 */
class AboutUsSearch extends AboutUs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aboutus_id', 'aboutdisplay'], 'integer'],
            [['subsection','aboutustype_id', 'suborder'], 'safe'],
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
        $query = AboutUs::find();
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataAboutUs;
        }

        $query->joinWith('aboutustype');

        // grid filtering conditions
        $query->andFilterWhere([
            //'aboutus_id' => $this->aboutus_id,
            //'aboutustype_id' => $this->aboutustype_id,
            'suborder' => $this->suborder,
        ]);

        $query->andFilterWhere(['like', 'subsection', $this->subsection])
           ->andFilterWhere(['like', 'aboutdisplay', $this->aboutdisplay])
           ->andFilterWhere(['like', 'suborder', $this->suborder])
            ->andFilterWhere(['like', 'aboutustype.type', $this->aboutustype_id])
            ->andFilterWhere(['like', 'aboutustype.orderoftype', $this->aboutustype_id]);
 

        return $dataProvider;
    }
}
