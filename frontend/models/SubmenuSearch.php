<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Submenu;

/**
 * SubmenuSearch represents the model behind the search form about `frontend\models\Submenu`.
 */
class SubmenuSearch extends Submenu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['submenu_id'], 'integer'],
            [['sub_name', 'sub_link', 'sub_pic', 'sub_pic_link'], 'safe'],
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
        $query = Submenu::find();

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
            'submenu_id' => $this->submenu_id,
        ]);

        $query->andFilterWhere(['like', 'sub_name', $this->sub_name])
            ->andFilterWhere(['like', 'sub_link', $this->sub_link])
            ->andFilterWhere(['like', 'sub_pic', $this->sub_pic])
            ->andFilterWhere(['like', 'sub_pic_link', $this->sub_pic]);

        return $dataProvider;
    }
}
