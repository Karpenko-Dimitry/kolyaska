<?php
// require_once(ROOT.'/models/ProductModel.php');
// require_once(ROOT.'/models/CategoryModel.php'); - теперь автолоудер подключает эти файлы автоматом
// require_once(ROOT.'/components/Pagination.php');

/**
 *
 */
class ProductController extends ProductBase
{
    public function actionList()
    {
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

        require_once(ROOT . '/views/product/list.php');
        return true;
    }

    public function actionView($url)
    {
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

        $productItem = ProductModel::getProductItemByUrl($url);
        $categoryId = $productItem['category_id'];
        $productId = $productItem['id'];
        $attributeList = AttributeModel::getAttributeListByProduct($productId);
        $category = CategoryModel::getCategoryById($categoryId);
        $productList = ProductModel::getProductList();
        $arrId = array();
        $corssProdList = array();

        while (count($arrId) < 3) {
            $rand = rand(0, count($productList) - 1);

            if (!in_array($rand, $arrId)) {
                $arrId[] = $rand;
            }
        }

        foreach ($arrId as $id) {
            $corssProdList[] = $productList[$id];
        }

        if (isset($productItem) && !empty($productItem)) {
            $productItem['description1'] = preg_replace('/\n/', '<br>', $productItem['description1']);
        }
        require_once(ROOT . '/views/product/view.php');

        return true;
    }

    public function actionCategory($category_url, $page = 1)
    {
        $commonData = CommonModel::getCommondata();
        $categoryList = CategoryModel::getCategoryList();
        $category = CategoryModel::getCategoryByUrl($category_url);
        $categoryId = $category['id'];
        $minUsdPriceinCat = ProductModel::minPriceByCategory($categoryId);
        $minUahPriceinCat = Exchange::exchangePrice($minUsdPriceinCat);

        if (CartModel::getProducts()) {
            $productsInCart = CartModel::getProducts();
            $productIds = array_keys($productsInCart);
            $products = ProductModel::getProductsByIds($productIds);
            $totalPrice = CartModel::getTotalPrice($products);
            $totalQuantity = CartModel::countItems();
        } else {
            $totalPrice = 0;
        }

        $productList = ProductModel::getProductItemByCategory($categoryId, $page);
        $TotalProducts = ProductModel::getTotalProductsInCategory($categoryId);
        // var_dump($TotalProducts);
        $pagination = new Pagination($TotalProducts, $page, ProductModel::ITEMS_ON_PAGE, 'page-');
        require_once(ROOT . '/views/product/product-category.php');

        return true;
    }
}