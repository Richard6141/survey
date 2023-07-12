@extends('layouts.app')

@section('content')
<div class="row">
    <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
    <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s10 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>Liste des Produits</span></h5>
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="/">Acceuil</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('produits.index') }}">Cuisine</a></li>
                        <li class="breadcrumb-item active">Produits</a>
                    </ol>
                </div>
                <a class="col s2 m6 l6"><a class="btn-floating  waves-effect waves-light breadcrumbs-btn right mr-1 mb-1 modal-trigger btn-large" href="{{ route('produits.form') }}"><i class="material-icons tooltipped" data-position="top" data-tooltip="Ajouter">add</i></a>
                </a>
                <a href="{{backUrl()}}" class="waves-effect waves-light btn gradient-45deg-deep-purple- z-depth-4 mt-2 mr-2 right">RETOUR</a>
                <i class="material-icons tooltipped" data-position="top" data-tooltip="Ajouter">add</i>
                </a>

            </div>
        </div>
    </div>
    <div class="col s12">
        <div class="container">
            <div class="section">
                <div class="card">
                    <div class="card-content">
                        <p class="caption mb-0">
                        <section class="users-list-wrapper section">

                            @if (session()->has('successMessage'))
                            <div class="card-alert card green lighten-5">
                                <div class="card-content green-text">
                                    <p style="color:#336600;">{!! session('successMessage') !!}</p>
                                </div>
                                <button type="button" class="close green-text" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            @endif
                            @if (session()->has('alertMessage'))
                            <div class="card-alert card orange lighten-5">
                                <div class="card-content orange-text">
                                    <p>WARNING : {!! session('alertMessage') !!}</p>
                                </div>
                                <button type="button" class="close orange-text" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            @endif
                            @if (session()->has('errorMessage'))
                            <div class="card-alert card red lighten-5">
                                <div class="card-content red-text">
                                    <p>{!! session('errorMessage') !!}</p>
                                </div>
                                <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            @endif

                            <div class="users-list-table">
                                <div class="card">
                                    <div class="card-content">
                                        <!-- datatable start -->
                                        <div class="responsive-table">
                                            <table id="data-table-simple" class="display">
                                                <thead>
                                                    <tr style="color:black">
                                                        <th>Libellé</th>
                                                        <th>Stock disponible</th>
                                                        <th>Stock de sécurité</th>
                                                        <th>Auteur</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($produits as $item)

                                                    @if ($item->available_stock <= $item->safety_stock && $item->available_stock )
                                                        <tr style="background-color: red; color: white">
                                                            <td style="background-color: red;"><span>{{ $item->label }}</span></td>
                                                            @if(!$item->available_stock)
                                                            <td><span>Pas de stock disponible</span></td>
                                                            @endif
                                                            @if($item->available_stock)
                                                            @if($item->unitemesure->label == 'Nombre')
                                                            <td><span>{{$item->available_stock}}</span></td>
                                                            @else
                                                            <td><span>{{$item->available_stock}} {{ $item->unitemesure->label }}</span></td>
                                                            @endif
                                                            @endif
                                                            @if($item->unitemesure->label == 'Nombre')
                                                            <td><span>{{ $item->safety_stock }}</span></td>
                                                            @else
                                                            <td><span>{{ $item->safety_stock }} {{ $item->unitemesure->label }}</span></td>
                                                            @endif
                                                            <td><span>{{ $item->created_by }}</span></td>

                                                            <td>
                                                                <div class="invoice-action">
                                                                    <a id="editBtn" href="{{ route('produitshow',$item->id)}} ">
                                                                        <i class="material-icons" style="color:green ;">visibility</i>
                                                                    </a>
                                                                    <a id="editBtn" href="{{ route('produit.updating',$item->id)}} ">
                                                                        <i class="material-icons" style="color:green ;">edit</i>
                                                                    </a>
                                                                    <a id="supBtn" href="#modal2" class="invoice-action-edit modal-trigger" data-id="{{ $item->id }}" data-url="{{ route('destroy.product', [$item->id]) }}">
                                                                        <i class="material-icons" style="color:red ">delete</i>
                                                                    </a>
                                                            </td>
                                                        </tr>
                                                        @else
                                                        <tr>
                                                            <td><span>{{ $item->label }}</span></td>
                                                            @if(!$item->available_stock)
                                                            <td><span>Pas de stock disponible</span></td>
                                                            @endif
                                                            @if($item->available_stock)
                                                            @if($item->unitemesure->label == 'Nombre')
                                                            <td><span>{{$item->available_stock}}</span></td>
                                                            @else
                                                            <td><span>{{$item->available_stock}} {{ $item->unitemesure->label }}</span></td>
                                                            @endif
                                                            @endif
                                                            @if($item->unitemesure->label == 'Nombre')
                                                            <td><span>{{ $item->safety_stock }}</span></td>
                                                            @else
                                                            <td><span>{{ $item->safety_stock }} {{ $item->unitemesure->label }}</span></td>
                                                            @endif
                                                            <td><span>{{ $item->created_by }}</span></td>

                                                            <td>
                                                                <div class="invoice-action">

                                                                    <div class="invoice-action">
                                                                        <a id="editBtn" href="{{ route('produitshow',$item->id)}} ">
                                                                            <i class="material-icons" style="color:green ;">visibility</i>
                                                                        </a>
                                                                        <a id="editBtn" href="{{ route('produit.updating',$item->id)}} ">
                                                                            <i class="material-icons tooltipped" data-position="top" data-tooltip="Modifier" style="color:green ;">edit</i>
                                                                        </a>
                                                                        <a id="supBtn" href="#modal2" class="invoice-action-edit modal-trigger tooltipped" data-position="top" data-tooltip="Supprimer" data-id="{{ $item->id }}" data-url="{{ route('destroy.product', [$item->id]) }}">
                                                                            <i class="material-icons" style="color:red ">delete</i>
                                                                        </a>

                                                                    </div>
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- datatable ends -->
                                    </div>
                                </div>
                            </div>

                            @include('produits.sup_message')

                        </section>
                    </div>
                </div>
            </div>


        </div>
        <div class="content-overlay"></div>
    </div>
</div>
@endsection


{{-- page script --}}
@section('scripts')
<script src="{{ asset('js/scripts/page-users.js') }}"></script>
<script>
    $(document).on('click', '#supBtn', function() {
        document.forms.deleteForm.action = $(this).attr('data-url');
    })
</script>
@endsection
