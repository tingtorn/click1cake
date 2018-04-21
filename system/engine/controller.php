<?php
/**
 * @package		OpenCart
 * @author		Daniel Kerr
 * @copyright	Copyright (c) 2005 - 2017, OpenCart, Ltd. (https://www.opencart.com/)
 * @license		https://opensource.org/licenses/GPL-3.0
 * @link		https://www.opencart.com
*/

/**
* Controller class
*/
abstract class Controller {
	protected $registry;

	public function __construct($registry) {
		$this->registry = $registry;
	}

	public function __get($key) {
		return $this->registry->get($key);
	}

	public function __set($key, $value) {
		$this->registry->set($key, $value);
	}



	protected function renderPDF($filename = "invoice", $type= "I") {
				
		$this->output = $this->fetch($this->template);
		
				
				// Description : Example 006 for TCPDF class
				//               WriteHTML and RTL support
				// 
				// Author: Nicola Asuni
				// 
				// (c) Copyright:
				//               Nicola Asuni
				//               Tecnick.com s.r.l.
				//               Via Della Pace, 11
				//               09044 Quartucciu (CA)
				//               ITALY
				//               http://www.tecnick.com
				//               info@tecnick.com
				//============================================================+

				/**
				 * Creates an example PDF TEST document using TCPDF
				 * @package com.tecnick.tcpdf
				 * @abstract TCPDF - Example: WriteHTML and RTL support
				 * @author Nicola Asuni
				 * @copyright 2004-2009 Nicola Asuni - Tecnick.com S.r.l (http://www.tecnick.com) Via Della      Pace, 11 - 09044 - Quartucciu (CA) - ITALY - http://www.tecnick.com - info@tecnick.com
				 * @link http://tcpdf.org
				 * @license http://www.gnu.org/copyleft/lesser.html LGPL
				 * @since 2008-03-04
				 */

				require_once(DIR_SYSTEM.'external/tcpdf/config/lang/eng.php');
				require_once(DIR_SYSTEM.'external/tcpdf/tcpdf.php');

				// create new PDF document
				$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false); 

				// set document information
				$pdf->SetCreator(PDF_CREATOR);
				$pdf->SetAuthor('Nicola Asuni');
				$pdf->SetTitle('TCPDF Example 006');
				$pdf->SetSubject('TCPDF Tutorial');
				$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

				// set default header data
				$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

				// set header and footer fonts
				$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
				$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

				//set margins
				$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
				$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
				$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

				//set auto page breaks
				$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

				//set image scale factor
				$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO); 

				//set some language-dependent strings
				$pdf->setLanguageArray($l); 

				// ---------------------------------------------------------

				// set font
				$pdf->SetFont('dejavusans', '', 10);


				// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -


				// Print a table

				// add a page
				$pdf->AddPage();

				// create some HTML content

				$tablecontent = $this->output;

				// output the HTML content
				$pdf->writeHTML($tablecontent, true, 0, true, 0);

				// reset pointer to the last page
				$pdf->lastPage();


				// ---------------------------------------------------------

				//Close and output PDF document
				// I,D - display on screen, S - send mail, F- save as file
				// $pdf->Output('invoice.pdf', 'I');

				//============================================================+
				// END OF FILE                                                 
				//============================================================+
	}
	}
