<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\HeelHeightSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Высоты каблуков';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="heel-height-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> Добавить высоту каблука', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => [
            'class' => 'table table-striped table-condensed table-hover'
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name',
            'position',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
