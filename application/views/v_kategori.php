<h2> Kategori Obat</h2>

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
                    <th>NO</th><th>ID</th><th>NAMA KATEGORI</th> </tr>
                    
                        <?php
                        $no=0;
                        foreach ($data_kategori as $dt_kat) {
                            $no++;
                            echo  '<tr> <td>'.$no.'</td>
                            <td>'.$dt_kat->id_kategori.'</td>
                            <td>'.$dt_kat->nama_kategori.'</td> </tr>';
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
        <h4 class="modal-title">Tambah kategori</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/kategori/simpan_kategori')?>" method="post">
        Nama Kategori
        <input type="text" name="nama_kategori" class="form-control"><br>
        <input type="submit" name="simpan" value="simpan" class="btn btn-succes">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->