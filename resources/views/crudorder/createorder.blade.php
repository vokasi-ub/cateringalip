@extends('layouts.master')
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
			 <div class="box">
	   <form action="{{url('tambahorder')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> Create Orderan</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
		<div class="box-body">
        <div class="box-body">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-tags"></i>Nama Menu </span>
                  <select name="idkatalog_fk" class="form-control">
                      @foreach ($dataa as $row)
                    <option   value="{{ $row->idkatalog}}">{{ $row->namamenu}}</option>
                    @endforeach
                  </select>
                </div></div>        
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Atas Nama </span>
                    <input title="Atas Nama"type="text" name="atasnama" autocomplete="off" required class="form-control">
			</div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Nomor HP </span>
                    <input title="Nomor HP"type="text" name="nohp" autocomplete="off" required class="form-control">
			</div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Alamat </span>
                    <input title="Alamat"type="text" name="alamat" autocomplete="off" required class="form-control">
			</div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Jumlah </span>
                    <input title="Jumlah"type="text" name="jumlah" autocomplete="off" required class="form-control">
			</div><br>
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Tanggal Order </span>
                    <input title="Tanggal Order"type="date" name="tgl_order" autocomplete="off" required class="form-control">
			</div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Tanggal Ambil </span>
                    <input title="Tanggal Ambil"type="text" name="tgl_ambil" autocomplete="off" required class="form-control">
			</div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Harga Satuan </span>
                    <input title="Harga Satuan"type="text" name="harga_satuan" autocomplete="off" required class="form-control">
			</div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Harga Total </span>
                    <input title="Harga Total"type="text" name="harga_total" autocomplete="off" required class="form-control">
			</div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Status Transaksi </span>
                    <input title="Status Transaksi"type="text" name="statustransaksi" autocomplete="off" required class="form-control">
			</div><br>
		</div>
        <div class="box-footer">
			<div class="col-md-offset-10 col-md-9">			
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
			</div>
		
        </div>
		</form>
		</div>
      </div>
      </div>
</section>
          <!-- /.box -->
@endsection