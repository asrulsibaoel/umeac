<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kuis_detail".
 *
 * @property integer $id
 * @property integer $kuis_id
 * @property integer $kuis_number
 * @property string $question
 * @property string $option_a
 * @property string $type_a
 * @property string $option_b
 * @property string $type_b
 * @property string $option_c
 * @property string $type_c
 * @property string $option_d
 * @property string $type_d
 * @property string $option_e
 * @property string $type_e
 * @property string $correct
 */
class KuisDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kuis_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kuis_id', 'kuis_number'], 'integer'],
            [['question'], 'string'],
            [['option_a', 'option_b', 'option_c', 'option_d', 'option_e'], 'string', 'max' => 255],
            [['type_a'], 'string', 'max' => 25],
            [['type_b', 'type_c', 'type_d', 'type_e'], 'string', 'max' => 100],
            [['correct'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kuis_id' => 'Kuis ID',
            'kuis_number' => 'Kuis Number',
            'question' => 'Question',
            'option_a' => 'Option A',
            'type_a' => 'Type A',
            'option_b' => 'Option B',
            'type_b' => 'Type B',
            'option_c' => 'Option C',
            'type_c' => 'Type C',
            'option_d' => 'Option D',
            'type_d' => 'Type D',
            'option_e' => 'Option E',
            'type_e' => 'Type E',
            'correct' => 'Correct',
        ];
    }
}
