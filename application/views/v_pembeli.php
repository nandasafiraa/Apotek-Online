<h2> Data Pembeli </h2>

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
                    <th>NO</th><th>ID</th><th>NAMA PEMBELI</th><th>ALAMAT</th><th>NO TELP</th><th>USERNAME</th><th>PASSWORD</th><th>AKSI</th> </tr>
                    
                        <?php
                        $no=0;
                        foreach ($data_pembeli as $dt_pem) {
                            $no++;
                            echo  '<tr> <td>'.$no.'</td>
                            <td>'.$dt_pem->id_pembeli.'</td>
                            <td>'.$dt_pem->nama_pembeli.'</td>
                            <td>'.$dt_pem->alamat.'</td> 
                            <td>'.$dt_pem->no_telp.'</td>
                            <td>'.$dt_pem->username.'</td>
                            <td>'.$dt_pem->password.'</td>
                            <td><a href="#update_pembeli" class="btn btn-warning" data-toggle="modal" 
                            onclick="tm_detail('.$dt_pem->id_pembeli.')">update</a>
                            <a href=' .base_url('index.php/pembeli/deletePembeli/') .$dt_pem->id_pembeli.' onclick="return confirm (\'anda yakin?\')" class= "btn btn-success" >delete</a>
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
        <h4 class="modal-title">Tambah pembeli</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/pembeli/simpan_pembeli')?>" method="post">
        <input  type="text" name="nama_pembeli" class="form-control" placeholder="nama pembeli"><br>
        <input type="text" name="alamat" class="form-control" placeholder="alamat"><br>
        <input type="text" name="no_telp" class="form-control" placeholder="no_telp"><br>
        <input type="text" name="username" class="form-control" placeholder="username"><br>
        <input type="text" name="password" class="form-control" placeholder="password"><br> 
        </select><br>
        <input type="submit" name="simpan" value="simpan" class="btn btn-succes">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="" lass="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

 <div class="modal fade" id="update_pembeli">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">update pembeli</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/pembeli/update_pembeli')?>" method="post"> <input type="hidden" name="id_pembeli" id="id_pembeli">
        <input id="nama_pembeli"type="text" name="nama_pembeli" class="form-control" placeholder="nama pembeli"><br>
        <input id="alamat" type="text" name="alamat" class="form-control" placeholder="alamat"><br>
        <input id="no_telp" type="text" name="no_telp" class="form-control" placeholder="no_telp"><br>
        <input id="username" type="text" name="username" class="form-control" placeholder="username"><br>
        <input id="password" type="text" name="password" class="form-control" placeholder="password"><br>
         
        
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
  function tm_detail(id_pmbl) {
   $.getJSON("<?=base_url()?>index.php/pembeli/get_detail_pembeli/" +id_pmbl,function(data){
    $("#id_pembeli").val(data['id_pembeli']);
    $("#nama_pembeli").val(data['nama_pembeli']);
    $("#alamat").val(data['alamat']);
    $("#no_telp").val(data['no_telp']);
    $("#username").val(data['username']);
    $("#password").val(data['password']);
   });
 }
  </script>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 