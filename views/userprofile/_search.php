<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserprofileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userprofile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pid') ?>

    <?= $form->field($model, 'fname') ?>

    <?= $form->field($model, 'lname') ?>

    <?= $form->field($model, 'dob') ?>

    <?= $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'yearsOfExperience') ?>

    <?php // echo $form->field($model, 'industry') ?>

    <?php // echo $form->field($model, 'loc') ?>

    <?php // echo $form->field($model, 'aboutMe') ?>

    <?php // echo $form->field($model, 'picName') ?>

    <?php // echo $form->field($model, 'picture') ?>

    <?php // echo $form->field($model, 'professionalTitle') ?>

    <?php // echo $form->field($model, 'careerLevel') ?>

    <?php // echo $form->field($model, 'commLevel') ?>

    <?php // echo $form->field($model, 'OrgLevel') ?>

    <?php // echo $form->field($model, 'jobRelLevel') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
