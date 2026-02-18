@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')
<div class= "contact-form__content">
    <div class= "contact-form__heading">
        <p class= "contact-form__logo">Contact</p>
    </div>
    <form class= "form" action="/confirm" method="post">
        <div class= "form__group">
          <div class="form__group-title">
             <span class="form__label--item">お名前</span>
             <span class="form__label--caution">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="first_name"  value="{{ old('firs_name') }}"  placeholder="例:山田" />
                <input type="text" name="last_name" value="{{ old('last_name') }}"  placeholder="例:太郎" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
         <div class= "form__group">
          <div class="form__group-title">
             <span class="form__label--item">性別</span>
             <span class="form__label--caution">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--checke">
              <label class="radio">
                <input type="radio" name="gender" value="男性" checked/> <span>男性</span>
              </label>
              <label class="radio">
                <input type="radio" name="gender" value="女性" /><span>女性</span>
              </label>
              <label class="radio">
                <input type="radio" name="gender" value="その他" /><span>その他</span>
              </label>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class= "form__group">
          <div class="form__group-title">
             <span class="form__label--item">メールアドレス</span>
             <span class="form__label--caution">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
                <input type="email" name="email" value="{{ old('email') }}"  placeholder="例:test@example.com" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class= "form__group">
          <div class="form__group-title">
             <span class="form__label--item">電話番号</span>
             <span class="form__label--caution">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--call">
                <input type="tel" name="tel" value="{{ old('tel') }}"  placeholder="080" /> -
                <input type="tel" name="tel" value="{{ old('tel') }}"  placeholder="1234" /> -
                <input type="tel" name="tel" value="{{ old('tel') }}"  placeholder="5678" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class= "form__group">
          <div class="form__group-title">
             <span class="form__label--item">住所</span>
             <span class="form__label--caution">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
                <input type="texit" name="address" value="{{ old('address') }}"  placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class= "form__group">
          <div class="form__group-title">
             <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="building" value="{{ old('building') }}"  placeholder="例:千駄ヶ谷マンション101" />
            </div>
          </div>
        </div>
        <div class= "form__group">
          <div class="form__group-title">
             <span class="form__label--item">お問い合わせの種類</span>
             <span class="form__label--caution">※</span>
          </div>
          <div class="form__group-content">
            <div class="select__wrapper">
                  <select  name="content"  required>
                        <option value="" selected hidden>選択してください</option>
                        @foreach ($categories as $category)
                        <option value="{{ old('content') }}">{{$category->content}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class= "form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span> <span class="form__label--caution">※</span>
          </div> 
        <div class="form__group-content"> 
          <div class="form__input--textarea"> 
            <textarea name="detail" value="{{ old('detail') }}" placeholder="お問い合わせ内容をご記載ください" ></textarea> 
          </div> 
          <div class="form__error"> <!--バリデーション機能を実装したら記述します。--> 

          </div> 
        </div> 
      </div> 
      <div class="form__button"> 
        <button class="form__button-submit" type="submit">確認画面</button> 
      </div> 
    </form> 
</div>
 @endsection
