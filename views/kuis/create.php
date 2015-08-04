<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Kuis */

$this->title = 'Tambah Kuis';
$this->params['breadcrumbs'][] = ['label' => 'Kuis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-title"> 
     <?= Html::a(' <i class="icon-custom-left"></i>', ['index']) ?>
      
    <h3>Form - <span class="semi-bold">Tambah Kuis</span></h3>
</div>
<div class="kuis-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
