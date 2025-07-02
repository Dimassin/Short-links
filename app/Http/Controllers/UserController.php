<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\LinkStatistic;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function redirect(Request $request, $code)
    {
        $link = Link::where('short_url', $code)->firstOrFail();
        LinkStatistic::create([
            'link_id' => $link->id,
            'ip_address' => $request->getClientIp(),
        ]);
        return redirect()->away($link->original_url);
    }
}
