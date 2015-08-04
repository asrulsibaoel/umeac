<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nilai".
 *
 * @property integer $id
 * @property integer $course_id
 * @property integer $classroom_id
 * @property integer $ujian_id
 * @property integer $user_id
 * @property string $kosong
 * @property string $benar
 * @property string $salah
 * @property string $tgl_ujian
 * @property string $type
 * @property string $waktu_mulai
 * @property string $waktu_selesai
 * @property double $nilai_akhir
 * @property integer $is_finished
 * @property string $image
 * @property string $pembahasan
 * @property string $kuis_remidi
 */
class Nilai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nilai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_id', 'classroom_id', 'ujian_id', 'user_id', 'is_finished'], 'integer'],
            [['tgl_ujian', 'waktu_mulai', 'waktu_selesai'], 'safe'],
            [['nilai_akhir'], 'number'],
            [['pembahasan'], 'string'],
            [['kuis_remidi'], 'required'],
            [['kosong', 'benar', 'salah'], 'string', 'max' => 45],
            [['type', 'image'], 'string', 'max' => 255],
            [['kuis_remidi'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_id' => 'Course ID',
            'classroom_id' => 'Classroom ID',
            'ujian_id' => 'Ujian ID',
            'user_id' => 'User ID',
            'kosong' => 'Kosong',
            'benar' => 'Benar',
            'salah' => 'Salah',
            'tgl_ujian' => 'Tgl Ujian',
            'type' => 'Type',
            'waktu_mulai' => 'Waktu Mulai',
            'waktu_selesai' => 'Waktu Selesai',
            'nilai_akhir' => 'Nilai Akhir',
            'is_finished' => 'Is Finished',
            'image' => 'Image',
            'pembahasan' => 'Pembahasan',
            'kuis_remidi' => 'Kuis Remidi',
        ];
    }
}
