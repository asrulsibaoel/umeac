<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kuis Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuis-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kuis Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kuis_id',
            'kuis_number',
            'question:ntext',
            'option_a',
            // 'type_a',
            // 'option_b',
            // 'type_b',
            // 'option_c',
            // 'type_c',
            // 'option_d',
            // 'type_d',
            // 'option_e',
            // 'type_e',
            // 'correct',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
