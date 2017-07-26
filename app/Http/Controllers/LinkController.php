<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected static $chars = "123456789bcdfghjkmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ";
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return 'jaleel';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $link= new Link();
        $link->url= $request['url_long'];
        // add other fields
        $link->save();
        return 1;
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
    public function urlToShortCode(Request $request) {
        $url = $request['url_long'];
        $shortCode = $this->urlExistsCheck($url);
        if ($shortCode == false) {
            $shortCode = $this->createShortCode($url);
            return $shortCode;
        }

        return $shortCode;
    }
    protected function urlExistsCheck($url) {
        $links = Link::select('url')->where('url', '=', $url)->first();
        if ($links === null) {
            return false;
        }
        else {
            return 'exist';
        }
    }

    protected function createShortCode($url) {
        $link= new Link();
        $link->url= $url;
        $link->save();
        $last_id = $link->id;
        //$short_url = url('/').'/'.base_convert($last_id,20,36);  
        $token = $this->getToken(6, $last_id);
        $short_url = url('/').'/'.$token . substr(strftime("%Y", time()),2);
        Link::where('id', $last_id)->update(array('short_url'=> $short_url));
        return $short_url;
    }

    private function getToken($length, $seed){    
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "0123456789";

        mt_srand($seed);      // Call once. Good since $last_id is unique.
        for($i=0;$i<$length;$i++){
            $token .= $codeAlphabet[mt_rand(0,strlen($codeAlphabet)-1)];
        }
        return $token;
    }
}