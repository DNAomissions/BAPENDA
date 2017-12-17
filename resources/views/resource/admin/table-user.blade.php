<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="text-left"><i class="fa fa-fw fa-table"></i>&nbsp;Tabel User</h3>
    </div>
    <div class="panel-body">
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-bordered" id="tableUser">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Level</th>
                            <!--<th>Aksi</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->level->level}}</td>
                            <!--<td>
                                <a href="/edit/user/{{$user->id}}" class="btn btn-success">EDIT</a>
                                <a href="/delete/user/{{$user->id}}" class="btn btn-danger">DELETE</a>
                            </td>-->
                        </tr>
                        <?php $no++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>