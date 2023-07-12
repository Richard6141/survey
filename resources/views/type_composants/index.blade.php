@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6">
                        <h5 class="breadcrumbs-title mt-0 mb-0"><span>Liste des types composants</span></h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="/">Acceuil</a>
                            </li>
                            <li class="breadcrumb-item active">Types composants
                            </li>
                        </ol>
                    </div>
                    <a class="col s2 m6 l6"><a class="btn-floating  waves-effect waves-light breadcrumbs-btn right mr-1 mb-1 modal-trigger btn-large" href="#modal1"
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
                                <table id="data-table-simple" class="display" style="width: 100%;">

                                    <thead>
                                        <tr>
                                            <th style="font-size: 18px; color:#191970;font-weight: bold; text-align: left">Type du composant</th>

                                            <th style="font-size: 18px; color:#191970;font-weight: bold; text-align: right">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($Types_composants as $Type_composants)
                                            <tr>
                                                <td style="text-align: left">
                                                    <span>{{ $Type_composants->label }}</span>
                                                </td>

                                                <td style="text-align: right">
                                                    <div class="invoice-action">
                                                        <a id="editBtn" href="#modal1" class="invoice-action-edit modal-trigger tooltipped" data-position="top" data-tooltip="éditer"
                                                            data-id="{{ $Type_composants->id }}" data-label="{{ $Type_composants->label }}"
                                                            data-url="{{ route('typecomposant.updatecomposant', $Type_composants->id) }}">
                                                            <i class="material-icons" style="color:green">edit</i>
                                                        </a>
                                                        <a id="supBtn" href="#modal2" class="invoice-action-edit modal-trigger tooltipped" data-position="top" data-tooltip="supprimer"
                                                            data-id="{{ $Type_composants->id }}"
                                                            data-url="{{ route('typecomposant.sup', $Type_composants->id) }}">
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
    @include('type_composants.add')
    @include('type_composants.delete')
@endsection
@section('scripts')
@include('type_composants.js')
@endsection
