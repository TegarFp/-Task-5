@extends('layout.default')

@section('title', 'Dashboard')
@section('judul', 'Participant')


@section('content')
  <div id="flash" data-flash="{{session()->get('success')}}"></div>
<div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="float-right">
          <a data-toggle="modal" data-target="#exampleModal" class="btn btn-success"><i class="fa fa-plus"></i>&ensp; Tambah Data</a>
        </div>
        <h4>Tabel Participant</h4>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Sekolah</th>
              <th>Program</th>
              <th>Angkatan</th>
              <th>Skor</th>
              <th style="width: 220px">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($pengunjung as $row)
            <tr>

              <td>{{$loop->iteration}}</td>
              <td>{{$row->nama}}</td>
              <td>{{$row->sekolah}}</td>
              <td>{{$row->program}}</td>
              <td>Batch {{$row->angkatan}}</td>
              <td>{{$row->skor}}</td>
              <td class="text-center">
                <a class="btn btn-success" data-toggle="modal" data-target="#modal-edit{{$row->id}}"><i class="fa fa-pencil-alt"></i>&ensp;Edit</a>
                  <a id="btn-hapus" class="btn btn-danger"href="{{url('delete-participant/'.$row->id)}}"><i class="fa fa-trash"></i>&ensp;Delete</a>
              </td>

            </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Participant</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form class="" action="{{url('participant')}}" method="post">
            @csrf
            <label>Nama</label>
            <input type="text" class="form-control" name="nama">
            <label>Sekolah</label>
            <input type="text" class="form-control" name="sekolah">
            <label>Program</label>
            <select class="form-control" name="program">
              <option value="web">Web</option>
              <option value="ui/ux">UI/UX</option>
              <option value="flutter">Flutter</option>
            </select>
            <label>Angkatan</label>
            <input type="text" class="form-control" name="angkatan" placeholder="Ex : 2">
            <label>Skor</label>
            <input type="text" class="form-control" name="skor" >
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-info">Save changes</button>
        </div>
          </form>
      </div>
    </div>
  </div>
  @foreach ($pengunjung as $key => $value)
    <div class="modal fade" id="modal-edit{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Participant</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="" action="{{url('update-participant/'. $value->id)}}" method="post">
              @csrf
              @method('PUT')
              <label>Nama</label>
              <input type="text" class="form-control" name="nama" value="{{$value->nama}}">
              <label>Sekolah</label>
              <input type="text" class="form-control" name="sekolah" value="{{$value->sekolah}}">
              <label>Program</label>
              <select class="form-control" name="program">
                <option value="web">Web</option>
                <option value="ui/ux">UI/UX</option>
                <option value="flutter">Flutter</option>
              </select>
              <label>Angkatan</label>
              <input type="text" class="form-control" name="angkatan" value="{{$value->angkatan}}">
              <label>Skor</label>
              <input type="text" class="form-control" name="skor" value="{{$value->skor}}">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Save changes</button>
          </div>
            </form>
        </div>
      </div>
    </div>
  @endforeach
