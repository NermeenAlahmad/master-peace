<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animal=Animal::all();
        $categories=Category::all();
        $users=User::all();
        return view('admin-dashboard.manage_animals',compact('animal','categories','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-dashboard.manage_animals');
    }

    public function createAdopt(){
        $categories=Category::all();
      return view('public-site.Adoptform' ,compact('categories'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:250',
            'color'=>'required|max:250',
            'age'=>'required|max:250',
            'family'=>'required|max:250',
            'gender'=>'required|max:250',
            'health'=>'required|max:2500',
            'description'=>'required|max:2500',
            'main_image'=>'required|mimes:jpeg,png,gif,jpg',
            'sub_image1'=>'required|mimes:jpeg,png,gif,jpg',
            'sub_image2'=>'required|mimes:jpeg,png,gif,jpg',
            'is_verified'=>'required|max:250',

          ]);

          if ($request->hasFile('main_image')) {
            $file = $request->main_image;
            $new_file = time().$file->getClientOriginalName();
            $file->move('storage/animal_image/', $new_file);
        }

        if ($request->hasFile('sub_image1')) {
            $file1 = $request->sub_image1;
            $new_file1 = time().$file1->getClientOriginalName();
            $file1->move('storage/animal_image/', $new_file1);
        }

        if ($request->hasFile('sub_image2')) {
            $file2 = $request->sub_image2;
            $new_file2 = time().$file2->getClientOriginalName();
            $file2->move('storage/animal_image/', $new_file2);
        }

        Animal::create([
            "name" => $request->name,
            "color" => $request->color,
            "age" => $request->age,
            "family" => $request->family,
            "gender" => $request->gender,
            "health" => $request->health,
            "description" => $request->description,
            "main_image" => 'storage/animal_image/' . $new_file,
            "sub_image1" => 'storage/animal_image/' . $new_file1,
            "sub_image2" => 'storage/animal_image/' . $new_file2,
            "user_id" => $request->user,
            "category_id" => $request->category,
            "is_verified"=>$request->is_verified,



        ]);
        return redirect()->back()->with('message','Category Added Successfully')
        ;
    }

    public function storeAnimalForm(Request $request) {

        $this->validate($request,[
            'name'=>'required|max:250',
            'color'=>'required|max:250',
            'age'=>'required|max:250',
            'family'=>'required|max:250',
            'gender'=>'required|max:250',
            'health'=>'required|max:2500',
            'description'=>'required|max:2500',
            'main_image'=>'required|mimes:jpeg,png,gif,jpg',
            'sub_image1'=>'required|mimes:jpeg,png,gif,jpg',
            'sub_image2'=>'required|mimes:jpeg,png,gif,jpg',




          ]);
          if ($request->hasFile('main_image')) {
            $file = $request->main_image;
            $new_file = time().$file->getClientOriginalName();
            $file->move('storage/animal_image/', $new_file);
        }

        if ($request->hasFile('sub_image1')) {
            $file1 = $request->sub_image1;
            $new_file1 = time().$file1->getClientOriginalName();
            $file1->move('storage/animal_image/', $new_file1);
        }

        if ($request->hasFile('sub_image2')) {
            $file2 = $request->sub_image2;
            $new_file2 = time().$file2->getClientOriginalName();
            $file2->move('storage/animal_image/', $new_file2);
        }

        Animal::create([
            "name" => $request->name,
            "color" => $request->color,
            "age" => $request->age,
            "family" => $request->family,
            "gender" => $request->gender,
            "health" => $request->health,
            "description" => $request->description,
            "main_image" => 'storage/animal_image/' . $new_file,
            "sub_image1" => 'storage/animal_image/' . $new_file1,
            "sub_image2" => 'storage/animal_image/' . $new_file2,
            "user_id" => Auth::user()->id,
            "category_id" => $request->category,



        ]);
        // return redirect()->route('createAdopt.index');
        return redirect()->back()->with('message','Added Successfully');
        ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories   = Category::all();
        $singleanimal = Animal::find($id);
        $singleanimal=Animal::find($id);
        $animals=Animal::all();
         return view('public-site.singlepage-animal', compact('categories','singleanimal','animals'));

    }

    // public function getpets($id)
    // {
    //     $animal           = Animal::all();
    //     $category         = Category::all();
    //     $singleanimal     =Animal::find($id);
    //     return view('public-site.singlepage-animal', compact(['animal', 'category', 'singleanimal']));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */



    public function search(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('search');
        // Search in the title and body columns from the owner table
        $animal = Animal::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('color', 'LIKE', "%{$search}%")
            ->orWhere('age', 'LIKE', "%{$search}%")
            ->orWhere('gender', 'LIKE', "%{$search}%")
            ->orWhere('family', 'LIKE', "%{$search}%")
            ->orWhere('category_id', 'LIKE', "%{$search}%")
            ->get();
            $categories=Category::all();

        return view('public-site.search', compact('animal','categories'));
    }


    public function edit($id)
    {
        $animal=Animal::find($id);
        $categories=Category::all();
        return view('admin-dashboard.updates.animal_update',compact('animal' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $animal=Animal::find($id);
        if ($request->hasFile('main_image')) {
            $file = $request->main_image;
            $new_file = time().$file->getClientOriginalName();
            $file->move('storage/animal_image/', $new_file);
            $animal->main_image = 'storage/animal_image/'. $new_file;
        }

        if ($request->hasFile('sub_image1')) {
            $file = $request->sub_image1;
            $new_file = time().$file->getClientOriginalName();
            $file->move('storage/animal_image/', $new_file);
            $animal->sub_image1 = 'storage/animal_image/'. $new_file;
        }

        if ($request->hasFile('sub_image2')) {
            $file = $request->sub_image2;
            $new_file = time().$file->getClientOriginalName();
            $file->move('storage/animal_image/', $new_file);
            $animal->sub_image2 = 'storage/animal_image/'. $new_file;
        }
        $animal->name=$request->name;
        $animal->color=$request->color;
        $animal->age=$request->age;
        $animal->gender=$request->gender;
        $animal->health=$request->health;
        $animal->description=$request->description;
        $animal->family=$request->family;
        $animal->is_verified=$request->is_verified;

        $animal->update();
        return redirect()->route('animal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animal=Animal::find($id);
        $animal->destroy($id);

        return redirect()->route('animal.index');
    }
}
