
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="nav-link" style="color:blue;"><?php echo $this->session->flashdata('message');?></h1>
			<h1 class="h2">Pengelolaan Pagu</h1>
			</div>
			
			<?php
			echo form_open('KelolaMaster/editPagu');
			?>
			<table class="table table-striped table-sm">
			<input type="hidden" name="id" class="form-control" value="<?php echo $record['id']?>">
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
				<td width="130">Kehadiran</td>
				<td>
				<div class="col-sm-4"">
				<select name="kehadiran">
				<?php echo "<option value='".$record['id_kehadiran']."'>".$nama_kehadiran['nama_kehadiran']."</option>"; ?>
				<?php
				foreach ($kehadiran as $r)
				{
					echo "<option value='".$r->id."'>".$r->nama_kehadiran."</option>";
				}
				?>
				</select>
				</div>
				</td>
			</tr>
			<tr>
				<td width="130">Kebijakan</td>
				<td>
				<div class="col-sm-4""><input type="text" name="kebijakan" class="form-control" value="<?php echo $record['kebijakan']?>"></div>
				</td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
				<?php echo anchor('KelolaMaster/showMasterPagu','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
				</td>
			</tr>
			</table>
			</form>