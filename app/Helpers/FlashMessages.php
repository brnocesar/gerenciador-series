<?php

namespace App\Helpers;

use Illuminate\Http\Request;

trait FlashMessages
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function flashMessage(array $messages)
    {
        $this->request->session()->flash('flashMessage', $messages);
    }

    public function getMessages()
    {
        return $this->request->session()->get('flashMessage');
    }

    public function notFound(string $model)
    {
        $this->flashMessage([trans('messages.'. $model .'.not_found')]);
        return redirect()->back();
    }
}