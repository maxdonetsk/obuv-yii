<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\BrandSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Торговые марки';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="oc-content">
  <div class="container-fluid oc-margin">
    <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12">

	<div class="row">
	  <div class="col-xs-12">
	    <div class="oc-ware-div">
	      <h1><?= Html::encode($this->title) ?></h1>
	      <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	      <p>
		<?= Html::a('<span class="glyphicon glyphicon-plus"></span> Добавить торговую марку', ['create'], ['class' => 'btn btn-success']) ?>
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
		      [
			  'attribute' => 'id',
			  'headerOptions' => ['width' => '60px']
		      ],
		      'name',
		      'logo',
		      'country_name',
		      'country_code',
		      'position',
		      'description:ntext',
		      ['class' => 'yii\grid\ActionColumn',
			  'headerOptions' => ['width' => '65px']],
		  ],
	      ]);
	      ?>
	    </div>
	  </div>
	</div>

      </div>
    </div>
  </div>
</section>
