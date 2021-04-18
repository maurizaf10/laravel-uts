@extends('layouts.master')

@section('content')
        <h1>Edit Data Pegawai</h1>
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">               
                                 
                <form action="/pegawai/{{$pegawai->id}}/update" method="POST">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">NIP</label>
                            <input name="nip" type="text" value="{{$pegawai->nip}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Induk Pegawai">                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Pegawai</label>
                            <input name="nama_pegawai" type="text" value="{{$pegawai->nama_pegawai}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pegawai">                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input name="alamat" type="text" value="{{$pegawai->alamat}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">                            
                        </div>                  
                        <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>                
            </div>
            @endsection
        

       
        
    
