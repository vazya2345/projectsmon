<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task_execution".
 *
 * @property int $id
 * @property int $task_id
 * @property int $user_id
 * @property string|null $create_date
 * @property int|null $create_userid
 * @property int|null $status
 * @property string|null $info
 * @property string|null $do_date
 * @property int|null $mark
 * @property string|null $rec_date
 * @property int|null $rec_userid
 */
class TaskExecution extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task_execution';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_id', 'user_id'], 'required'],
            [['task_id', 'user_id', 'create_userid', 'status', 'mark', 'rec_userid'], 'integer'],
            [['create_date', 'do_date', 'rec_date'], 'safe'],
            [['info'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'task_id' => 'Task ID',
            'user_id' => 'User ID',
            'create_date' => 'Create Date',
            'create_userid' => 'Create Userid',
            'status' => 'Status',
            'info' => 'Info',
            'do_date' => 'Do Date',
            'mark' => 'Mark',
            'rec_date' => 'Rec Date',
            'rec_userid' => 'Rec Userid',
        ];
    }
}
