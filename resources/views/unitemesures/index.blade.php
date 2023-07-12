@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6">
                        <h5 class="breadcrumbs-title mt-0 mb-0"><span>Liste des unités de mesures</span></h5>

                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="/">Acceuil</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('produits.index') }}">Cuisine</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('unites.index') }}">Unité de mesures</a></li>
                            <li class="breadcrumb-item active"><a href="#">Liste</a></li>
                        </ol>
                    </div>
                    <a class="col s2 m6 l6"><a id="addunite" class="btn-floating  waves-effect waves-light breadcrumbs-btn right mr-1 mb-1 modal-trigger btn-large" href="#modal1"
                            ><i class="material-icons tooltipped" data-position="top" data-tooltip="Ajouter">add</i></a>
                    </a>
                    <a href="{{backUrl()}}" class="waves-effect waves-light btn gradient-45deg-deep-purple- z-depth-4 mt-2 mr-2 right">RETOUR</a>

                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <div class="section">
                    <div class="card">
                        <div class="card-content">
                            <div class="responsive-table" style="color:black">
                                <table id="" class="display">

                                    <thead>
                                        <tr>
                                            <th style="font-size: 18px; color:#191970;font-weight: bold; text-align: left">Unité</th>

                                            <th style="font-size: 18px; color:#191970;font-weight: bold; text-align: right">Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($unites as $item)
                                            <tr>
                                                <td style="text-align: left">
                                                    <span>{{ $item->label }}</span>
                                                </td>

                                                <td style="text-align: right">
                                                    <div class="invoice-action">
                                                        <a id="editBtn" href="#modal1" class="invoice-action-edit modal-trigger tooltipped" data-position="top" data-tooltip="éditer"
                                                            data-id="{{ $item->id }}" data-labels="{{ $item->label }}"
                                                            data-url="{{ route('unites.update', $item->id) }}">
                                                            <i class="material-icons" style="color:green">edit</i>
                                                        </a>
                                                        <a id="supBtn" href="#modal2" class="invoice-action-edit modal-trigger tooltipped" data-position="top" data-tooltip="supprimer"
                                                            data-id="{{ $item->id }}"
                                                            data-url="{{ route('unites.delete', $item->id) }}">
                                                            <i class="material-icons" style="color:red">delete</i>
                                                        </a>

                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
    @include('unitemesures.add')
    @include('unitemesures.delete')
@endsection
@section('scripts')
@include('unitemesures.js')
@endsection
