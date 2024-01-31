<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property int $nip
 * @property string $nama_lengkap
 * @property string $tmp_tgl
 * @property string $jenis_kelamin
 * @property string $alamat
 * @property string $profesi
 * @property string $status
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama_lengkap', 'tmp_tgl', 'jenis_kelamin', 'alamat', 'profesi', 'status'], 'required'],
            [['nip'], 'integer'],
            [['nama_lengkap', 'tmp_tgl', 'jenis_kelamin', 'alamat', 'profesi', 'status'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nip' => 'NIP',
            'nama_lengkap' => 'Nama Lengkap',
            'tmp_tgl' => 'Tempat Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'profesi' => 'Profesi',
            'status' => 'Status',
        ];
    }
}
