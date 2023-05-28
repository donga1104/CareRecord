@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 navcontainer">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">診察結果登録</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">診察履歴一覧</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('hospitalregistration.index') }}">病院情報登録</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('hospital-list.index') }}">病院情報一覧</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('participantregistration.index') }}">対象者登録</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">対象者一覧</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-warning text-black">ログアウト</a>
                </li>
            </ul>
        </div>
        <div class="col-md-10">
            <!-- ここにコンテンツを入れる -->
            @yield('mainContent')
        </div>
    </div>
</div>
@endsection
