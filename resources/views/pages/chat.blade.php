@extends('layouts.app_noSideBar', ['page' => __('Chat'), 'pageSlug' => 'chat'])


@section('content')
<div id="app32" class="container">
    <chat :user="{{ auth()->user() }}"></chat>

</div>

@endsection

