<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pesanan".
 *
 * @property int $id
 * @property string $nama
 * @property string|null $tanggal
 * @property string|null $alamat
 * @property float|null $jarak
 * @property float|null $harga
 */
class Pesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['tanggal'], 'safe'],
            [['jarak', 'harga'], 'number'],
            [['nama', 'alamat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'tanggal' => 'Tanggal',
            'alamat' => 'Alamat',
            'jarak' => 'Jarak',
            'harga' => 'Harga',
        ];
    }

    public function getDistance()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://www.mapquestapi.com/directions/v2/route?key=GG9Q0qO9MQ0phAsdtFOGKZDAZfGEz0AB&from=RSUP+H.+Adam+Malik&to=Karya+Wisata&outFormat=json&ambiguities=ignore&routeType=fastest&doReverseGeocode=false&enhancedNarrative=false&avoidTimedConditions=false&unit=k',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }
}
