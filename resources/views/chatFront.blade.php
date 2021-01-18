<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>チャットシステム</title>
    <style type='text/css'>
        #userList {
            width: 400px;
            float: left;
            background-color: #CBFFCB;
            color: #000;
        }
        #users {
            border-bottom: solid 1px #000;
        }
        .this {
            background: gray;
        }
    </style>
</head>
<body>
    <div id='userList'>
    @foreach ($clientInfo as $client)
        <div class='users' name=@if (isset($client['chat_db_id'])){{$client['chat_db_id']}} @else null @endif>
            <p>{{$client['name']}}</p>
            <p>{{$client['pass']}}</p>
        </div>
    @endforeach
    </div>
    <script type='text/javascript'>
        // global
        let parent = document.getElementById('userList');
        let child = parent.children;

        window.onload = function () {
            // 担当者リスト
            changeBgColor();
        }

        function changeBgColor() {
            // 初期値
            child[0].classList.add('this');
            // 遅延ロードできれば
            for (var i = 0; i < child.length; i++) {
                // イベント
                child[i].onclick = function (){
                    let el = parent.querySelector('.users.this');
                    el.classList.remove('this');

                    this.classList.add('this');
                    // talk内容取得
                    getTargetTalk();
                }
            }
        }

        function getTargetTalk() {
            let param = parent.querySelector('name');
        }
    </script>
</body>
</html>

