@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="main-card mb-9 card">
                <div class="card-header">Les Voyages
                    <div class="btn-actions-pane-right" >
                            <form action="{{route('search')}}" method="GET">
                                <div class="input-group">
                                    <input type="date" name="search" class="form-control">
                                    <span class="input-group-btn">
                                            &nbsp;&nbsp;<button type="submit" class="btn btn-success">search</button>
                                    </span>
</div>
                            </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">N° Voyage</th>
                            <th>N° Camion</th>

                            <th class="text-center">Date</th>
                            <th class="text-center">Poids</th>
                            <th class="text-center">Distance</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach ($TousVoy as $voyages)

                        <tr>
                            <td class="text-center text-muted">{{$voyages->NumVoy}} </td>
                            <td>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="widget-content-left">
                                                <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">{{$voyages->Num_Cam}}</div>
                                            <div class="widget-subheading opacity-7">
                                                    @if ($voyages->Num_Cam === 1)
                                                    TEREX
                                                @elseif ($voyages->Num_Cam == 2)
                                                    BULAZ
                                                @else
                                                    CAT
                                                @endif                                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">{{$voyages->Date_Debut}}</td>
                            <td class="text-center">
                                <div class="badge badge-warning">{{$voyages->Poids}} <b>KG</b></div>
                            </td>
                            <td class="text-center">
                                    {{$voyages->Distance}} <b>M</b>                                   </td>
                        </tr>@endforeach

                        </tbody>
                    </table>
                </div>
                <div class="d-block text-center card-footer">
                        
                </div>
            </div>
        </div>