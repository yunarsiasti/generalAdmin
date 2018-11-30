
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="nav-link" style="color:blue;"><?php echo $this->session->flashdata('message');?></h1>
			<h1 class="h2">Pengelolaan Kehadiran</h1>
			</div>
			
			<?php
			echo form_open('KelolaMaster/editKehadiran');
			?>
			<table class="table table-striped table-sm">
			<input type="hidden" name="id" class="form-control" value="<?php echo $record['id']?>">
			<tr>
				<td width="130">Nama Kehadiran</td>
				<td>
				<div class="col-sm-4""><input type="text" name="nama_kehadiran" class="form-control" value="<?php echo $record['nama_kehadiran']?>"></div>
				</td>
			</tr>
			<tr>
				<td width="130">Status Kehadiran</td>
				<td>
				<div class="col-sm-4""><input type="text" name="status_kehadiran" class="form-control" value="<?php echo $record['status_kehadiran']?>"></div>
				</td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
				<?php echo anchor('KelolaMaster/showMasterKehadiran','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
				</td>
			</tr>
			</table>
			</form>