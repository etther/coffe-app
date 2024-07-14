<?php

namespace App\Http\Controllers;

use App\Models\Coffe;
use App\Models\Order;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::all();
        return view('dashboard', compact('orders'));
        return view('order', compact('orders'));
    }

    public function create()
    {
        $coffes = \App\Models\Coffe::all();

        // Pass the $coffes variable to the order view
        return view('order', compact('coffes'));
    }

    public function store(Request $request)
    {
        try {
            // $validator = Validator::make($request->all(), [
            //     'nama' => 'required|string',
            //     'alamat' => 'required|string',
            //     'nohp' => 'required|string',
            //     'coffe_id' => 'required|array',
            //     'quantity' => 'required|array',
            // ]);

            // if ($validator->fails()) {
            //     return redirect()->back()
            //         ->withErrors($validator)
            //         ->withInput();
            // }

            foreach ($request->coffe_id as $key => $coffeeId) {
                $coffee = Coffe::find($coffeeId);

                if (!$coffee) {
                    return redirect()->back()->withErrors('msg', 'Invalid coffee selected.');
                }

                Order::create([
                    'nama' => $request->nama,
                    'alamat' => $request->alamat,
                    'nohp' => $request->nohp,
                    'coffe_id' => $coffeeId,
                    'total_harga' => $coffee->price
                ]);
            }


            return redirect('/orders/create')->with('success', 'Order berhasil disimpan');
        } catch (Exception $e) {
            return redirect('/')->withErrors(['msg' => 'Something went wrong. Please try again.']);
        }
    }




    public function editOrder($id)
    {
        $order = Order::find($id);

        if (!$order) {
            return view('edit')->with('order', null);
        }

        $coffes = Coffe::all();
        return view('edit', compact('order', 'coffes'));
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'nohp' => 'required|string',
            // Add other validation rules if needed
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $order = Order::findOrFail($id);
        $order->nama = $request->nama;
        $order->alamat = $request->alamat;
        $order->nohp = $request->nohp;

        $order->save();

        return redirect('/orders')->with('success', 'Order successfully updated');
    }
    public function delete($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        // Your logic for deleting order and related tasks here

        return redirect('/dashboard')->with('success', 'Order berhasil dihapus');
    }
}
