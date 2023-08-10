@extends('backend.layout.master')

@section('title', 'Anabata')

@push('styles')
<link rel="stylesheet" href="{{ asset('backend/DataTables/datatables.min.css') }}">
@endpush

@section('content')

    <section class="content-header">
        <h1>
           User List
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
                        <table id="news-table" class="table">
                            <thead>
                                <tr>
                                    <th>No Pendaftaran</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Email Verification</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                               @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id_daftar }}</td>
                                   
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    @php
                                    if(isset($user->email_verified_at)){
                                    @endphp
                                    <td>Verified</td>
                                    @php
                                    }else{
                                    @endphp
                                     <td>unverified</td>
                                    @php
                                    }
                                    @endphp
                                    <td>
                                    <a href="{{ route('admin.users.show',$user->id) }}" class="btn btn-primary btn-flat"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                               @endforeach
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>No Pendaftaran</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Email Verification</th>
                                    <th>Action</th>
                                   
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
    <script src="{{ asset('backend/DataTables/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/DataTables/datatables.min.js') }}"></script>
    <script>
         $(document).ready(function() {
        $('#news-table').DataTable( {
        "order": [[ 1, "desc" ]]
            } );
        } );
    </script>
@endpush