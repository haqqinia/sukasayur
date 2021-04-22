<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property int $id_syr
 * @property string $nama_syr
 * @property int $harga
 * @property int $jumlah
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_syr', 'harga', 'jumlah'], 'required'],
            [['harga', 'jumlah'], 'integer'],
            [['nama_syr'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_syr' => 'Id Syr',
            'nama_syr' => 'Nama Syr',
            'harga' => 'Harga',
            'jumlah' => 'Jumlah',
        ];
    }
}
