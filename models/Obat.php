<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property int $id_obat
 * @property string $nama_obat
 * @property string $jenis_obat
 * @property string $no_sk
 * @property string $tgl_sk
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_obat', 'jenis_obat', 'no_sk', 'tgl_sk'], 'required'],
            [['tgl_sk'], 'safe'],
            [['nama_obat', 'jenis_obat', 'no_sk'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_obat' => 'Id Obat',
            'nama_obat' => 'Nama Obat',
            'jenis_obat' => 'Jenis Obat',
            'no_sk' => 'No SK',
            'tgl_sk' => 'Tanggal SK',
        ];
    }
}
