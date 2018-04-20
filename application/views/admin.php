	<div class="container-fluid h-100 pt-1" id="body" style="">
			<div class="sidenav" style="margin-top: 3%;">
			  <a href="#about">Daftar User</a>
			  <a href="#services">#</a>
			  <a href="#clients">#</a>
			  <a href="#contact">#</a>
			</div>
		<div class="row" style="margin-left: 5%;">
			<div class="h2 container-fluid d-block mt-2">
				<div class="row" style="">
					<div class="col-12 text-center">Admin Page</div><!--Header body, boleh diganti-->
				</div>
			</div>
			<div class="container h-100 mt-2" style="border-top:2px solid #ebebeb ; border-bottom: 2px solid #ebebeb">
			<!--Content goes here-->

			<div class="table-responsive-lg">		
				<table id="customers">
					<tr>
						<th>Nama</th>
						<th>No Telp</th>
						<th>Email</th>
					</tr>
					<tr>
						<td> <p id="nama1"></p> </td>
						<td> <p id="tlpn1"></p> </td>
						<td> <p id="email1"></p>  </td>
					</tr>		

				</table>					
			</div>
			</div>
		</div>	
	</div>
<script type="text/javascript">
		$(document).ready(function(){
			$.getJSON("myJSON.json",function (data) {
	            console.log(data);
	            var i = 0;
	            $.each(data, function (i, user) {
	                $("#nama"+i).html(user.nama);
	                $("#tlpn"+i).html(user.notelp);
	                $("#email"+i).html(user.mail);
	            });               
            });
        })
</script>
</body>
</html>