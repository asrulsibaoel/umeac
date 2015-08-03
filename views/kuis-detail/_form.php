<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KuisDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kuis-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kuis_id')->textInput() ?>

    <?= $form->field($model, 'kuis_number')->textInput() ?>

    <?= $form->field($model, 'question')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'option_a')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_a')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'option_b')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_b')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'option_c')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_c')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'option_d')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_d')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'option_e')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_e')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'correct')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
