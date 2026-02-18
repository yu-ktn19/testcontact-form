@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('button')
<div class="header__button">
    <button class="header__button-submit" type="submit">logout</button> 
</div> 
@endsection

@section('content')
<div class= "contact-form__content">
    <div class= "contact-form__heading">
        <p class= "contact-form__logo">Admin</p>
    </div>
    <form class= "form">
        <div class= "form__group">
            <div class="form__input--text">
                <input type="search" name="name-email"  value=""  placeholder="名前やメールアドレスを入力してください" />
            </div>
        </div>
        <div class= "form__group">
            <div class="select__gender">
                <select  name="select" required>
                   <option value="" selected hidden>性別</option>
                   <option value="">全て</option>
                   <option value="">男性</option>
                   <option value="">女性</option>
                   <option value="">その他</option>
                </select>
            </div>
        </div>
        <div class= "form__group">
            <div class="select__wrapper">
                <select  name="select" required>
                   <option value="" selected hidden>お問い合わせの種類</option>
                   <option value="">商品のお届けについて</option>
                   <option value="">商品の交換について</option>
                   <option value="">商品のトラブル</option>
                   <option value="">ショップへのお問い合わせ</option>
                   <option value="">その他</option>
                </select>
            </div>
        </div>
        <div class= "form__group">
            <div class="form__input--date">
                <input type="date">
            </div>
        </div>
        <div class= "form__group">
            <div class="form__button"> 
               <button class="form__button-submit--search" type="submit">検索</button>
               <button class="form__button-submit--reset" type="submit">リセット</button>  
            </div>
        </div>
    </form>
    <form class="create-form">
        <div class="form__button-function">
            <input type="hidden" name="keyword" value="{{ request('keyword') }}">
            <input type="hidden" name="gender" value="{{ request('gender') }}">
            <input type="hidden" name="category_id" value="{{ request('category_id') }}">
            <input type="hidden" name="date" value="{{ request('date') }}">
            <button class="form__button-submit--export" type="submit">エクスポート</button>  
        </div>
    </form>
    <table class="contact-table">
          <tr>
            <th class="contact-item__1">お名前</th>
            <th class="contact-item__2">性別</th>
            <th class="contact-item__3">メールアドレス</th>
            <th class="contact-item__4">お問い合わせの種類</th>
            <th class="contact-item__5"></th>
          </tr>           
          <tr>
            <td class="contact-body__1">山田　太郎</td>
            <td class="contact-body__2">男性</td>
            <td class="contact-body__3">test@example.com</td>
            <td class="contact-body__4">商品のお届けについて</td>
            <td class="contact-body__5">
                <button class="table__button-submit" type="submit">詳細</button>  
            </td>
          </tr>
    </table>
</div>
@endsection