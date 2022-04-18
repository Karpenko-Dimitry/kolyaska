<?php


class SearchController extends ProductBase
{
    public function actionShow()
    {

        $title = 'Результат поиска | КОЛЯСКА.УКР';
        $description = 'Результат поиска';
        $commonData = CommonModel::getCommondata();
        $categoryList = CategoryModel::getCategoryList();

        if (CartModel::getProducts()) {
            $productsInCart = CartModel::getProducts();
            $productIds = array_keys($productsInCart);
            $products = ProductModel::getProductsByIds($productIds);
            $totalPrice = CartModel::getTotalPrice($products);
            $totalQuantity = CartModel::countItems();
        } else {
            $totalPrice = 0;
        }

        if (isset($_REQUEST['query'])) {
            $searchQuery = $_REQUEST['query'];
            $searchResult = SearchModel::showResult($searchQuery);
        } else {
            header('location:/');
        }

        require_once(ROOT . '/views/search/index.php');

        return true;
    }
}