@extends('layouts.master')

@section('content')
    @if(auth()->check())
        <h2 class="text-primary">برای درخواست عارضه یابی روی لینک بنگاه متوسط در منو کلیک کنید</h2>
    @else
        <h2>برای درخواست عارضه یابی نیازمند ورود یا ثبت نام هستید ، از منو بالا برای ورود اقدام فرمایید</h2>
    @endif
@endsection
