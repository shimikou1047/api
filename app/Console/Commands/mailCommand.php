<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class mailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
      try{
        $data = [];
        // mail送信処理
        Mail::send('mail', $data, function($message) {
            $message->to('k-shimizu@gmail.com', 'to');
            $message->from('k-shimizu@gmail.com', 'from');
        });
      } catch(\Exception $e) {
        echo $e->getMessage();
        echo '通信処理に失敗しました';
      }
    }
}
