
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="nav-link" style="color:blue;"><?php echo $this->session->flashdata('message');?></h1>
			<h1 class="h2">Pengelolaan Ruang Meeting</h1>
			</div>
			
			<?php
			echo form_open('KelolaMaster/simpanRuangMeeting');
			?>
			<table class="table table-striped table-sm">
			<tr>
				<td width="130">Nama Ruang Meeting</td>
				<td>
				<div class="col-sm-4""><input type="text" name="nama_ruangMeeting" class="form-control" placeholder="Nama Ruang Meeting"></div>
				</td>
			</tr>
			<tr>
				<td width="130">Fasilitas Ruang Meeting</td>
				<td>
				<div class="col-sm-4""><input type="text" name="status_ruangMeeting" class="form-control" placeholder="Status Ruang Meeting"></div>
				</td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
				<?php echo anchor('KelolaMaster/showMasterRuangMeeting','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
				</td>
			</tr>
			</table>
			</form>
			
			<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Id Ruang Meeting</th>
					<th>Nama Ruang Meeting</th>
					<th>Fasilitas Ruang Meeting</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				$total=0;//print_r($ruang_meeting);die();
				foreach ($ruang_meeting as $r)
				{
					echo "<tr>
						<td>$no</td>
						<td>XRM000$r->id</td>
						<td>$r->nama_ruangMeeting</td>
						<td>$r->status_ruangMeeting</td>
						<td>".anchor('KelolaMaster/editRuangMeeting/'.$r->id,'Edit')."</td></tr>";
					$no++;
				}
				?>
			</tbody>
			</table>