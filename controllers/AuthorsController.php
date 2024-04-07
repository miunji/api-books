<?php

namespace app\controllers;

use Yii;
use yii\rest\Controller;
use app\models\Author;

class AuthorsController extends Controller
{
    public function actionIndex()
    {
        $authors = Author::find()
            ->select(['name', 'birth_year', 'country'])
            ->all();

        return $authors;
    }

    public function actionCreate()
    {
        $author = new Author();
        $author->load(Yii::$app->request->getBodyParams(), '');
        
        if ($author->save()) {
            return $author;
        } else {
            return $author->errors;
        }
    }

    public function actionUpdate($id)
    {
        $author = Author::findOne($id);

        if (!$author) {
            throw new \yii\web\NotFoundHttpException("Author not found");
        }

        $author->load(Yii::$app->request->getBodyParams(), '');

        if ($author->save()) {
            return $author;
        } else {
            return $author->errors;
        }
    }
}
