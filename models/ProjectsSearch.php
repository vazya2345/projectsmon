<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Projects;

/**
 * ProjectsSearch represents the model behind the search form of `app\models\Projects`.
 */
class ProjectsSearch extends Projects
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'budget_sum', 'project_year', 'create_userid', 'status'], 'integer'],
            [['title', 'desc', 'create_date', 'deadline'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Projects::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'budget_sum' => $this->budget_sum,
            'project_year' => $this->project_year,
            'create_date' => $this->create_date,
            'create_userid' => $this->create_userid,
            'status' => $this->status,
            'deadline' => $this->deadline,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'desc', $this->desc]);

        return $dataProvider;
    }
}
