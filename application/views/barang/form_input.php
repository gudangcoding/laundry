<script>
	function myFunction()
		{
			alert("Data  Berhasil ditambah");
		}
		</script>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <small><font color='green'>Tambah Jasa</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                      
                            <div class="panel-body">
                                <?php echo form_open('barang/post'); ?>
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input class="form-control" name="nama_barang" placeholder="nama jasa" required>
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="kategori" class="form-control">
                                        <?php foreach ($kategori as $k) {
                                            echo "<option value='$k->kategori_id'>$k->nama_kategori</option>";
                                        } ?>
                                    </select>
                                </div>
								<div class="form-group">
                                    <label>Harga</label>
                                    <input class="form-control" name="harga" placeholder="harga" required>
                                </div>

                                <br>
								<br>
                                <button type="submit" name="submit"  onclick="myFunction()" class="btn btn-primary btn-sm">Simpan</button>
                                <?php echo anchor('barang','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->