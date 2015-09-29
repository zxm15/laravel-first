<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function about()
    {
        //$name = 'Gavin Gan';
        //$myname = array('first' => 'Gavin', 'last' => 'Gan');
        //return view('pages.about')->with('names', $myname);
        //return view('pages.about')->with('name', $name);
        $first = 'Gavin';
        $last = 'Gan';
        return view('pages.about', compact('first', 'last'));
    }

    public function contact()
    {
        //return 'contact me!';
        $contactInfo = array('name' => 'Gavin Gan',
            'email' => 'ggan@best.com',
            'phone' => 'greatness');
        $people = array('77', 'myself', 'hua', 'xiao');
        $looking = 'app';
        return view('pages.contact', compact('contactInfo', 'people', 'looking'));

    }

}
