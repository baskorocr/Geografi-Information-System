<div class="content-padder content-background">
	<div class="uk-section-small uk-section-default header">
		<div class="uk-container uk-container-large">
			<h2><span uk-icon="icon: pencil; ratio: 2"></span> <?= $judul ?></h2>
		</div>
	</div>
	<div class="uk-section-small">
		<div class="uk-container uk-container-large">
			<!-- Form -->

			<div class="uk-container uk-container-large" id="tampilbencanasemua">
				<div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">


					<div class="uk-clearfix uk-margin-small-bottom">
						<div class="uk-float-right">
							<form class="uk-search uk-search-default uk-margin-remove-righ">
								<span uk-search-icon></span>
								<input class="uk-search-input" name="search_key" id="search_key" type="text" placeholder="Pencarian...">
							</form>
							<button class="uk-button uk-button-default" id="resetBtn"><span uk-icon="refresh"></span></button>
						</div>
						<div class="tambah uk-float-left">
							<button class="uk-button uk-button-danger uk-margin-small-right" id="tambahmodal" type="button"><span uk-icon="icon: plus"></span>
								<span class="uk-visible@s">Tambah Data</span></button>
						</div>
					</div>
					<div id="ajaxBencana">

						<!-- Loading Image -->
						<div class="loading" style="display: none;">
							<div class="contentloading"><img src="<?php echo base_url('public/img/loading.gif'); ?>" /></div>
						</div>
						<!-- Loading Image -->
					</div>
				</div>
			</div>

			<!-- form simpan dan edit -->
			<div class="uk-container uk-container-large" id="formsimpandaneditbencana">
				<div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">
					<form class="uk-form-stacked" id="submitdata" method="post">
						<div class="uk-margin">
							<label class="uk-form-label" for="form-stacked-text">Kecamatan Pertanian</label>
							<div class="uk-form-controls">
								<input class="uk-input" id="idbencana" name="idbencana" type="hidden">
								<input class="uk-input" id="kecamatanbencana" name="kecamatanbencana" type="text" placeholder="Kecamatan Pertanian">
							</div>
						</div>

						<div class="uk-margin">
							<label class="uk-form-label" for="form-stacked-text">Lokasi Pemetaan</label>
							<div class="uk-form-controls">
								<input class="uk-input" id="lokasibencana" name="lokasibencana" type="text" placeholder="Lokasi Pertanian">
							</div>
						</div>


						<div class="uk-margin">
							<label class="uk-form-label" for="form-stacked-text">Keterangan Pemetaan</label>
							<div class="uk-form-controls">
								<textarea name="keteranganbencana" id="keteranganbencana" class="uk-textarea" placeholder="Isi Keterangan Pertanian "></textarea>

							</div>
						</div>

						<div class="uk-margin">
							<label class="uk-form-label" for="form-stacked-text">Latitude Pemetaan</label>
							<div class="uk-form-controls">
								<input class="uk-input" id="latitudebencana" name="latitudebencana" type="text" placeholder="Latitude Pertanian">
							</div>
						</div>

						<div class="uk-margin">
							<label class="uk-form-label" for="form-stacked-text">Longitude Pemetaan</label>
							<div class="uk-form-controls">
								<input class="uk-input" id="longitudebencana" name="longitudebencana" type="text" placeholder="Longitude Pertanian">
							</div>
						</div>



						<div class="uk-margin">
							<label class="uk-form-label" for="form-stacked-text">Kategori Pemetaan</label>
							<div class="uk-form-controls">
								<select class="uk-select" name="kategori" id="kategori">
									<option value="0">-- Pilih Kategori Pemetaan --</option>
									<option value="sawah">Sawah</option>
									<option value="kebun kopi">Kebun Kopi</option>
									<option value="kebun teh">Kebun Teh</option>
									<option value="kebun sawit">Kebun Sawit</option>
									<option value="kebun kelapa">Kebun Kelapa</option>
									<option value="kebun cabai">Kebun Cabai</option>
									<option value="kebun pisang">Kebun Pinang</option>
									<option value="kebun tebu">Kebun Tebu</option>
								</select>
							</div>
						</div>




						<div class="uk-modal-footer uk-text-right">
							<button class="uk-button uk-button-default uk-modal-close" id="kembalikeawal" type="button">Kembali</button>
							<button class="uk-button uk-button-primary" type="submit" id="simpandata">Simpan Data</button>
						</div>
					</form>
				</div>
			</div> <!-- Form -->
		</div>
	</div>






	<script src="<?= base_url('public/') ?>admin/bencana.js"></script>