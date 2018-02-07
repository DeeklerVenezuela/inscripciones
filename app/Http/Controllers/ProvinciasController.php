<?php

namespace App\Http\Controllers;

use App\Models\Provincia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class ProvinciasController extends Controller
{

    /**
     * Display a listing of the provincias.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $provincias = Provincia::paginate(25);

        return view('provincias.index', compact('provincias'));
    }

    /**
     * Show the form for creating a new provincia.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('provincias.create');
    }

    /**
     * Store a new provincia in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Provincia::create($data);

            return redirect()->route('provincias.provincia.index')
                             ->with('success_message', 'Provincia was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified provincia.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $provincia = Provincia::findOrFail($id);

        return view('provincias.show', compact('provincia'));
    }

    /**
     * Show the form for editing the specified provincia.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $provincia = Provincia::findOrFail($id);
        

        return view('provincias.edit', compact('provincia'));
    }

    /**
     * Update the specified provincia in the storage.
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
            
            $provincia = Provincia::findOrFail($id);
            $provincia->update($data);

            return redirect()->route('provincias.provincia.index')
                             ->with('success_message', 'Provincia was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified provincia from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $provincia = Provincia::findOrFail($id);
            $provincia->delete();

            return redirect()->route('provincias.provincia.index')
                             ->with('success_message', 'Provincia was successfully deleted!');

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
            'Descripcion' => 'nullable|string|min:0|max:22',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
