<?php

namespace app\controllers;

use Yii;
use app\models\Usuarios;
use app\models\search\UsuariosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * UsuariosController implements the CRUD actions for Usuarios model.
 */
class UsuariosController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'create', 'update', 'view', 'registrar'],
                'rules' => [
                    [
                        'actions' => ['index', 'create', 'update', 'view'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                    [
                        'actions' => ['registrar'],
                        'allow' => true,
                        'roles' => ['trabajador'],
                    ]

                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Usuarios models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout ="adminLayout";
        $searchModel = new UsuariosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Usuarios model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $this->layout ="adminLayout";
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Usuarios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout ="adminLayout";
        $model = new Usuarios();
        if ($model->load(Yii::$app->request->post())) {
            $model->estado = 1;
            if ($user = $model->save()) {
                $auth = \Yii::$app->authManager;
                if ($model->TiposUsuarios_idTipoUsuario == 1) {
                    $role = $auth->getRole('admin');
                    $auth->assign($role, $model->getId());
                }
                else if ($model->TiposUsuarios_idTipoUsuario == 2) {
                    $role = $auth->getRole("aprobador");
                    $auth->assign($role, $model->getId());
                }
                else if ($model->TiposUsuarios_idTipoUsuario == 3) {
                    $role = $auth->getRole('consultor');
                    $auth->assign($role, $model->getId());
                }
                else if ($model->TiposUsuarios_idTipoUsuario == 4) {
                    $role = $auth->getRole('trabajador');
                    $auth->assign($role, $model->getId());
                }
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionRegistrar()
    {
        $model = $this->findModel(\Yii::$app->user->getId());
        if ($model->load(Yii::$app->request->post())) {
            $model->estado = 2;
            $model->setPassword($model->password);
            if($model->save())
            {
                return Yii::$app->getResponse()->redirect(array('/trabajador/index'));
            }
            return Yii::$app->getResponse()->redirect(array('/usuarios/registrar'));
        }
        return $this->render('registrar', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Usuarios model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idUsuario]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Usuarios model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Usuarios model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Usuarios the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Usuarios::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
