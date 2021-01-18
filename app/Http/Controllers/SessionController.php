<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DbConnect;

class SessionController extends Controller
{
    public function index() {
        session_start();
        $dbModel = new DbConnect();
        $dbModel->all();
    return view('index');
    }

    public function form(Request $request) {
        // Session
        session_start();
        $id = session_id();

        // post値
        $name = $request->input('name');
        $pass = $request->input('password');

        // DbModel取得
        require_once(app_path() . '/Models/DbConnect.php');
        $model = new DbConnect();

        if (isset($_SESSION['id']) && $id === $_SESSION['id']) {
            // 2回目以降のログイン
            $a=$_SESSION['count'];
            for ($i=1; $i<$a+1; $i++) {
                echo $i . '回目';
            }
            $_SESSION['count'] ++;
            return view('destruction');
        } else {
            // 新規登録
            $_SESSION['id'] = $id;
            $_SESSION['count'] = 1;
            $_SESSION['name'] = $name;
            $_SESSION['password'] = $pass;

            // Db登録
            $model->sess_id = $id;
            $model->name = $name;
            $model->pass = $pass;
            $model->save();
            return view('destruction');
        }
    }

    public function destruction() {
        session_start();
        //$id = session_id();
        $_SESSION = [];
        echo 'セッションは削除されました';
    }
}
