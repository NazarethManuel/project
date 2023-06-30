<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookSupplier;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{File, Storage};

class BookController extends Controller
{

    public function index()
    {
        $response['books'] = Book::orderBy('id', 'DESC')->get();
        return view('admin.book.list.index', $response);
    }


    public function create()
    {
        return view('admin.book.create.index');
    }

    public function store(Request $request)
    {
        $exist = Book::where('isbn', $request->isbn)->first();

        if ($exist) {
            return redirect()->back()->with('existing_cadast', '1');
        }
        $this->validate($request, [
            'title' => 'required|max:150',
            'author' => 'required|max:150',
            'publisher' => ' required|max:150',
            'isbn' => 'required|min:13|max:13',
            'startingAmount' => 'required|numeric',
            'finalQuantity',
            'purchasePrice' => 'required|numeric',
            'salePrice' => 'required|numeric',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:5000',

        ], [
            'title.required' => 'Digite o título do livro',
            'author.required' => 'Digite o Autor do livro',
            'publisher.required' => 'Digite a editora do livro',
            'isbn.required' => 'Digite o isbn do livro',
            'startingAmount.required' => 'Digite a quantidade de livro',
            'purchasePrice.required' => 'Digite o preço de compra do livro',
            'salePrice.required' => 'Digite o preço de venda do livro',
            'image.required' => 'carregue a imagem do livro',
        ]);

        $title = $request->input('title');
        $author = $request->input('author');
        $publisher = $request->input('publisher');
        $isbn = $request->input('isbn');
        $startingAmount = $request->input('startingAmount');
        $finalQuantity = $request->input('finalQuantity');
        $purchasePrice = $request->input('purchasePrice');
        $salePrice = $request->input('salePrice');

        $ext = $request->file("image")->getClientOriginalExtension();
        $stringImageReFormat = str_replace(" ", "", $request->input('title'));
        $imageName = $stringImageReFormat . "." . $ext;
        $imageEncoded = File::get($request->image);
        Storage::disk('local')->put('public/book_img/' . $imageName, $imageEncoded);

        $books = array(
            'title' => $title,
            'author' => $author,
            'publisher' => $publisher,
            'isbn' => $isbn,
            'startingAmount' => $startingAmount,
            'finalQuantity' => $finalQuantity,
            'purchasePrice' => $purchasePrice,
            'salePrice' => $salePrice,
            'image' => $imageName,
        );
        Book::create($books);
        return redirect()->route('admin.book.create.index')->with('create', '1');
    }


    public function show($id)
    {
        $response['books'] =  Book::find($id);
        return view('admin.book.detail.index', $response);
    }

    public function edit($id)
    {
        $response['book'] = Book::find($id);
        return view('admin.book.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data =  $this->validate($request, [
            'title' => 'required|max:150',
            'author' => 'required|max:150',
            'publisher' => ' required|max:150',
            'isbn' => 'required|min:13|max:13',
            'startingAmount' => 'required|numeric',
            'finalQuantity',
            'purchasePrice' => 'required|numeric',
            'salePrice' => 'required|numeric',

        ], [
            'title.required' => 'Digite o título do livro',
            'author.required' => 'Digite o Autor do livro',
            'publisher.required' => 'Digite a editora do livro',
            'isbn.required' => 'Digite o isbn do livro',
            'startingAmount.required' => 'Digite a quantidade de livro',
            'purchasePrice.required' => 'Digite o preço de compra do livro',
            'salePrice.required' => 'Digite o preço de venda do livro'
        ]);
        Book::find($id)->update($data);
        return redirect()->route('admin.costumer.list.index')->with('edit', '1');
    }

    public function updateImg(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg|max:5000',
        ]);
        if ($request->hasFile("Image")) {
            $books = Book::find($id);
            $exists =  Storage::disk('local')->exists('public/book_img/' . $books->image);
            if ($exists) {
                Storage::delete('public/book_img/' . $books->image);
            }
        }
        $request->file("image")->getClientOriginalExtension();
        $request->image->StoreAs("public/book_img/" . $books->image);
        $books = array('image' => $books->image);
        Book::where("id", $id)->update($books);
        return redirect()->route('admin.costumer.list.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        $record = Book::find($id);
        $existsImage = Storage::disk('local')->exists('public/book_img/' . $record->image);
        $exists = BookSupplier::where('fk_books_id', $record->id)->exists();
        if ($exists) {
            Storage::delete('public/book_img/' . $record->image);
        }
        if ($exists) {
            if ($record->supplier->count() > 0) {
                return redirect()->back()->with('deleteBook', '1');
            }
            BookSupplier::where($record['fk_books_id'])->delete();
        }

        //Sale_relation
        $exists = Sale::where('fk_books_id', $record->id)->exists();
        if ($exists) {

            if ($record->costumer->count() > 0 && $record->employer->count() > 0 && $record->typePayment->count() > 0) {

                return redirect()->back()->with('deleteBook', '1');
            }
            sale::where($record['fk_books_id'])->delete();
        }

        Book::find($id)->delete();

        return redirect()->route('admin.book.list.index')->with('destroy', '1');
    }


    public function getBookById($id)
    {
        $books = Book::find($id);
        return response()->json($books);
    }
}
