<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuarios;

/**
 * UsuariosSearch represents the model behind the search form about `app\models\Usuarios`.
 */
class UsuariosSearch extends Usuarios
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UsuarioID', 'RolID'], 'integer'],
            [['UsuarioNombre', 'UsuarioApellido', 'UsuarioEmail', 'UsuarioAlias', 'UsuarioTelefono', 'UsuarioClave', 'UsuarioDireccion', 'Usuariocol'], 'safe'],
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
        $query = Usuarios::find();

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
            'UsuarioID' => $this->UsuarioID,
            'RolID' => $this->RolID,
        ]);

        $query->andFilterWhere(['like', 'UsuarioNombre', $this->UsuarioNombre])
            ->andFilterWhere(['like', 'UsuarioApellido', $this->UsuarioApellido])
            ->andFilterWhere(['like', 'UsuarioEmail', $this->UsuarioEmail])
            ->andFilterWhere(['like', 'UsuarioAlias', $this->UsuarioAlias])
            ->andFilterWhere(['like', 'UsuarioTelefono', $this->UsuarioTelefono])
            ->andFilterWhere(['like', 'UsuarioClave', $this->UsuarioClave])
            ->andFilterWhere(['like', 'UsuarioDireccion', $this->UsuarioDireccion])
            ->andFilterWhere(['like', 'Usuariocol', $this->Usuariocol]);

        return $dataProvider;
    }
}
