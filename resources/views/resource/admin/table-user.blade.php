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
                            <th>Aksi</th>
                        </tr>
                        <?php $no = 1; ?>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->level}}</td>
                            <td>
                                <button class="btn btn-success">UPDATE</button>
                                <button class="btn btn-danger">DELETE</button>
                            </td>
                        </tr>
                        <?php $no++; ?>
                        @endforeach
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>