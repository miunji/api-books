<?php

namespace app\controllers;

use Yii;
use yii\rest\Controller;
use app\models\Book;

class BooksController extends Controller
{
    public function actionIndex()
    {
        $books = Book::find()
            ->select(['title', 'author_id', 'pages', 'language', 'genre'])
            ->all();

        return $books;
    }

    public function actionCreate()
    {
        $book = new Book();
        $book->load(Yii::$app->request->getBodyParams(), '');

        if ($book->save()) {
            return $book;
        } else {
            return $book->errors;
        }
    }

    public function actionUpdate($id)
    {
        $book = Book::findOne($id);
        if (!$book) {
            throw new \yii\web\NotFoundHttpException("Book not found");
        }
        $book->load(Yii::$app->request->getBodyParams(), '');

        if ($book->save()) {
            return $book;
        } else {
            return $book->errors;
        }
    }

    public function actionDelete($id)
    {
        $book = Book::findOne($id);

        if (!$book) {
            throw new \yii\web\NotFoundHttpException("Book not found");
        }

        if ($book->delete()) {
            return ['message' => 'Book deleted successfully'];
        } else {
            return ['message' => 'Failed to delete book'];
        }
    }

    public function actionFilterBooks()
    {
        $searchModel = Yii::$app->request->get('search');
        $authorIds = Yii::$app->request->get('author');

        $query = Book::find();

        if ($searchModel !== null) {
            $query->andFilterWhere(['OR',
                ['like', 'title', $searchModel],
                ['like', 'description', $searchModel],
            ]);
        }

        if ($authorIds !== null) {
            $query->andWhere(['author_id' => $authorIds]);
        }

        $query->select(['title', 'author_id', 'pages', 'language', 'genre']);

        return $query->all();
    }
}
