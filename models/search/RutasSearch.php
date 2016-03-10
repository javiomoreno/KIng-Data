<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Rutas;

/**
 * RutasSearch represents the model behind the search form about `app\models\Rutas`.
 */
class RutasSearch extends Rutas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RutaID', 'UsuarioID'], 'integer'],
            [['RutaNombre', 'RutaFecha'], 'safe'],
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
        $query = Rutas::find();

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
            'RutaID' => $this->RutaID,
            'RutaFecha' => $this->RutaFecha,
            'UsuarioID' => $this->UsuarioID,
        ]);

        $query->andFilterWhere(['like', 'RutaNombre', $this->RutaNombre]);

        return $dataProvider;
    }
}
