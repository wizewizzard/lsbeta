<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Model Params';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-param-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Model Param', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'system_name',
            'name',
            'required',
            'default_value',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>