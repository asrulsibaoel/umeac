<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Kuis */

$this->title = $model->kuis_name;
$this->params['breadcrumbs'][] = ['label' => 'Kuis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-title"> 
     <?= Html::a(' <i class="icon-custom-left"></i>', ['index']) ?>
      
    <h3>Detail Kuis - <span class="semi-bold">  <?php echo $model->kuis_name ?></span></h3>
</div>
<div class="col-md-12">
    <div class="grid simple">

        <div class="grid-body no-border"> <br>
            <div class="row">
                <div class="kuis-form">

                    <?php $form = ActiveForm::begin(); ?>


                    <div class="form-group field-kuis-tutorial_id">
                        <label class="control-label" for="kuis-tutorial_id">Kategori Kuis</label>
                        <?php echo Html::activeDropDownList($model, 'kuis_category_id', ArrayHelper::map(\app\models\KuisCategory::find()->all(), 'id', 'kuis_category_name'), ['prompt' => 'Pilih Kategori Kuis'])
                        ?>

                        <div class="help-block"></div>
                    </div>


                    <?= $form->field($model, 'kuis_name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>



                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
