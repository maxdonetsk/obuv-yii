<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\UpperMaterialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Материалы верха';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="upper-material-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> Добавить материал верха', ['create'], ['class' => 'btn btn-success']) ?>
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
