<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LeftMenu extends Component
{
    public $projectMenuItems;
    public $user_id, $name;


    public function render ()
    {

        $this->projectMenuItems = DB::table ('projects')->get ();
        return view ('livewire.left-menu');
    }

    public function store ()
    {
        DB::table ('projects')->insert ([
            'user_id' => 1,
            'name' => $this->name,
        ]);
    }

    public function delete ($id) {
        DB::table('projects')->where('id', $id)->delete();
    }
}
