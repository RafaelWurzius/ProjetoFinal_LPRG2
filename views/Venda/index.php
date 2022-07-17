<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Venda;
/* @var $this yii\web\View */
/* @var $searchModel app\models\VendaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vendas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="venda-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Venda', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'data',
            'idCliente',
            'idAlimento',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Venda $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
