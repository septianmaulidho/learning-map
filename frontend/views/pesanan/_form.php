<?php

use kartik\number\NumberControl;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Pesanan */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'SSSS';

$this->registerJsFile(
    'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

$this->registerJsFile(
    'https://api.mqcdn.com/sdk/place-search-js/v1.0.0/place-search.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

$this->registerJsFile(
    'https://www.mapquestapi.com/sdk/leaflet/v2.s/mq-map.js?key=GG9Q0qO9MQ0phAsdtFOGKZDAZfGEz0AB',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

$this->registerJsFile(
    'https://www.mapquestapi.com/sdk/leaflet/v2.s/mq-routing.js?key=GG9Q0qO9MQ0phAsdtFOGKZDAZfGEz0AB',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

$this->registerJsFile(
    "@web/js/index.js",
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

$this->registerJsFile(
    "@web/js/seachLoc.js",
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

?>

<div class="jumbotron">
    <h2>Isikan data pemesanan anda!</h2>
</div>

<div class="row">
    <div class="col-lg-8">
        <input type="search" id="place-search-input" placeholder="Start Searching..." />
        <div style="height: 500px;" id="mapid"></div>
        <button type="button" onclick="getDistanceByCoordinat()" class="btn btn-success">Pilih Lokasi Saat Ini
        </button>
    </div>
    <div class="col-lg-4">
        <div class="pesanan-form" id="form-pesanan">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>
            <button type="button" onclick="searchLocation()" class="btn btn-success">Pilih Lokasi
            </button>

            <?= $form->field($model, 'jarak')->widget(NumberControl::classname(), [
                'readonly' => true,
                'value' => null,
                'id' => 'jarak',
                'maskedInputOptions' => [
                    'suffix' => ' Km',
                    'groupSeparator' => '.',
                    'radixPoint' => ',',
                    'rightAlign' => false
                ],
            ]); ?>

            <?= $form->field($model, 'harga')->widget(NumberControl::classname(), [
                'readonly' => true,
                'id' => 'harga',
                'value' => null,
                'maskedInputOptions' => [
                    'prefix' => 'Rp ',
                    'groupSeparator' => '.',
                    'radixPoint' => ',',
                    'rightAlign' => false
                ],
            ]); ?>


            <?php if (!Yii::$app->request->isAjax) { ?>
                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>
            <?php } ?>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>