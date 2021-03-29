<!-- HALAMAN http://rsuppersahabatan.co.id/fasilitas/yansos/penjamin -->

<?php 
	//$all = json_decode($result_all,true); //dump($all);
?>

<style type="text/css">
	li a {
		color: black;
	}
</style>

<div class="content_fullwidth less">
	<div class="container">

    <div class="clearfix margin_top3"></div>

    <?php if (!$this->input->post()): ?>

	<div class="left_sidebar one_third">
		<div class="cforms">
        
			<form action="" method="post" id="sky-form" class="sky-form">
				<!-- <form id="sky-form" class="sky-form" <?php echo (($anchor) ? ' action="' . current_url() . $anchor . '"' : '')  . ' method="post"' . (($id) ? ' id="' . $id . '"' : '') . (($class) ? ' class="' . $class . '"' : ''); ?>> -->

				<header>Input <strong>Pencarian</strong></header>
				<fieldset>
					<section>
						<label class="label">Nama Penjamin</label>
						<label class="input"> <i class="icon-append icon-tag"></i>
							<input type="text" name="nama_penjamin" placeholder="Nama Penjamin" id="nama_penjamin">
						</label>
					</section>
					<section>
						<label class="label">Kategori Penjamin</label>

						<select name="kategori_penjamin" >
							<option value="all" selected="selected">Semua</option>
							<option value="rs">Rumah Sakit</option>
							<option value="pt">Perusahaan</option>
							<option value="lain">Lainnya</option>
						</select>

					</section>

				</fieldset>


				<fieldset>
					<section>
						
					</section>
				</fieldset>

				<footer>
					<!-- <button class="button" onClick="data_dokter();">Cari</button> -->
					<a data-toggle="modal" href="#modal" class="btn btn-warning" type="button" onClick="data_penjamin();" style="padding:8px; padding-right: 1px; float: right;">Cari</a>
	                <img id="img" src="data:image/gif;base64,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" style="margin-top: 4px; margin-bottom: 5px; display: none;">
				</footer>

			</form>
        
        </div>

			<div class="clearfix marb6"></div>


			<fieldset>
				<section>
					<a href="{{ helper:site_url }}penjamin" class="but_medium1"><i class="fa fa-arrow-circle-left fa-lg"></i>&nbsp; Klik Untuk Melihat Pasien Anda!</a>
				</section>
			</fieldset>

	</div>

	<?php endif; ?>

	<?php
		$all = json_decode($result_all,true); //var_dump($dokter);
		$data_tidak_ada = (array_filter($all)) ? "Ada&nbsp;".count($all)."&nbsp;Data" : 'Tidak Ada Data'; 
		$arr = array(4,8,12,16,20,24,28,32,36,40,44,48,52,56,60,64,68,72,76,80,84,88,92,96,100,104,108,112,116,120,124,128,132,136,140,144,148,152,156,160,164,168,172,176,180,184,188,192,196,200,204,208,212);
	?>

	<?php $animasi = (!$this->input->post()) ? 'animate' : ''; ?>
	<?php $default_hari_ini = (!$this->input->post() && !array_filter($all)) ? '' : '*Pencarian default.' ;?>

	<div id="konten_pencarian_penjamin">

			<div class="stcode_title13">   
		        <h3><span class="text">Hasil Pencarian: </span> <br /><em style="font-size:17px; color:red"><?php echo $default_hari_ini.'&nbsp;'.$data_tidak_ada ?></em>    </h3>     
		    </div>

		<div class="content_right two_third last"> 
			<ul class="tabs2">
	            <li><a href="#rs" target="_self"><i class="fa fa-hospital-o" aria-hidden="true"></i>&nbsp;Rumah Sakit</a></li>
	            <li><a href="#pt" target="_self"><i class="fa fa-building-o" aria-hidden="true"></i>&nbsp;Perusahaan</a></li>
	            <li><a href="#lain" target="_self"><i class="fa fa-ban" aria-hidden="true"></i>&nbsp;Lainnya</a></li>
	        </ul>

		    <div class="tabs-content2 fullw">
	        
	        <div id="rs" class="tabs-panel2">

				<?php 

				foreach ($all as $key => $b) { 
					
					// Rumah Sakit
	   				if ($b['id_kategori_penjamin'] == 3) {
	   				
				?>
				<ul class="list_divlines">	            
					<li>
						<i class="fa fa-chevron-right"></i> <a onclick="openPagesPerusahaan('<?php echo en_de('enkripsi',$b['kd_bayar']); ?>')" href="#<?php echo strtoupper($b['cara_bayar']);?>"><?php echo strtoupper($b['cara_bayar']);?></a>
					</li>
				</ul>

				<?php } } ?>

	        </div><!-- end tab 1 -->
	        
	        <div id="pt" class="tabs-panel2">

				<?php 

				foreach ($all as $key => $b) { 
				
	   				// PT, dan Asuransi
	   				if (in_array($b['id_kategori_penjamin'], array(1,2) ) ) {
	   				
				?>
				<ul class="list_divlines">	            
					<li>
						<i class="fa fa-chevron-right"></i> <a onclick="openPagesPerusahaan('<?php echo en_de('enkripsi',$b['kd_bayar']); ?>')" href="#<?php echo strtoupper($b['cara_bayar']);?>"><?php echo strtoupper($b['cara_bayar']);?></a>
					</li>
				</ul>

				<?php } } ?>

	        </div><!-- end tab 2 -->
	        
	        <div id="lain" class="tabs-panel2">

	        	<?php 

				foreach ($all as $key => $b) { 
				
	   				// BUKAN rs, pt, asuransi
	   				if (!in_array($b['id_kategori_penjamin'], array(1,2,3) )) {
	   				
				?>
				<ul class="list_divlines">	            
					<li>
						<i class="fa fa-chevron-right"></i> <a onclick="openPagesPerusahaan('<?php echo en_de('enkripsi',$b['kd_bayar']); ?>')" href="#<?php echo strtoupper($b['cara_bayar']);?>"><?php echo strtoupper($b['cara_bayar']);?></a>
					</li>
				</ul>

				<?php } } ?>
	        </div><!-- end tab 3 -->
	        
	        </div><!-- end all tabs -->


		</div>

	</div>
	</div>

</div>

<script type="text/javascript">

$(document).ready(function() {
  // stickybits('.left_sidebar',{ stickyBitStickyOffset: 75 });
});

function data_penjamin() 
{
	$.facebox('Under development...');

    // $('#img').show();
    // $.ajax({
    //     type: "POST",
    //     url: BASE_HREF+'penjamin/result_penjamin/',
    //     cache: false,
    //     dataType: "html",              
    //     data: $('#sky-form').serialize(),
    //     success: function(url){
    //       $('#img').hide();
    //       $('#konten_pencarian_penjamin').html(url); 
    //     }
    // });
}

function openPagesPerusahaan(kode_bayar)
{
	$.facebox.settings.overlay = 'false';

	$.facebox('Processing... harap tunggu!');

	//get the input value
	$.ajax({
	    url: BASE_HREF+"penjamin/detail",
	    data: { kd_bayar : kode_bayar },
	    type: "POST",
	    dataType: "html",
	    //on success
	    success: function(url){
	      $.facebox(url);
	    },
	    //on error
	    error: function(){
	       $.facebox('Error.. sowry.. gagal mendapatkan data!'); 
	    },
	    complete: function(){

	    },
	});

}

</script>

