<?php

namespace App\Traits;

trait SessionStatusTrait
{
    public function success($message = "Record was created successfully.")
    {
        return session()->flash('alert', ['status' => 'success', 'message' => $message]);
    }

    public function error($message = "Record was not created successfully.")
    {
        return session()->flash('alert', ['status' => 'danger', 'message' => $message]);
    }

    public function info($message = "Some Information from backend.")
    {
        return session()->flash('alert', ['status' => 'info', 'message' => $message]);
    }

    public function warning($message = "Some warning from backend.")
    {
        return session()->flash('alert', ['status' => 'warning', 'message' => $message]);
    }
}
