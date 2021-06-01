<?php

namespace App\Console\Commands;

use App\Mail\EmailForUser;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email every hour to all users';

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
     * @return mixed
     */
    public function handle()
    {
        $emails = User::pluck('email')->toArray();

        foreach($emails as $email){
            Mail::to($email)->send(new EmailForUser());
        }
    }
}
