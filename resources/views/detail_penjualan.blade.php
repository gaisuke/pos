@extends('layout.app')
@section('title','POS')
@section('fitur','Detail Penjualan')
@section('content')
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Tabel <span class="table-project-n">Penjualan</span></h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                       data-toolbar="#toolbar">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Faktur</th>
                                        <th>Tanggal</th>
                                        <th>Customer</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 0?>
                                    @foreach($penjualan as $item)
                                        <?php
                                        $no++?>
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$item->id_penjualan}}</td>
                                            <td>{{$item->tanggal}}</td>
                                            <td>{{$item->nama}}</td>
                                            <td>{{$item->total}}</td>
                                            <td>
                                                <form action="#" method="get"
                                                      style="display: inline">
                                                    <button class="btn btn-primary" style="width: 37px;">
                                                        <i class="fa fa-pencil-square-o"></i>
                                                    </button>
                                                </form>
                                                <form action="http://c.pbf.ilkom.unej.ac.id/162410101009/pos/public/penjualan/detail/{{$item->id_penjualan}}" method="GET"
                                                      style="display: inline">
                                                    <button class="btn btn-success">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </form>
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
        </div>
    </div>
@endsection