<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\YiiUser */

$this->title = '更新负责人类型';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-user-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="yii-user-form">

    <?php $form = ActiveForm::begin([
            'options' => ['class' => 'form-horizontal'],
            'fieldConfig' => [
            'template' => "{label}<div class=\"col-lg-2 col-md-3\">{input}</div>\n<div class=\"col-lg-8 col-md-7\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 col-md-2 control-label'],
            ],
    ]); ?>
    <?= $form->field($model, 'type_name')->textInput(['maxlength' => true])?>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('更新',  ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete-company-manager-type', 'id' => $model->type_id], ['class'=>'btn btn-warning']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>

</div>
