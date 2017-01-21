<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "npitable".
 *
 * @property string $NPI
 * @property string $Entity_Type_Code
 * @property string $Replacement_NPI
 * @property string $EIN
 * @property string $Legal_Business_Name
 * @property string $Provider_Last_Name
 * @property string $Provider_First_Name
 * @property string $Provider_Middle_Name
 * @property string $Provider_Name_Prefix
 * @property string $Provider_Name_Suffix
 * @property string $Provider_Credential
 * @property string $Provider_Other_Organization_Name
 * @property string $Provider_Other_Organization_Type_Code
 * @property string $Provider_Other_Last_Name
 * @property string $Provider_Other_First_Name
 * @property string $Provider_Other_Middle_Name
 * @property string $Provider_Other_Name_Prefix
 * @property string $Provider_Other_Name_Suffix
 * @property string $Provider_Other_Credential
 * @property string $Provider_Other_Last_Name_Type_Code
 * @property string $Provider_First_Line_Business_Mailing_Address
 * @property string $Provider_Second_Line_Business_Mailing_Address
 * @property string $Provider_Business_Mailing_Address_City_Name
 * @property string $Provider_Business_Mailing_Address_State_Name
 * @property string $Provider_Business_Mailing_Address_Postal_Code
 * @property string $Provider_Business_Mailing_Address_Country_Code
 * @property string $Provider_Business_Mailing_Address_Telephone_Number
 * @property string $Provider_Business_Mailing_Address_Fax_Number
 * @property string $Provider_First_Line_Business_Practice_Location_Address
 * @property string $Provider_Second_Line_Business_Practice_Location_Address
 * @property string $Provider_Business_Practice_Location_Address_City_Name
 * @property string $Provider_Business_Practice_Location_Address_State_Name
 * @property string $Provider_Business_Practice_Location_Address_Postal_Code
 * @property string $Provider_Business_Practice_Location_Address_Country_Code
 * @property string $Provider_Business_Practice_Location_Address_Telephone_Number
 * @property string $Provider_Business_Practice_Location_Address_Fax_Number
 * @property string $Provider_Enumeration_Date
 * @property string $Last_Update_Date
 * @property string $NPI_Deactivation_ReasonCode
 * @property string $NPI_Deactivation_Date
 * @property string $NPI_Reactivation_Date
 * @property string $Provider_Gender_Code
 * @property string $Authorized_Official_Last_Name
 * @property string $Authorized_Official_First_Name
 * @property string $Authorized_Official_Middle_Name
 * @property string $Authorized_Official_Title_Position
 * @property string $Authorized_Official_Telephone_Number
 * @property string $Healthcare_Provider_Taxonomy_Code_1
 * @property string $Provider_License_Number_1
 * @property string $Provider_License_Number_State_Code_1
 * @property string $Healthcare_Provider_Primary_Taxonomy_Switch_1
 * @property string $Healthcare_Provider_Taxonomy_Code_2
 * @property string $Provider_License_Number_2
 * @property string $Provider_License_Number_State_Code_2
 * @property string $Healthcare_Provider_Primary_Taxonomy_Switch_2
 * @property string $Healthcare_Provider_Taxonomy_Code_3
 * @property string $Provider_License_Number_3
 * @property string $Provider_License_Number_State_Code_3
 * @property string $Healthcare_Provider_Primary_Taxonomy_Switch_3
 * @property string $Healthcare_Provider_Taxonomy_Code_4
 * @property string $Provider_License_Number_4
 * @property string $Provider_License_Number_State_Code_4
 * @property string $Healthcare_Provider_Primary_Taxonomy_Switch_4
 * @property string $Healthcare_Provider_Taxonomy_Code_5
 * @property string $Provider_License_Number_5
 * @property string $Provider_License_Number_State_Code_5
 * @property string $Healthcare_Provider_Primary_Taxonomy_Switch_5
 * @property string $Healthcare_Provider_Taxonomy_Code_6
 * @property string $Provider_License_Number_6
 * @property string $Provider_License_Number_State_Code_6
 * @property string $Healthcare_Provider_Primary_Taxonomy_Switch_6
 * @property string $Healthcare_Provider_Taxonomy_Code_7
 * @property string $Provider_License_Number_7
 * @property string $Provider_License_Number_State_Code_7
 * @property string $Healthcare_Provider_Primary_Taxonomy_Switch_7
 * @property string $Healthcare_Provider_Taxonomy_Code_8
 * @property string $Provider_License_Number_8
 * @property string $Provider_License_Number_State_Code_8
 * @property string $Healthcare_Provider_Primary_Taxonomy_Switch_8
 * @property string $Healthcare_Provider_Taxonomy_Code_9
 * @property string $Provider_License_Number_9
 * @property string $Provider_License_Number_State_Code_9
 * @property string $Healthcare_Provider_Primary_Taxonomy_Switch_9
 * @property string $Healthcare_Provider_Taxonomy_Code_10
 * @property string $Provider_License_Number_10
 * @property string $Provider_License_Number_State_Code_10
 * @property string $Healthcare_Provider_Primary_Taxonomy_Switch_10
 * @property string $Healthcare_Provider_Taxonomy_Code_11
 * @property string $Provider_License_Number_11
 * @property string $Provider_License_Number_State_Code_11
 * @property string $Healthcare_Provider_Primary_Taxonomy_Switch_11
 * @property string $Healthcare_Provider_Taxonomy_Code_12
 * @property string $Provider_License_Number_12
 * @property string $Provider_License_Number_State_Code_12
 * @property string $Healthcare_Provider_Primary_Taxonomy_Switch_12
 * @property string $Healthcare_Provider_Taxonomy_Code_13
 * @property string $Provider_License_Number_13
 * @property string $Provider_License_Number_State_Code_13
 * @property string $Healthcare_Provider_Primary_Taxonomy_Switch_13
 * @property string $Healthcare_Provider_Taxonomy_Code_14
 * @property string $Provider_License_Number_14
 * @property string $Provider_License_Number_State_Code_14
 * @property string $Healthcare_Provider_Primary_Taxonomy_Switch_14
 * @property string $Healthcare_Provider_Taxonomy_Code_15
 * @property string $Provider_License_Number_15
 * @property string $Provider_License_Number_State_Code_15
 * @property string $Healthcare_Provider_Primary_Taxonomy_Switch_15
 * @property string $Other_Provider_Identifier_1
 * @property string $Other_Provider_Identifier_Type_Code_1
 * @property string $Other_Provider_Identifier_State_1
 * @property string $Other_Provider_Identifier_Issuer_1
 * @property string $Other_Provider_Identifier_2
 * @property string $Other_Provider_Identifier_Type_Code_2
 * @property string $Other_Provider_Identifier_State_2
 * @property string $Other_Provider_Identifier_Issuer_2
 * @property string $Other_Provider_Identifier_3
 * @property string $Other_Provider_Identifier_Type_Code_3
 * @property string $Other_Provider_Identifier_State_3
 * @property string $Other_Provider_Identifier_Issuer_3
 * @property string $Other_Provider_Identifier_4
 * @property string $Other_Provider_Identifier_Type_Code_4
 * @property string $Other_Provider_Identifier_State_4
 * @property string $Other_Provider_Identifier_Issuer_4
 * @property string $Other_Provider_Identifier_5
 * @property string $Other_Provider_Identifier_Type_Code_5
 * @property string $Other_Provider_Identifier_State_5
 * @property string $Other_Provider_Identifier_Issuer_5
 * @property string $Other_Provider_Identifier_6
 * @property string $Other_Provider_Identifier_Type_Code_6
 * @property string $Other_Provider_Identifier_State_6
 * @property string $Other_Provider_Identifier_Issuer_6
 * @property string $Other_Provider_Identifier_7
 * @property string $Other_Provider_Identifier_Type_Code_7
 * @property string $Other_Provider_Identifier_State_7
 * @property string $Other_Provider_Identifier_Issuer_7
 * @property string $Other_Provider_Identifier_8
 * @property string $Other_Provider_Identifier_Type_Code_8
 * @property string $Other_Provider_Identifier_State_8
 * @property string $Other_Provider_Identifier_Issuer_8
 * @property string $Other_Provider_Identifier_9
 * @property string $Other_Provider_Identifier_Type_Code_9
 * @property string $Other_Provider_Identifier_State_9
 * @property string $Other_Provider_Identifier_Issuer_9
 * @property string $Other_Provider_Identifier_10
 * @property string $Other_Provider_Identifier_Type_Code_10
 * @property string $Other_Provider_Identifier_State_10
 * @property string $Other_Provider_Identifier_Issuer_10
 * @property string $Other_Provider_Identifier_11
 * @property string $Other_Provider_Identifier_Type_Code_11
 * @property string $Other_Provider_Identifier_State_11
 * @property string $Other_Provider_Identifier_Issuer_11
 * @property string $Other_Provider_Identifier_12
 * @property string $Other_Provider_Identifier_Type_Code_12
 * @property string $Other_Provider_Identifier_State_12
 * @property string $Other_Provider_Identifier_Issuer_12
 * @property string $Other_Provider_Identifier_13
 * @property string $Other_Provider_Identifier_Type_Code_13
 * @property string $Other_Provider_Identifier_State_13
 * @property string $Other_Provider_Identifier_Issuer_13
 * @property string $Other_Provider_Identifier_14
 * @property string $Other_Provider_Identifier_Type_Code_14
 * @property string $Other_Provider_Identifier_State_14
 * @property string $Other_Provider_Identifier_Issuer_14
 * @property string $Other_Provider_Identifier_15
 * @property string $Other_Provider_Identifier_Type_Code_15
 * @property string $Other_Provider_Identifier_State_15
 * @property string $Other_Provider_Identifier_Issuer_15
 * @property string $Other_Provider_Identifier_16
 * @property string $Other_Provider_Identifier_Type_Code_16
 * @property string $Other_Provider_Identifier_State_16
 * @property string $Other_Provider_Identifier_Issuer_16
 * @property string $Other_Provider_Identifier_17
 * @property string $Other_Provider_Identifier_Type_Code_17
 * @property string $Other_Provider_Identifier_State_17
 * @property string $Other_Provider_Identifier_Issuer_17
 * @property string $Other_Provider_Identifier_18
 * @property string $Other_Provider_Identifier_Type_Code_18
 * @property string $Other_Provider_Identifier_State_18
 * @property string $Other_Provider_Identifier_Issuer_18
 * @property string $Other_Provider_Identifier_19
 * @property string $Other_Provider_Identifier_Type_Code_19
 * @property string $Other_Provider_Identifier_State_19
 * @property string $Other_Provider_Identifier_Issuer_19
 * @property string $Other_Provider_Identifier_20
 * @property string $Other_Provider_Identifier_Type_Code_20
 * @property string $Other_Provider_Identifier_State_20
 * @property string $Other_Provider_Identifier_Issuer_20
 * @property string $Other_Provider_Identifier_21
 * @property string $Other_Provider_Identifier_Type_Code_21
 * @property string $Other_Provider_Identifier_State_21
 * @property string $Other_Provider_Identifier_Issuer_21
 * @property string $Other_Provider_Identifier_22
 * @property string $Other_Provider_Identifier_Type_Code_22
 * @property string $Other_Provider_Identifier_State_22
 * @property string $Other_Provider_Identifier_Issuer_22
 * @property string $Other_Provider_Identifier_23
 * @property string $Other_Provider_Identifier_Type_Code_23
 * @property string $Other_Provider_Identifier_State_23
 * @property string $Other_Provider_Identifier_Issuer_23
 * @property string $Other_Provider_Identifier_24
 * @property string $Other_Provider_Identifier_Type_Code_24
 * @property string $Other_Provider_Identifier_State_24
 * @property string $Other_Provider_Identifier_Issuer_24
 * @property string $Other_Provider_Identifier_25
 * @property string $Other_Provider_Identifier_Type_Code_25
 * @property string $Other_Provider_Identifier_State_25
 * @property string $Other_Provider_Identifier_Issuer_25
 * @property string $Other_Provider_Identifier_26
 * @property string $Other_Provider_Identifier_Type_Code_26
 * @property string $Other_Provider_Identifier_State_26
 * @property string $Other_Provider_Identifier_Issuer_26
 * @property string $Other_Provider_Identifier_27
 * @property string $Other_Provider_Identifier_Type_Code_27
 * @property string $Other_Provider_Identifier_State_27
 * @property string $Other_Provider_Identifier_Issuer_27
 * @property string $Other_Provider_Identifier_28
 * @property string $Other_Provider_Identifier_Type_Code_28
 * @property string $Other_Provider_Identifier_State_28
 * @property string $Other_Provider_Identifier_Issuer_28
 * @property string $Other_Provider_Identifier_29
 * @property string $Other_Provider_Identifier_Type_Code_29
 * @property string $Other_Provider_Identifier_State_29
 * @property string $Other_Provider_Identifier_Issuer_29
 * @property string $Other_Provider_Identifier_30
 * @property string $Other_Provider_Identifier_Type_Code_30
 * @property string $Other_Provider_Identifier_State_30
 * @property string $Other_Provider_Identifier_Issuer_30
 * @property string $Other_Provider_Identifier_31
 * @property string $Other_Provider_Identifier_Type_Code_31
 * @property string $Other_Provider_Identifier_State_31
 * @property string $Other_Provider_Identifier_Issuer_31
 * @property string $Other_Provider_Identifier_32
 * @property string $Other_Provider_Identifier_Type_Code_32
 * @property string $Other_Provider_Identifier_State_32
 * @property string $Other_Provider_Identifier_Issuer_32
 * @property string $Other_Provider_Identifier_33
 * @property string $Other_Provider_Identifier_Type_Code_33
 * @property string $Other_Provider_Identifier_State_33
 * @property string $Other_Provider_Identifier_Issuer_33
 * @property string $Other_Provider_Identifier_34
 * @property string $Other_Provider_Identifier_Type_Code_34
 * @property string $Other_Provider_Identifier_State_34
 * @property string $Other_Provider_Identifier_Issuer_34
 * @property string $Other_Provider_Identifier_35
 * @property string $Other_Provider_Identifier_Type_Code_35
 * @property string $Other_Provider_Identifier_State_35
 * @property string $Other_Provider_Identifier_Issuer_35
 * @property string $Other_Provider_Identifier_36
 * @property string $Other_Provider_Identifier_Type_Code_36
 * @property string $Other_Provider_Identifier_State_36
 * @property string $Other_Provider_Identifier_Issuer_36
 * @property string $Other_Provider_Identifier_37
 * @property string $Other_Provider_Identifier_Type_Code_37
 * @property string $Other_Provider_Identifier_State_37
 * @property string $Other_Provider_Identifier_Issuer_37
 * @property string $Other_Provider_Identifier_38
 * @property string $Other_Provider_Identifier_Type_Code_38
 * @property string $Other_Provider_Identifier_State_38
 * @property string $Other_Provider_Identifier_Issuer_38
 * @property string $Other_Provider_Identifier_39
 * @property string $Other_Provider_Identifier_Type_Code_39
 * @property string $Other_Provider_Identifier_State_39
 * @property string $Other_Provider_Identifier_Issuer_39
 * @property string $Other_Provider_Identifier_40
 * @property string $Other_Provider_Identifier_Type_Code_40
 * @property string $Other_Provider_Identifier_State_40
 * @property string $Other_Provider_Identifier_Issuer_40
 * @property string $Other_Provider_Identifier_41
 * @property string $Other_Provider_Identifier_Type_Code_41
 * @property string $Other_Provider_Identifier_State_41
 * @property string $Other_Provider_Identifier_Issuer_41
 * @property string $Other_Provider_Identifier_42
 * @property string $Other_Provider_Identifier_Type_Code_42
 * @property string $Other_Provider_Identifier_State_42
 * @property string $Other_Provider_Identifier_Issuer_42
 * @property string $Other_Provider_Identifier_43
 * @property string $Other_Provider_Identifier_Type_Code_43
 * @property string $Other_Provider_Identifier_State_43
 * @property string $Other_Provider_Identifier_Issuer_43
 * @property string $Other_Provider_Identifier_44
 * @property string $Other_Provider_Identifier_Type_Code_44
 * @property string $Other_Provider_Identifier_State_44
 * @property string $Other_Provider_Identifier_Issuer_44
 * @property string $Other_Provider_Identifier_45
 * @property string $Other_Provider_Identifier_Type_Code_45
 * @property string $Other_Provider_Identifier_State_45
 * @property string $Other_Provider_Identifier_Issuer_45
 * @property string $Other_Provider_Identifier_46
 * @property string $Other_Provider_Identifier_Type_Code_46
 * @property string $Other_Provider_Identifier_State_46
 * @property string $Other_Provider_Identifier_Issuer_46
 * @property string $Other_Provider_Identifier_47
 * @property string $Other_Provider_Identifier_Type_Code_47
 * @property string $Other_Provider_Identifier_State_47
 * @property string $Other_Provider_Identifier_Issuer_47
 * @property string $Other_Provider_Identifier_48
 * @property string $Other_Provider_Identifier_Type_Code_48
 * @property string $Other_Provider_Identifier_State_48
 * @property string $Other_Provider_Identifier_Issuer_48
 * @property string $Other_Provider_Identifier_49
 * @property string $Other_Provider_Identifier_Type_Code_49
 * @property string $Other_Provider_Identifier_State_49
 * @property string $Other_Provider_Identifier_Issuer_49
 * @property string $Other_Provider_Identifier_50
 * @property string $Other_Provider_Identifier_Type_Code_50
 * @property string $Other_Provider_Identifier_State_50
 * @property string $Other_Provider_Identifier_Issuer_50
 * @property string $Is_Sole_Proprietor
 * @property string $Is_Organization_Subpart
 * @property string $Parent_Organization_LBN
 * @property string $Parent_Organization_TIN
 * @property string $Authorized_Official_Name_Prefix
 * @property string $Authorized_Official_Name_Suffix
 * @property string $Authorized_Official_Credential
 * @property string $Healthcare_Provider_Taxonomy_Group_1
 * @property string $Healthcare_Provider_Taxonomy_Group_2
 * @property string $Healthcare_Provider_Taxonomy_Group_3
 * @property string $Healthcare_Provider_Taxonomy_Group_4
 * @property string $Healthcare_Provider_Taxonomy_Group_5
 * @property string $Healthcare_Provider_Taxonomy_Group_6
 * @property string $Healthcare_Provider_Taxonomy_Group_7
 * @property string $Healthcare_Provider_Taxonomy_Group_8
 * @property string $Healthcare_Provider_Taxonomy_Group_9
 * @property string $Healthcare_Provider_Taxonomy_Group_10
 * @property string $Healthcare_Provider_Taxonomy_Group_11
 * @property string $Healthcare_Provider_Taxonomy_Group_12
 * @property string $Healthcare_Provider_Taxonomy_Group_13
 * @property string $Healthcare_Provider_Taxonomy_Group_14
 * @property string $Healthcare_Provider_Taxonomy_Group_15
 */
