<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Продукты';

if (isset($searchModel->category->name)) {
    $this->params['breadcrumbs'][] = ['label' => $this->title.' (все)', 'url' => '/product'];
    $this->params['breadcrumbs'][] = $searchModel->category->name;
} else {
    $this->params['breadcrumbs'][] = $this->title;
}
?>
<div class="product-index">
    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'category.name',
                'label' => 'Категория'],
            'name',
            'description:ntext',
            ['class' => \yii\grid\ActionColumn::class,
                'contentOptions' => ['style' => 'text-align: center'],
                'buttons' => [
                    'update' => function ($url, $model, $key) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"/>', ['update', 'id' => $key], ['title' => 'Изменить']);
                    },
                    'delete' => function ($url, $model, $key) {
                        return Html::a('<span class="glyphicon glyphicon-trash"/>', ['delete', 'id' => $key], ['title' => 'Удалить', 'data-method' => 'post', 'data-confirm' => 'Удалить запись?']);
                    },
                ],
                'template' => '{update} {delete}'
            ],
        ],

    ]); ?>
</div>
