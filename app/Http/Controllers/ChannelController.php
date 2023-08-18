<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChannelController extends Controller
{
    //

    public function render() {
        $data['channels'] =  DB::table('channels')->get();
        return view('channel', $data);
    }
}
