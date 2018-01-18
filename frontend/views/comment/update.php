<?php  
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$status = '';
$form = ActiveForm::begin();
echo $form->field($model,'nama');
echo $form->field($model,'alamat')->textarea();
echo $form->field($model,'no_hp');
echo $form->field($model, 'status')->dropDownList(['buka' => 'BUKA', 'tutup' => 'TUTUP']);
echo Html::submitButton('simpan',['class'=>'btn btn-primary']);
ActiveForm::end();
?>