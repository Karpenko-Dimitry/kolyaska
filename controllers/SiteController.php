<?php
// require_once(ROOT.'/models/ProductModel.php');
/**
 *
 */
class SiteController
{

    public function actionIndex()
    {
        $commonData = CommonModel::getCommondata();
        $categoryList = CategoryModel::getCategoryList();
        $recommendedCategories = CategoryModel::getRecommendedCategory();
        $title = 'Прокат, аренда детских товаров в г. Одесса | КОЛЯСКА.УКР';
        $description = 'Прокат колясок, детских весов, фотолампы от желтушки, шезлонги, манежи';

        if (CartModel::getProducts()) {
            $productsInCart = CartModel::getProducts();
            $productIds = array_keys($productsInCart);
            $products = ProductModel::getProductsByIds($productIds);
            $totalPrice = CartModel::getTotalPrice($products);
            $totalQuantity = CartModel::countItems();
        } else {
            $totalPrice = 0;
        }
        $saleProducts = ProductModel::getSaleProducts();
        $newProducts = ProductModel::getNewProducts();

        require_once(ROOT . '/views/site/index.php');
        return true;
    }

    public function actionSitemap() {
        $categories = CategoryModel::getCategoryList();
        $products = ProductModel::getProductList();
        require_once(ROOT . '/views/site/sitemap.php');
        return true;
    }
}