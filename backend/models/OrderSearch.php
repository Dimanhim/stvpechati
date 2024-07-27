<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Order;

/**
 * OrderSearch represents the model behind the search form of `common\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'price', 'is_active', 'deleted', 'position', 'created_at', 'updated_at', 'name', 'product', 'phone', 'email', 'utm_source', 'utm_campaign', 'utm_medium', 'utm_content', 'utm_term', 'comment'], 'safe'],
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
        $query = Order::find()->where(['is', \Yii::$app->db->tablePrefix . 'orders.deleted', null])->andWhere([\Yii::$app->db->tablePrefix . 'orders.is_active' => 1]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['id' => SORT_DESC]],
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
            'price' => $this->price,
            'is_active' => $this->is_active,
            'deleted' => $this->deleted,
            'position' => $this->position,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'product', $this->product])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'utm_source', $this->utm_source])
            ->andFilterWhere(['like', 'utm_campaign', $this->utm_campaign])
            ->andFilterWhere(['like', 'utm_medium', $this->utm_medium])
            ->andFilterWhere(['like', 'utm_content', $this->utm_content])
            ->andFilterWhere(['like', 'utm_term', $this->utm_term])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
