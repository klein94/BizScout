@extends('layouts.app', ['class' => 'login-page', 'page' => _('Login Page'), 'contentClass' => 'login-page'])

@section('content')
<div class="container">

<h1>Pusher Tests</h1>
<p>
  Try publishing an event to channel <code>my-channel</code>
  with event name <code>my-event</code>.
</p>
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">Chats</div>
              <div class="panel-body">
                  <chat-messages :messages="messages"></chat-messages>
              </div>
              <div class="panel-footer">

                  <chat-form
                      v-on:messagesent="addMessage"
                      :user="{{ Auth::user() }}"
                  ></chat-form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
