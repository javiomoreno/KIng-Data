<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TiposProductos;

/**
 * TiposProductosSearch represents the model behind the search form about `app\models\TiposProductos`.
 */
class TiposProductosSearch extends TiposProductos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TipoProductoID'], 'integer'],
            [['TipoProductoNombre'], 'safe'],
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
        $query = TiposProductos::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'TipoProductoID' => $this->TipoProductoID,
        ]);

        $query->andFilterWhere(['like', 'TipoProductoNombre', $this->TipoProductoNombre]);

        return $dataProvider;
    }
}
