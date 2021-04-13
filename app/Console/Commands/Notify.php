<?php

namespace App\Console\Commands;

use App\Mail\NotifyEmail;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class Notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email daily to user ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
//        $users = User::select('email')->get();  same function but the second return data to array
        $users = User::pulck('email')->toArray();
        $data = ['title' => 'programming', 'content' => 'php'];

        foreach ($users as $user) {
            Mail::to($user)->send(new NotifyEmail($data));
        }


//        $users = User::where('expire', 1)->get();
//        foreach ($users as $user) {
//            $user->update(['expire' => 0]);
//        }
    }
}
