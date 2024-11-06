<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\search\CoodinacionSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="coodinacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'Fecha_creacion') ?>

    <?= $form->field($model, 'Fecha_actualizacion') ?>

    <?= $form->field($model, 'Fk_user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
