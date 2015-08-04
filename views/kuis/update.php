<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kuis */

$this->title = 'Update Kuis: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kuis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="page-title"> 
     <?= Html::a(' <i class="icon-custom-left"></i>', ['index']) ?>
      
    <h3>Form - <span class="semi-bold"><?= Html::encode($this->title) ?></span></h3>
</div>
<div class="kuis-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
