@extends('layouts.app')

@section('content')
    @if (session()->has('successMessage'))
        <div class="alert alert-success" role="alert">
            {{ session('successMessage') }}
        </div>
    @endif
    @if (session()->has('errorMessage'))
        <div class="alert alert-danger" role="alert">
            {{ session('errorMessage') }}
        </div>
    @endif
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6">
                        <h5 class="breadcrumbs-title mt-0 mb-0"><span>Liste des utilisateurs</span></h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Acceuil</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Utilisateur</a>
                            </li>
                            <li class="breadcrumb-item active">Rôles
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <div class="section">
                    <div class="card">
                    <div class="col s12 m12 l12">
  @if (\Session::has('successMessage'))
  <div class="card-alert card green">
    <div class="card-content white-text">
      <p>{!! \Session::get('successMessage') !!}</p>
    </div>
    <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  @endif
  @if (\Session::has('errorMessage'))
  <div class="card-alert card red">
    <div class="card-content white-text">
      <p>{!! \Session::get('errorMessage') !!}</p>
    </div>
    <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  @endif
  <div id="inline-form" class="card card card-default scrollspy">
    <div style="display: flex; justify-content: space-between; padding:30px">
      <div style="width: 30%;">
        <h4 class="card-title" style="font-weight: bold;">Liste des rôles</h4>
        <div class="row">
          <div class="col s12 m12 l12 ml-2 mt-1">
            <ul>
              @foreach($roles as $role)
              <li style="color:black; font-weight:bold; margin-bottom:0.5em;">{{ ucfirst(trans($role->libelle)) }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
      <div style="width: 30%;">
        <h4 class="card-title" style="font-weight: bold;">Créer un nouveau rôle</h4>
        <form method="POST" action="{{ route('role') }}">
          @csrf
          <div class="input-field col s12">
            <!-- <i class="material-icons prefix">lock_outline</i> -->
            <input id="icon_password" style="text-transform: uppercase" class="@error('role') is-invalid @enderror" type="text" name="role" required>
            <label for="role">Rôle</label>
            @error('role')
            <span class="invalid-feedback" role="alert">
              <strong style="color: red;">{{$message}}</strong>
            </span>
            @enderror
          </div>
          <div>
            <div>
              <button class="btn cyan waves-effect waves-light" type="submit">
                <i class="material-icons left">lock_open</i>Créer</button>
            </div>
          </div>
        </form>
      </div>
      <div style="width: 30%;">
        <h4 class="card-title" style="font-weight: bold;">Assigner un rôle à un utlisateur</h4>
        <form method="POST" action="{{ route('assign.role') }}">
          @csrf
          <div class="input-field col s12" id="usercolumn" style="margin-top: 30px;">
            <select name="user">
              <option value="" disabled selected>Choisissez l'utilisateur</option>
              @foreach($users as $usr)
              <option value="{{$usr->id}}"><span>{{$usr->nom}}</span> <span>{{$usr->prenom}}</span></option>
              @endforeach
            </select>
            <label>Utilisateur</label>
          </div>
          <div class="input-field col s12" id="usercolumn" style="margin-top: 30px;">
            <select name="role">
              <option value="" disabled selected>Choisissez le rôle</option>
              @foreach($roles as $role)
              <option value="{{$role->id}}">{{$role->libelle}}</option>
              @endforeach
            </select>
            <label>Rôles</label>
          </div>
          <div>
            <div>
              <button class="btn cyan waves-effect waves-light" type="submit">
                <i class="material-icons left">lock_open</i>Assigner</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
                    </div>
                </div>


            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
@endsection
@section('js')
@endsection
