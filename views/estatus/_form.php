<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Estatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estatus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'estatus')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
