
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="nav-link" style="color:blue;"><?php echo $this->session->flashdata('message');?></h1>
			<h1 class="h2">Pengelolaan Pegawai</h1>
			</div>
			
			<?php
			echo form_open('KelolaMaster/simpanPegawai');
			?>
			<table class="table table-striped table-sm">
			<tr>
				<td width="130">Nama</td>
				<td>
				<div class="col-sm-4""><input type="text" name="nama" class="form-control" placeholder="nama"></div>
				</td>
			</tr>
			<tr>
				<td width="130">Alamat</td>
				<td>
				<div class="col-sm-4""><input type="text" name="alamat" class="form-control" placeholder="Alamat"></div>
				</td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td>
				<div class="col-sm-4""><input type="text" name="email" class="form-control" placeholder="Email"></div>
				</td>
			</tr>
			<tr>
				<td width="130">Password</td>
				<td>
				<div class="col-sm-4""><input type="text" name="password" class="form-control" placeholder="Password"></div>
				</td>
			</tr>
			<tr>
				<td width="130">Phone</td>
				<td>
				<div class="col-sm-4""><input type="number" name="telp" class="form-control" placeholder="Phone"></div>
				</td>
			</tr>
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
				<td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
				<?php echo anchor('KelolaMaster/showMasterPegawai','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
				</td>
			</tr>
			</table>
			</form>
			
			<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>NIP</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Email</th>
					<th>Password</th>
					<th>Phone</th>
					<th>Jabatan</th>
					<th colspan='2' style='text-align:center'>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				$total=0;//print_r($pegawai);die();
				foreach ($pegawai as $r)
				{
					echo "<tr>
						<td>$no</td>
						<td>XLINK000$r->id_pegawai</td>
						<td>$r->nama</td>
						<td>$r->alamat</td>
						<td>$r->email</td>
						<td>$r->password</td>
						<td>$r->telp</td>
						<td>$r->nama_jabatan</td>
						<td>".anchor('KelolaMaster/editPegawai/'.$r->id_pegawai,'Edit')."</td>
						<td>".anchor('KelolaMaster/detailPegawai/'.$r->id_pegawai,'Detail')."</td></tr>";
					$no++;
				}
				?>
			</tbody>
			</table>