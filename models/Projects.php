<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property int $id
 * @property string $title
 * @property string|null $desc
 * @property int|null $budget_sum
 * @property int|null $project_year
 * @property string|null $create_date
 * @property int|null $create_userid
 * @property int|null $status
 * @property string|null $deadline
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['desc'], 'string'],
            [['budget_sum', 'project_year', 'create_userid', 'status'], 'integer'],
            [['create_date', 'deadline'], 'safe'],
            [['title'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'desc' => 'Desc',
            'budget_sum' => 'Budget Sum',
            'project_year' => 'Project Year',
            'create_date' => 'Create Date',
            'create_userid' => 'Create Userid',
            'status' => 'Status',
            'deadline' => 'Deadline',
        ];
    }
}
