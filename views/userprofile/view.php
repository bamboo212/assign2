<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Userprofile */

$this->title = $model->pid;
$this->params['breadcrumbs'][] = ['label' => 'Userprofiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userprofile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pid',
            'fname',
            'lname',
            'dob',
            'gender',
            'yearsOfExperience',
            'industry',
            'loc',
            'aboutMe',
            'picName',
            'picture',
            'professionalTitle',
            'careerLevel',
            'commLevel',
            'OrgLevel',
            'jobRelLevel',
            'address',
            'phone',
            'website',
            'email:email',
        ],
    ]) ?>

</div>
