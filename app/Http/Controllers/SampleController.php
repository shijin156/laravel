<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
class SampleController extends Controller
{
 public function index(){
   $students = students::paginate(2);
       return view('welcome', compact('students'));
 }
 public function create(){
       return view('create');
 }
 public function store(Request $request){
   $this->validate($request, [
     'first_name' => 'required',
     'last_name' => 'required',
     'email' => 'required',
     'phone' => 'required'
   ]);
   $students = New Students;
   $students->first_name = $request->first_name;
   $students->last_name = $request->last_name;
   $students->email = $request->email;
   $students->phone = $request->phone;
   $students->save();
   return redirect(route('home'))->with('succes_msg', 'Data inserted Sucesfully');
 }
 public function edit($id){
   $students = Students::find($id);
    return view('edit', compact('students'));
 }
 public function update(Request $request, $id){
   $this->validate($request, [
     'first_name' => 'required',
     'last_name' => 'required',
     'email' => 'required',
     'phone' => 'required'
   ]);
   $students = Students::find($id);
   $students->first_name = $request->first_name;
   $students->last_name = $request->last_name;
   $students->email = $request->email;
   $students->phone = $request->phone;
   $students->save();
   return redirect(route('home'))->with('succes_msg', 'Data Updated Sucesfully');
 }
 public function delete($id){
   students::find($id)->delete();
   return redirect(route('home'))->with('succes_msg', 'Data Deleted Sucesfully');

 }
}
