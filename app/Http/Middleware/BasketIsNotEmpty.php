<?php

namespace App\Http\Middleware;

use App\Order;
use Closure;

class BasketIsNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $orderId = session('orderId');

        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);//404 if not find by id
            if ( $order->products->count() > 0 ) {
                return $next($request);
            }
        }
        session()->flash('warning', 'Ваша корзина пуста');
        return redirect()->route('index');
    }
}
