@extends('layouts.app', ['class' => 'login-page', 'page' => _('Login Page'), 'contentClass' => 'login-page'])

@section('content')
<div class="container">

    <chats :user="{{ auth()->user() }}"></chats>

</div>
@endsection

