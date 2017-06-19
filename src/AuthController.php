<?php
namespace Ecommerce\Auth;

use Illuminate\Http\Request;
use Lucid\Foundation\Http\Controller;
use Lucid\Foundation\Feature;
use Ecommerce\Auth\Feature\LoginFeature;
use Ecommerce\Auth\Feature\RegisterFeature;
use Ecommerce\Auth\Feature\ViewRegisterFeature;
use Ecommerce\Auth\Feature\ViewLoginFeature;
use Ecommerce\Auth\Feature\LogoutFeature;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function test()
    {
        $message = "Modular";
        return view('auth::welcome', [ 'message' => $message ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(){
        return $this->serve(ViewLoginFeature::class);
    }

    public function register(){
        return $this->serve(ViewRegisterFeature::class);
    }

    public function loginProcess(){
        return $this->serve(LoginFeature::class);    
    }

    public function registerProcess(){
        return $this->serve(RegisterFeature::class);    
    }
    public function logout(){
        return $this->serve(LogoutFeature::class);
    }
}
