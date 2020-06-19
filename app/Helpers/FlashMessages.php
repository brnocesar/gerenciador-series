<?php

namespace App\Helpers;

use Illuminate\Http\Request;

trait FlashMessages
{
    public function flashMessage(array $messages)
    {
        session()->flash('flashMessage', $messages);
    }

    public function getMessages()
    {
        return session()->get('flashMessage');
    }

    public function notFound(string $model)
    {
        $this->flashMessage([trans("messages.$model.not_found")]);
        return redirect()->back();
    }
}
