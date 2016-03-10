<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ordenes;

/**
 * OrdenesSearch represents the model behind the search form about `app\models\Ordenes`.
 */
class OrdenesSearch extends Ordenes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OrdenID', 'ClienteID', 'FormaPagoID'], 'integer'],
            [['OrdenFecha', 'OrdenEstado', 'Observaciones', 'Ordencol'], 'safe'],
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
        $query = Ordenes::find();

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
            'OrdenFecha' => $this->OrdenFecha,
            'ClienteID' => $this->ClienteID,
            'FormaPagoID' => $this->FormaPagoID,
        ]);

        $query->andFilterWhere(['like', 'OrdenEstado', $this->OrdenEstado])
            ->andFilterWhere(['like', 'Observaciones', $this->Observaciones])
            ->andFilterWhere(['like', 'Ordencol', $this->Ordencol]);

        return $dataProvider;
    }
}
