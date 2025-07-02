<?php

namespace App\Services;

use App\Models\Link;
use App\Models\LinkStatistic;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class UserService
{
    public function redirect(Request $request, string $code):RedirectResponse
    {
        $link = Link::where('short_url', $code)->firstOrFail();
        LinkStatistic::create([
            'link_id' => $link->id,
            'ip_address' => $request->getClientIp(),
        ]);
        return redirect()->away($link->original_url);
    }
}
