@extends('template')
@section('main-dashboard')
<!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">PENDUDUK</strong>
                                <a href="#" class="btn btn-danger btn-sm float-right mx-1" data-toggle="modal" data-target="#confirm-delete">HAPUS</a>
                                <a href="{{ url('penduduk/'.$penduduk->id.'/edit') }}" class="btn btn-info btn-sm float-right mx-1"> EDIT </a>
                                <a href="{{ url('penduduk/create') }}" class="btn btn-primary btn-sm float-right mx-1"> TAMBAH </a>
                                <a href="{{ url('penduduk') }}" class="btn btn-secondary btn-sm float-right mx-1"> KEMBALI </a>

<div class="modal fade text-danger" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <i class="fa fa-exclamation-circle fa-lg"></i> PERINGATAN!
            </div>
            <div class="modal-body">
                APAKAH YAKIN AKAN MENGHAPUS DATA INI ? 
                <br><br><br>
                *) Data yang sudah dihapus tidak bisa dikembalikan lagi
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">BATAL</button>
                {!! Form::open(['url' => 'penduduk/'.$penduduk->id, 'method' => 'delete', 'class' => 'd-inline']) !!}
                    {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table">
                                    <tr>
                                        <th class="text-center">FOTO</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center"> <img src="{{ asset('assets-dashboard/images/'.$penduduk->foto_penduduk) }}"
                                                width="300"> </td>
                                    </tr>
                                </table>
                                <table class="table">
                                    <tr>
                                        <td>NIK</td>
                                        <th> {{ $penduduk->nik }} </th>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <th>{{ $penduduk->nama_penduduk }}</th>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <th>{{ $penduduk->alamat_penduduk }}</th>
                                    </tr>
                                    <tr>
                                        <td>Menikah</td>
                                        <th class="text-uppercase">{{ $penduduk->status_menikah }}</th>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <th>
                                            {{ $penduduk->tempat_lahir }}
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <th>
                                            {{ $penduduk->tanggal_lahir }}
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan</td>
                                        <th>
                                            {{ $penduduk->pekerjaan }}
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Agama</td>
                                        <th class="text-uppercase">
                                            {{ $penduduk->agama }}
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Pendidikan Terakhir</td>
                                        <th class="text-uppercase">
                                            {{ $penduduk->pendidikan_terakhir }}
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Golongan Darah</td>
                                        <th class="text-uppercase">
                                            {{ $penduduk->golongan_darah }}
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>
        
        @include('footer')
        
    </div>
    <!-- /#right-panel -->
@stop