class Npi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'npitable';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NPI'], 'required'],
            [['NPI', 'Entity_Type_Code', 'Replacement_NPI', 'EIN', 'Legal_Business_Name', 'Provider_Last_Name', 'Provider_First_Name', 'Provider_Middle_Name', 'Provider_Name_Prefix', 'Provider_Name_Suffix', 'Provider_Credential', 'Provider_Other_Organization_Name', 'Provider_Other_Organization_Type_Code', 'Provider_Other_Last_Name', 'Provider_Other_First_Name', 'Provider_Other_Middle_Name', 'Provider_Other_Name_Prefix', 'Provider_Other_Name_Suffix', 'Provider_Other_Credential', 'Provider_Other_Last_Name_Type_Code', 'Provider_First_Line_Business_Mailing_Address', 'Provider_Second_Line_Business_Mailing_Address', 'Provider_Business_Mailing_Address_City_Name', 'Provider_Business_Mailing_Address_State_Name', 'Provider_Business_Mailing_Address_Postal_Code', 'Provider_Business_Mailing_Address_Country_Code', 'Provider_Business_Mailing_Address_Telephone_Number', 'Provider_Business_Mailing_Address_Fax_Number', 'Provider_First_Line_Business_Practice_Location_Address', 'Provider_Second_Line_Business_Practice_Location_Address', 'Provider_Business_Practice_Location_Address_City_Name', 'Provider_Business_Practice_Location_Address_State_Name', 'Provider_Business_Practice_Location_Address_Postal_Code', 'Provider_Business_Practice_Location_Address_Country_Code', 'Provider_Business_Practice_Location_Address_Telephone_Number', 'Provider_Business_Practice_Location_Address_Fax_Number', 'Provider_Enumeration_Date', 'Last_Update_Date', 'NPI_Deactivation_ReasonCode', 'NPI_Deactivation_Date', 'NPI_Reactivation_Date', 'Provider_Gender_Code', 'Authorized_Official_Last_Name', 'Authorized_Official_First_Name', 'Authorized_Official_Middle_Name', 'Authorized_Official_Title_Position', 'Authorized_Official_Telephone_Number', 'Healthcare_Provider_Taxonomy_Code_1', 'Provider_License_Number_1', 'Provider_License_Number_State_Code_1', 'Healthcare_Provider_Primary_Taxonomy_Switch_1', 'Healthcare_Provider_Taxonomy_Code_2', 'Provider_License_Number_2', 'Provider_License_Number_State_Code_2', 'Healthcare_Provider_Primary_Taxonomy_Switch_2', 'Healthcare_Provider_Taxonomy_Code_3', 'Provider_License_Number_3', 'Provider_License_Number_State_Code_3', 'Healthcare_Provider_Primary_Taxonomy_Switch_3', 'Healthcare_Provider_Taxonomy_Code_4', 'Provider_License_Number_4', 'Provider_License_Number_State_Code_4', 'Healthcare_Provider_Primary_Taxonomy_Switch_4', 'Healthcare_Provider_Taxonomy_Code_5', 'Provider_License_Number_5', 'Provider_License_Number_State_Code_5', 'Healthcare_Provider_Primary_Taxonomy_Switch_5', 'Healthcare_Provider_Taxonomy_Code_6', 'Provider_License_Number_6', 'Provider_License_Number_State_Code_6', 'Healthcare_Provider_Primary_Taxonomy_Switch_6', 'Healthcare_Provider_Taxonomy_Code_7', 'Provider_License_Number_7', 'Provider_License_Number_State_Code_7', 'Healthcare_Provider_Primary_Taxonomy_Switch_7', 'Healthcare_Provider_Taxonomy_Code_8', 'Provider_License_Number_8', 'Provider_License_Number_State_Code_8', 'Healthcare_Provider_Primary_Taxonomy_Switch_8', 'Healthcare_Provider_Taxonomy_Code_9', 'Provider_License_Number_9', 'Provider_License_Number_State_Code_9', 'Healthcare_Provider_Primary_Taxonomy_Switch_9', 'Healthcare_Provider_Taxonomy_Code_10', 'Provider_License_Number_10', 'Provider_License_Number_State_Code_10', 'Healthcare_Provider_Primary_Taxonomy_Switch_10', 'Healthcare_Provider_Taxonomy_Code_11', 'Provider_License_Number_11', 'Provider_License_Number_State_Code_11', 'Healthcare_Provider_Primary_Taxonomy_Switch_11', 'Healthcare_Provider_Taxonomy_Code_12', 'Provider_License_Number_12', 'Provider_License_Number_State_Code_12', 'Healthcare_Provider_Primary_Taxonomy_Switch_12', 'Healthcare_Provider_Taxonomy_Code_13', 'Provider_License_Number_13', 'Provider_License_Number_State_Code_13', 'Healthcare_Provider_Primary_Taxonomy_Switch_13', 'Healthcare_Provider_Taxonomy_Code_14', 'Provider_License_Number_14', 'Provider_License_Number_State_Code_14', 'Healthcare_Provider_Primary_Taxonomy_Switch_14', 'Healthcare_Provider_Taxonomy_Code_15', 'Provider_License_Number_15', 'Provider_License_Number_State_Code_15', 'Healthcare_Provider_Primary_Taxonomy_Switch_15', 'Other_Provider_Identifier_1', 'Other_Provider_Identifier_Type_Code_1', 'Other_Provider_Identifier_State_1', 'Other_Provider_Identifier_Issuer_1', 'Other_Provider_Identifier_2', 'Other_Provider_Identifier_Type_Code_2', 'Other_Provider_Identifier_State_2', 'Other_Provider_Identifier_Issuer_2', 'Other_Provider_Identifier_3', 'Other_Provider_Identifier_Type_Code_3', 'Other_Provider_Identifier_State_3', 'Other_Provider_Identifier_Issuer_3', 'Other_Provider_Identifier_4', 'Other_Provider_Identifier_Type_Code_4', 'Other_Provider_Identifier_State_4', 'Other_Provider_Identifier_Issuer_4', 'Other_Provider_Identifier_5', 'Other_Provider_Identifier_Type_Code_5', 'Other_Provider_Identifier_State_5', 'Other_Provider_Identifier_Issuer_5', 'Other_Provider_Identifier_6', 'Other_Provider_Identifier_Type_Code_6', 'Other_Provider_Identifier_State_6', 'Other_Provider_Identifier_Issuer_6', 'Other_Provider_Identifier_7', 'Other_Provider_Identifier_Type_Code_7', 'Other_Provider_Identifier_State_7', 'Other_Provider_Identifier_Issuer_7', 'Other_Provider_Identifier_8', 'Other_Provider_Identifier_Type_Code_8', 'Other_Provider_Identifier_State_8', 'Other_Provider_Identifier_Issuer_8', 'Other_Provider_Identifier_9', 'Other_Provider_Identifier_Type_Code_9', 'Other_Provider_Identifier_State_9', 'Other_Provider_Identifier_Issuer_9', 'Other_Provider_Identifier_10', 'Other_Provider_Identifier_Type_Code_10', 'Other_Provider_Identifier_State_10', 'Other_Provider_Identifier_Issuer_10', 'Other_Provider_Identifier_11', 'Other_Provider_Identifier_Type_Code_11', 'Other_Provider_Identifier_State_11', 'Other_Provider_Identifier_Issuer_11', 'Other_Provider_Identifier_12', 'Other_Provider_Identifier_Type_Code_12', 'Other_Provider_Identifier_State_12', 'Other_Provider_Identifier_Issuer_12', 'Other_Provider_Identifier_13', 'Other_Provider_Identifier_Type_Code_13', 'Other_Provider_Identifier_State_13', 'Other_Provider_Identifier_Issuer_13', 'Other_Provider_Identifier_14', 'Other_Provider_Identifier_Type_Code_14', 'Other_Provider_Identifier_State_14', 'Other_Provider_Identifier_Issuer_14', 'Other_Provider_Identifier_15', 'Other_Provider_Identifier_Type_Code_15', 'Other_Provider_Identifier_State_15', 'Other_Provider_Identifier_Issuer_15', 'Other_Provider_Identifier_16', 'Other_Provider_Identifier_Type_Code_16', 'Other_Provider_Identifier_State_16', 'Other_Provider_Identifier_Issuer_16', 'Other_Provider_Identifier_17', 'Other_Provider_Identifier_Type_Code_17', 'Other_Provider_Identifier_State_17', 'Other_Provider_Identifier_Issuer_17', 'Other_Provider_Identifier_18', 'Other_Provider_Identifier_Type_Code_18', 'Other_Provider_Identifier_State_18', 'Other_Provider_Identifier_Issuer_18', 'Other_Provider_Identifier_19', 'Other_Provider_Identifier_Type_Code_19', 'Other_Provider_Identifier_State_19', 'Other_Provider_Identifier_Issuer_19', 'Other_Provider_Identifier_20', 'Other_Provider_Identifier_Type_Code_20', 'Other_Provider_Identifier_State_20', 'Other_Provider_Identifier_Issuer_20', 'Other_Provider_Identifier_21', 'Other_Provider_Identifier_Type_Code_21', 'Other_Provider_Identifier_State_21', 'Other_Provider_Identifier_Issuer_21', 'Other_Provider_Identifier_22', 'Other_Provider_Identifier_Type_Code_22', 'Other_Provider_Identifier_State_22', 'Other_Provider_Identifier_Issuer_22', 'Other_Provider_Identifier_23', 'Other_Provider_Identifier_Type_Code_23', 'Other_Provider_Identifier_State_23', 'Other_Provider_Identifier_Issuer_23', 'Other_Provider_Identifier_24', 'Other_Provider_Identifier_Type_Code_24', 'Other_Provider_Identifier_State_24', 'Other_Provider_Identifier_Issuer_24', 'Other_Provider_Identifier_25', 'Other_Provider_Identifier_Type_Code_25', 'Other_Provider_Identifier_State_25', 'Other_Provider_Identifier_Issuer_25', 'Other_Provider_Identifier_26', 'Other_Provider_Identifier_Type_Code_26', 'Other_Provider_Identifier_State_26', 'Other_Provider_Identifier_Issuer_26', 'Other_Provider_Identifier_27', 'Other_Provider_Identifier_Type_Code_27', 'Other_Provider_Identifier_State_27', 'Other_Provider_Identifier_Issuer_27', 'Other_Provider_Identifier_28', 'Other_Provider_Identifier_Type_Code_28', 'Other_Provider_Identifier_State_28', 'Other_Provider_Identifier_Issuer_28', 'Other_Provider_Identifier_29', 'Other_Provider_Identifier_Type_Code_29', 'Other_Provider_Identifier_State_29', 'Other_Provider_Identifier_Issuer_29', 'Other_Provider_Identifier_30', 'Other_Provider_Identifier_Type_Code_30', 'Other_Provider_Identifier_State_30', 'Other_Provider_Identifier_Issuer_30', 'Other_Provider_Identifier_31', 'Other_Provider_Identifier_Type_Code_31', 'Other_Provider_Identifier_State_31', 'Other_Provider_Identifier_Issuer_31', 'Other_Provider_Identifier_32', 'Other_Provider_Identifier_Type_Code_32', 'Other_Provider_Identifier_State_32', 'Other_Provider_Identifier_Issuer_32', 'Other_Provider_Identifier_33', 'Other_Provider_Identifier_Type_Code_33', 'Other_Provider_Identifier_State_33', 'Other_Provider_Identifier_Issuer_33', 'Other_Provider_Identifier_34', 'Other_Provider_Identifier_Type_Code_34', 'Other_Provider_Identifier_State_34', 'Other_Provider_Identifier_Issuer_34', 'Other_Provider_Identifier_35', 'Other_Provider_Identifier_Type_Code_35', 'Other_Provider_Identifier_State_35', 'Other_Provider_Identifier_Issuer_35', 'Other_Provider_Identifier_36', 'Other_Provider_Identifier_Type_Code_36', 'Other_Provider_Identifier_State_36', 'Other_Provider_Identifier_Issuer_36', 'Other_Provider_Identifier_37', 'Other_Provider_Identifier_Type_Code_37', 'Other_Provider_Identifier_State_37', 'Other_Provider_Identifier_Issuer_37', 'Other_Provider_Identifier_38', 'Other_Provider_Identifier_Type_Code_38', 'Other_Provider_Identifier_State_38', 'Other_Provider_Identifier_Issuer_38', 'Other_Provider_Identifier_39', 'Other_Provider_Identifier_Type_Code_39', 'Other_Provider_Identifier_State_39', 'Other_Provider_Identifier_Issuer_39', 'Other_Provider_Identifier_40', 'Other_Provider_Identifier_Type_Code_40', 'Other_Provider_Identifier_State_40', 'Other_Provider_Identifier_Issuer_40', 'Other_Provider_Identifier_41', 'Other_Provider_Identifier_Type_Code_41', 'Other_Provider_Identifier_State_41', 'Other_Provider_Identifier_Issuer_41', 'Other_Provider_Identifier_42', 'Other_Provider_Identifier_Type_Code_42', 'Other_Provider_Identifier_State_42', 'Other_Provider_Identifier_Issuer_42', 'Other_Provider_Identifier_43', 'Other_Provider_Identifier_Type_Code_43', 'Other_Provider_Identifier_State_43', 'Other_Provider_Identifier_Issuer_43', 'Other_Provider_Identifier_44', 'Other_Provider_Identifier_Type_Code_44', 'Other_Provider_Identifier_State_44', 'Other_Provider_Identifier_Issuer_44', 'Other_Provider_Identifier_45', 'Other_Provider_Identifier_Type_Code_45', 'Other_Provider_Identifier_State_45', 'Other_Provider_Identifier_Issuer_45', 'Other_Provider_Identifier_46', 'Other_Provider_Identifier_Type_Code_46', 'Other_Provider_Identifier_State_46', 'Other_Provider_Identifier_Issuer_46', 'Other_Provider_Identifier_47', 'Other_Provider_Identifier_Type_Code_47', 'Other_Provider_Identifier_State_47', 'Other_Provider_Identifier_Issuer_47', 'Other_Provider_Identifier_48', 'Other_Provider_Identifier_Type_Code_48', 'Other_Provider_Identifier_State_48', 'Other_Provider_Identifier_Issuer_48', 'Other_Provider_Identifier_49', 'Other_Provider_Identifier_Type_Code_49', 'Other_Provider_Identifier_State_49', 'Other_Provider_Identifier_Issuer_49', 'Other_Provider_Identifier_50', 'Other_Provider_Identifier_Type_Code_50', 'Other_Provider_Identifier_State_50', 'Other_Provider_Identifier_Issuer_50', 'Is_Sole_Proprietor', 'Is_Organization_Subpart', 'Parent_Organization_LBN', 'Parent_Organization_TIN', 'Authorized_Official_Name_Prefix', 'Authorized_Official_Name_Suffix', 'Authorized_Official_Credential', 'Healthcare_Provider_Taxonomy_Group_1', 'Healthcare_Provider_Taxonomy_Group_2', 'Healthcare_Provider_Taxonomy_Group_3', 'Healthcare_Provider_Taxonomy_Group_4', 'Healthcare_Provider_Taxonomy_Group_5', 'Healthcare_Provider_Taxonomy_Group_6', 'Healthcare_Provider_Taxonomy_Group_7', 'Healthcare_Provider_Taxonomy_Group_8', 'Healthcare_Provider_Taxonomy_Group_9', 'Healthcare_Provider_Taxonomy_Group_10', 'Healthcare_Provider_Taxonomy_Group_11', 'Healthcare_Provider_Taxonomy_Group_12', 'Healthcare_Provider_Taxonomy_Group_13', 'Healthcare_Provider_Taxonomy_Group_14', 'Healthcare_Provider_Taxonomy_Group_15'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'NPI' => Yii::t('app', 'Npi'),
            'Entity_Type_Code' => Yii::t('app', 'Entity  Type  Code'),
            'Replacement_NPI' => Yii::t('app', 'Replacement  Npi'),
            'EIN' => Yii::t('app', 'Ein'),
            'Legal_Business_Name' => Yii::t('app', 'Legal  Business  Name'),
            'Provider_Last_Name' => Yii::t('app', 'Provider  Last  Name'),
            'Provider_First_Name' => Yii::t('app', 'Provider  First  Name'),
            'Provider_Middle_Name' => Yii::t('app', 'Provider  Middle  Name'),
            'Provider_Name_Prefix' => Yii::t('app', 'Provider  Name  Prefix'),
            'Provider_Name_Suffix' => Yii::t('app', 'Provider  Name  Suffix'),
            'Provider_Credential' => Yii::t('app', 'Provider  Credential'),
            'Provider_Other_Organization_Name' => Yii::t('app', 'Provider  Other  Organization  Name'),
            'Provider_Other_Organization_Type_Code' => Yii::t('app', 'Provider  Other  Organization  Type  Code'),
            'Provider_Other_Last_Name' => Yii::t('app', 'Provider  Other  Last  Name'),
            'Provider_Other_First_Name' => Yii::t('app', 'Provider  Other  First  Name'),
            'Provider_Other_Middle_Name' => Yii::t('app', 'Provider  Other  Middle  Name'),
            'Provider_Other_Name_Prefix' => Yii::t('app', 'Provider  Other  Name  Prefix'),
            'Provider_Other_Name_Suffix' => Yii::t('app', 'Provider  Other  Name  Suffix'),
            'Provider_Other_Credential' => Yii::t('app', 'Provider  Other  Credential'),
            'Provider_Other_Last_Name_Type_Code' => Yii::t('app', 'Provider  Other  Last  Name  Type  Code'),
            'Provider_First_Line_Business_Mailing_Address' => Yii::t('app', 'Provider  First  Line  Business  Mailing  Address'),
            'Provider_Second_Line_Business_Mailing_Address' => Yii::t('app', 'Provider  Second  Line  Business  Mailing  Address'),
            'Provider_Business_Mailing_Address_City_Name' => Yii::t('app', 'Provider  Business  Mailing  Address  City  Name'),
            'Provider_Business_Mailing_Address_State_Name' => Yii::t('app', 'Provider  Business  Mailing  Address  State  Name'),
            'Provider_Business_Mailing_Address_Postal_Code' => Yii::t('app', 'Provider  Business  Mailing  Address  Postal  Code'),
            'Provider_Business_Mailing_Address_Country_Code' => Yii::t('app', 'Provider  Business  Mailing  Address  Country  Code'),
            'Provider_Business_Mailing_Address_Telephone_Number' => Yii::t('app', 'Provider  Business  Mailing  Address  Telephone  Number'),
            'Provider_Business_Mailing_Address_Fax_Number' => Yii::t('app', 'Provider  Business  Mailing  Address  Fax  Number'),
            'Provider_First_Line_Business_Practice_Location_Address' => Yii::t('app', 'Provider  First  Line  Business  Practice  Location  Address'),
            'Provider_Second_Line_Business_Practice_Location_Address' => Yii::t('app', 'Provider  Second  Line  Business  Practice  Location  Address'),
            'Provider_Business_Practice_Location_Address_City_Name' => Yii::t('app', 'Provider  Business  Practice  Location  Address  City  Name'),
            'Provider_Business_Practice_Location_Address_State_Name' => Yii::t('app', 'Provider  Business  Practice  Location  Address  State  Name'),
            'Provider_Business_Practice_Location_Address_Postal_Code' => Yii::t('app', 'Provider  Business  Practice  Location  Address  Postal  Code'),
            'Provider_Business_Practice_Location_Address_Country_Code' => Yii::t('app', 'Provider  Business  Practice  Location  Address  Country  Code'),
            'Provider_Business_Practice_Location_Address_Telephone_Number' => Yii::t('app', 'Provider  Business  Practice  Location  Address  Telephone  Number'),
            'Provider_Business_Practice_Location_Address_Fax_Number' => Yii::t('app', 'Provider  Business  Practice  Location  Address  Fax  Number'),
            'Provider_Enumeration_Date' => Yii::t('app', 'Provider  Enumeration  Date'),
            'Last_Update_Date' => Yii::t('app', 'Last  Update  Date'),
            'NPI_Deactivation_ReasonCode' => Yii::t('app', 'Npi  Deactivation  Reason Code'),
            'NPI_Deactivation_Date' => Yii::t('app', 'Npi  Deactivation  Date'),
            'NPI_Reactivation_Date' => Yii::t('app', 'Npi  Reactivation  Date'),
            'Provider_Gender_Code' => Yii::t('app', 'Provider  Gender  Code'),
            'Authorized_Official_Last_Name' => Yii::t('app', 'Authorized  Official  Last  Name'),
            'Authorized_Official_First_Name' => Yii::t('app', 'Authorized  Official  First  Name'),
            'Authorized_Official_Middle_Name' => Yii::t('app', 'Authorized  Official  Middle  Name'),
            'Authorized_Official_Title_Position' => Yii::t('app', 'Authorized  Official  Title  Position'),
            'Authorized_Official_Telephone_Number' => Yii::t('app', 'Authorized  Official  Telephone  Number'),
            'Healthcare_Provider_Taxonomy_Code_1' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Code 1'),
            'Provider_License_Number_1' => Yii::t('app', 'Provider  License  Number 1'),
            'Provider_License_Number_State_Code_1' => Yii::t('app', 'Provider  License  Number  State  Code 1'),
            'Healthcare_Provider_Primary_Taxonomy_Switch_1' => Yii::t('app', 'Healthcare  Provider  Primary  Taxonomy  Switch 1'),
            'Healthcare_Provider_Taxonomy_Code_2' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Code 2'),
            'Provider_License_Number_2' => Yii::t('app', 'Provider  License  Number 2'),
            'Provider_License_Number_State_Code_2' => Yii::t('app', 'Provider  License  Number  State  Code 2'),
            'Healthcare_Provider_Primary_Taxonomy_Switch_2' => Yii::t('app', 'Healthcare  Provider  Primary  Taxonomy  Switch 2'),
            'Healthcare_Provider_Taxonomy_Code_3' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Code 3'),
            'Provider_License_Number_3' => Yii::t('app', 'Provider  License  Number 3'),
            'Provider_License_Number_State_Code_3' => Yii::t('app', 'Provider  License  Number  State  Code 3'),
            'Healthcare_Provider_Primary_Taxonomy_Switch_3' => Yii::t('app', 'Healthcare  Provider  Primary  Taxonomy  Switch 3'),
            'Healthcare_Provider_Taxonomy_Code_4' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Code 4'),
            'Provider_License_Number_4' => Yii::t('app', 'Provider  License  Number 4'),
            'Provider_License_Number_State_Code_4' => Yii::t('app', 'Provider  License  Number  State  Code 4'),
            'Healthcare_Provider_Primary_Taxonomy_Switch_4' => Yii::t('app', 'Healthcare  Provider  Primary  Taxonomy  Switch 4'),
            'Healthcare_Provider_Taxonomy_Code_5' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Code 5'),
            'Provider_License_Number_5' => Yii::t('app', 'Provider  License  Number 5'),
            'Provider_License_Number_State_Code_5' => Yii::t('app', 'Provider  License  Number  State  Code 5'),
            'Healthcare_Provider_Primary_Taxonomy_Switch_5' => Yii::t('app', 'Healthcare  Provider  Primary  Taxonomy  Switch 5'),
            'Healthcare_Provider_Taxonomy_Code_6' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Code 6'),
            'Provider_License_Number_6' => Yii::t('app', 'Provider  License  Number 6'),
            'Provider_License_Number_State_Code_6' => Yii::t('app', 'Provider  License  Number  State  Code 6'),
            'Healthcare_Provider_Primary_Taxonomy_Switch_6' => Yii::t('app', 'Healthcare  Provider  Primary  Taxonomy  Switch 6'),
            'Healthcare_Provider_Taxonomy_Code_7' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Code 7'),
            'Provider_License_Number_7' => Yii::t('app', 'Provider  License  Number 7'),
            'Provider_License_Number_State_Code_7' => Yii::t('app', 'Provider  License  Number  State  Code 7'),
            'Healthcare_Provider_Primary_Taxonomy_Switch_7' => Yii::t('app', 'Healthcare  Provider  Primary  Taxonomy  Switch 7'),
            'Healthcare_Provider_Taxonomy_Code_8' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Code 8'),
            'Provider_License_Number_8' => Yii::t('app', 'Provider  License  Number 8'),
            'Provider_License_Number_State_Code_8' => Yii::t('app', 'Provider  License  Number  State  Code 8'),
            'Healthcare_Provider_Primary_Taxonomy_Switch_8' => Yii::t('app', 'Healthcare  Provider  Primary  Taxonomy  Switch 8'),
            'Healthcare_Provider_Taxonomy_Code_9' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Code 9'),
            'Provider_License_Number_9' => Yii::t('app', 'Provider  License  Number 9'),
            'Provider_License_Number_State_Code_9' => Yii::t('app', 'Provider  License  Number  State  Code 9'),
            'Healthcare_Provider_Primary_Taxonomy_Switch_9' => Yii::t('app', 'Healthcare  Provider  Primary  Taxonomy  Switch 9'),
            'Healthcare_Provider_Taxonomy_Code_10' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Code 10'),
            'Provider_License_Number_10' => Yii::t('app', 'Provider  License  Number 10'),
            'Provider_License_Number_State_Code_10' => Yii::t('app', 'Provider  License  Number  State  Code 10'),
            'Healthcare_Provider_Primary_Taxonomy_Switch_10' => Yii::t('app', 'Healthcare  Provider  Primary  Taxonomy  Switch 10'),
            'Healthcare_Provider_Taxonomy_Code_11' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Code 11'),
            'Provider_License_Number_11' => Yii::t('app', 'Provider  License  Number 11'),
            'Provider_License_Number_State_Code_11' => Yii::t('app', 'Provider  License  Number  State  Code 11'),
            'Healthcare_Provider_Primary_Taxonomy_Switch_11' => Yii::t('app', 'Healthcare  Provider  Primary  Taxonomy  Switch 11'),
            'Healthcare_Provider_Taxonomy_Code_12' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Code 12'),
            'Provider_License_Number_12' => Yii::t('app', 'Provider  License  Number 12'),
            'Provider_License_Number_State_Code_12' => Yii::t('app', 'Provider  License  Number  State  Code 12'),
            'Healthcare_Provider_Primary_Taxonomy_Switch_12' => Yii::t('app', 'Healthcare  Provider  Primary  Taxonomy  Switch 12'),
            'Healthcare_Provider_Taxonomy_Code_13' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Code 13'),
            'Provider_License_Number_13' => Yii::t('app', 'Provider  License  Number 13'),
            'Provider_License_Number_State_Code_13' => Yii::t('app', 'Provider  License  Number  State  Code 13'),
            'Healthcare_Provider_Primary_Taxonomy_Switch_13' => Yii::t('app', 'Healthcare  Provider  Primary  Taxonomy  Switch 13'),
            'Healthcare_Provider_Taxonomy_Code_14' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Code 14'),
            'Provider_License_Number_14' => Yii::t('app', 'Provider  License  Number 14'),
            'Provider_License_Number_State_Code_14' => Yii::t('app', 'Provider  License  Number  State  Code 14'),
            'Healthcare_Provider_Primary_Taxonomy_Switch_14' => Yii::t('app', 'Healthcare  Provider  Primary  Taxonomy  Switch 14'),
            'Healthcare_Provider_Taxonomy_Code_15' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Code 15'),
            'Provider_License_Number_15' => Yii::t('app', 'Provider  License  Number 15'),
            'Provider_License_Number_State_Code_15' => Yii::t('app', 'Provider  License  Number  State  Code 15'),
            'Healthcare_Provider_Primary_Taxonomy_Switch_15' => Yii::t('app', 'Healthcare  Provider  Primary  Taxonomy  Switch 15'),
            'Other_Provider_Identifier_1' => Yii::t('app', 'Other  Provider  Identifier 1'),
            'Other_Provider_Identifier_Type_Code_1' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 1'),
            'Other_Provider_Identifier_State_1' => Yii::t('app', 'Other  Provider  Identifier  State 1'),
            'Other_Provider_Identifier_Issuer_1' => Yii::t('app', 'Other  Provider  Identifier  Issuer 1'),
            'Other_Provider_Identifier_2' => Yii::t('app', 'Other  Provider  Identifier 2'),
            'Other_Provider_Identifier_Type_Code_2' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 2'),
            'Other_Provider_Identifier_State_2' => Yii::t('app', 'Other  Provider  Identifier  State 2'),
            'Other_Provider_Identifier_Issuer_2' => Yii::t('app', 'Other  Provider  Identifier  Issuer 2'),
            'Other_Provider_Identifier_3' => Yii::t('app', 'Other  Provider  Identifier 3'),
            'Other_Provider_Identifier_Type_Code_3' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 3'),
            'Other_Provider_Identifier_State_3' => Yii::t('app', 'Other  Provider  Identifier  State 3'),
            'Other_Provider_Identifier_Issuer_3' => Yii::t('app', 'Other  Provider  Identifier  Issuer 3'),
            'Other_Provider_Identifier_4' => Yii::t('app', 'Other  Provider  Identifier 4'),
            'Other_Provider_Identifier_Type_Code_4' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 4'),
            'Other_Provider_Identifier_State_4' => Yii::t('app', 'Other  Provider  Identifier  State 4'),
            'Other_Provider_Identifier_Issuer_4' => Yii::t('app', 'Other  Provider  Identifier  Issuer 4'),
            'Other_Provider_Identifier_5' => Yii::t('app', 'Other  Provider  Identifier 5'),
            'Other_Provider_Identifier_Type_Code_5' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 5'),
            'Other_Provider_Identifier_State_5' => Yii::t('app', 'Other  Provider  Identifier  State 5'),
            'Other_Provider_Identifier_Issuer_5' => Yii::t('app', 'Other  Provider  Identifier  Issuer 5'),
            'Other_Provider_Identifier_6' => Yii::t('app', 'Other  Provider  Identifier 6'),
            'Other_Provider_Identifier_Type_Code_6' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 6'),
            'Other_Provider_Identifier_State_6' => Yii::t('app', 'Other  Provider  Identifier  State 6'),
            'Other_Provider_Identifier_Issuer_6' => Yii::t('app', 'Other  Provider  Identifier  Issuer 6'),
            'Other_Provider_Identifier_7' => Yii::t('app', 'Other  Provider  Identifier 7'),
            'Other_Provider_Identifier_Type_Code_7' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 7'),
            'Other_Provider_Identifier_State_7' => Yii::t('app', 'Other  Provider  Identifier  State 7'),
            'Other_Provider_Identifier_Issuer_7' => Yii::t('app', 'Other  Provider  Identifier  Issuer 7'),
            'Other_Provider_Identifier_8' => Yii::t('app', 'Other  Provider  Identifier 8'),
            'Other_Provider_Identifier_Type_Code_8' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 8'),
            'Other_Provider_Identifier_State_8' => Yii::t('app', 'Other  Provider  Identifier  State 8'),
            'Other_Provider_Identifier_Issuer_8' => Yii::t('app', 'Other  Provider  Identifier  Issuer 8'),
            'Other_Provider_Identifier_9' => Yii::t('app', 'Other  Provider  Identifier 9'),
            'Other_Provider_Identifier_Type_Code_9' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 9'),
            'Other_Provider_Identifier_State_9' => Yii::t('app', 'Other  Provider  Identifier  State 9'),
            'Other_Provider_Identifier_Issuer_9' => Yii::t('app', 'Other  Provider  Identifier  Issuer 9'),
            'Other_Provider_Identifier_10' => Yii::t('app', 'Other  Provider  Identifier 10'),
            'Other_Provider_Identifier_Type_Code_10' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 10'),
            'Other_Provider_Identifier_State_10' => Yii::t('app', 'Other  Provider  Identifier  State 10'),
            'Other_Provider_Identifier_Issuer_10' => Yii::t('app', 'Other  Provider  Identifier  Issuer 10'),
            'Other_Provider_Identifier_11' => Yii::t('app', 'Other  Provider  Identifier 11'),
            'Other_Provider_Identifier_Type_Code_11' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 11'),
            'Other_Provider_Identifier_State_11' => Yii::t('app', 'Other  Provider  Identifier  State 11'),
            'Other_Provider_Identifier_Issuer_11' => Yii::t('app', 'Other  Provider  Identifier  Issuer 11'),
            'Other_Provider_Identifier_12' => Yii::t('app', 'Other  Provider  Identifier 12'),
            'Other_Provider_Identifier_Type_Code_12' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 12'),
            'Other_Provider_Identifier_State_12' => Yii::t('app', 'Other  Provider  Identifier  State 12'),
            'Other_Provider_Identifier_Issuer_12' => Yii::t('app', 'Other  Provider  Identifier  Issuer 12'),
            'Other_Provider_Identifier_13' => Yii::t('app', 'Other  Provider  Identifier 13'),
            'Other_Provider_Identifier_Type_Code_13' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 13'),
            'Other_Provider_Identifier_State_13' => Yii::t('app', 'Other  Provider  Identifier  State 13'),
            'Other_Provider_Identifier_Issuer_13' => Yii::t('app', 'Other  Provider  Identifier  Issuer 13'),
            'Other_Provider_Identifier_14' => Yii::t('app', 'Other  Provider  Identifier 14'),
            'Other_Provider_Identifier_Type_Code_14' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 14'),
            'Other_Provider_Identifier_State_14' => Yii::t('app', 'Other  Provider  Identifier  State 14'),
            'Other_Provider_Identifier_Issuer_14' => Yii::t('app', 'Other  Provider  Identifier  Issuer 14'),
            'Other_Provider_Identifier_15' => Yii::t('app', 'Other  Provider  Identifier 15'),
            'Other_Provider_Identifier_Type_Code_15' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 15'),
            'Other_Provider_Identifier_State_15' => Yii::t('app', 'Other  Provider  Identifier  State 15'),
            'Other_Provider_Identifier_Issuer_15' => Yii::t('app', 'Other  Provider  Identifier  Issuer 15'),
            'Other_Provider_Identifier_16' => Yii::t('app', 'Other  Provider  Identifier 16'),
            'Other_Provider_Identifier_Type_Code_16' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 16'),
            'Other_Provider_Identifier_State_16' => Yii::t('app', 'Other  Provider  Identifier  State 16'),
            'Other_Provider_Identifier_Issuer_16' => Yii::t('app', 'Other  Provider  Identifier  Issuer 16'),
            'Other_Provider_Identifier_17' => Yii::t('app', 'Other  Provider  Identifier 17'),
            'Other_Provider_Identifier_Type_Code_17' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 17'),
            'Other_Provider_Identifier_State_17' => Yii::t('app', 'Other  Provider  Identifier  State 17'),
            'Other_Provider_Identifier_Issuer_17' => Yii::t('app', 'Other  Provider  Identifier  Issuer 17'),
            'Other_Provider_Identifier_18' => Yii::t('app', 'Other  Provider  Identifier 18'),
            'Other_Provider_Identifier_Type_Code_18' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 18'),
            'Other_Provider_Identifier_State_18' => Yii::t('app', 'Other  Provider  Identifier  State 18'),
            'Other_Provider_Identifier_Issuer_18' => Yii::t('app', 'Other  Provider  Identifier  Issuer 18'),
            'Other_Provider_Identifier_19' => Yii::t('app', 'Other  Provider  Identifier 19'),
            'Other_Provider_Identifier_Type_Code_19' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 19'),
            'Other_Provider_Identifier_State_19' => Yii::t('app', 'Other  Provider  Identifier  State 19'),
            'Other_Provider_Identifier_Issuer_19' => Yii::t('app', 'Other  Provider  Identifier  Issuer 19'),
            'Other_Provider_Identifier_20' => Yii::t('app', 'Other  Provider  Identifier 20'),
            'Other_Provider_Identifier_Type_Code_20' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 20'),
            'Other_Provider_Identifier_State_20' => Yii::t('app', 'Other  Provider  Identifier  State 20'),
            'Other_Provider_Identifier_Issuer_20' => Yii::t('app', 'Other  Provider  Identifier  Issuer 20'),
            'Other_Provider_Identifier_21' => Yii::t('app', 'Other  Provider  Identifier 21'),
            'Other_Provider_Identifier_Type_Code_21' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 21'),
            'Other_Provider_Identifier_State_21' => Yii::t('app', 'Other  Provider  Identifier  State 21'),
            'Other_Provider_Identifier_Issuer_21' => Yii::t('app', 'Other  Provider  Identifier  Issuer 21'),
            'Other_Provider_Identifier_22' => Yii::t('app', 'Other  Provider  Identifier 22'),
            'Other_Provider_Identifier_Type_Code_22' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 22'),
            'Other_Provider_Identifier_State_22' => Yii::t('app', 'Other  Provider  Identifier  State 22'),
            'Other_Provider_Identifier_Issuer_22' => Yii::t('app', 'Other  Provider  Identifier  Issuer 22'),
            'Other_Provider_Identifier_23' => Yii::t('app', 'Other  Provider  Identifier 23'),
            'Other_Provider_Identifier_Type_Code_23' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 23'),
            'Other_Provider_Identifier_State_23' => Yii::t('app', 'Other  Provider  Identifier  State 23'),
            'Other_Provider_Identifier_Issuer_23' => Yii::t('app', 'Other  Provider  Identifier  Issuer 23'),
            'Other_Provider_Identifier_24' => Yii::t('app', 'Other  Provider  Identifier 24'),
            'Other_Provider_Identifier_Type_Code_24' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 24'),
            'Other_Provider_Identifier_State_24' => Yii::t('app', 'Other  Provider  Identifier  State 24'),
            'Other_Provider_Identifier_Issuer_24' => Yii::t('app', 'Other  Provider  Identifier  Issuer 24'),
            'Other_Provider_Identifier_25' => Yii::t('app', 'Other  Provider  Identifier 25'),
            'Other_Provider_Identifier_Type_Code_25' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 25'),
            'Other_Provider_Identifier_State_25' => Yii::t('app', 'Other  Provider  Identifier  State 25'),
            'Other_Provider_Identifier_Issuer_25' => Yii::t('app', 'Other  Provider  Identifier  Issuer 25'),
            'Other_Provider_Identifier_26' => Yii::t('app', 'Other  Provider  Identifier 26'),
            'Other_Provider_Identifier_Type_Code_26' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 26'),
            'Other_Provider_Identifier_State_26' => Yii::t('app', 'Other  Provider  Identifier  State 26'),
            'Other_Provider_Identifier_Issuer_26' => Yii::t('app', 'Other  Provider  Identifier  Issuer 26'),
            'Other_Provider_Identifier_27' => Yii::t('app', 'Other  Provider  Identifier 27'),
            'Other_Provider_Identifier_Type_Code_27' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 27'),
            'Other_Provider_Identifier_State_27' => Yii::t('app', 'Other  Provider  Identifier  State 27'),
            'Other_Provider_Identifier_Issuer_27' => Yii::t('app', 'Other  Provider  Identifier  Issuer 27'),
            'Other_Provider_Identifier_28' => Yii::t('app', 'Other  Provider  Identifier 28'),
            'Other_Provider_Identifier_Type_Code_28' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 28'),
            'Other_Provider_Identifier_State_28' => Yii::t('app', 'Other  Provider  Identifier  State 28'),
            'Other_Provider_Identifier_Issuer_28' => Yii::t('app', 'Other  Provider  Identifier  Issuer 28'),
            'Other_Provider_Identifier_29' => Yii::t('app', 'Other  Provider  Identifier 29'),
            'Other_Provider_Identifier_Type_Code_29' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 29'),
            'Other_Provider_Identifier_State_29' => Yii::t('app', 'Other  Provider  Identifier  State 29'),
            'Other_Provider_Identifier_Issuer_29' => Yii::t('app', 'Other  Provider  Identifier  Issuer 29'),
            'Other_Provider_Identifier_30' => Yii::t('app', 'Other  Provider  Identifier 30'),
            'Other_Provider_Identifier_Type_Code_30' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 30'),
            'Other_Provider_Identifier_State_30' => Yii::t('app', 'Other  Provider  Identifier  State 30'),
            'Other_Provider_Identifier_Issuer_30' => Yii::t('app', 'Other  Provider  Identifier  Issuer 30'),
            'Other_Provider_Identifier_31' => Yii::t('app', 'Other  Provider  Identifier 31'),
            'Other_Provider_Identifier_Type_Code_31' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 31'),
            'Other_Provider_Identifier_State_31' => Yii::t('app', 'Other  Provider  Identifier  State 31'),
            'Other_Provider_Identifier_Issuer_31' => Yii::t('app', 'Other  Provider  Identifier  Issuer 31'),
            'Other_Provider_Identifier_32' => Yii::t('app', 'Other  Provider  Identifier 32'),
            'Other_Provider_Identifier_Type_Code_32' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 32'),
            'Other_Provider_Identifier_State_32' => Yii::t('app', 'Other  Provider  Identifier  State 32'),
            'Other_Provider_Identifier_Issuer_32' => Yii::t('app', 'Other  Provider  Identifier  Issuer 32'),
            'Other_Provider_Identifier_33' => Yii::t('app', 'Other  Provider  Identifier 33'),
            'Other_Provider_Identifier_Type_Code_33' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 33'),
            'Other_Provider_Identifier_State_33' => Yii::t('app', 'Other  Provider  Identifier  State 33'),
            'Other_Provider_Identifier_Issuer_33' => Yii::t('app', 'Other  Provider  Identifier  Issuer 33'),
            'Other_Provider_Identifier_34' => Yii::t('app', 'Other  Provider  Identifier 34'),
            'Other_Provider_Identifier_Type_Code_34' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 34'),
            'Other_Provider_Identifier_State_34' => Yii::t('app', 'Other  Provider  Identifier  State 34'),
            'Other_Provider_Identifier_Issuer_34' => Yii::t('app', 'Other  Provider  Identifier  Issuer 34'),
            'Other_Provider_Identifier_35' => Yii::t('app', 'Other  Provider  Identifier 35'),
            'Other_Provider_Identifier_Type_Code_35' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 35'),
            'Other_Provider_Identifier_State_35' => Yii::t('app', 'Other  Provider  Identifier  State 35'),
            'Other_Provider_Identifier_Issuer_35' => Yii::t('app', 'Other  Provider  Identifier  Issuer 35'),
            'Other_Provider_Identifier_36' => Yii::t('app', 'Other  Provider  Identifier 36'),
            'Other_Provider_Identifier_Type_Code_36' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 36'),
            'Other_Provider_Identifier_State_36' => Yii::t('app', 'Other  Provider  Identifier  State 36'),
            'Other_Provider_Identifier_Issuer_36' => Yii::t('app', 'Other  Provider  Identifier  Issuer 36'),
            'Other_Provider_Identifier_37' => Yii::t('app', 'Other  Provider  Identifier 37'),
            'Other_Provider_Identifier_Type_Code_37' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 37'),
            'Other_Provider_Identifier_State_37' => Yii::t('app', 'Other  Provider  Identifier  State 37'),
            'Other_Provider_Identifier_Issuer_37' => Yii::t('app', 'Other  Provider  Identifier  Issuer 37'),
            'Other_Provider_Identifier_38' => Yii::t('app', 'Other  Provider  Identifier 38'),
            'Other_Provider_Identifier_Type_Code_38' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 38'),
            'Other_Provider_Identifier_State_38' => Yii::t('app', 'Other  Provider  Identifier  State 38'),
            'Other_Provider_Identifier_Issuer_38' => Yii::t('app', 'Other  Provider  Identifier  Issuer 38'),
            'Other_Provider_Identifier_39' => Yii::t('app', 'Other  Provider  Identifier 39'),
            'Other_Provider_Identifier_Type_Code_39' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 39'),
            'Other_Provider_Identifier_State_39' => Yii::t('app', 'Other  Provider  Identifier  State 39'),
            'Other_Provider_Identifier_Issuer_39' => Yii::t('app', 'Other  Provider  Identifier  Issuer 39'),
            'Other_Provider_Identifier_40' => Yii::t('app', 'Other  Provider  Identifier 40'),
            'Other_Provider_Identifier_Type_Code_40' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 40'),
            'Other_Provider_Identifier_State_40' => Yii::t('app', 'Other  Provider  Identifier  State 40'),
            'Other_Provider_Identifier_Issuer_40' => Yii::t('app', 'Other  Provider  Identifier  Issuer 40'),
            'Other_Provider_Identifier_41' => Yii::t('app', 'Other  Provider  Identifier 41'),
            'Other_Provider_Identifier_Type_Code_41' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 41'),
            'Other_Provider_Identifier_State_41' => Yii::t('app', 'Other  Provider  Identifier  State 41'),
            'Other_Provider_Identifier_Issuer_41' => Yii::t('app', 'Other  Provider  Identifier  Issuer 41'),
            'Other_Provider_Identifier_42' => Yii::t('app', 'Other  Provider  Identifier 42'),
            'Other_Provider_Identifier_Type_Code_42' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 42'),
            'Other_Provider_Identifier_State_42' => Yii::t('app', 'Other  Provider  Identifier  State 42'),
            'Other_Provider_Identifier_Issuer_42' => Yii::t('app', 'Other  Provider  Identifier  Issuer 42'),
            'Other_Provider_Identifier_43' => Yii::t('app', 'Other  Provider  Identifier 43'),
            'Other_Provider_Identifier_Type_Code_43' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 43'),
            'Other_Provider_Identifier_State_43' => Yii::t('app', 'Other  Provider  Identifier  State 43'),
            'Other_Provider_Identifier_Issuer_43' => Yii::t('app', 'Other  Provider  Identifier  Issuer 43'),
            'Other_Provider_Identifier_44' => Yii::t('app', 'Other  Provider  Identifier 44'),
            'Other_Provider_Identifier_Type_Code_44' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 44'),
            'Other_Provider_Identifier_State_44' => Yii::t('app', 'Other  Provider  Identifier  State 44'),
            'Other_Provider_Identifier_Issuer_44' => Yii::t('app', 'Other  Provider  Identifier  Issuer 44'),
            'Other_Provider_Identifier_45' => Yii::t('app', 'Other  Provider  Identifier 45'),
            'Other_Provider_Identifier_Type_Code_45' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 45'),
            'Other_Provider_Identifier_State_45' => Yii::t('app', 'Other  Provider  Identifier  State 45'),
            'Other_Provider_Identifier_Issuer_45' => Yii::t('app', 'Other  Provider  Identifier  Issuer 45'),
            'Other_Provider_Identifier_46' => Yii::t('app', 'Other  Provider  Identifier 46'),
            'Other_Provider_Identifier_Type_Code_46' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 46'),
            'Other_Provider_Identifier_State_46' => Yii::t('app', 'Other  Provider  Identifier  State 46'),
            'Other_Provider_Identifier_Issuer_46' => Yii::t('app', 'Other  Provider  Identifier  Issuer 46'),
            'Other_Provider_Identifier_47' => Yii::t('app', 'Other  Provider  Identifier 47'),
            'Other_Provider_Identifier_Type_Code_47' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 47'),
            'Other_Provider_Identifier_State_47' => Yii::t('app', 'Other  Provider  Identifier  State 47'),
            'Other_Provider_Identifier_Issuer_47' => Yii::t('app', 'Other  Provider  Identifier  Issuer 47'),
            'Other_Provider_Identifier_48' => Yii::t('app', 'Other  Provider  Identifier 48'),
            'Other_Provider_Identifier_Type_Code_48' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 48'),
            'Other_Provider_Identifier_State_48' => Yii::t('app', 'Other  Provider  Identifier  State 48'),
            'Other_Provider_Identifier_Issuer_48' => Yii::t('app', 'Other  Provider  Identifier  Issuer 48'),
            'Other_Provider_Identifier_49' => Yii::t('app', 'Other  Provider  Identifier 49'),
            'Other_Provider_Identifier_Type_Code_49' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 49'),
            'Other_Provider_Identifier_State_49' => Yii::t('app', 'Other  Provider  Identifier  State 49'),
            'Other_Provider_Identifier_Issuer_49' => Yii::t('app', 'Other  Provider  Identifier  Issuer 49'),
            'Other_Provider_Identifier_50' => Yii::t('app', 'Other  Provider  Identifier 50'),
            'Other_Provider_Identifier_Type_Code_50' => Yii::t('app', 'Other  Provider  Identifier  Type  Code 50'),
            'Other_Provider_Identifier_State_50' => Yii::t('app', 'Other  Provider  Identifier  State 50'),
            'Other_Provider_Identifier_Issuer_50' => Yii::t('app', 'Other  Provider  Identifier  Issuer 50'),
            'Is_Sole_Proprietor' => Yii::t('app', 'Is  Sole  Proprietor'),
            'Is_Organization_Subpart' => Yii::t('app', 'Is  Organization  Subpart'),
            'Parent_Organization_LBN' => Yii::t('app', 'Parent  Organization  Lbn'),
            'Parent_Organization_TIN' => Yii::t('app', 'Parent  Organization  Tin'),
            'Authorized_Official_Name_Prefix' => Yii::t('app', 'Authorized  Official  Name  Prefix'),
            'Authorized_Official_Name_Suffix' => Yii::t('app', 'Authorized  Official  Name  Suffix'),
            'Authorized_Official_Credential' => Yii::t('app', 'Authorized  Official  Credential'),
            'Healthcare_Provider_Taxonomy_Group_1' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Group 1'),
            'Healthcare_Provider_Taxonomy_Group_2' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Group 2'),
            'Healthcare_Provider_Taxonomy_Group_3' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Group 3'),
            'Healthcare_Provider_Taxonomy_Group_4' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Group 4'),
            'Healthcare_Provider_Taxonomy_Group_5' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Group 5'),
            'Healthcare_Provider_Taxonomy_Group_6' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Group 6'),
            'Healthcare_Provider_Taxonomy_Group_7' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Group 7'),
            'Healthcare_Provider_Taxonomy_Group_8' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Group 8'),
            'Healthcare_Provider_Taxonomy_Group_9' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Group 9'),
            'Healthcare_Provider_Taxonomy_Group_10' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Group 10'),
            'Healthcare_Provider_Taxonomy_Group_11' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Group 11'),
            'Healthcare_Provider_Taxonomy_Group_12' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Group 12'),
            'Healthcare_Provider_Taxonomy_Group_13' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Group 13'),
            'Healthcare_Provider_Taxonomy_Group_14' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Group 14'),
            'Healthcare_Provider_Taxonomy_Group_15' => Yii::t('app', 'Healthcare  Provider  Taxonomy  Group 15'),
        ];
    }

     /**
     * @return \yii\db\ActiveQuery
     */
    public function getGeoloc()
    {
        return $this->hasOne(Geoloc::className(), ['NPI' => 'NPI']);
    }


     /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaxonomy()
    {
        return $this->hasOne(Taxonomy::className(), ['tax_code' => 'Healthcare_Provider_Taxonomy_Code_1']);
    }



     /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaxonomy2()
    {
        return $this->hasOne(Taxonomy::className(), ['tax_code' => 'Healthcare_Provider_Taxonomy_Code_2']);
    }

     /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaxonomy3()
    {
        return $this->hasOne(Taxonomy::className(), ['tax_code' => 'Healthcare_Provider_Taxonomy_Code_3']);
    }

     /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaxonomy4()
    {
        return $this->hasOne(Taxonomy::className(), ['tax_code' => 'Healthcare_Provider_Taxonomy_Code_4']);
    }

     /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaxonomy5()
    {
        return $this->hasOne(Taxonomy::className(), ['tax_code' => 'Healthcare_Provider_Taxonomy_Code_5']);
    }

     /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaxonomy6()
    {
        return $this->hasOne(Taxonomy::className(), ['tax_code' => 'Healthcare_Provider_Taxonomy_Code_6']);
    }

     /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaxonomy7()
    {
        return $this->hasOne(Taxonomy::className(), ['tax_code' => 'Healthcare_Provider_Taxonomy_Code_7']);
    }

     /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaxonomy8()
    {
        return $this->hasOne(Taxonomy::className(), ['tax_code' => 'Healthcare_Provider_Taxonomy_Code_8']);
    }

     /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaxonomy9()
    {
        return $this->hasOne(Taxonomy::className(), ['tax_code' => 'Healthcare_Provider_Taxonomy_Code_9']);
    }

     /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaxonomy10()
    {
        return $this->hasOne(Taxonomy::className(), ['tax_code' => 'Healthcare_Provider_Taxonomy_Code_10']);
    }

     /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaxonomy11()
    {
        return $this->hasOne(Taxonomy::className(), ['tax_code' => 'Healthcare_Provider_Taxonomy_Code_11']);
    }

     /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaxonomy12()
    {
        return $this->hasOne(Taxonomy::className(), ['tax_code' => 'Healthcare_Provider_Taxonomy_Code_12']);
    }

     /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaxonomy13()
    {
        return $this->hasOne(Taxonomy::className(), ['tax_code' => 'Healthcare_Provider_Taxonomy_Code_13']);
    }

     /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaxonomy14()
    {
        return $this->hasOne(Taxonomy::className(), ['tax_code' => 'Healthcare_Provider_Taxonomy_Code_14']);
    }
}
