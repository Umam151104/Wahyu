<!DOCTYPE html>
<html>
   <head>
      <title>Order Checkout Ke WhatsApp</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <style>
        body {
	background-color: #2b2b2b;
        }
        h4 {
            color:  #0eeab6;
        }
        div {
            background-color: #2b2b2b;
        }
        label {
            color: #0eeab6;
        }
      </style>
   </head>
<body>
    <div class="container">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <h4>Order Checkout Ke WhatsApp</h4>
            <div class="panel panel-success">
                <div class="panel-heading">
                    Checkout Ke WhatsApp
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control" placeholder="Nama" id="name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" id="email">
                    </div>
                    <div class="form-group">
                        <label>Nomor Kontak / WhatsApp</label>
                        <input type="text" name="phone" class="form-control" placeholder="Nomor Kontak / WhatsApp" id="phone">
                    </div>
                    <div class="form-group">
                        <label>Pilih Items</label>
                        <select name="product" class="form-control" id="product">
                            <option value="">-- Pilih Items --</option>
                            <option value="NIKE AF1">ROG Strix XG27AQMR</option>
                            <option value="JAKET DIOR">ROG Ally (2023)</option>
                            <option value="JEANS DENIM">ROG Zephyrus M16 (2022)</option>
                            <option value="JAKET HOODIE GAP">ROG Fusion II 500</option>
                            <option value="CHINO UNIQLO">ROG Hyperion GR701</option>
                            <option value="T-SHIRT ERIGO">ROG Keris Wireless AimPoint</option>
                            <option value="T-SHIRT AEROSTREET">ROG Raikiri Pro</option>
                            <option value="CONVERSE HIGH ORI">ROG Falchion Ace</option>
                            <option value="SWEATER AEROSTREET">ROG Phone 8 Pro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Catatan</label>
                        <textarea name="description" class="form-control" rows="3" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success send">Pesan</button>
                    </div>
 
                    <div id="text-info"></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
		$(document).on('click','.send', function(){
			/* Inputan Formulir */
			var input_name 			= $("#name").val(),
			    input_email 		= $("#email").val(),
			    input_phone 		= $("#phone").val(),
			    input_product 		= $("#product").val(),
			    input_description 	= $("#description").val();

			/* Pengaturan Whatsapp */
			var walink 		= 'https://web.whatsapp.com/send',
			    phone 		= '6281272597270',
			    text 		= 'Halo saya ingin memesan ',
			    text_yes	= 'Pesanan Anda berhasil terkirim.',
			    text_no 	= 'Isilah formulir terlebih dahulu.';

			/* Smartphone Support */
			if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
				var walink = 'whatsapp://send';
			}

			if(input_name != "" && input_phone != "" && input_product != ""){
				/* Whatsapp URL */
				var checkout_whatsapp = walink + '?phone=' + phone + '&text=' + text + '%0A%0A' +
				    '*Nama* : ' + input_name + '%0A' +
				    '*Alamat Email* : ' + input_email + '%0A' +
				    '*Nomor Kontak / Whatsapp* : ' + input_phone + '%0A' +
				    '*Produk* : ' + input_product + '%0A' +
				    '*Catatan* : ' + input_description + '%0A';

				/* Whatsapp Window Open */
				window.open(checkout_whatsapp,'_blank');
				document.getElementById("text-info").innerHTML = '<div class="alert alert-success">'+text_yes+'</div>';
			} else {
				document.getElementById("text-info").innerHTML = '<div class="alert alert-danger">'+text_no+'</div>';
			}
		});
	</script>
</body>
</html>
</body>
</html>