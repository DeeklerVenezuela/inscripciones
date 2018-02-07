<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\padroninternos;
use App\Models\padrones;
use App\Http\Controllers\Controller;
use Exception;

class PadroninternosController extends Controller
{

    /**
     * Display a listing of the padroninternos.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $padroninternosObjects = padroninternos::paginate(25);

        return view('padroninternos.index', compact('padroninternosObjects'));
    }

    /**
     * Show the form for creating a new padroninternos.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('padroninternos.create');
    }

    /**
     * Store a new padroninternos in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            padroninternos::create($data);

            return redirect()->route('padroninternos.padroninternos.index')
                             ->with('success_message', 'Padroninternos was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified padroninternos.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $padroninternos = padroninternos::findOrFail($id);

        return view('padroninternos.show', compact('padroninternos'));
    }

    /**
     * Show the form for editing the specified padroninternos.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $padroninternos = padroninternos::findOrFail($id);
        

        return view('padroninternos.edit', compact('padroninternos'));
    }

    /**
     * Update the specified padroninternos in the storage.
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
            
            $padroninternos = padroninternos::findOrFail($id);
            $padroninternos->update($data);

            return redirect()->route('padroninternos.padroninternos.index')
                             ->with('success_message', 'Padroninternos was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified padroninternos from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $padroninternos = padroninternos::findOrFail($id);
            $padroninternos->delete();

            return redirect()->route('padroninternos.padroninternos.index')
                             ->with('success_message', 'Padroninternos was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    public function GetByCedula($cedula){
        $padron = padrones::find($cedula);
        $padronInterno = padroninternos::find($cedula);

        return response()->json([
            'padron' => $padron,
            'padron_interno' => $padronInterno
        ]);
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
            'teleono1' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'telefono2' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'telefono3' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'nombrefamiliar' => 'required|string|min:1|max:100',
            'email' => 'nullable|string|min:0|max:60',
            'direccion' => 'nullable|string|min:0|max:200',
            'inscritopor' => 'nullable|string|min:0|max:60',
            'prefesionoficio' => 'nullable|string|min:0|max:20',
            'frentemovimiento' => 'nullable|string|min:0|max:10',
            'notas' => 'nullable|string|min:0|max:200',
            'activo' => 'nullable|string|min:0|max:2',
            'dirigente' => 'nullable|string|min:0|max:2',
            'usrinscripcion' => 'nullable|string|min:0|max:60',
            'fechainscripcion' => 'nullable|string|min:0',
            'usrupdate' => 'nullable|string|min:0|max:60',
            'fechaupdate' => 'nullable|string|min:0',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
