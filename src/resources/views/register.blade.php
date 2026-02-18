@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('button')
<div class="header__button">
    <button class="header__button-submit" type="submit">login</button> 
</div> 
@endsection

@section('content')
<div class= "contact-form__content">
    <div class= "contact-form__heading">
        <p class= "contact-form__logo">Register</p>
    </div>
    <div class="contact-form__box">
        <form class="form" action="">
            <div class= "form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                         <input type="text" name="name"  value="" placeholder="例:山田   太郎" />
                    </div>
                    <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>
            <div class= "form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                         <input type="email" name="email"  value="" placeholder="例:test@example.com" />
                    </div>
                    <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>
            <div class= "form__group">
                <div class="form__group-title">
                    <span class="form__label--item">パスワード</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                         <input type="password" name="password"  value="" placeholder="例:coachtech1106" />
                    </div>
                    <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>
            <div class="form__button">
               <button class="form__button-submit" type="submit">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection