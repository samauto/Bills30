<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Npi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="npi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NPI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Entity_Type_Code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Replacement_NPI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EIN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Legal_Business_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Last_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_First_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Middle_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Name_Prefix')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Name_Suffix')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Credential')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Other_Organization_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Other_Organization_Type_Code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Other_Last_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Other_First_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Other_Middle_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Other_Name_Prefix')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Other_Name_Suffix')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Other_Credential')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Other_Last_Name_Type_Code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_First_Line_Business_Mailing_Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Second_Line_Business_Mailing_Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Business_Mailing_Address_City_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Business_Mailing_Address_State_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Business_Mailing_Address_Postal_Code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Business_Mailing_Address_Country_Code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Business_Mailing_Address_Telephone_Number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Business_Mailing_Address_Fax_Number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_First_Line_Business_Practice_Location_Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Second_Line_Business_Practice_Location_Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Business_Practice_Location_Address_City_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Business_Practice_Location_Address_State_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Business_Practice_Location_Address_Postal_Code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Business_Practice_Location_Address_Country_Code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Business_Practice_Location_Address_Telephone_Number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Business_Practice_Location_Address_Fax_Number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Enumeration_Date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Last_Update_Date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NPI_Deactivation_ReasonCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NPI_Deactivation_Date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NPI_Reactivation_Date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Gender_Code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Authorized_Official_Last_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Authorized_Official_First_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Authorized_Official_Middle_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Authorized_Official_Title_Position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Authorized_Official_Telephone_Number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Code_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_State_Code_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Code_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_State_Code_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Code_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_State_Code_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Code_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_State_Code_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Code_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_State_Code_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Code_6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_State_Code_6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Code_7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_State_Code_7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Code_8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_State_Code_8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Code_9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_State_Code_9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Code_10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_State_Code_10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Code_11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_State_Code_11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Code_12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_State_Code_12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Code_13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_State_Code_13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Code_14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_State_Code_14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Code_15')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_15')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_License_Number_State_Code_15')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Primary_Taxonomy_Switch_15')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_15')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_15')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_15')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_15')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_16')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_16')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_16')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_16')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_17')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_17')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_17')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_17')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_18')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_18')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_18')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_18')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_19')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_19')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_19')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_19')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_20')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_20')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_20')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_20')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_21')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_21')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_21')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_21')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_22')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_22')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_22')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_22')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_23')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_23')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_23')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_23')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_24')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_24')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_24')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_24')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_25')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_25')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_25')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_25')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_26')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_26')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_26')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_26')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_27')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_27')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_27')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_27')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_28')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_28')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_28')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_28')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_29')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_29')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_29')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_29')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_30')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_30')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_30')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_30')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_31')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_31')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_31')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_31')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_32')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_32')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_32')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_32')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_33')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_33')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_33')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_33')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_34')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_34')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_34')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_34')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_35')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_35')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_35')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_35')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_36')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_36')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_36')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_36')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_37')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_37')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_37')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_37')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_38')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_38')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_38')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_38')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_39')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_39')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_39')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_39')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_40')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_40')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_40')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_40')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_41')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_41')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_41')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_41')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_42')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_42')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_42')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_42')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_43')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_43')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_43')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_43')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_44')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_44')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_44')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_44')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_45')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_45')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_45')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_45')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_46')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_46')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_46')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_46')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_47')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_47')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_47')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_47')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_48')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_48')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_48')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_48')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_49')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_49')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_49')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_49')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_50')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Type_Code_50')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_State_50')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Other_Provider_Identifier_Issuer_50')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Is_Sole_Proprietor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Is_Organization_Subpart')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Parent_Organization_LBN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Parent_Organization_TIN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Authorized_Official_Name_Prefix')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Authorized_Official_Name_Suffix')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Authorized_Official_Credential')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Group_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Group_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Group_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Group_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Group_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Group_6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Group_7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Group_8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Group_9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Group_10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Group_11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Group_12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Group_13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Group_14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Healthcare_Provider_Taxonomy_Group_15')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
