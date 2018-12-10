<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishesController extends Controller
{
    /**
     * Show submit form
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function submitForm() {
        return view('wishes.submit');
    }

    public function create(Request $request) {
        $validatedData = $request->validate([
            'first_name' => 'required|max:255',
            'wish_for' => 'nullable',
            'wish' => 'required',
            'email' => 'required|email',
            'last_name' => 'nullable'
        ]);

        $wish = new \App\Wish($validatedData);

        $wish->ip_client = $_SERVER['REMOTE_ADDR'];
        $wish->wish_for = (!empty($request->wish_for)) ? $request->wish_for : 'all';
        $wish->status = false;
        $wish->save();

        return redirect()->route('wish.all')->with('success', 'success!');
    }

    public function listAll()
    {
        $wishes = \App\Wish::all();

        return view('wishes.all', compact('wishes'));
    }

    public function view($id)
    {
        $wish = \App\Wish::find((int) $id);
        return view('wish.view', compact('wish'));
    }
}
