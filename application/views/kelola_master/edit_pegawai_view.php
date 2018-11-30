
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="nav-link" style="color:blue;"><?php echo $this->session->flashdata('message');?></h1>
			<h1 class="h2">Pengelolaan Pegawai</h1>
			</div>
			
			<?php
			echo form_open('KelolaMaster/editPegawai');
			?>
			<table class="table table-striped table-sm">
			<input type="hidden" name="id" class="form-control" value="<?php echo $record['id']?>">
			<tr>
				<td width="130">Nama</td>
				<td>
				<div class="col-sm-4""><input type="text" name="nama" class="form-control" value="<?php echo $record['nama']?>"></div>
				</td>
			</tr>
			<tr>
				<td width="130">Alamat</td>
				<td>
				<div class="col-sm-4""><input type="text" name="alamat" class="form-control" value="<?php echo $record['alamat']?>"></div>
				</td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td>
				<div class="col-sm-4""><input type="text" name="email" class="form-control" value="<?php echo $record['email']?>"></div>
				</td>
			</tr>
			<tr>
				<td width="130">Password</td>
				<td>
				<div class="col-sm-4""><input type="text" name="password" class="form-control" value="<?php echo $record['password']?>"></div>
				</td>
			</tr>
			<tr>
				<td width="130">Telepon</td>
				<td>
				<div class="col-sm-4""><input type="text" name="telp" class="form-control" value="<?php echo $record['telp']?>"></div>
				</td>
			</tr>
			<tr>
				<td width="130">Jabatan</td>
				<td>
				<div class="col-sm-4"">
				<select name="jabatan">
				<?php echo "<option value='".$record['id_jabatan']."'>".$nama_jabatan['nama_jabatan']."</option>"; ?>
				<?php
				foreach ($jabatan as $r)
				{
					echo "<option value='".$r->id_jabatan."'>".$r->nama_jabatan."</option>";
				}
				?>
				</select>
				</div>
				</td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
				<?php echo anchor('KelolaMaster/showMasterPegawai','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
				</td>
			</tr>
			</table>
			</form>