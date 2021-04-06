<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Pesanan */
?>
<div class="pesanan-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
            'tanggal',
            'alamat',
            'jarak',
            'harga',
        ],
    ]) ?>

</div>
