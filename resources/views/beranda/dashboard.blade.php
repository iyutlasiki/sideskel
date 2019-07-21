@extends('beranda/template')
@section('main-beranda')
        <div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-lg-12">

                        <h2 class="site-heading text-center text-black mb-2 mt-5 mt-md-2 mt-xl-0"><strong>DASHBOARD PENGGUNA</strong></h2>

                        <div class="non-home p-5 bg-white">

                        @include('pesan.pesan_info')

                            <table class="table">
                                <tr>
                                    <td class="font-weight-bold text-center">PROFIL</td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ asset('assets-dashboard/images/logo-sideskel.png') }}" width="200">
                                    </td>
                                </tr>
                            </table>

                            <h5 class="text-center mt-3 float-left">DAFTAR ARTIKEL</h5>
                            <a href="{{ url('beranda/dashboard/tambah') }}" class="btn btn-primary btn-sm d-inline-block my-1 float-right"><i class="fa fa-plus fa-lg"></i> </a>
                            
                            
                            <table class="table table-hover">
                                <tr>
                                    <th class="font-weight-bold text-center">NO</th>
                                    <th class="font-weight-bold text-center">JUDUL</th>
                                    <th class="font-weight-bold text-center">AKSI</th>
                                </tr>
                                <?php $i=1 ?>
                                @foreach($daftar_artikel as $artikel)
                                <tr>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td class="text-center">{{ $artikel->judul_artikel }}</td>
                                    <td class="text-center">
                                            <a href="{{ url('beranda/dashboard/'.$artikel->id.'/edit') }}" class="btn btn-success btn-sm d-inline-block my-1"><i class="fa fa-edit fa-lg"></i> </a>
                                            {!! Form::open(['url' => 'beranda/dashboard/'.$artikel->id , 'method' => 'delete', 'class' =>                                          'd-inline']) !!}
                                                                <button type="submit" class="btn btn-danger btn-sm">
                                                                     <i class="fa fa-trash fa-lg"></i> 
                                                                </button>
                                                            {!! Form::close() !!}

                                        </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop