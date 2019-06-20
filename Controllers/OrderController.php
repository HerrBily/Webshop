<?php

class OrderController {


    public function adminList () {
        $orders = Order::all();

        $params = [
            'orders' => $orders
        ];

        View::load('admin/orders.list', $params);
    }

    public function editForm ($id) {
        $id = (int)$id;

        $order = Order::find($id);

        $params = [
            'order' => $order
        ];

        View::load('admin/orders.edit', $params);
    }

    public function updateProduct ($id) {
        $id = (int)$id;

        $order = Product::find($id);

        $order->delivery_address_id = (int)$_POST['delivery_address_id'];
        $order->payment_id = (int)$_POST['payment_id'];
        $order->user_id = (int)$_POST['user_id'];
        $order->products = trim($_POST['products']);
        $order->status = trim($_POST['status']);

        // if (isset($_POST['delete'])) {
        //     foreach ($_POST['delete'] as $path => $on) {
        //         $order->removeImageByPath($path);
        //     }
        // }

        // $order = $this->handleFileUpload($order);

        
        $order->save();
        

        header("Location: " . APP_BASE . "admin/orders/edit/$id");
        exit;
    }

    // private function handleFileUpload (Product $order) {
    //     $uploadDir = __DIR__ . '/../assets/product_images/';

    //     foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
    //         $mimeType = $_FILES['images']['type'][$key];
    //         $uploadName = $uploadDir . basename($_FILES['images']['name'][$key]); // path & dateiname

    //         if (substr($mimeType, 0, 5) === 'image') {
    //             move_uploaded_file($tmp_name, $uploadName);
    //             $order->addImage($uploadName);
    //         }
    //     }

    //     return $order;
    // }

    public function delete ($id) {
        $id = (int)$id;

        $order = Order::find($id);
        $order->deleted = true;
        $order->save();

        header("Location: " . APP_BASE . "admin/orders");
        exit;
    }
}