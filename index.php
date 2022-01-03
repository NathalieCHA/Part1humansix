<?php

if (file_exists('orders.xml')){
    $orders = simplexml_load_file('orders.xml');

    foreach($orders as $order){
        print_r($order->attributes()['id']);
        print_r($order->customer->firstname);
        print_r($order->customer->lastname);
        print_r($order->orderDate);
        print_r($order->status);
        print_r($order->price);
        print_r($order->cart->product->name);
        print_r($order->cart->product->quantity);
        print_r($order->cart->product->price);
    }
}else{
    exit('Echec lors de l\'ouverture du fichier orders.xml.');
}