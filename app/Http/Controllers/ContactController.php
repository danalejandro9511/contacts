<?php

namespace App\Http\Controllers;
use App\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  
  public function index(Request $request)
  {
      if ($request->ajax()) {
          $contacts = Contact::all();
          return datatables()->of($contacts)
              ->addColumn('action', function ($row) {
                  $html = '<a href="contacts/'.$row->id.'" target="_blank" class="btn btn-xs btn-secondary btn-edit">Ver Informacion</a> ';
                  return $html;
              })->toJson();
      }
      return view('contacts.index');
  }

  public function store(Request $request)
  {
      // do validation
      $file = request()->except('_token');
      if($request->hasFile('photo')){
        $file['photo'] = $request->file('photo')->store('images','public');
        $f = explode("/",$file['photo']);
        $file['photo'] = $f[1];
      }else{
        $file['photo'] = 'default_avatar.png';
      }
      //dd(Contact::create($file));
      Contact::create($file);
      return view('contacts.index');
  }

  public function show($id)
  {
    if ($id) {
      $contact = Contact::find($id);
    }
    return view('contacts.edit',["contact"=>$contact]);
  }

  public function update($id)
  {
      // do validation
      Contact::find($id)->update(request()->all());
      return ['success' => true, 'message' => 'Updated Successfully'];
  }

  public function destroy($id)
  {
      Contact::find($id)->delete();
      return ['success' => true, 'message' => 'Deleted Successfully'];
  }
}
