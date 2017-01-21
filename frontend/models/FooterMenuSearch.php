<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\FooterMenu;

/**
 * FooterMenuSearch represents the model behind the search form about `frontend\models\FooterMenu`.
 */
class FooterMenuSearch extends FooterMenu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['footer_id', 'foot_visible'], 'integer'],
            [['foot_head', 'foot_link', 'foot_linkname'], 'safe'],
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
        $query = FooterMenu::find();

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
            'footer_id' => $this->footer_id,
            'foot_visible' => $this->foot_visible,
        ]);

        $query->andFilterWhere(['like', 'foot_head', $this->foot_head])
            ->andFilterWhere(['like', 'foot_link', $this->foot_link])
            ->andFilterWhere(['like', 'foot_linkname', $this->foot_linkname]);

        return $dataProvider;
    }
}
