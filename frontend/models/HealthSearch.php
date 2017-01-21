<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Search;

/**
 * HealthSearch represents the model behind the search form about `frontend\models\Search`.
 */
class HealthSearch extends Search
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['med_id', 'npi', 'ind_pac_id', 'ind_enrl_id', 'grad_yr', 'grp_prac_pac_id', 'num_grp_prac_mem', 'zip', 'hosp_aff_ccn_1', 'hosp_aff_ccn_2', 'hosp_aff_ccn_3', 'hosp_aff_ccn_4', 'hosp_aff_ccn_5'], 'integer'],
            [['last_name', 'first_name', 'mid_name', 'suffix', 'gender', 'credential', 'med_school', 'pri_spec', 'sec_spec1', 'sec_spec2', 'sec_spec3', 'sec_spec4', 'sec_spec_all', 'org_legal_name', 'org_dba_name', 'address_1', 'address_2', 'marker_add_2', 'city', 'state', 'hosp_aff_lbn_1', 'hosp_aff_lbn_2', 'hosp_aff_lbn_3', 'hosp_aff_lbn_4', 'hosp_aff_lbn_5', 'medicare', 'erx', 'pqrs', 'ehr', 'pqrs_cert', 'mil_hearts'], 'safe'],
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
        $query = Search::find();


        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
                return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'med_id' => $this->med_id,
            'npi' => $this->npi,
            'pri_spec' =>$this->pri_spec,

        // add conditions that should alw
            'ind_pac_id' => $this->ind_pac_id,
            'ind_enrl_id' => $this->ind_enrl_id,
            'grad_yr' => $this->grad_yr,
            'grp_prac_pac_id' => $this->grp_prac_pac_id,
            'num_grp_prac_mem' => $this->num_grp_prac_mem,
            //'zip' => $this->zip,
            'hosp_aff_ccn_1' => $this->hosp_aff_ccn_1,
            'hosp_aff_ccn_2' => $this->hosp_aff_ccn_2,
            'hosp_aff_ccn_3' => $this->hosp_aff_ccn_3,
            'hosp_aff_ccn_4' => $this->hosp_aff_ccn_4,
            'hosp_aff_ccn_5' => $this->hosp_aff_ccn_5,
        ]);

        $query->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'mid_name', $this->mid_name])
            ->andFilterWhere(['like', 'suffix', $this->suffix])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'credential', $this->credential])
            ->andFilterWhere(['like', 'med_school', $this->med_school])
            //->andFilterWhere(['like', 'pri_spec', $this->pri_spec])
            ->andFilterWhere(['like', 'sec_spec1', $this->sec_spec1])
            ->andFilterWhere(['like', 'sec_spec2', $this->sec_spec2])
            ->andFilterWhere(['like', 'sec_spec3', $this->sec_spec3])
            ->andFilterWhere(['like', 'sec_spec4', $this->sec_spec4])
            ->andFilterWhere(['like', 'sec_spec_all', $this->sec_spec_all])
            ->andFilterWhere(['like', 'org_legal_name', $this->org_legal_name])
            ->andFilterWhere(['like', 'org_dba_name', $this->org_dba_name])
            ->andFilterWhere(['like', 'address_1', $this->address_1])
            ->andFilterWhere(['like', 'address_2', $this->address_2])
            ->andFilterWhere(['like', 'marker_add_2', $this->marker_add_2])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'zip', $this->zip.'%', false])
            
            ->andFilterWhere(['like', 'hosp_aff_lbn_1', $this->hosp_aff_lbn_1])
            ->andFilterWhere(['like', 'hosp_aff_lbn_2', $this->hosp_aff_lbn_2])
            ->andFilterWhere(['like', 'hosp_aff_lbn_3', $this->hosp_aff_lbn_3])
            ->andFilterWhere(['like', 'hosp_aff_lbn_4', $this->hosp_aff_lbn_4])
            ->andFilterWhere(['like', 'hosp_aff_lbn_5', $this->hosp_aff_lbn_5])
            ->andFilterWhere(['like', 'medicare', $this->medicare])
            ->andFilterWhere(['like', 'erx', $this->erx])
            ->andFilterWhere(['like', 'pqrs', $this->pqrs])
            ->andFilterWhere(['like', 'ehr', $this->ehr])
            ->andFilterWhere(['like', 'pqrs_cert', $this->pqrs_cert])
            ->andFilterWhere(['like', 'mil_hearts', $this->mil_hearts]);

        return $dataProvider;
    }
}
