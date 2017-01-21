<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Tax;

/**
 * TaxSearch represents the model behind the search form about `frontend\models\Tax`.
 */
class TaxSearch extends Tax
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tax_Id'], 'integer'],
            [['Medicare_Specialty_Code', 'Medicare_Provider_Supplier_Type', 'Provider_Taxonomy_Code', 'Provider_Taxonomy_Type', 'Provider_Taxonomy_Class', 'Provider_Taxonomy_Special'], 'safe'],
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
        $query = Tax::find();

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
            'Tax_Id' => $this->Tax_Id,
        ]);

        $query->andFilterWhere(['like', 'Medicare_Specialty_Code', $this->Medicare_Specialty_Code])
            ->andFilterWhere(['like', 'Medicare_Provider_Supplier_Type', $this->Medicare_Provider_Supplier_Type])
            ->andFilterWhere(['like', 'Provider_Taxonomy_Code', $this->Provider_Taxonomy_Code])
            ->andFilterWhere(['like', 'Provider_Taxonomy_Type', $this->Provider_Taxonomy_Type])
            ->andFilterWhere(['like', 'Provider_Taxonomy_Class', $this->Provider_Taxonomy_Class])
            ->andFilterWhere(['like', 'Provider_Taxonomy_Special', $this->Provider_Taxonomy_Special]);

        return $dataProvider;
    }
}
