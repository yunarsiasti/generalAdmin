
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="nav-link" style="color:blue;"><?php echo $this->session->flashdata('message');?></h1>
			<h1 class="h2">Pengelolaan Inventaris</h1>
			</div>
			
			<?php
			echo form_open('KelolaMaster/simpanInventaris');
			?>
			<table class="table table-striped table-sm">
			<tr>
				<td width="130">Nama Inventaris</td>
				<td>
				<div class="col-sm-4""><input type="text" name="nama_inventari" class="form-control" placeholder="Nama Inventaris"></div>
				</td>
			</tr>
			<tr>
				<td width="130">Merk</td>
				<td>
				<div class="col-sm-4""><input type="text" name="merk" class="form-control" placeholder="Merk"></div>
				</td>
			</tr>
			<tr>
				<td width="130">Kategori</td>
				<td>
				<div class="col-sm-4""><input type="text" name="kategori" class="form-control" placeholder="Kategori"></div>
				</td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
				<?php echo anchor('KelolaMaster/showMasterInventaris','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
				</td>
			</tr>
			</table>
			</form>
			
			<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Id Inventaris</th>
					<th>Nama Inventaris</th>
					<th>Merk</th>
					<th>Kategori</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				$total=0;//print_r($inventaris);die();
				foreach ($inventaris as $r)
				{
					echo "<tr>
						<td>$no</td>
						<td>XINV000$r->id</td>
						<td>$r->nama_inventari</td>
						<td>$r->merk</td>
						<td>$r->kategori</td>
						<td>".anchor('KelolaMaster/editInventaris/'.$r->id,'Edit')."</td></tr>";
					$no++;
				}
				?>
			</tbody>
			</table>