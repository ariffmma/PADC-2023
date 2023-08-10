@extends('backend.layout.master')

@section('title', 'Anabata')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css">
@endpush

@section('content')

    <section class="content-header">
        <h1>
           Team List
            <small><a href="{{ route('team.export') }}" class="btn btn-block btn-xs btn-success btn-flat"><i class="fa fa-download"></i> Download All</a></small>
            <small><a href="{{ route('submit.export') }}" class="btn btn-block btn-xs btn-success btn-flat"><i class="fa fa-download"></i> Download Submited link</a></small>
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
                        <table id="news-table" class="table ">
                        <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Pendaftaran</th>
                                    <th>name</th>
                                    <th>Email</th>
                                    <th>NO Hp</th>
                                    <th>Universitas</th>
                                    <th>KTM</th>
                                    <th>Link</th>
                                    <!--<th>Validation</th>-->
                                </tr>
                            </thead>
                            <tbody>
                           
                               @foreach($users as $user)
                               @php 
                                    $team = DB::table('teams')->where('id_daftar',$user->id_daftar)->get();
                                                        
                                @endphp  
                                @php 
                                $i =1;
                                @endphp
                                    @foreach($team as $team)
                                    <tr>
                                        <td>{{ substr($user->id_daftar,4,3) }}</td>
                                        <td>{{ $user->id_daftar }}</td>
                                        <td>{{ $team->name }}</td>
                                        <td>{{ $team->email }}</td>
                                        <td>{{ $team->no_hp }}</td>
                                        <td>{{ $team->universitas}}</td>
                                        <td>
                                            <img src="{{  asset('/images-ktm/'.$team->ktm) }}" alt="{{ $team->ktm }}" width="120px">
                                        </td>
                                        <td>
                                            @php 
                                            if(isset($user->link)){
                                            @endphp
                                            <a href="{{ $user->link }}" class="btn btn-primary btn-flat" target="_blank"><i class="fa fa-external-link"></i></a>
                                            @php 
                                            }else{
                                            @endphp
                                                belum submit link
                                                @php
                                            }
                                            @endphp
                                        </td>
                                        <!--<td>-->
                                            @php
                                            if($user->status == 1){
                                            @endphp
                                        <!--    <a  href="javascript:void(0)" class="btn btn-success btn-flat" onclick="event.preventDefault();-->
                                        <!--              document.getElementById('yes-form-{{$user->id_daftar}}').submit();"-->
                                        <!--       title="click to unfeatured the post">-->
                                        <!--       <i class="material-icons">check</i>-->
                                        <!--    </a>-->
                                            @php
                                            } else{
                                            @endphp
                                        <!--    <a  href="javascript:void(0)" href="" class="btn btn-info btn-flat" onclick="event.preventDefault();-->
                                        <!--              document.getElementById('no-form-{{$user->id_daftar}}').submit();"-->
                                        <!--         title="click to featured the post">-->
                                        <!--       <i class="material-icons">Validate</i>-->
                                        <!--    </a>-->
                                            @php
                                            } 
                                            @endphp
              
                                        <!--    <form id="yes-form-{{$user->id_daftar}}" action="{{ route('admin.users.unfeatured',$user->id_daftar)}}" method="POST" style="display: none;">-->
                                        <!--        @csrf                   -->
                                        <!--    </form>-->
                                        <!--    <form id="no-form-{{$user->id_daftar}}" action="{{ route('admin.users.unfeatured',$user->id_daftar)}}" method="POST" style="display: none;">-->
                                        <!--        @csrf                   -->
                                        <!--    </form>-->
                                        <!--</td>-->
                                          
                                    </tr>
                                  @endforeach
                                     
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                   <th>No</th>
                                <th>No Pendaftaran</th>
                                    <th>name</th>
                                    <th>Email</th>
                                    <th>NO Hp</th>
                                    <th>Universitas</th>
                                    <th>KTM</th>
                                    <th>Link</th>
                                    <!--<th>Validation</th>-->
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
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
<script src="https://cdn.rawgit.com/ashl1/datatables-rowsgroup/fbd569b8768155c7a9a62568e66a64115887d7d0/dataTables.rowsGroup.js"></script>
    <script>
         $(document).ready(function() {
        $('#news-table').DataTable( {
           
             'rowsGroup': [0,1,5,7]
            } );
        } );


    </script>
@endpush