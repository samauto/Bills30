<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Taxonomy;
use frontend\models\Npi;

/**
 * TaxonomySearch represents the model behind the search form about `frontend\models\Taxonomy`.
 */
class TaxonomySearch extends Taxonomy
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tax_id'], 'integer'],
            [['tax_code', 'tax_group', 'tax_class', 'tax_spec', 'tax_general'], 'safe'],
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
        $query = Taxonomy::find();

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
            'tax_id' => $this->tax_id,
        ]);
        

        $query->andFilterWhere(['like', 'tax_code', $this->tax_code])
            ->andFilterWhere(['like', 'tax_group', $this->tax_group])
            ->andFilterWhere(['like', 'tax_class', $this->tax_class])
            ->andFilterWhere(['like', 'tax_general', $this->tax_general])
            ->andFilterWhere(['like', 'tax_spec', $this->tax_spec]);

        return $dataProvider;
    }

}
