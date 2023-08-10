
                        <table id="news-table" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Pendaftaran</th>
                                    <th style="width:200px;">name</th>
                                    <th style="width:200px;">Email</th>
                                    <th style="width:100px;">NO Hp</th>
                                    <th style="width:150px;">Universitas</th>
                                    <th style="width:500px;">KTM</th>
                                    <th style="width:400px;">Link</th>

                                </tr>
                            </thead>

                            <tbody>
                                @php 
                                $i =1;
                                @endphp
                               @foreach($users as $user)
                               @php 
                                    $team = DB::table('teams')->where('id_daftar',$user->id_daftar)->first();
                                    $team2 = DB::table('teams')->where('id_daftar',$user->id_daftar)->where('id','!=',$team->id)->first();                    
                                @endphp  

                                    <tr>
                                    <th rowspan="2">{{ $i++ }}</th>
                                        <th rowspan="2">{{ $user->id_daftar }}</th>
                                        <td>{{ $team->name }}</td>
                                        <td>{{ $team->email }}</td>
                                        <td>{{ $team->no_hp }}</td>
                                        <td>{{ $team->universitas}}</td>
                                        <td>
                                            {{  asset('/images-ktm/'.$team->ktm) }}
                                        </td>
                                         <th rowspan="2">{{ $user->link }}</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $team2->name }}</td>
                                        <td>{{ $team2->email }}</td>
                                        <td>{{ $team2->no_hp }}</td>
                                        <td>{{ $team2->universitas}}</td>
                                        <td>
                                           {{  asset('/images-ktm/'.$team2->ktm) }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                            
                        </table>
                    