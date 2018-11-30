
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="nav-link" style="color:blue;"><?php echo $this->session->flashdata('message');?></h1>
			<h1 class="h2">Pengelolaan Inventaris</h1>
			</div>
			
			<?php
			echo form_open('KelolaMaster/editInventaris');
			?>
			<table class="table table-striped table-sm">
			<input type="hidden" name="id" class="form-control" value="<?php echo $record['id']?>">
			<tr>
				<td width="130">Nama Inventaris</td>
				<td>
				<div class="col-sm-4""><input type="text" name="nama_inventari" class="form-control" value="<?php echo $record['nama_inventari']?>"></div>
				</td>
			</tr>
			<tr>
				<td width="130">Merk</td>
				<td>
				<div class="col-sm-4""><input type="text" name="merk" class="form-control" value="<?php echo $record['merk']?>"></div>
				</td>
			</tr>
			<tr>
				<td width="130">Kategori</td>
				<td>
				<div class="col-sm-4""><input type="text" name="kategori" class="form-control" value="<?php echo $record['kategori']?>"></div>
				</td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
				<?php echo anchor('KelolaMaster/showMasterInventaris','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
				</td>
			</tr>
			</table>
			</form>