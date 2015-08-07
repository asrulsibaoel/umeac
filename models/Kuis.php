<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kuis".
 *
 * @property integer $id
 * @property integer $kuis_category_id
 * @property integer $tutorial_id
 * @property string $kuis_name
 * @property string $description
 * @property string $alias
 * @property string $time
 * @property string $total
 * @property string $created
 * @property integer $created_user_id
 */
class Kuis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kuis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kuis_category_id', 'tutorial_id', 'created_user_id'], 'integer'],
            [['description'], 'string'],
            [['time', 'created'], 'safe'],
            [['kuis_name', 'alias'], 'string', 'max' => 255],
            [['total'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kuis_category_id' => 'Kuis Category ID',
            'tutorial_id' => 'Tutorial ID',
            'kuis_name' => 'Kuis Name',
            'description' => 'Description',
            'alias' => 'Alias',
            'time' => 'Time',
            'total' => 'Total',
            'created' => 'Created',
            'created_user_id' => 'Created User ID',
        ];
    }
}
