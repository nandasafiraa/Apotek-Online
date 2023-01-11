<h2>Obat</h2>
<div class="graphs">
        <div class="col_3">
            
            <div class="col-md-3 widget widget1">
                
            </div>
             </div>
             <div class= "body">
                <div class="row">
                <a href="#tambah" class="btn btn-info" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> tambah</a>
                <table class="table
                table-hover
                table-striped">
                <tr>
                    <th>NO</th><th>ID</th><th>NAMA BARANG</th><th>HARGA</th><th>STOK</th><th>ID_KATEGORI</th><th>GAMBAR</th><th>AKSI</th> </tr>
                    
                        <?php
                        $no=0;
                        foreach ($data_barang as $dt_bar) {
                            $no++;
                            echo  '<tr> <td>'.$no.'</td>
                            <td>'.$dt_bar->id_barang.'</td>
                            <td>'.$dt_bar->nama_barang.'</td>
                            <td>'.$dt_bar->harga.'</td> 
                            <td>'.$dt_bar->stok.'</td>
                            <td>'.$dt_bar->nama_kategori.'</td>
                            <td><img src="'.base_url("assets/gambar/".$dt_bar->gambar).'" width="120" height="100"</td>
                            <td><a href="#update_barang" class="btn btn-warning" data-toggle="modal" 
                            onclick="tm_detail('.$dt_bar->id_barang.')">update</a>
                            <a href=' .base_url('index.php/barang/deleteBarang/') .$dt_bar->id_barang.' onclick="return confirm (\'anda yakin?\')" class= "btn btn-success" >delete</a>
                            </td>
                            </tr>';
                        }
                        ?>
                
                 </table>
                 <?php if ($this->session->flashdata('pesan')!=null): ?>
                     
                 
                <div class="alaert alaert-danger"><?=$this->session->flashdata('pesan');?></div>
                <?php endif ?> 
            <div class="clearfix"> </div>
      </div>
        <div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Tambah barang</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/barang/simpan_barang')?>" method="post" enctype="multipart/form-data">
        <input  type="text" name="nama_barang" class="form-control" placeholder="nama barang"><br>
        <input type="text" name="harga" class="form-control" placeholder="harga"><br>
        <input type="text" name="stok" class="form-control" placeholder="stok"><br>
        <select  name="id_kategori" class="form-control"> 
          <?php foreach ($data_kategori as $kat):
            echo "<option value='".$kat->id_kategori."'>".$kat->nama_kategori."</option>";
            
          endforeach ?>

        </select><br>
        <input type="file" name="gambar" class="form-control">
        <input type="submit" name="simpan" value="simpan" class="btn btn-succes">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

 <div class="modal fade" id="update_barang">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">update barang</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/barang/update_barang')?>" method="post" enctype="multipart/form-data"> <input type="hidden" name="id_barang" id="id_barang" >
        <input id="nama_barang"type="text" name="nama_barang" class="form-control" placeholder="nama barang"><br>
        <input id="harga" type="text" name="harga" class="form-control" placeholder="harga"><br>
        <input id="stok" type="text" name="stok" class="form-control" placeholder="stok"><br>
        <select id="id_kategori" name="id_kategori" class="form-control"> 
          <?php foreach ($data_kategori as $kat):
            echo "<option value='".$kat->id_kategori."'>".$kat->nama_kategori."</option>";
            
          endforeach ?>
        </select><br>
        upload gambar
        <input type="file" name="gambar" class="form-control">
        <input type="submit" name="simpan" value="simpan" class="btn btn-succes">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<script>
  function tm_detail(id_brng) {
   $.getJSON("<?=base_url()?>index.php/barang/get_detail_barang/" +id_brng,function(data){
    $("#id_barang").val(data['id_barang']);
    $("#nama_barang").val(data['nama_barang']);
    $("#harga").val(data['harga']);
    $("#stok").val(data['stok']);
    $("#id_kategori").val(data['id_kategori']);
   });
 }
  </script>