<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kuis Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-12">
    <div class="grid simple ">

        <div class="grid-body no-border">
            <h3>Daftar  <span class="semi-bold">Kategori</span> Ujian</h3>
            <div class="kuis-category-index">


                <p>
                    <?= Html::a('Tambah Kategori', ['create'], ['class' => 'btn btn-success']) ?>
                </p>

                <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'kuis_category_name',
                'created_user_id',

                ['class' => 'yii\grid\ActionColumn'],
                ],
                ]); ?>

            </div>
        </div>
    </div>
</div>
