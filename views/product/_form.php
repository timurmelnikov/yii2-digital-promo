<?php

use app\models\Category;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \kartik\select2\Select2;
use \yii\helpers\Url;
use \yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">
    <?php
    $categoryName = empty($model->category_id) ? '' : Category::findOne($model->category_id)->name;
    $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'category_id')->widget(Select2::class, [
        'initValueText' => $categoryName,
        'options' => ['placeholder' => 'Выберите категорию...'],
        'pluginOptions' => [
            'allowClear' => true,
            'minimumInputLength' => 2,

            'ajax' => [
                'url' => Url::to(['category/get-category']),
                'dataType' => 'json',
                'data' => new JsExpression('function(params) { return {name:params.term}; }')
            ],
            'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
            'templateResult' => new JsExpression('function (category) { return category.text; }'),
            'templateSelection' => new JsExpression('function (category) { return category.text; }'),
        ],

    ]) ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
