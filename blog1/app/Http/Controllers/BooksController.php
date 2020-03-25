<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Book::latest()->paginate(5);
        // return view('indexbook', compact('data'))
        //         ->with('i', (request()->input('page', 1) - 1) * 5);

        // $data = DB::table('books')->get();

        $data = DB::table('books')
            ->join('catebookss', 'catebookss.code_book', '=', 'books.category_book')->get();
        return view('01indexbook', ['data' => $data]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $data = DB::table('catebookss');
        // return view('01createbook', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_name' => 'required|min:5 ',
            'price_book' => 'required',
            'category_book' => 'required',
            'year_print' => 'required',
            'user_write' => 'required',
            'image' => ' required|image|mimes:jpeg,png,gif|max:2048',
            'category_file' => 'required|mimes:doc,pdf,docx,zip',
            'description' => 'required',


        ]);

        // $image = $request->file('image');
        // $new_name = rand() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('images'), $new_name);
        $image = $request->file('image');
        $my_image = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $my_image);

        $category_file = $request->file('category_file');
        $my_category_file = rand() . '.' . $category_file->getClientOriginalExtension();
        $category_file->move(public_path('file_ect'), $my_category_file);


        Book::create([
            'book_name' => $request->book_name,
            'price_book' => $request->price_book,
            'category_book' => $request->category_book,
            'year_print' => $request->year_print,
            'user_write' => $request->user_write,
            'image' => $my_image,
            'category_file' => $my_category_file,
            'description' => $request->description,
        ]);

        // $book = new Book([
        //     'book_name' => $request->get('book_name'),
        //     'price_book' => $request->get('price_book'),
        //     'category_book' => $request->get('category_book'),
        //     'category_file' => $request->file('category_file')->store('images'),
        //     'year_print' => $request->get('year_print'),
        //     'user_write' => $request->get('user_write'),
        //     'image' => $request->file('image'),
        //     'description' => $request->get('description')
        // ]);
        // $book->save();
        // return redirect('/home')->with('success', 'Contact saved!');
        // return redirect()->route('book.create')->with('success','Sir data will inserted successfully');
        return back()->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $post = Book::where('id', $id)->first();

        // print_r($post);
        // return View::make('posts.show', compact('post'));

        return json_encode($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {



            $product = Book::find($id);
        return response()->json($product);


        // echo ("5555555");
        // return "I am in";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Book::find($id);
        // $product->name
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
