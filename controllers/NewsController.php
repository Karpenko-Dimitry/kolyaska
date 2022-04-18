<?php
// require_once(ROOT.'/models/NewsModel.php'); - теперь автолоудер подключает эти файлы автоматом

/**
 *
 */
class NewsController
{

    public function actionIndex()
    {
        $newsList = NewsModel::getNewsList();
        print_r($newsList);
        echo "NewsController";
        return true;
    }

    public function actionView($id)
    {
        $newsItem = NewsModel::getNewsItemById($id);
        print_r($newsItem['name']);
        echo $id;
        return true;
    }
}