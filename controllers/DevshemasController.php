<?php

namespace app\controllers;

use app\models\DevShemas;
use app\models\DevShemasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DevshemasController implements the CRUD actions for DevShemas model.
 */
class DevshemasController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
                'access' => [
                    'class' => \yii\filters\AccessControl::className(),
                    'only' => ['index','create','update','view', 'indexsec'],
                    'rules' => [
                        
                        [
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],      
            ]
        );
    }

    /**
     * Lists all DevShemas models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DevShemasSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    
    public function actionIndexsec()
    {
        $searchModel = new DevShemasSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $abc = 'xyz';
        return $this->render('indexsec', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'abc' => $abc,
        ]);
    }
    
    /**
     * Displays a single DevShemas model.
     * @param int $shema_id Shema ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($shema_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($shema_id),
        ]);
    }

    /**
     * Creates a new DevShemas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DevShemas();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'shema_id' => $model->shema_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DevShemas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $shema_id Shema ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($shema_id)
    {
        $model = $this->findModel($shema_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'shema_id' => $model->shema_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DevShemas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $shema_id Shema ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($shema_id)
    {
        $this->findModel($shema_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DevShemas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $shema_id Shema ID
     * @return DevShemas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($shema_id)
    {
        if (($model = DevShemas::findOne(['shema_id' => $shema_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
