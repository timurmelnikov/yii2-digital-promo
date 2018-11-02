<?php

use timurmelnikov\widgets\LoadingOverlayPjax;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

$this->title = 'Главная';
LoadingOverlayPjax::begin();
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php
                if ($currentCategory) echo Html::a('<span class="label label-danger">Все категории</span> ', Url::to('/site'), ['style' => 'text-decoration: none']);
                foreach ($categoryModel as $value) {
                    $labelType = $currentCategory != $value->id ? 'label-primary' : 'label-success';
                    echo Html::a('<span class="label '
                        . $labelType
                        . '">'
                        . $value->name
                        . '</span> ', Url::to(['/site', 'ProductSearch[category_id]' => $value->id]), ['style' => 'text-decoration: none']);
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_item',
        'layout' => '{items}<div class="col-md-12">{pager}</div>',
        'emptyText' => false,
    ]);
    LoadingOverlayPjax::end();
    ?>
</div>






