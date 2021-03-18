<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContactMessage;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function contactMessage(StoreContactMessage $request)
    {
        $validated = $request->validated();
        try {
            ContactMessage::create($validated);
            $response = 'Ваше сообщение было успешно отправлено';
            return redirect()->route('contact')->with('success', "$response");
        } catch (\Exception $exception) {
            return redirect()->route('contact')->with('danger', $exception->getMessage());
        }

    }
}
