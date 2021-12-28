<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use PDF;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // this is order controller
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order_id = $request->order_id;
        if($order_id  === "0"){
            $customer_id = Customer::insertGetId([
                'name'=>$request->customer_name,
                'other_text'=>$request->other_text
            ]);
            $order_id = Order::insertGetId([
                'customer_id'=>$customer_id,
                'order_summary'=>$request->order_summary
            ]);
            OrderItem::insert([
                'item'=>$request->item,
                'qty'=>$request->qty,
                'amount'=>$request->amount,
                'order_id'=>$order_id
            ]);
            $pdf = PDF::loadView('invoices.rk_sale_and_services', compact('order_id'))->setPaper('landscape');
            return $pdf->stream('certificate.pdf');
        }
        OrderItem::insert([
            'item'=>$request->item,
            'qty'=>$request->qty,
            'amount'=>$request->amount,
            'order_id'=>$order_id 
        ]);
        $pdf = PDF::loadView('invoices.rk_sale_and_services', compact('order_id'))->setPaper('landscape');
        return $pdf->stream('certificate.pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
