<?php

namespace app\controllers;

use Yii;
use app\models\OrdenesProductos;
use app\models\search\OrdenesProductosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrdenesProductosController implements the CRUD actions for OrdenesProductos model.
 */
class OrdenesProductosController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all OrdenesProductos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OrdenesProductosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OrdenesProductos model.
     * @param integer $OrdenID
     * @param integer $ProductoID
     * @return mixed
     */
    public function actionView($OrdenID, $ProductoID)
    {
        return $this->render('view', [
            'model' => $this->findModel($OrdenID, $ProductoID),
        ]);
    }

    /**
     * Creates a new OrdenesProductos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new OrdenesProductos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'OrdenID' => $model->OrdenID, 'ProductoID' => $model->ProductoID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing OrdenesProductos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $OrdenID
     * @param integer $ProductoID
     * @return mixed
     */
    public function actionUpdate($OrdenID, $ProductoID)
    {
        $model = $this->findModel($OrdenID, $ProductoID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'OrdenID' => $model->OrdenID, 'ProductoID' => $model->ProductoID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing OrdenesProductos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $OrdenID
     * @param integer $ProductoID
     * @return mixed
     */
    public function actionDelete($OrdenID, $ProductoID)
    {
        $this->findModel($OrdenID, $ProductoID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OrdenesProductos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $OrdenID
     * @param integer $ProductoID
     * @return OrdenesProductos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($OrdenID, $ProductoID)
    {
        if (($model = OrdenesProductos::findOne(['OrdenID' => $OrdenID, 'ProductoID' => $ProductoID])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
