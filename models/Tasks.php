<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property int $id
 * @property int $project_id
 * @property string $title
 * @property int|null $price
 * @property string $deadline
 * @property string|null $create_date
 * @property int|null $create_userid
 * @property int|null $status
 */
class Tasks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'title', 'deadline'], 'required'],
            [['project_id', 'price', 'create_userid', 'status'], 'integer'],
            [['title'], 'string'],
            [['deadline', 'create_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_id' => 'Project ID',
            'title' => 'Title',
            'price' => 'Price',
            'deadline' => 'Deadline',
            'create_date' => 'Create Date',
            'create_userid' => 'Create Userid',
            'status' => 'Status',
        ];
    }
}
