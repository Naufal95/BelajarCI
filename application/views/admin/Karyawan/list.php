
		
							<table class="table table-hover" id="dataTable" width="50%" cellspacing="0">
								<thead>
									<tr>
										<th>Id</th>
										<th>nama</th>
										<th>alamat</th>
										<th>no telpon</th>

									</tr>
								</thead>
								<tbody>
									<?php foreach ($karyawan as $karyawan): ?>
									<tr>
										<td width="100">
											<?php echo $karyawan->id_karyawan ?>
										</td>
										<td>
											<?php echo $karyawan->nama_karyawan ?>
										</td>
										<td>
											<?php echo $karyawan->alamat ?>
										</td>
										<td>
											<?php echo $karyawan->no_telpon ?></td>

									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
