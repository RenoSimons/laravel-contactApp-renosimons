<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\data;
use Illuminate\Support\Facades\DB;

class dataController extends Controller
{
    
    public function index()
    {
        $users = DB::table('data')->where('deleted_at', NULL)->paginate(5);
        return view('data.index', ['datas' => $users]);

    }

    public function create()
    {
        return view('data.create');
    }

    public function store(Request $request)
    {
        $request->validate([
          'name' => 'required',
          'phonenumber' => 'required',
          'street' => 'required',
          'housenumber' => 'required',
          'city' => 'required'
        ]);

        data::create($request->all());
        return redirect()->route('data.index')
                    ->with('success', 'New contact created successfully');
    }

    public function show($id)
    {
        $data = data::find($id);
        return view('data.detail', compact('data'));
    }
    
    public function edit($id)
    {
        $data = data::find($id);
        return view('data.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
      $request->validate([
        'name' => 'required',
        'phonenumber' => 'required',
        'street' => 'required',
        'housenumber' => 'required',
        'city' => 'required'
      ]);
      $data = data::find($id);
      $data->name = $request->get('name');
      $data->phonenumber = $request->get('phonenumber');
      $data->street = $request->get('street');
      $data->housenumber = $request->get('housenumber');
      $data->city = $request->get('city');
      $data->save();
      return redirect()->route('data.index')
                      ->with('success', 'Contact updated successfully');
    }

    public function destroy($id)
    {
        $data = data::find($id);
        $data->delete();
        return redirect()->route('data.index')
                        ->with('success', 'Contact deleted successfully');
    }
}
