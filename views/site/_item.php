<?php

use yii\helpers\Html;

?>
<div class="col-md-4">
    <div class="panel panel-default">
        <div style="height: 56px;" class="panel-heading"><?= '<strong>' . Html::encode($model->name) . '</strong> (' . Html::encode($model->category->name) . ')' ?></div>
        <div style="height: 110px;"  class="panel-body">
            <?= Html::encode($model->description) ?>
        </div>
    </div>
</div>






