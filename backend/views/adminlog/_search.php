<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AdminLogSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-log-search">
    <div class="box-body">
        <div class="box-header">
            <div class="box-title">
                条件查询
            </div>
        </div>
        <?php $form = ActiveForm::begin([
            'action' => ['index'],
            'method' => 'get',
            'options' => [
                'class' => 'col-sm-12',
            ]
        ]); ?>

        <?= $form->field($model, 'route', ['options' => ['class' => 'col-sm-5']]) ?>

        <?= $form->field($model, 'created_at', ['options' => ['class' => 'col-sm-3']]) ?>

        <?= $form->field($model, 'user_id', ['options' => ['class' => 'col-sm-2']]) ?>

        <div class="form-group col-sm-2" style="padding-top: 25px;">
            <?= Html::submitButton('查询', ['class' => 'btn btn-primary col-xs-5']) ?>
            <?= Html::tag('span', '', ['class' => 'col-xs-1']) ?>
            <?= Html::resetButton('重置', ['class' => 'btn btn-default col-xs-5']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
