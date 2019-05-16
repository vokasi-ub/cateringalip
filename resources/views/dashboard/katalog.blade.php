@extends('layouts.master')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">KATALOG</h3>
              <form action="" class="sidebar-form">
                  <div class="input-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Search...">
                      <span class="input-group-btn">
                      <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                      </button>
                      </span>
                  </div>
              </form>
              <a href="{{url('tambahdatakatalog')}}"> Create </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered" style="width: auto">
                <tr>
                  <th>ID Katalog</th>
                  <th>Jenis Kategori</th>
                  <th>Nama Menu</th>
                  <th>Bentuk</th>
                  <th>Deskripsi</th>
                  <th>Harga</th>
                  <th>Options</th>
                </tr>
                <?php $no=1; ?>
                @foreach ($datakatalog as $row)
                <tr>
                    <th>{{ $row->idkatalog }}</th>
                    <th>{{ $row->get_kategori->jenis_kategori}}</th>
                    <th>{{ $row->namamenu}}</th>
                    <th>{{ $row->pict }}</th>
                    <th>{{ $row->deskripsi }}</th>
                    <th>{{ $row->harga }}</th>
                    <th> 
                        <a href="editkatalog/{{$row->idkatalog}}">Edit</a>
                        <a href="hapuskatalog/{{$row->idkatalog}}">Delete</a>
                    </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
</section>
          <!-- /.box -->
@endsection

