<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KuisCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-md-12">
    <div class="grid simple">

        <div class="grid-body no-border"> <br>
            <div class="row">
                <div class="kuis-category-form">

                    <?php $form = ActiveForm::begin(); ?>


                    <?= $form->field($model, 'kuis_category_name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'created_user_id')->textInput() ?>

                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? 'Tambah' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
