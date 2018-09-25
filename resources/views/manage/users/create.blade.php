@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Create New User</h1>
      </div>
    </div>
    <hr class="m-t-0">
    <form action="{{ route('users.store') }}" method="POST">
      {{ csrf_field() }}
      <div class="columns">
        <div class="column">
          <div class="field">
            <label for="name" class="label">Name</label>
            <p class="control">
              <input type="text" class="input" name id="name">
            </p>
          </div>

          <div class="field">
            <label for="email" class="label">Email</label>
            <p class="control">
              <input type="text" class="input" name="email" id="email">
            </p>
          </div>

          <div class="field">
            <label for="password" class="label">Password</label>
            <p class="control">
              <input type="password" name="password" class="input" id="password" v-if="!auto_password">
              <b-checkbox name="auto_generate" class="m-t-10" v-model="auto_password">Auto Generate Password</b-checkbox>
            </p>
          </div>
        </div>
        <div class="column">
          <label for="roles" class="label">Roles:</label>
          <input type="hidden" name="roles" :value="rolesSelected">

          @foreach ($roles as $role)
            <div class="field">
              <b-checkbox v-model="rolesSelected" native-value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
            </div>
          @endforeach
        </div>
      </div>
      <div class="columns">
        <div class="column">
          <hr>
          <button class="button is-primary is-pulled-right" style="width: 250px;">Create New User</button>
        </div>
      </div>
    </form>
  </div>
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        auto_password: true,
        rolesSelected: {!! old('roles') ? old('roles') : '[]' !!}
      }
    });
  </script>
@endsection
