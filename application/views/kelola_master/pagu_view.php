
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="nav-link" style="color:blue;"><?php echo $this->session->flashdata('message');?></h1>
			<h1 class="h2">Pengelolaan Pagu</h1>
			</div>
			
			<?php
			echo form_open('KelolaMaster/simpanPagu');
			?>
			<table class="table table-striped table-sm">
			<tr>
				<td width="130">Jabatan</td>
				<td>
				<div class="col-sm-4"">
				<select name="jabatan">
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
				<?php
				foreach ($kehadiran as $r)
				{
					echo "<option value='".$r->id."'>".$r->nama_kehadiran."</option>";
				}
				?>
				</select>
				</div>
				</td>
			</tr><tr>
				<td width="130">Kebijakan</td>
				<td>
				<div class="col-sm-4""><input type="text" name="kebijakan" class="form-control" placeholder="Kebijakan"></div>
				</td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
				<?php echo anchor('KelolaMaster/showMasterPagu','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
				</td>
			</tr>
			</table>
			</form>
			
			<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Id Pagu</th>
					<th>Jabatan</th>
					<th>Kehadiran</th>
					<th>Kebijakan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				$total=0;//echo"<pre>";print_r($pagu);echo"</pre>";die();
				foreach ($pagu as $r)
				{
					echo "<tr>
						<td>$no</td>
						<td>$r->id_pagu</td>
						<td>$r->nama_jabatan</td>
						<td>$r->nama_kehadiran</td>
						<td>$r->kebijakan</td>
						<td>".anchor('KelolaMaster/editPagu/'.$r->id_pagu,'Edit')."</td></tr>";
					$no++;
				}
				?>
			</tbody>
			</table>