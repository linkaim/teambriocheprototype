<?php
namespace Barryvdh\DomPDF;
use DOMPDF;
use Exception;
use Illuminate\Filesystem\Filesystem;
use Illuminate\View\Factory as ViewFactory;
use Illuminate\Contracts\Config\Repository as ConfigRepository;
use Illuminate\Http\Response;
/**
 * A Laravel wrapper for DOMPDF
 *
 * @package laravel-dompdf
 * @author Barry vd. Heuvel
 */

$html =
  '<html><body>'.
  '<p>Put your html here, or generate it with your favourite '.
  'templating system.</p>'.
  '</body></html>';

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("report.pdf");

?>