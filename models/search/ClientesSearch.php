<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Clientes;

/**
 * ClientesSearch represents the model behind the search form about `app\models\Clientes`.
 */
class ClientesSearch extends Clientes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ClienteID', 'RutaID'], 'integer'],
            [['ClienteNombre', 'ClienteCedula', 'ClienteDireccion', 'ClienteEmail', 'ClienteTelefono', 'ClienteContacto', 'Observaciones'], 'safe'],
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
        $query = Clientes::find();

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
            'ClienteID' => $this->ClienteID,
            'RutaID' => $this->RutaID,
        ]);

        $query->andFilterWhere(['like', 'ClienteNombre', $this->ClienteNombre])
            ->andFilterWhere(['like', 'ClienteCedula', $this->ClienteCedula])
            ->andFilterWhere(['like', 'ClienteDireccion', $this->ClienteDireccion])
            ->andFilterWhere(['like', 'ClienteEmail', $this->ClienteEmail])
            ->andFilterWhere(['like', 'ClienteTelefono', $this->ClienteTelefono])
            ->andFilterWhere(['like', 'ClienteContacto', $this->ClienteContacto])
            ->andFilterWhere(['like', 'Observaciones', $this->Observaciones]);

        return $dataProvider;
    }
}
