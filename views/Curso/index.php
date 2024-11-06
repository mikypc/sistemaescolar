<?php

use app\models\Curso;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\search\cursoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Cursos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curso-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Curso', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Nombre_Curso',
            'Codigo',
            'Fk_Foto_Portada',
            'Descripcion:ntext',
            //'Fecha_Inicia',
            //'Fecha_Termina',
            //'Horario',
            //'Modalidad',
            //'Capacidad',
            //'Lugar',
            //'Fk_categoria',
            //'Fecha_creacion',
            //'Fecha_actualizacion',
            //'Fk_user',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Curso $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>
