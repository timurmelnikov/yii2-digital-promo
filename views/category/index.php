<?php

use app\models\Product;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'name',
                'value' => function ($data) {
                    $productCount = Product::find()->where(['category_id' => $data->id])->count();
                    if ($productCount > 0) {
                        return Html::a($data->name . ' <span class="badge">' . $productCount . '</span>', Url::to(['/product', 'ProductSearch[category_id]' => $data->id]));
                    }
                    return $data->name;
                },
                'format' => 'raw',
            ],

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
