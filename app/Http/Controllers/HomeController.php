<?php

namespace App\Http\Controllers;

use App\Car;
use App\Http\Requests\EditPostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $query = Car::query();

        if ($request->has('sort')) $query->orderBy($request->sort, 'ASC');

        if ($request->has('search') && $request->search) {
            $query->orWhere('mark', 'LIKE', '%' . $request->search . '%');
            $query->orWhere('model', 'LIKE', '%' . $request->search . '%');
            $query->orWhere('color', 'LIKE', '%' . $request->search . '%');
            $query->orWhere('count', 'LIKE', '%' . $request->search . '%');
            $query->orWhere('price', 'LIKE', '%' . $request->search . '%');

            $cars = $query->paginate(5);

            return view('home', ['cars' => $cars]);
        }

        $cars = $query->paginate(5);
        return view('home', ['cars' => $cars]);
    }

    /** Страница добавления записи
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addPost()
    {
        return view('adding');
    }

    /** Страница редактирования записи
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editPost($id)
    {
        $car = Car::find($id);
        if (!$car) abort(404);

        return view('edit', ['car' => $car]);
    }

    /** Создание либо сохранение записи
     * @param EditPostRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function savePost(EditPostRequest $request)
    {
        if ($request->has('id')) {
            $car = Car::find($request->id);
            if (!$car) abort(404);

            $car->mark = $request->mark;
            $car->model = $request->model;
            $car->color = $request->color;
            $car->count = $request->count;
            $car->price = $request->price;
            $car->save();
        } else {
            Car::create([
                'mark' => $request->mark,
                'model' => $request->model,
                'color' => $request->color,
                'count' => $request->count,
                'price' => $request->price
            ]);
        }
        return redirect()->route('home');
    }

    /** Страница удаления записи
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function deletePost($id)
    {
        $car = Car::find($id);
        if (!$car) abort(404);

        return view('delete', ['car' => $car]);
    }

    /** Удаление записи
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $car = Car::find($id);
        if (!$car) return redirect()->back();

        $car->delete();
        return redirect()->route('home');
    }
}
