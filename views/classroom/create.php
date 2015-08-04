<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Classroom */

$this->title = 'Tambah Kelas';
$this->params['breadcrumbs'][] = ['label' => 'Classrooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-title"> 
     <?= Html::a(' <i class="icon-custom-left"></i>', ['index']) ?>
      
    <h3>Form - <span class="semi-bold">Tambah User</span></h3>
</div>
<div class="classroom-create">


    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
