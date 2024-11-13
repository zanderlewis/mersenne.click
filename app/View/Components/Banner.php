<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\File;

class Banner extends Component
{
    public $exponent;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $json = File::get(storage_path('mersenne_primes.json'));
        $data = json_decode($json, true);

        if (isset($data) && count($data) > 0) {
            $this->exponent = $data[count($data) - 1]['exponent'];
        } else {
            $this->exponent = null; // Handle the case where data is not available
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner', ['exponent' => $this->exponent]);
    }
}