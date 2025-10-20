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
    public $email;
    public $phone;

    public function __construct($type = 'default')
    {   
        $this->type = $type;
        $this->instagramUrl = Link::where('name', 'instagram')->value('url') ?? '#';
        $this->email = Link::where('name', 'email')->value('url') ?? '#';
        $this->phone = Link::where('name', 'wa')->value('url') ?? '#';
    }

    public function render(): View|Closure|string
    {
        return view('components.social-media');
    }
}
