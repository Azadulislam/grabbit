<?php

namespace App\Http\Controllers;

use App\Models\MicroJob;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:user', 'rule.employee']);
    }

    public function payment(Request $request){

        $job = MicroJob::find($request->job_id);
        if($job == null){
            return redirect()->back();
        }
        $title = "Make Payment";
        $order = New Order();

        $order->job_id = $job->job_id;
        $order->from_user = Auth::user()->id;
        $order->to_user = $job->user_id;
        $order->amount = $job->budget;
        $order->payment = 'notPaid';
        $order->quantity = 1;
        $order->duration = $job->job_duration;
        $order->status  = 1;

        if($order->save()){
//            return redirect()->route('order.show', $order->id);
        }

        return view('payment', compact('title', 'order', 'job'));
    }


    public function create(Request $request){

        $order = Order::find($request->order_id);

        $order->to_user = $job->user->id;
        $order->payment = 'paid';
        $order->status  = 2;

        $order->save();
        $order_id = $order->id;

        $payment = New Payment();

        $payment->order_id = $order_id;
        $payment->payment_id = $request->payment_id;
        $payment->transaction_status = $request->payment_id;
        $order->amount = $job->budget;

        $payment->save();


        return response($request);
    }

    public function destroy($order){
        Order::destroy('id', $order);
//        Payment::where('order_id', $order)->destroy();
        return redirect()->back()->with('alert-warning', 'Order Deleted');
    }
}
