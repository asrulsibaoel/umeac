<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nilais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilai-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nilai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'course_id',
            'classroom_id',
            'ujian_id',
            'user_id',
            // 'kosong',
            // 'benar',
            // 'salah',
            // 'tgl_ujian',
            // 'type',
            // 'waktu_mulai',
            // 'waktu_selesai',
            // 'nilai_akhir',
            // 'is_finished',
            // 'image',
            // 'pembahasan:ntext',
            // 'kuis_remidi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
