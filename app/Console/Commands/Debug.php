<?php

namespace App\Console\Commands;

use App\Models\Category;
use Illuminate\Console\Command;

class Debug extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:debug';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $arr = [];

        $this->edit($arr);
        var_dump($arr);

        // $c = Category::find(4);
        // ds()->queriesOn('checking a user query');
        // $p = $c->parent;
        // ds()->queriesOff();

    }

    function edit(&$arr){
        $arr[0] = 9;
}
}
