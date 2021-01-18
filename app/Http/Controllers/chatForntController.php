<?php

namespace App\Http\Controllers;

use App\Models\DbConnect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Exceptions\Handler;

class chatForntController extends Controller
{
    // サービスに登録されているユーザーを取得
    public function index() {
        $model = new DbConnect();
        $obj = $model->index();

        // objからarrayに変換
        $clientArray = json_decode(json_encode($obj), true);
        $clientInfo = [];
        foreach ($clientArray as $key => $value) {
            if (isset($value['name']) && isset($value['pass'])) {
                $clientInfo[$key]['name'] = $value['name'];
                $clientInfo[$key]['pass'] = $value['pass'];
                $clientInfo[$key]['chat_db_id'] = $value['chat_db_id'];
            }
        }
        return view('chatFront', compact('clientInfo'));
    }

    // ajax用 talk内容取得
    public function getRedisDb($chatDbId) {
        try {
            if (isset($chatDbId) && is_string($chatDbId)) {
                Redis::command('HSET', [$chatDbId, 'user', 'client']);
                $json = Redis::command('HGETALL', [$chatDbId]);
            }
            return $json;
        } catch (Exception $e) {
            $e->getMessage();
            echo 'talkRoomの登録をしてください';
        }
    }
}
