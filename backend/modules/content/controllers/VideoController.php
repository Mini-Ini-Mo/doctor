<?php

namespace backend\modules\content\controllers;

use backend\models\form\VideoForm;
use Yii;
use common\models\Video;
use backend\models\search\VideoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * VideoController implements the CRUD actions for Video model.
 */
class VideoController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Video models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VideoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Video model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Video model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $form = new VideoForm();
        if(\Yii::$app->request->isPost)
        {
            $form->load(Yii::$app->request->post());

            $form->file = UploadedFile::getInstance($form,'file');

            if($form->file && $form->validate())
            {
                $new_name = date('YmdHis', time()) . rand(0, 999). '.' . $form->file->getExtension();
                $new_path = 'static/upload/video/' . $new_name;
                if ($form->file->saveAs($new_path)) {
                    $model = new Video();
                    $model->attributes = [
                        'name' => $new_name,
                        'file' => $new_path,
                        'size' => $form->file->size,
                        'type' => $form->file->type,
                        'created_at' => $form->created_at,
                        'author' => $form->author,
                        'description' => $form->description,
                    ];

                    if ($model->save()) {
                        return $this->redirect(['index']);
                    } else {
                        unlink($new_path);
                    }
                }
            }
        }

        return $this->render('create', [
            'model' => $form,
        ]);
    }

    /**
     * Updates an existing Video model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Video model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Video model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Video the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Video::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
