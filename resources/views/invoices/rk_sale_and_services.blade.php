<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>R.K. Sales & Services</title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>

	<body style="border: 1px solid #eee;">
		<div class="invoice-box">
            <table>
                <tr>
                    <td class="title"><h3><b>Rk Sales and Services</b></h3></td>
                    <td>
                        Invoice #: 123<br />
                        Created: January 1, 2015<br />
                       
                    </td>
                </tr>
            </table>
			<table cellpadding="0" cellspacing="0">
				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									To, <br />
									WOW <br />
								    Lokmat media pvt. ltd.
								</td>

								{{-- <td>
									Acme Corp.<br />
									John Doe<br />
									john@example.com
								</td> --}}
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading" >
					<td colspan="2">Invoice Summary</td>
				</tr>

				<tr class="details">
					<td colspan="2">Bill for wooden frame on rent for program on 24 Sep 2021 at AC Hall.</td>
				</tr>

				<tr class="heading">
					<td>Item</td>

					<td>Price</td>
				</tr>

				<tr class="item">
					<td>Backdrop Printing and Mounting
                        Wooden<br>Frame = 232 Sqft Rate 33 / Sqft</td>

					<td>7656=00</td>
				</tr>

				<tr class="item">
					<td>Transportation Charges</td>

					<td>500=00</td>
				</tr>

				{{-- <tr class="item last">
					<td>Domain name (1 year)</td>

					<td>$10.00</td>
				</tr> --}}

				<tr class="total">
					<td><b>Eight Thousand One Hundred Fifty Six Rs. Only</b></td>

					<td>Total: 8,156=00</td>
				</tr>
			</table>
		</div>
	</body>
</html>