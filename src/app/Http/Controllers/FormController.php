<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class FormController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', ['categories' => $categories]);
    }

        public function confirm(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'content', 'detail']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'content', 'detail']);
        Contact::create($contact);
        return view('thanks');
    }

    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        return view('index');
    
    }

    public function register()
    {
        return view('register');
    
    }

    public function login()
    {
        return view('login');
    
    }

    public function admin()
    {
        return view('admin');
    
    }
}