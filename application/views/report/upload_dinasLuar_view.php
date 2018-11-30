
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="nav-link" style="color:blue;"><?php echo $this->session->flashdata('message');?></h1>
			<h1 class="h2">Upload Dokumen Dinas Luar</h1>
			</div>
			
			<?php
			echo form_open('KelolaDinasLuar/upload_file');//echo"<pre>";print_r($pegawai);echo"</pre>";die();
			?>
			<table class="table table-striped table-sm">
			<tr>
				<td width="130">Kehadiran</td>
				<td>
				<div class="col-sm-4"">
					<input type="file" name="berkas">
				</div>
				</td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Upload</button>
				<?php echo anchor('KelolaDinasLuar/showMasterDinasLuar','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
				</td>
			</tr>
			</table>
			</form>
			