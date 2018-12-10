<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dashboard;

/**
 * DashboardSearch represents the model behind the search form about `app\models\Dashboard`.
 */
class DashboardSearch extends Dashboard
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'orden'], 'integer'],
            [['nombre', 'url', 'clase', 'status'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Dashboard::find();

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
            'orden' => $this->orden,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'clase', $this->clase])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
