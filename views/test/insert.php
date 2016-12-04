<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 03.12.16
 * Time: 23:13
 */

use yii\base\Model;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<?php
$this->title = 'Create';
$form = ActiveForm::begin([
    'id' => 'form',
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
    ],
]); ?>

<?= $form->field($data, 'student_name')->textInput(['autofocus' => true]) ?>

<?= $form->field($data, 'department_id')->textInput() ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>