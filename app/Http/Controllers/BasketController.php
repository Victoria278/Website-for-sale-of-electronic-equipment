<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BasketController extends Controller
{
    public function basket()
    {
        $order = (new Basket())->getOrder();
        return view('basket', compact('order'));
    }

    public function basketConfirm(Request $request)
    {

        $email = Auth::check() ? Auth::user()->email : $request->email;
        if ((new Basket())->saveOrder($request->name, $request->phone, $email)) {
            session()->flash('success', 'Ваше замовлення принято в обробку!');
        } else {
            session()->flash('warning', 'Товар не доступен для замовлення в повному обсязi');
        }

        Order::eraseOrderSum();
        return redirect()->route('index');
    }

    public function basketPlace()
    {
        $basket = new Basket();
        $order = $basket->getOrder();
        if (!$basket->countAvailable()) {
            session()->flash('warning', 'Товар не доступен для замовлення в повному обсязi');
            return redirect()->route('basket');
        }
        return view('order', compact('order'));
    }

    public function basketAdd(Product $product)
    {
        $result = (new Basket(true))->addProduct($product);

         if ($result) {
            session()->flash('success', 'Добавлен товар '.$product->name);
        } else {
            session()->flash('warning', 'Товар '.$product->name . ' в бiльшoмy обсязi не доступен для замовлення');
        }

        return redirect()->route('basket');
    }

    public function basketRemove(Product $product)
    {
        (new Basket())->removeProduct($product);

        session()->flash('warning', 'Видален з кошика товар  '.$product->name);

        return redirect()->route('basket');
    }

}
