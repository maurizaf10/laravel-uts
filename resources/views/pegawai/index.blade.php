@extends('layouts.master')

@section('content')
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
            <div class="row ">
                <div class="col-6 mb-1">
                    <h2>Data Pegawai</h2>                
                </div>
                <div class="col-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data Pegawai
                    </button>
                </div>
                <table class="table table-hover">
                    <tr>
                        <th>NIP</th>
                        <th>NAMA PEGAWAI</th>
                        <th>ALAMAT</th>
                        <th>AKSI</th>
                    </tr>
                    @foreach($data_pegawai as $pegawai)
                    <tr>
                        <td>{{ $pegawai->nip }}</td>
                        <td>{{ $pegawai->nama_pegawai }}</td>
                        <td>{{ $pegawai->alamat }}</td>
                        <td>
                            <a href="/pegawai/{{$pegawai->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/pegawai/{{$pegawai->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin mau dihapus?')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/pegawai/create" method="POST">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">NIP</label>
                            <input name="nip" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Induk Pegawai">                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Pegawai</label>
                            <input name="nama_pegawai" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pegawai">                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">                            
                        </div>     
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
@endsection
        
    
