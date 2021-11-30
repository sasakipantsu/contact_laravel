<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
// use Carbon\Carbon;


class ManagementController extends Controller
{
    public function management()
    {
        $items = Contact::Paginate(10);
        return view('management', ['items' => $items]);
    }

    public function search(Request $request)
    {

        // 日付
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $items = Contact::where([
            ['fullname', 'LIKE',"%{$request->fullname}%"],
            ['email', 'LIKE',"%{$request->email}%"],
            ['gender', $request->gender],
            ])->paginate(10);
            Contact::whereBetween('created_at', [$startDate, $endDate])
            ->paginate(10);
            // dd($items);
        return view('management', ['items' => $items]);
    }

    public function delete(Request $request)
    {
        $item = Contact::find($request->id);
        $item->delete();
        return redirect('management');
    }
}
