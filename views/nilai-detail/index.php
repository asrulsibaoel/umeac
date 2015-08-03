<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nilai Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilai-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nilai Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nilai_id',
            'kuis_id',
            'no_urut',
            'jawaban',
            // 'keterangan',
            // 'kuis_det_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
