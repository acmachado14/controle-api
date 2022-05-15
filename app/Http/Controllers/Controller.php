<?php

namespace App\Http\Controllers;

use App\Support\Constants\StatusHTTP;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $classe;

    public function index()
    {
        return $this->classe::all();
    }

    public function store(Request $request)
    {
        return response()
            ->json(
                $this->classe::create($request->all()),
                StatusHTTP::CREATED
            );
    }

    public function show(int $id)
    {
        $recurso = $this->classe::find($id);
        if (is_null($recurso)) {
            return response()->json('', StatusHTTP::NO_CONTENT);
        }

        return response()->json($recurso);
    }

    public function update(int $id, Request $request)
    {
        $recurso = $this->classe::find($id);
        if (is_null($recurso)) {
            return response()->json([
                'erro' => 'Recurso não encontrado'
            ], StatusHTTP::NOT_FOUND);
        }
        $recurso->fill($request->all());
        $recurso->save();

        return $recurso;
    }

    public function destroy(int $id)
    {
        $qtdRecursosRemovidos = $this->classe::destroy($id);
        if ($qtdRecursosRemovidos === 0) {
            return response()->json([
                'erro' => 'Recurso não encontrado'
            ], StatusHTTP::NOT_FOUND);
        }

        return response()->json('', StatusHTTP::NO_CONTENT);
    }
}
