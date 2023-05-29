@extends('layouts.nav')

@section('mainContent')
    <div class="container">
        <div class="main-container">
            <a href="{{ route('hospital-list.index') }}">「病院情報一覧」へ戻る</a>
            <h1 class="rounded-title">病院情報登録</h1>
            <div class="explanation">
                病院の情報登録ができます。<br>
                登録した病院情報は、診察結果登録や診察履歴一覧で選択できます。
            </div>

            <div class="registration-container">
                <div class="form-container">
                    <label for="formGroupExampleInput" class="form-label">病院名：</label>
                    <input type="text" class="form-control bg-white" id="formGroupExampleInput" placeholder="大阪法律病院">
                </div>
                <div class="form-container">
                    <label for="formGroupExampleInput" class="form-label">住所：</label>
                    <input type="text" class="form-control bg-white" id="formGroupExampleInput" placeholder="大阪府大阪市中央区大手前３ー１ー４１">
                </div>

                <div class="form-container">
                    <label for="formGroupExampleInput" class="form-label">電話番号（半角）：</label>
                    <input type="text" class="form-control bg-white" id="formGroupExampleInput" placeholder="06-0000-1111">
                </div>

                <a href="{{route('hospitalregistration.add')}}" button type="submit" class="btn btn-primary">登録する</button></a>

            </div>
        </div>
    </div>

@endsection
