<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kuis_category".
 *
 * @property integer $id
 * @property string $tutorial_id
 * @property string $kuis_category_name
 * @property integer $created_user_id
 */
class KuisCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kuis_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_user_id'], 'integer'],
            [['tutorial_id', 'kuis_category_name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tutorial_id' => 'Tutorial ID',
            'kuis_category_name' => 'Kuis Category Name',
            'created_user_id' => 'Created User ID',
        ];
    }
}
