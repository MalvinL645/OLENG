	<script type="text/javascript">
		$(document).ready(function(){
			//Memanggil Data dari JSON
			$.getJSON("myJSON.json",function (data) {
	            console.log(data);
	            var i = 0;
	            $.each(data, function (i, user) {
	                $("#nama"+i).html(user.nama);
	                $("#name"+i).html(user.nama);
	                $("#email"+i).html(user.mail);
	                $("#nohp"+i).html(user.notelp);
	            });               
            });
            //End Here
            //Mengatur Button untuk Show & Hide Preview Edit Page
			$("#edit").hide();
			$("#edit-btn").click(function(){
				$("#preview").hide();
				$("#edit").show();
			});
			$("#batal").click(function(){
		<?php echo base_url();?>assets/location.reload();
			});
			//End Here
        })
		

		//Berfungsi untuk mengupload gambar
        function showImage(){
        	if(this.files && this.files[0]){
        		var obj = new FileReader();
        		obj.onload = function(data){
        			var image = document.getElementById("image");
        			image.src = data.target.result;
        			image.style.display = "block";
        		}
        		obj.readAsDataURL(this.files[0]);
        	}
        }
        //End Here
	</script>

	<div class="container-fluid h-100 pt-1" id="body" style="">
		<div class="row">
			<div class="h2 container-fluid d-block mt-2">
				<div class="row" style="">
					<div class="col-12 text-center">Profile</div><!--Header body, boleh diganti-->
				</div>
			</div>
			<div class="container h-100 mt-2" style="border-top:2px solid #ebebeb">
			<!--Content goes here-->
				<div class="row">
					<div class="col-12" id="img-profile">
						<!--Preview Page-->
						<div class="row" id="preview">
							<div class="col-1"></div>
							<div class="col-4 profile">
								<img id="imgprofile" class="imgprofile center img" src="<?php echo base_url();?>assets/img/img-empty.png" style="width: 250px; height: 250px;">
							</div>
							<div class="col-6 profile">
								<form>
									<table>
										<tr>
											<td class="isi" colspan="2">Nama</td>
											<td class="isi2" colspan="3" id="nama1"></td>
										</tr>
										<tr>
											<td class="isi" colspan="2">Email</td>
											<td class="isi2" colspan="3" id="email1"></td>
										</tr>
										<tr>
											<td class="isi" colspan="2">Nomor HP</td>
											<td class="isi2" colspan="3" id="nohp1"></td>
										</tr>
									</table>
									<br>
									<!--Button untuk ke Edit Page-->
									<div id="edit-btn"><button type="button" class="btn btn-outline-primary btn-block">Edit</button></div>
									<!--End Here-->
								</form>
							</div>
							<div class="col-1"></div>
						</div>
						<!--End Here-->
						<!--Edit Page-->
						<div class="row" id="edit">
							<div class="col-1"></div>
							<div class="col-4 profile">
								<img id="image" class="imgprofile center" src="<?php echo base_url();?>assets/img/img-empty.png" style="width: 250px; height: 250px;">							
								<div class="text-center" id="unggah">
									<label class="btn btn-outline-secondary btn-file">
									    Uggah Gambar <input type="file" style="display: none;" onchange="showImage.call(this)">
									</label>
								</div>
							</div>
							<div class="col-6 profile">
								<form>
									<table>
										<tr>
											<td class="isi" colspan="2">Nama</td>
											<td class="isi2" colspan="3" id="name1"></td>
										</tr>
										<tr>
											<td class="isi" colspan="2">Email</td>
											<td class="isi2" colspan="3"><input type="text" class="form-control" id="inputEmail1"></td>
										</tr>
										<tr>
											<td class="isi" colspan="2">Nomor HP</td>
											<td class="isi2" colspan="3"><input type="text" class="form-control"></td>
										</tr>
										<tr>
											<td class="isi" colspan="2">Password</td>
											<td class="isi2" colspan="3"><input type="password" class="form-control" placeholder="Masukkan Password Konfirmasi"></td>
										</tr>
										<tr>
											<td class="isi" colspan="5"><a href="" class="txt">Ganti Password?</a></td>
										</tr>
									</table>
									<br>
									<div class="btn-simpanbatal"><button id="simpan" type="button" class="btn btn-outline-success btn-block">Simpan</button></div>
									<div class="btn-simpanbatal"><button id="batal" type="button" class="btn btn-link btn-block">Batal</button></div>			
								</form>
							</div>
							<div class="col-1"></div>
						</div>	
						<!--End Here-->
					</div>
				</div>
			</div>
		</div>
	</div>
			
</body>
</html>