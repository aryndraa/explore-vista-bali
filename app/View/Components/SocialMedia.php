<?php

namespace App\View\Components;

use App\Models\Link;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SocialMedia extends Component
{
    public $type;
    public $instagramUrl;

    public function __construct($type = 'default')
    {   
        $this->type = $type;
        $this->instagramUrl = Link::where('name', 'instagram')->value('url') ?? '#';
    }

    public function render(): View|Closure|string
    {
        return view('components.social-media');
    }
}
