<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\frente_movimientos;
use App\Http\Controllers\Controller;
use Exception;

class FrenteMovimientosController extends Controller
{

    /**
     * Display a listing of the frente movimientos.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $frenteMovimientosObjects = frente_movimientos::paginate(25);

        return view('frente_movimientos.index', compact('frenteMovimientosObjects'));
    }

    /**
     * Show the form for creating a new frente movimientos.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('frente_movimientos.create');
    }

    /**
     * Store a new frente movimientos in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            frente_movimientos::create($data);

            return redirect()->route('frente_movimientos.frente_movimientos.index')
                             ->with('success_message', 'Frente Movimientos was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified frente movimientos.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $frenteMovimientos = frente_movimientos::findOrFail($id);

        return view('frente_movimientos.show', compact('frenteMovimientos'));
    }

    /**
     * Show the form for editing the specified frente movimientos.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $frenteMovimientos = frente_movimientos::findOrFail($id);
        

        return view('frente_movimientos.edit', compact('frenteMovimientos'));
    }

    /**
     * Update the specified frente movimientos in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $frenteMovimientos = frente_movimientos::findOrFail($id);
            $frenteMovimientos->update($data);

            return redirect()->route('frente_movimientos.frente_movimientos.index')
                             ->with('success_message', 'Frente Movimientos was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified frente movimientos from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $frenteMovimientos = frente_movimientos::findOrFail($id);
            $frenteMovimientos->delete();

            return redirect()->route('frente_movimientos.frente_movimientos.index')
                             ->with('success_message', 'Frente Movimientos was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'AREA_TRABAJO_PQDC' => 'nullable|string|min:0|max:46',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
