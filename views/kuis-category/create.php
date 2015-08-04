<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\KuisCategory */

$this->title = 'Create Kuis Category';
$this->params['breadcrumbs'][] = ['label' => 'Kuis Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuis-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
