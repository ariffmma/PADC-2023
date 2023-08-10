@extends('backend.layout.master')

@section('title', 'Anabata')

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@section('content')

    <section class="content-header">
        <h1>
           Team List
            <!-- <small><a href="" class="btn btn-block btn-xs btn-success btn-flat"><i class="fa fa-plus"></i> CREATE</a></small> -->
        </h1>
        
      </section>

    <section class="content">
        <div class="row">

            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Hover Data Table</h3>
                    </div>

                    <div class="box-body">
                        <table id="news-table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No Pendaftaran</th>
                                    <th>name</th>
                                    <th>Email</th>
                                    <th>NO Hp</th>
                                    <th>Universitas</th>
                                    <th>KTM</th>
                                   
                                </tr>
                            </thead>

                            <tbody>
                               @foreach($teams as $user)
                                <tr>
                                    <td>{{ $user->id_daftar }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->no_hp }}</td>
                                    <td>{{ $user->universitas}}</td>
                                    <td>
                                        <img src="{{  asset('/images-ktm/'.$user->ktm) }}" alt="{{ $user->ktm }}" width="120px">
                                    </td>
                                   
                                </tr>
                               @endforeach
                            </tbody>

                            <tfoot>
                                <tr>
                                <th>No Pendaftaran</th>
                                    <th>name</th>
                                    <th>Email</th>
                                    <th>NO Hp</th>
                                    <th>Universitas</th>
                                    <th>KTM</th>
                                 
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection

@push('scripts')
    <script src="{{ asset('backend/components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $.extend( true, $.fn.dataTable.defaults, {
            "searching": false,
            "ordering": false
        } );
        $(function(){
            $('#news-table').DataTable();
        })
    </script>
@endpush