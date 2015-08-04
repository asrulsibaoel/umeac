<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Classrooms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-12">
    <div class="grid simple ">

        <div class="grid-body no-border">
            <h3>Daftar  <span class="semi-bold">Kelas</span></h3>
            <div class="classroom-index">
                <p>
                    <?= Html::a('Tambah Kelas', ['create'], ['class' => 'btn btn-success']) ?>
                </p>

                <?php
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
//            'id',
                        'class_name',
                        'created_user_id',
                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]);
                ?>

            </div>
        </div>
    </div>
</div>
