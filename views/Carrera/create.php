<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Carrera $model */

$this->title = 'Nueva Carrera';
$this->params['breadcrumbs'][] = ['label' => 'Carreras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container-fluid">
	
	<div class="card mb-4 text-left">
		<div class="card-header">
			<i class="fas fa-table me-1"></i>
			<?= $this->title ?>
		</div>
		<div class="card-body">


<div class="carrera-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
	</div>
	</div>
