<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Geoloc;

/**
 * GeolocSearch represents the model behind the search form about `frontend\models\Geoloc`.
 */
class GeolocSearch extends Geoloc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NPI', 'streetid'], 'integer'],
            [['address', 'left_right'], 'safe'],
            [['latitude', 'longitude'], 'number'],
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
        $query = Geoloc::find();

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
            'NPI' => $this->NPI,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'streetid' => $this->streetid,
        ]);

        $query->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'left_right', $this->left_right]);

        return $dataProvider;
    }
}
