<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="<?php echo base_url('login/logout'); ?>">Logout</a>
			</div>
		</div>
	</div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Yakin logout?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Pilih tombol "Logout" untuk keluar dari sistem.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="<?php echo base_url('login/logout'); ?>">Logout</a>
			</div>
		</div>
	</div>
</div>

<!-- Modal Keterangan Aktifitas -->
<div class="modal fade" id="aktifitasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Keterangan Aktifitas</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<ul>
					<li>Aktifitas Ringan :</li> 
						ibu rumah tangga, mengerjakan pekerjaan rumah tangga dengan bantuan mekanik, menyapu
						dengan ayunan perlahan, memasak, mencuci piring, menata meja, pekerja
						kantor profesional (pengacara, dokter, guru, arsitek, akuntan, dll).
						<br><br>

					<li>Aktifitas Sedang :</li>
						wanita pekerja pada industri ringan (memperbaiki jam, menggambar, dan melukis), ibu rumah tangga tanpa alat
						bantu mekanik (membersihkan jendela, mengepel lantai, membelah kayu untuk
						memasak, berbelanja), dan penjaga toko dipasar swalayan.
						<br><br>

					<li>Aktifitas Berat :</li>
						menyikat lantai, memukul
						karpet, kerja di pertanian, penari dan atlet
						<br><br>

					<li>Aktifitas Sangat Berat :</li>
						pekerja konstruksi (bangunan)						
				</ul>
			</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>				
			</div>
		</div>
	</div>
</div>

<!-- Modal delete data -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
			</div>
		</div>
	</div>
</div>
