<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\KuisCategory */

$this->title = 'Create Kuis Category';
$this->params['breadcrumbs'][] = ['label' => 'Kuis Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-title"> 
     <?= Html::a(' <i class="icon-custom-left"></i>', ['index']) ?>
      
    <h3>Form - <span class="semi-bold">Tambah Kategori Ujian</span></h3>
</div>
<div class="kuis-category-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
