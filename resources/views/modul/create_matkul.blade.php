@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <div class="row">
                <div class="col">
                    <h3>Kelola Mata Kuliah</h3>
                </div>
            </div>
            <form action="{{route('matkul.store')}}" method="post">
                @csrf
                <div class="row mt-4">
                    <div class="col">
                        <div class="form-group">
                            <label for="" style="font-weight:bold;">Nama</label>
                            <input type="text" class="form-control" id="nama" aria-describedby="namaHelp" value="" name="name">
                        </div>
                        <button type="submit" class="btn btn-primary" style="float:right; width:25%;">Tambahkan</button>      
                    </div>
                </div>
            </form>
            <div class="row mt-2">
                <h3>
                   @foreach($matkul as $matkuls) 
                    <ul>
                        <li style="margin:20px 0;">
                            <a href="">{{$matkuls->name}}</a><br>
                            <!--small><a data-toggle="modal" href="#editMk1">Edit</a>&nbsp;<a href=""></a></small-->
                            <small><a href="/edit-matkul/sis-infor-akun">Edit</a>&nbsp;<a href=""></a></small>
                         </li>
                    </ul>
                   @endforeach 
                </h3>
            </div>
            <div class="mt-3">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </div>
            <div class="row mt-2">
                <a href="/home" class="btn btn-primary" style="float:right; width:25%;">Kembali</a>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>
<!--div class="modal fade" id="editMk1" tabindex="-1" role="dialog" aria-labelledby="editMk1Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Edit Mata Kuliah</h4>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" style="font-weight:bold;">Nama</label>
                            <input type="text" class="form-control" id="nama" aria-describedby="namaHelp" value="Sistem Informasi Akuntansi">
                        </div>
                        <button type="button" class="btn btn-primary" style="float:right; width:25%;">Ubah</button>      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div-->
@endsection