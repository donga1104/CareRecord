@extends('layouts.nav')

@section('mainContent')
<div class="container">
    <div class="main-container">
        <h1 class="rounded-title">病院情報一覧</h1>
        <div class="explanation">
            登録された病院情報の一覧です。<br>
            編集または削除が必要名場合は、各ボタンを押してください。
        </div>

        <div class="registration-container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>病院名</th>
                        <th>編集</th>
                        <th>削除</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 病院のデータをループで表示 -->
                    <tr>
                        <td>病院A</td>
                        <td><a href="#">編集</a></td>
                        <td><a href="#">削除</a></td>
                    </tr>
                    <tr>
                        <td>病院B</td>
                        <td><a href="#">編集</a></td>
                        <td><a href="#">削除</a></td>
                    </tr>
                <!-- 続く... -->
                </tbody>
            </table>

            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</div>
@endsection
