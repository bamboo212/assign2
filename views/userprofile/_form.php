<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Userprofile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userprofile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dob')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yearsOfExperience')->textInput() ?>

    <?= $form->field($model, 'industry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aboutMe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'picName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'picture')->textInput() ?>

    <?= $form->field($model, 'professionalTitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'careerLevel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'commLevel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OrgLevel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jobRelLevel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
