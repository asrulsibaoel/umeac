<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nilai_detail".
 *
 * @property integer $id
 * @property integer $nilai_id
 * @property integer $kuis_id
 * @property integer $no_urut
 * @property string $jawaban
 * @property string $keterangan
 * @property integer $kuis_det_id
 */
class NilaiDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nilai_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nilai_id', 'kuis_id', 'no_urut', 'kuis_det_id'], 'integer'],
            [['no_urut'], 'required'],
            [['jawaban'], 'string', 'max' => 255],
            [['keterangan'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nilai_id' => 'Nilai ID',
            'kuis_id' => 'Kuis ID',
            'no_urut' => 'No Urut',
            'jawaban' => 'Jawaban',
            'keterangan' => 'Keterangan',
            'kuis_det_id' => 'Kuis Det ID',
        ];
    }
}
