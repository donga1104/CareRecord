@extends('layouts.nav')

@section('mainContent')
    <div class="container">
        <div class="main-container">
            {{-- //TODO: 対象者一覧画面作成後ルーティング修正 --}}
            <a href="{{ route('hospitalregistration.index') }}">「対象者一覧」へ戻る</a>
            <h1 class="rounded-title">対象者登録</h1>
            <div class="explanation">
                対象者の登録ができます。ご自身だけでなく大切なご家族（もちろんペットも）を登録ください。
            </div>

            <div class="registration-container">
                <div class="form-container">
                    <label for="formGroupExampleInput" class="form-label">対象者指名（全角）（任意）：</label>
                    <input type="text" class="form-control bg-white" id="formGroupExampleInput" placeholder="呂比須">
                </div>
                <div class="form-container">
                    <label for="formGroupExampleInput" class="form-label">対象者氏名カナ（全角カナ）:</label>
                    <input type="text" class="form-control bg-white" id="formGroupExampleInput" placeholder="ロペス">
                </div>

                <div class="form-container">
                    <label for="formGroupExampleInput" class="form-label">対象者氏名アルファベット（任意）:</label>
                    <input type="text" class="form-control bg-white" id="formGroupExampleInput" placeholder="Lopez">
                </div>

                <button type="submit" class="btn btn-primary">登録する</button>

            </div>
        </div>
    </div>

@endsection
