<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LiningMaterial */

$this->title = 'Добавить материал подкладки';
$this->params['breadcrumbs'][] = ['label' => 'Lining Materials', 'url' => ['index']];
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

	      <?=
	      $this->render('_form', [
		  'model' => $model,
	      ])
	      ?>
	    </div>
	  </div>
	</div>

      </div>
    </div>
  </div>
</section>