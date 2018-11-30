
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="nav-link" style="color:blue;"><?php echo $this->session->flashdata('message');?></h1>
			<h1 class="h2">Pengelolaan Kehadiran</h1>
			</div>
			
			<?php
			echo form_open('KelolaMaster/simpanKehadiran');
			?>
			<table class="table table-striped table-sm">
			<tr>
				<td width="130">Nama Kehadiran</td>
				<td>
				<div class="col-sm-4""><input type="text" name="nama_kehadiran" class="form-control" placeholder="Nama Kehadiran"></div>
				</td>
			</tr>
			<tr>
				<td width="130">Status Kehadiran</td>
				<td>
				<div class="col-sm-4""><input type="text" name="status_kehadiran" class="form-control" placeholder="Status Kehadiran"></div>
				</td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
				<?php echo anchor('KelolaMaster/showMasterKehadiran','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
				</td>
			</tr>
			</table>
			</form>
			
			<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Id Kehadiran</th>
					<th>Nama Kehadiran</th>
					<th>Status Kehadiran</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				$total=0;//print_r($kehadiran);die();
				foreach ($kehadiran as $r)
				{
					echo "<tr>
						<td>$no</td>
						<td>$r->id</td>
						<td>$r->nama_kehadiran</td>
						<td>$r->status_kehadiran</td>
						<td>".anchor('KelolaMaster/editKehadiran/'.$r->id,'Edit')."</td></tr>";
					$no++;
				}
				?>
			</tbody>
			</table>