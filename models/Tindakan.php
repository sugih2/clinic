<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tindakan".
 *
 * @property int $id_tindakan
 * @property string $nama_tindakan
 * @property string $kategori_tindakan
 * @property int $tarif_tindakan
 */
class Tindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_tindakan', 'kategori_tindakan', 'tarif_tindakan'], 'required'],
            [['tarif_tindakan'], 'integer'],
            [['nama_tindakan', 'kategori_tindakan'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tindakan' => 'Id Tindakan',
            'nama_tindakan' => 'Nama Tindakan',
            'kategori_tindakan' => 'Kategori Tindakan',
            'tarif_tindakan' => 'Tarif Tindakan',
        ];
    }
}
