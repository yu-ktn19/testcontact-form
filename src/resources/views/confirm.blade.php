@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class= "contact-form__content">
    <div class= "contact-form__heading">
        <p class= "contact-form__logo">Confirm</p>
    </div>
    <form class= "form" action="/thanks" method="post">
        @csrf
        <table class="contact-table">
           <tr>
            <th class="contact-item">お名前</th>
            <td class="contact-body">
                <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly  />
                <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly  />
            </td>
           </tr>
           <tr>
            <th class="contact-item">性別</th>
            <td class="contact-body">
                <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly  />
            </td>
           </tr>
           <tr>
            <th class="contact-item">メールアドレス</th>
            <td class="contact-body">
                <input type="email" name="email" value="{{ $contact['email'] }}" readonly  />
            </td>
           </tr>
           <tr>
            <th class="contact-item">電話番号</th>
            <td class="contact-body">
                <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly  />
            </td>
           </tr>
           <tr>
            <th class="contact-item">住所</th>
            <td class="contact-body">
                <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
            </td>
           </tr>
           <tr>
            <th class="contact-item">建物名</th>
            <td class="contact-body">
                <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
            </td>
           </tr>
           <tr>
            <th class="contact-item">お問い合わせの種類</th>
            <td class="contact-body">
                <input type="text" name="content" value="{{ $contact['content'] }}" readonly  />
            </td>
           </tr>
           <tr>
            <th class="contact-item">お問い合わせ内容</th>
            <td class="contact-body">
                <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly  />
            </td>
           </tr>

        </table>
    
        <div class="form__button"> 
               <button class="form__button-submit--post" type="submit">送信</button> 
            <form class= "form-back" action="/delete" method="post"> 
                @method('DELETE')
                @csrf
               <button class="form__button-submit--correction" type="submit">修正</button> 
            </form> 
        </div> 
    </form> 
    < 
</div>
@endsection