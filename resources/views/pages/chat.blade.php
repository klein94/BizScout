@extends('layouts.app', ['page' => __('Chat'), 'pageSlug' => 'chat'])



@section('content')

<div id="app" class="container">
    <chats></chats>
    <!-- <chats :user="{{ auth()->user() }}">test ni xa</chats>
    <script src="{{ asset('js/manifest.js') }}"></script>
<script src="{{ asset('js/vendor.js') }}"></script> -->
@yield('content')

</div>
@endsection

