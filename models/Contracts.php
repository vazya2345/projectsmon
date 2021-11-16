<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contracts".
 *
 * @property int $id
 * @property int $project_id
 * @property string $title
 * @property string|null $desc
 * @property int|null $price
 * @property string|null $create_date
 * @property int|null $create_userid
 * @property string|null $file_url
 * @property int|null $status
 * @property string|null $deadline
 */
class Contracts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contracts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'title'], 'required'],
            [['project_id', 'price', 'create_userid', 'status'], 'integer'],
            [['desc'], 'string'],
            [['create_date', 'deadline'], 'safe'],
            [['title', 'file_url'], 'string', 'max' => 500],
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
            'desc' => 'Desc',
            'price' => 'Price',
            'create_date' => 'Create Date',
            'create_userid' => 'Create Userid',
            'file_url' => 'File Url',
            'status' => 'Status',
            'deadline' => 'Deadline',
        ];
    }
}
