<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DevShemas */

$this->title = 'Create Dev Shemas';
$this->params['breadcrumbs'][] = ['label' => 'Dev Shemas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dev-shemas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
