<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Ware;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\WareSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="oc-content" id="admin-ware-form">
  <div class="container-fluid oc-margin">
    <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12">

	<div class="row">
	  <div class="col-xs-12">
	    <div class="oc-ware-div">
	      <h1><?= Html::encode($this->title) ?></h1>
	      <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	      <p>
		<?= Html::a('<span class="glyphicon glyphicon-plus"></span> Добавить товар', ['create'], ['class' => 'btn btn-success']) ?>
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
//            'id',
		      'position' => [
			  'attribute'=>'position',
			  'headerOptions' => ['width' => '65px'],
		      ],
		      'brand' => [
			  'attribute' => 'brand',
			  'format' => 'html',
			  'value' => function ($model) {
			    return $model->_brand->name;
			  },
			  'filter' => false,
		      ],
		      'code',
//            'sex' => [
//                'attribute' => 'sex',
//                'format' => 'html',
//                'value' => function ($model) {
//                    return $model->getSex()[$model->sex];
//                },
//                'filter' => Ware::getSex(),
//            ],
		      'saison' => [
			  'attribute' => 'saison',
			  'format' => 'html',
			  'value' => function ($model) {
			    return $model->getSaison()[$model->saison];
			  },
			  'filter' => Ware::getSaison(),
		      ],
//            'type' => [
//                'attribute' => 'type',
//                'format' => 'html',
//                'value' => function ($model) {
//                    return $model->_type->name;
//                },
//                'filter' => false,
//            ],
//            'wideness' => [
//                'attribute' => 'wideness',
//                'format' => 'html',
//                'value' => function ($model) {
//                    return $model->_wideness->name;
//                },
//                'filter' => false,
//            ],
//            'upper' => [
//                'attribute' => 'upper',
//                'format' => 'html',
//                'value' => function ($model) {
//                    return $model->_upper->name;
//                },
//                'filter' => false,
//            ],
//            'lining' => [
//                'attribute' => 'lining',
//                'format' => 'html',
//                'value' => function ($model) {
//                    return $model->_lining->name;
//                },
//                'filter' => false,
//            ],
//            'sole' => [
//                'attribute' => 'sole',
//                'format' => 'html',
//                'value' => function ($model) {
//                    return $model->_sole->name;
//                },
//                'filter' => false,
//            ],
//             'heel_height',
//            'color' => [
//                'attribute' => 'color',
//                'format' => 'html',
//                'value' => function ($model) {
//                    return $model->_color->name;
//                },
//                'filter' => false,
//            ],
		      'category' => [
			  'attribute' => 'category',
			  'format' => 'html',
			  'value' => function ($model) {
			    return $model->getCategory()[$model->category];
			  },
			  'filter' => Ware::getCategory(),
		      ],
		      'init_price',
		      'new_price',
//            'waterproofness' => [
//                'attribute' => 'waterproofness',
//                'format' => 'html',
//                'value' => function ($model) {
//                    return $model->getWaterproofness()[$model->waterproofness];
//                },
//                'filter' => Ware::getWaterproofness(),
//            ],
		      'status' => [
			  'attribute' => 'status',
			  'format' => 'html',
			  'value' => function ($model) {
			    return $model->getStatus()[$model->status];
			  },
			  'filter' => Ware::getStatus(),
		      ],
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
