	<div class="container-fluid h-100 pt-1" id="body" style="">
		<div class="row">
			<div class="h2 container-fluid d-block mt-2">
				<div class="row" style="">
					<div class="col-12 text-center">Pasang Lelang</div><!--Header body, boleh diganti-->
				</div>
			</div>
			<div class="container h-100 mt-2" style="border-top:2px solid #ebebeb ; border-bottom: 2px solid #ebebeb">
			<!--Content goes here-->
			<div class="table-responsive-lg">
				<form action="/upload-target">
					<table class="w-100 mt-2">
						<tr>
							<td scope="row">Judul Lelang</td>
							<td scope="row">&nbsp : &nbsp</td>
							<td scope="row"> 
								<input type="text" name="jdl" placeholder="" required style="width: 100%"> 
							</td>
						</tr>		
						<tr class="spaceUnder">
							<td></td>
							<td></td>
							<td style="opacity: 0.5;filter: Alpha(opacity=50);">
							Isi nama lelang anda dengan benar agar mudah di telusuri dengan maximal 20 karakter</td>
						</tr>			
						<tr class="">
							<td scope="row">Kategori Lelang</td>
							<td scope="row">&nbsp : &nbsp</td>
							<td scope="row"> 
								<select style="width: 50%" name="ktgr" required="">
								  <option disabled selected value>--Pilih Kategori Lelang Anda--</option>
								  <option value="saab">Saab</option>
								  <option value="opel">Opel</option>
								  <option value="audi">Audi</option>
								</select> 
							</td>
						</tr>
						<tr class="spaceUnder">
							<td></td>
							<td></td>
							<td style="opacity: 0.5;filter: Alpha(opacity=50);">
							Pastikan kategori yang anda pilih benar agar dapat di telusuri</td>
						</tr>	
						<tr class="spaceUnder">
							<td scope="row">Harga Buka Lelang</td>
							<td scope="row">&nbsp : &nbsp</td>
							<td scope="row"> <input type="number" name="harga" placeholder="Rp." required > </td>
						</tr>		
						<tr class="">
							<td scope="row">Deskripsi Lelang</td>
							<td scope="row">&nbsp : &nbsp</td>
							<td scope="row" rowspan="2"> <textarea name="deskripsi" class="full" required=""></textarea></td>
						</tr>

						<tr  class="spaceUnder">
							<td></td>
							<td></td>
						</tr>
						<tr class="spaceUnder">
							<td></td>
							<td></td>
							<td style="opacity: 0.5;filter: Alpha(opacity=50);">
							Isi deskripsi dengan jelas dan semenarik mungkin agar pelelang tertarik dengan barang anda</td>
						</tr>
						<tr class="spaceUnder">
							<td scope="row">Upload Foto</td>
							<td scope="row"></td>
							<td scope="row"></td>
						</tr>
						<tr class="spaceUnder">
							<!-- plugin Drop zone -->
							<td colspan="3"  class="dropzone dz-clickable" action="/upload-target" style="padding-top: ">
								<div class="dz-default dz-message"><span>Drop files here to upload</span></div>
								<input multiple="multiple" class="dz-hidden-input" 
								style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;" 
								type="file">
							</td>
						</tr>	
						<tr class="spaceUnder">
							<td></td>
							<td></td>
							<td style="opacity: 0.5;filter: Alpha(opacity=50);">
							Semakin banyak foto maka pelelang akan semakin yakin dan semakin suka dengan barang anda</td>
						</tr>
						<tr class="spaceUnder">
							<td></td>
							<td></td>
							<td align="right"> <button name="save" value="Simpan" class="btn"> Simpan</button></td>
						</tr>									
					</table>
				</form>	
			</div>
			</div>
		</div>	
	</div>
</body>
</html>