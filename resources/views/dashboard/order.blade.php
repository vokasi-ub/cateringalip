@extends('layouts.master')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA ORDERAN</h3>
              <form action=""  class="sidebar-form">
                  <div class="input-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Search...">
                      <span class="input-group-btn">
                      <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                      </button>
                      </span>
                  </div>
              </form>
              <a href="{{url('tambahdataorder')}}"> Create </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered" style="width: auto">
                <tr>
                  <th>ID Order</th>
                  <th>Atas Nama</th>
                  <th>No HP</th>
                  <th>Alamat</th>
                  <th>Nama Menu</th>
                  <th>Jumlah</th>
                  <th>Tanggal Order</th>
                  <th>Tanggal Ambil</th>
                  <th>Harga Satuan</th>
                  <th>Harga Total</th>
                  <th>Status Transaksi</th>
                  <th>Options</th>
                </tr>
                
                <?php $no=1; ?>
                @foreach ($dataorder as $row)
                <tr>
                    <th>{{ $row->id_order }}</th>
                    <th>{{ $row->atasnama }}</th>
                    <th>{{ $row->nohp }}</th>
                    <th>{{ $row->alamat }}</th>
                    <th>{{ $row->get_katalog->namamenu}}</th>
                    <th>{{ $row->jumlah }}</th>
                    <th>{{ $row->tgl_order }}</th>
                    <th>{{ $row->tgl_ambil }}</th>
                    <th>{{ $row->harga_satuan }}</th>
                    <th>{{ $row->harga_total }}</th>
                    <th>{{ $row->statustransaksi }}</th>
                    <th> 
                        <a href="editorder/{{$row->id_order}}">Edit</a>
                        <a href="hapusorder/{{$row->id_order}}">Delete</a>
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

