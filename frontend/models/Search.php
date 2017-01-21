<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "medical".
 *
 * @property integer $med_id
 * @property integer $npi
 * @property integer $ind_pac_id
 * @property integer $ind_enrl_id
 * @property string $last_name
 * @property string $first_name
 * @property string $mid_name
 * @property string $suffix
 * @property string $gender
 * @property string $credential
 * @property string $med_school
 * @property integer $grad_yr
 * @property string $pri_spec
 * @property string $sec_spec1
 * @property string $sec_spec2
 * @property string $sec_spec3
 * @property string $sec_spec4
 * @property string $sec_spec_all
 * @property string $org_legal_name
 * @property string $org_dba_name
 * @property integer $grp_prac_pac_id
 * @property integer $num_grp_prac_mem
 * @property string $address_1
 * @property string $address_2
 * @property string $marker_add_2
 * @property string $city
 * @property string $state
 * @property integer $zip
 * @property integer $hosp_aff_ccn_1
 * @property string $hosp_aff_lbn_1
 * @property integer $hosp_aff_ccn_2
 * @property string $hosp_aff_lbn_2
 * @property integer $hosp_aff_ccn_3
 * @property string $hosp_aff_lbn_3
 * @property integer $hosp_aff_ccn_4
 * @property string $hosp_aff_lbn_4
 * @property integer $hosp_aff_ccn_5
 * @property string $hosp_aff_lbn_5
 * @property string $medicare
 * @property string $erx
 * @property string $pqrs
 * @property string $ehr
 * @property string $pqrs_cert
 * @property string $mil_hearts
 */
class Search extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'medical';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['npi', 'ind_pac_id', 'ind_enrl_id', 'grad_yr', 'grp_prac_pac_id', 'num_grp_prac_mem', 'zip', 'hosp_aff_ccn_1', 'hosp_aff_ccn_2', 'hosp_aff_ccn_3', 'hosp_aff_ccn_4', 'hosp_aff_ccn_5'], 'integer'],
            [['last_name', 'first_name', 'mid_name', 'med_school', 'pri_spec', 'sec_spec1', 'sec_spec2', 'sec_spec3', 'sec_spec4', 'sec_spec_all', 'org_legal_name', 'org_dba_name', 'address_1', 'address_2', 'city', 'state', 'hosp_aff_lbn_1', 'hosp_aff_lbn_2', 'hosp_aff_lbn_3', 'hosp_aff_lbn_4', 'hosp_aff_lbn_5'], 'string', 'max' => 255],
            [['suffix'], 'string', 'max' => 5],
            [['gender'], 'string', 'max' => 1],
            [['credential'], 'string', 'max' => 10],
            [['marker_add_2', 'medicare', 'erx', 'pqrs', 'ehr', 'pqrs_cert', 'mil_hearts'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'med_id' => 'Med ID',
            'npi' => 'Npi',
            'ind_pac_id' => 'Ind Pac ID',
            'ind_enrl_id' => 'Ind Enrl ID',
            'last_name' => 'Last Name',
            'first_name' => 'First Name',
            'mid_name' => 'Mid Name',
            'suffix' => 'Suffix',
            'gender' => 'Gender',
            'credential' => 'Credential',
            'med_school' => 'Med School',
            'grad_yr' => 'Grad Yr',
            'pri_spec' => 'Pri Spec',
            'sec_spec1' => 'Sec Spec1',
            'sec_spec2' => 'Sec Spec2',
            'sec_spec3' => 'Sec Spec3',
            'sec_spec4' => 'Sec Spec4',
            'sec_spec_all' => 'Sec Spec All',
            'org_legal_name' => 'Org Legal Name',
            'org_dba_name' => 'Org Dba Name',
            'grp_prac_pac_id' => 'Grp Prac Pac ID',
            'num_grp_prac_mem' => 'Num Grp Prac Mem',
            'address_1' => 'Address 1',
            'address_2' => 'Address 2',
            'marker_add_2' => 'Marker Add 2',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'hosp_aff_ccn_1' => 'Hosp Aff Ccn 1',
            'hosp_aff_lbn_1' => 'Hosp Aff Lbn 1',
            'hosp_aff_ccn_2' => 'Hosp Aff Ccn 2',
            'hosp_aff_lbn_2' => 'Hosp Aff Lbn 2',
            'hosp_aff_ccn_3' => 'Hosp Aff Ccn 3',
            'hosp_aff_lbn_3' => 'Hosp Aff Lbn 3',
            'hosp_aff_ccn_4' => 'Hosp Aff Ccn 4',
            'hosp_aff_lbn_4' => 'Hosp Aff Lbn 4',
            'hosp_aff_ccn_5' => 'Hosp Aff Ccn 5',
            'hosp_aff_lbn_5' => 'Hosp Aff Lbn 5',
            'medicare' => 'Medicare',
            'erx' => 'Erx',
            'pqrs' => 'Pqrs',
            'ehr' => 'Ehr',
            'pqrs_cert' => 'Pqrs Cert',
            'mil_hearts' => 'Mil Hearts',
        ];
    }
}
