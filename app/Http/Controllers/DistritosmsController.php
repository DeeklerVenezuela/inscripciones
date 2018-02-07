<?php

namespace App\Http\Controllers;

use App\Models\distritosms;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class DistritosmsController extends Controller
{

    /**
     * Display a listing of the distritosms.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $distritosmsObjects = distritosms::paginate(25);

        return view('distritosms.index', compact('distritosmsObjects'));
    }

    /**
     * Show the form for creating a new distritosms.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('distritosms.create');
    }

    /**
     * Store a new distritosms in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            distritosms::create($data);

            return redirect()->route('distritosms.distritosms.index')
                             ->with('success_message', 'Distritosms was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified distritosms.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $distritosms = distritosms::findOrFail($id);

        return view('distritosms.show', compact('distritosms'));
    }

    /**
     * Show the form for editing the specified distritosms.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $distritosms = distritosms::findOrFail($id);
        

        return view('distritosms.edit', compact('distritosms'));
    }

    /**
     * Update the specified distritosms in the storage.
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
            
            $distritosms = distritosms::findOrFail($id);
            $distritosms->update($data);

            return redirect()->route('distritosms.distritosms.index')
                             ->with('success_message', 'Distritosms was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified distritosms from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $distritosms = distritosms::findOrFail($id);
            $distritosms->delete();

            return redirect()->route('distritosms.distritosms.index')
                             ->with('success_message', 'Distritosms was successfully deleted!');

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
            'DESCRIPCION' => 'nullable|string|min:0|max:35',
            'IDMunicipioPadre' => 'nullable|string|min:0|max:16',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
