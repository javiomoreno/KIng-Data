<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OrdenesProductos;

/**
 * OrdenesProductosSearch represents the model behind the search form about `app\models\OrdenesProductos`.
 */
class OrdenesProductosSearch extends OrdenesProductos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OrdenID', 'ProductoID', 'CantidadProducto'], 'integer'],
            [['TotalPrecio'], 'number'],
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
        $query = OrdenesProductos::find();

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
            'OrdenID' => $this->OrdenID,
            'ProductoID' => $this->ProductoID,
            'CantidadProducto' => $this->CantidadProducto,
            'TotalPrecio' => $this->TotalPrecio,
        ]);

        return $dataProvider;
    }
}
