<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\YiiUser */

$this->title = "用户列表";
$this->params['breadcrumbs'][] = ['label' => '管理首页', 'url' => ['/province-admin/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="companylist-view">
 <div class = "row">
 <div class="col-lg-3 col-md-3">
    <?= $this->render('@app/views/layouts/admin_user/system_province_admin_left_menu') ?>
 </div>
 <div class="col-lg-9 col-md-9">
 <?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-warning alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <?= Yii::$app->session->getFlash('error') ?>
    </div>
    <?php endif; ?>
 <?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <?= Yii::$app->session->getFlash('success') ?>
    </div>
    <?php endif; ?>
    <div class="panel panel-default">
    <div class="panel-heading"><span class="glyphicon glyphicon-book"></span> <?= Html::encode($this->title) ?></div>
    <div class="panel-body"> 
  <?php $form = ActiveForm::begin([
        'id' => 'list-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\CheckboxColumn'],
            'user_id',
            //'twork_content',
            [
               'attribute'=>'userDetailLink', 'format'=>'raw' 
            ],
            //'user_nickname',
            [
               'attribute'=>'confirmLink', 'format'=>'raw' 
            ],
        ],
    ]); ?>
    <?=Html::submitButton('确认选中项', ['class' => 'btn btn-primary',]);?>
    <?php ActiveForm::end(); ?>
    </div>
    </div>
 </div>
 </div>
</div>
