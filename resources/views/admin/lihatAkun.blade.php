@extends('master')
@section('content')
    <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kata Sandi</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->nama }}</td>
                                <td>*********</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <form action="{{ route('admin.reset-password', $user->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button class="btn btn-secondary"
                                            onclick="return confirm('Reset password user ini?')">Reset</button>
                                    </form>
                                    <form action="{{ route('admin.delete-user', $user->id) }}" method="post" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus user ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
@endsection