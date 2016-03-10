<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Productos;

/**
 * ProductosSearch represents the model behind the search form about `app\models\Productos`.
 */
class ProductosSearch extends Productos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductoID', 'ProductoDisponible', 'ProductoMaximo', 'Productocol', 'TipoProductoID', 'ProveedorID'], 'integer'],
            [['ProductoNombre', 'ProductoDescripcion', 'ProductoModelo', 'ProductoColor', 'ProductoSKU', 'ProductoIm1', 'ProductoIm2', 'ProductoIm3'], 'safe'],
            [['ProductoPrecio', 'ProductoIva'], 'number'],
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
        $query = Productos::find();

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
            'ProductoID' => $this->ProductoID,
            'ProductoDisponible' => $this->ProductoDisponible,
            'ProductoMaximo' => $this->ProductoMaximo,
            'Productocol' => $this->Productocol,
            'ProductoPrecio' => $this->ProductoPrecio,
            'ProductoIva' => $this->ProductoIva,
            'TipoProductoID' => $this->TipoProductoID,
            'ProveedorID' => $this->ProveedorID,
        ]);

        $query->andFilterWhere(['like', 'ProductoNombre', $this->ProductoNombre])
            ->andFilterWhere(['like', 'ProductoDescripcion', $this->ProductoDescripcion])
            ->andFilterWhere(['like', 'ProductoModelo', $this->ProductoModelo])
            ->andFilterWhere(['like', 'ProductoColor', $this->ProductoColor])
            ->andFilterWhere(['like', 'ProductoSKU', $this->ProductoSKU])
            ->andFilterWhere(['like', 'ProductoIm1', $this->ProductoIm1])
            ->andFilterWhere(['like', 'ProductoIm2', $this->ProductoIm2])
            ->andFilterWhere(['like', 'ProductoIm3', $this->ProductoIm3]);

        return $dataProvider;
    }
}
