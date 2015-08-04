<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KuisCategory */

$this->title = 'Update Kuis Category: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kuis Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="page-title"> 
     <?= Html::a(' <i class="icon-custom-left"></i>', ['index']) ?>
      
    <h3>Form - <span class="semi-bold"><?= Html::encode($this->title) ?></span></h3>
</div>
<div class="kuis-category-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
