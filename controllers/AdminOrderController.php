<?php

/**
 *
 */
class AdminOrderController extends AdminBase
{

    public function actionIndex()
    {
        self::checkAdmin();

        $orderList = OrderModel::getOrderList();

        require_once(ROOT . '/views/admin/admin_order/index.php');
        return true;
    }

    public function getOrderTotalPrice($productsInOrder)
    {
        $productsInOrder = json_decode($productsInOrder, true);
        $totalPrice = 0;

        foreach ($productsInOrder as $product) {
            $totalPrice += $product['price'] * $product['count'];
        }

        return $totalPrice;
    }

    public function actionView($id)
    {
        $orderItem = OrderModel::getOrderById($id);
        $productsInOrder = json_decode($orderItem['products'], true);
        $productsIds = array_keys($productsInOrder);
        $products = ProductModel::getProductsByIds($productsIds);

        require_once(ROOT . '/views/admin/admin_order/veiw.php');
        return true;
    }

    public function actionDelete($id)
    {
        $orderItem = OrderModel::getOrderById($id);
        if (isset($_POST['yes'])) {
            $result = OrderModel::deleteOrder($id);

            if ($result) {
                header('location:/admin/order/');
            }
        }

        require_once(ROOT . "/views/admin/admin_order/delete.php");
        return true;
    }
}