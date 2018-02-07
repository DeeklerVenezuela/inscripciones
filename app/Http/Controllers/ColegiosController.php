<?php

namespace App\Http\Controllers;

use App\Models\colegio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class ColegiosController extends Controller
{

    /**
     * Display a listing of the colegios.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $colegios = colegio::paginate(25);

        return view('colegios.index', compact('colegios'));
    }

    /**
     * Show the form for creating a new colegio.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('colegios.create');
    }

    /**
     * Store a new colegio in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            colegio::create($data);

            return redirect()->route('colegios.colegio.index')
                             ->with('success_message', 'Colegio was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified colegio.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $colegio = colegio::findOrFail($id);

        return view('colegios.show', compact('colegio'));
    }

    /**
     * Show the form for editing the specified colegio.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $colegio = colegio::findOrFail($id);
        

        return view('colegios.edit', compact('colegio'));
    }

    /**
     * Update the specified colegio in the storage.
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
            
            $colegio = colegio::findOrFail($id);
            $colegio->update($data);

            return redirect()->route('colegios.colegio.index')
                             ->with('success_message', 'Colegio was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified colegio from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $colegio = colegio::findOrFail($id);
            $colegio->delete();

            return redirect()->route('colegios.colegio.index')
                             ->with('success_message', 'Colegio was successfully deleted!');

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
            'CodigoColegio' => 'nullable|string|min:0|max:13',
            'IDRecinto' => 'nullable|string|min:0|max:9',
            'CantidadInscritos' => 'nullable|string|min:0|max:17',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
