<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).

// create new PDF document                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      


$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('GO-LOMBA');
$pdf->SetTitle('Registration Form');
$pdf->SetSubject('Form pendaftaran');

// set default header data

// set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));


// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, 25, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
	require_once(dirname(__FILE__) . '/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('freeserif', '', 10);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(0, 0, 0), 'opacity' => 0.4, 'blend_mode' => 'Normal'));

// Set some content to print
$title = '<div style="text-align:center"><center><img src="http://localhost/pesantren/assets/images/index.png" width="50" height="50">
<h3>BUKTI PENDAFTARAN CALON SANTRI TAKHFIZ QURAN MATAQU</h3></center></div>';
$pdf->WriteHTMLCell(0, 0, '', '', $title, 0, 1, 0, true, 'c', true);
$table = '<h3>Data Calon Santri <br> <hr><b>1. Data Diri Santri</b></h3><table width="100%" border="0" cellpadding="6">';
$table .= '
	<tr >
		<td width="4%">1.</td>
		<th width="15%">NISN </th>
		<th width="46%">: ' . $pendaftar['nisn'] . ' </th>
		<th rowspan="7" width="35%">foto Pendaftar :  <br> <img width="200" src="http://localhost/pesantren/upload/img/' . $pendaftar['photo'] . '"> </th>
	</tr>
    <tr >
    	<td >2.</td>
		<th >Nama Lengkap </th>
		<th >:  ' . $pendaftar['nama_santri'] . '</th>

	</tr>
    <tr >
    	<td >3.</td>
		<th > Jenis Kelamin </th>
		<th >:  ' . $pendaftar['jkel'] . '</th>
	</tr>
    <tr >
    	<td >4.</td>
		<th >Tanggal Lahir </th>
		<th >:  ' . $pendaftar['birthdate'] . '</th>
	</tr>
	<tr >
    	<td >5.</td>
		<th >Pilihan Santri </th>
		<th >:  ' . $pendaftar['kategori'] . '</th>
	</tr>
    <tr >
    	<td >6.</td>
		<th >Nama Wali </th>
		<th >:  ' . $pendaftar['nama_wali'] . '</th>
	</tr>
    <tr >
    	<td >7.</td>
		<th >Alamat </th>
		<th >:  ' . $pendaftar['alamat'] . '</th>
    </tr>
    
    <tr >
    	<td >8.</td>
		<th >No Telp </th>
		<th >:  ' . $pendaftar['telp'] . '</th>
	</tr>
	
</table>';
$pdf->WriteHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, 'c', true);

$table2 = '<hr><h3><b>2. Data pendidikan</b></h3><table width="65%" border="0" cellpadding="4">';
$table2 .= '
	<tr >
		<td width="5%">1.</td>
		<th width="40%">Telah lulus </th>
		<th width="55%">:  ' . $pendaftar['lulusan'] . '</th>
	</tr>
    <tr >
    	<td >2.</td>
		<th >Ibtidaiyah/Sederajat </th>
		<th >:  ' . $pendaftar['sederajat1'] . '</th>

	</tr>
    <tr >
    	<td >3.</td>
		<th >Tsanawiyah/Sederajat</th>
		<th >:  ' . $pendaftar['sederajat2'] . '</th>
	</tr>
    <tr >
    	<td >4.</td>
		<th >Pondok Pesantren</th>
		<th >: ' . $pendaftar['pondok_pesantren'] . ' </th>
	</tr>
    <tr >
    	<td >5.</td>
		<th >Jumlah Juz yang sudah dihafal</th>
		<th >: ' . $pendaftar['jml_juz'] . ' </th>
	</tr>
</table>

<br>
<br>
<hr>
<p>Kode Pendaftaran : </p>
<p>Bogor-L-' . $pendaftar['id'] . '/.' . $pendaftar['nisn'] . ' </p>';
$pdf->WriteHTMLCell(0, 0, '', '', $table2, 0, 1, 0, true, 'c', true);

$content = '

';
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $content, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('REGISTRATION.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
