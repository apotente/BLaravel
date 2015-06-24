<?php

namespace App\Http\Controllers\Admin;

use App\Http\Repositories\ItemRepo;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequest;

class ItemsController extends Controller
{

    protected $itemRepo;

    public function __construct(ItemRepo $itemRepo)
    {
        $this->itemRepo = $itemRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $items = $this->itemRepo->ListAndPaginate();
        return view('admin.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ItemCreateRequest $request)
    {
        $data = $request->only('tipo', 'descripcion');
        $item = $this->itemRepo->create($data);

        return redirect()->route('admin.items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $item = $this->itemRepo->find($id);
        return view('admin.items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,ItemCreateRequest $request)
    {
        $data = $request->only('tipo', 'descripcion');
        $item = $this->itemRepo->find($id);
        $this->itemRepo->edit($item,$data);
        return redirect()->route('admin.items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $flight = Item::find($id);

        $flight->delete();
        return redirect()->route('admin.items.index');
    }
}
