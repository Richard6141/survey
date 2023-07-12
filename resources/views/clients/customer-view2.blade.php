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
          <h5 class="breadcrumbs-title mt-0 mb-0"><span>Profil du client</span></h5>
          <ol class="breadcrumbs mb-0">
            <li class="breadcrumb-item"><a href="/">Acceuil</a>
            </li>
            <li class="breadcrumb-item"><a href="{{route('customer.index')}}">Clients</a>
            </li>
            <li class="breadcrumb-item active">Profil
            </li>
          </ol>
        </div>
        <a href="{{backUrl()}}" class="waves-effect waves-light btn gradient-45deg-deep-purple- z-depth-4 mt-2 mr-2 right">RETOUR</a>

      </div>
    </div>
  </div>
  <div class="col s12" style="min-height: 700px;">
    <div class="container">
      <div class="section">
        <div class="" id="user-profile">
          <div class="row">
            <!-- User Profile Feed -->
            <div class="card left col s12 m8 xl4">
              <div class="col s12 m15 ">
                <div id="profile-card" class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="../../../app-assets/images/gallery/28.png" alt="user bg" />
                  </div>
                  <div class="card-content">
                    <span>
                      @if (!is_null($clients->particulars_id))
                      <span>
                        <img src="{{ 'https://ui-avatars.com/api/?background=8EC741&color=ffff/?uppercase=true&name=' . $clients->particular->name }}" alt="Photo de profil" class="circle responsive-img activator card-profile-image cyan lighten-1 padding-2">

                      </span>
                      @endif
                      @if (!is_null($clients->companies_id))
                      <span>
                        <img src="{{ 'https://ui-avatars.com/api/?background=8EC741&color=ffff/?uppercase=true&name=' . $clients->company->name }}" alt="Photo de profil" class="circle responsive-img activator card-profile-image cyan lighten-1 padding-2">

                        @endif
                      </span>
                      @if (!is_null($clients->particulars_id))
                      <a class="btn-floating activator btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                        <i class="material-icons">edit</i>
                      </a>
                      @endif
                      @if (!is_null($clients->companies_id))
                      <a class="btn-floating activator btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                        <i class="material-icons">edit</i>
                      </a>
                      @endif
                      <h5 class="card-title activator grey-text text-darken-4"><span>
                          @if (!is_null($clients->particulars_id))
                          <span>{{ $clients->particular->name ?? 'N/A'}}</span>
                          @endif
                          @if (!is_null($clients->companies_id))
                          <span>{{ $clients->company->name ?? 'N/A' }}</span>
                          @endif
                        </span>
                        <span>
                          @if (!is_null($clients->particulars_id))
                          <span>{{ $clients->particular->firstname ?? 'N/A' }}</span>
                          @endif
                          @if (!is_null($clients->companies_id))
                          <span>{{ $clients->company->firstname ?? 'N/A' }}</span>
                          @endif
                        </span>
                      </h5>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><span>
                        @if (!is_null($clients->particulars_id))
                        <span>{{ $clients->particular->name ?? 'N/A'}}</span>
                        @endif
                        @if (!is_null($clients->companies_id))
                        <span>{{ $clients->company->name ?? 'N/A' }}</span>
                        @endif
                      </span>
                      <span>
                        @if (!is_null($clients->particulars_id))
                        <span>{{ $clients->particular->firstname ?? 'N/A' }}</span>
                        @endif
                        @if (!is_null($clients->companies_id))
                        <span>{{ $clients->company->firstname ?? 'N/A' }}</span>
                        @endif
                      </span> <i class="material-icons right">close</i>
                    </span>
                    <p>Informations complete</p>
                    <p><i class="material-icons">perm_phone_msg</i> {{ $clients->phone }}</p>
                    <p><i class="material-icons">email</i> {{ $clients->email }}</p>
                    <p><i class="material-icons">arrow_forward</i> {{$clients->created_at->format('d M Y')}}</p>
                    <p>
                      <span class="favorite">
                        @if (!is_null($clients->particulars_id))
                        <span class="new badge blue " data-badge-caption="">Particuler</span>
                        @endif

                        @if (!is_null($clients->companies_id))
                        <span class="new badge info " data-badge-caption="">Entreprise</span>
                        @endif
                      </span>
                    </p>
                    <p></p>
                  </div>
                </div>

              </div>
              <div class="col s12 m15 ">
                <div class="card">
                  <div class="card-content green lighten-1 white-text">
                    <p class="card-stats-title"><i class="material-icons">content_copy</i> Solde</p>
                    <h4 class="card-stats-number white-text">
                      @if (is_null($clients->solde))
                      <span>0</span>
                      @else
                      <span>{{$solde->sum}}</span>
                      @endif
                      <span>F CFA</span>
                    </h4>

                  </div>

                </div>
              </div>
            </div>

            <!-- User Post Feed -->
            <div class="col s12 m8 ">
              <div class="col m10 s14 right" style="width:100%">
                <div class="card-panel center">
                  <div class="">

                    <a href="" style="margin:1%" class="btn-small indigo">Commande</a>
                    <a href="#coupon" style="margin:1%" class="btn-small indigo modal-trigger">Coupon</a>
                    <a href="#modal1" style="margin:1%" class="btn-small indigo modal-trigger">Suggestion</a>
                    <a id="#depot" href="#modal2" style="margin:1%" class="btn-small indigo modal-trigger">Dépôt</a>

                  </div>
                </div>

                <div class="card">
                  <div class="card-content center">
                    <h4>Opérations du client</h4>
                  </div>
                  <div class="card-tabs">
                    <ul class="tabs tabs-fixed-width">
                      <li class="tab"><a href="#test4" style="color:black">COMMANDES</a></li>
                      <li class="tab"><a class="active" href="#test5" style="color:black">DEPOTS</a></li>
                      <li class="tab"><a href="#test6" style="color:black">SUGGESTIONS</a></li>
                    </ul>
                  </div>
                  <div class="card-content grey lighten-4">
                    <div id="test4">
                      Liste des Commandes
                    </div>
                    <div id="test5">
                      @include('clients.list_depots')
                    </div>
                    <div id="test6">
                      @include('clients.list_suggestions')
                    </div>
                  </div>
                </div>
                <!-- Today Highlight -->

              </div>




                
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content-overlay">
    </div>
  </div>

  @include('clients.suggestion')
  @include('clients.depot')
  @include('clients.coupon')
  @include('Suggestion.delete')
</div>

@include('pages.delete_user')
@endsection
@section('scripts')
@include('pages.js')
@endsection