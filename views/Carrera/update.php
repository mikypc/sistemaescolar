<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Carrera $model */

$this->title = 'Actualizando Carrera: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'carreras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="container-fluid">
	
	<div class="card mb-4 text-left">
		<div class="card-header">
			<i class="fas fa-table me-1"></i>
			<?= $this->title ?>
		</div>
		<div class="card-body">

<div class="carrera-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
		</div>
		</div>