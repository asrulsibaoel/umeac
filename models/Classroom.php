<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "classroom".
 *
 * @property integer $id
 * @property string $class_name
 * @property integer $created_user_id
 */
class Classroom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'classroom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_user_id'], 'integer'],
            [['class_name'], 'required'],
            [['class_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'class_name' => 'Class Name',
            'created_user_id' => 'Created User ID',
        ];
    }
}
