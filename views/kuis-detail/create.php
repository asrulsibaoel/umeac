<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\KuisDetail */

$this->title = 'Create Kuis Detail';
$this->params['breadcrumbs'][] = ['label' => 'Kuis Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuis-detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
