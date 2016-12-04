<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentsHomework */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-homework-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'students_id')->textInput() ?>

    <?= $form->field($model, 'homework_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
