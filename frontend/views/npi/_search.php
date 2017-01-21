<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\NpiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="npi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'NPI') ?>

    <?= $form->field($model, 'Entity_Type_Code') ?>

    <?= $form->field($model, 'Replacement_NPI') ?>

    <?= $form->field($model, 'EIN') ?>

    <?= $form->field($model, 'Legal_Business_Name') ?>

    <?php // echo $form->field($model, 'Provider_Last_Name') ?>

    <?php // echo $form->field($model, 'Provider_First_Name') ?>

    <?php // echo $form->field($model, 'Provider_Middle_Name') ?>

    <?php // echo $form->field($model, 'Provider_Name_Prefix') ?>

    <?php // echo $form->field($model, 'Provider_Name_Suffix') ?>

    <?php // echo $form->field($model, 'Provider_Credential') ?>

    <?php // echo $form->field($model, 'Provider_Other_Organization_Name') ?>

    <?php // echo $form->field($model, 'Provider_Other_Organization_Type_Code') ?>

    <?php // echo $form->field($model, 'Provider_Other_Last_Name') ?>

    <?php // echo $form->field($model, 'Provider_Other_First_Name') ?>

    <?php // echo $form->field($model, 'Provider_Other_Middle_Name') ?>

    <?php // echo $form->field($model, 'Provider_Other_Name_Prefix') ?>

    <?php // echo $form->field($model, 'Provider_Other_Name_Suffix') ?>

    <?php // echo $form->field($model, 'Provider_Other_Credential') ?>

    <?php // echo $form->field($model, 'Provider_Other_Last_Name_Type_Code') ?>

    <?php // echo $form->field($model, 'Provider_First_Line_Business_Mailing_Address') ?>

    <?php // echo $form->field($model, 'Provider_Second_Line_Business_Mailing_Address') ?>

    <?php // echo $form->field($model, 'Provider_Business_Mailing_Address_City_Name') ?>

    <?php // echo $form->field($model, 'Provider_Business_Mailing_Address_State_Name') ?>

    <?php // echo $form->field($model, 'Provider_Business_Mailing_Address_Postal_Code') ?>

    <?php // echo $form->field($model, 'Provider_Business_Mailing_Address_Country_Code') ?>

    <?php // echo $form->field($model, 'Provider_Business_Mailing_Address_Telephone_Number') ?>

    <?php // echo $form->field($model, 'Provider_Business_Mailing_Address_Fax_Number') ?>

    <?php // echo $form->field($model, 'Provider_First_Line_Business_Practice_Location_Address') ?>

    <?php // echo $form->field($model, 'Provider_Second_Line_Business_Practice_Location_Address') ?>

    <?php // echo $form->field($model, 'Provider_Business_Practice_Location_Address_City_Name') ?>

    <?php // echo $form->field($model, 'Provider_Business_Practice_Location_Address_State_Name') ?>

    <?php // echo $form->field($model, 'Provider_Business_Practice_Location_Address_Postal_Code') ?>

    <?php // echo $form->field($model, 'Provider_Business_Practice_Location_Address_Country_Code') ?>

    <?php // echo $form->field($model, 'Provider_Business_Practice_Location_Address_Telephone_Number') ?>

    <?php // echo $form->field($model, 'Provider_Business_Practice_Location_Address_Fax_Number') ?>

    <?php // echo $form->field($model, 'Provider_Enumeration_Date') ?>

    <?php // echo $form->field($model, 'Last_Update_Date') ?>

    <?php // echo $form->field($model, 'NPI_Deactivation_ReasonCode') ?>

    <?php // echo $form->field($model, 'NPI_Deactivation_Date') ?>

    <?php // echo $form->field($model, 'NPI_Reactivation_Date') ?>

    <?php // echo $form->field($model, 'Provider_Gender_Code') ?>

    <?php // echo $form->field($model, 'Authorized_Official_Last_Name') ?>

    <?php // echo $form->field($model, 'Authorized_Official_First_Name') ?>

    <?php // echo $form->field($model, 'Authorized_Official_Middle_Name') ?>

    <?php // echo $form->field($model, 'Authorized_Official_Title_Position') ?>

    <?php // echo $form->field($model, 'Authorized_Official_Telephone_Number') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Code_1') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_1') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_State_Code_1') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_1') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Code_2') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_2') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_State_Code_2') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_2') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Code_3') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_3') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_State_Code_3') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_3') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Code_4') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_4') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_State_Code_4') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_4') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Code_5') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_5') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_State_Code_5') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_5') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Code_6') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_6') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_State_Code_6') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_6') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Code_7') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_7') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_State_Code_7') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_7') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Code_8') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_8') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_State_Code_8') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_8') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Code_9') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_9') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_State_Code_9') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_9') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Code_10') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_10') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_State_Code_10') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_10') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Code_11') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_11') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_State_Code_11') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_11') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Code_12') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_12') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_State_Code_12') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_12') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Code_13') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_13') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_State_Code_13') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_13') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Code_14') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_14') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_State_Code_14') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_14') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Code_15') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_15') ?>

    <?php // echo $form->field($model, 'Provider_License_Number_State_Code_15') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_15') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_1') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_1') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_1') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_1') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_2') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_2') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_2') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_2') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_3') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_3') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_3') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_3') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_4') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_4') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_4') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_4') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_5') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_5') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_5') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_5') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_6') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_6') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_6') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_6') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_7') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_7') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_7') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_7') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_8') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_8') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_8') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_8') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_9') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_9') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_9') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_9') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_10') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_10') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_10') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_10') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_11') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_11') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_11') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_11') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_12') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_12') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_12') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_12') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_13') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_13') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_13') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_13') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_14') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_14') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_14') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_14') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_15') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_15') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_15') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_15') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_16') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_16') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_16') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_16') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_17') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_17') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_17') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_17') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_18') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_18') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_18') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_18') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_19') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_19') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_19') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_19') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_20') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_20') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_20') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_20') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_21') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_21') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_21') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_21') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_22') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_22') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_22') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_22') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_23') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_23') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_23') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_23') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_24') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_24') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_24') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_24') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_25') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_25') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_25') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_25') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_26') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_26') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_26') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_26') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_27') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_27') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_27') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_27') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_28') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_28') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_28') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_28') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_29') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_29') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_29') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_29') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_30') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_30') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_30') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_30') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_31') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_31') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_31') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_31') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_32') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_32') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_32') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_32') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_33') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_33') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_33') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_33') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_34') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_34') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_34') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_34') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_35') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_35') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_35') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_35') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_36') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_36') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_36') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_36') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_37') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_37') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_37') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_37') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_38') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_38') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_38') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_38') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_39') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_39') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_39') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_39') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_40') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_40') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_40') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_40') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_41') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_41') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_41') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_41') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_42') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_42') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_42') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_42') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_43') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_43') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_43') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_43') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_44') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_44') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_44') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_44') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_45') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_45') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_45') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_45') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_46') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_46') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_46') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_46') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_47') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_47') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_47') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_47') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_48') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_48') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_48') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_48') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_49') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_49') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_49') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_49') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_50') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Type_Code_50') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_State_50') ?>

    <?php // echo $form->field($model, 'Other_Provider_Identifier_Issuer_50') ?>

    <?php // echo $form->field($model, 'Is_Sole_Proprietor') ?>

    <?php // echo $form->field($model, 'Is_Organization_Subpart') ?>

    <?php // echo $form->field($model, 'Parent_Organization_LBN') ?>

    <?php // echo $form->field($model, 'Parent_Organization_TIN') ?>

    <?php // echo $form->field($model, 'Authorized_Official_Name_Prefix') ?>

    <?php // echo $form->field($model, 'Authorized_Official_Name_Suffix') ?>

    <?php // echo $form->field($model, 'Authorized_Official_Credential') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Group_1') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Group_2') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Group_3') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Group_4') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Group_5') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Group_6') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Group_7') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Group_8') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Group_9') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Group_10') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Group_11') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Group_12') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Group_13') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Group_14') ?>

    <?php // echo $form->field($model, 'Healthcare_Provider_Taxonomy_Group_15') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
