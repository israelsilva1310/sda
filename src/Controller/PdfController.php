<?php
declare(strict_types=1);

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;

/**
 * Pdf Controller
 */
class PdfController extends AppController
{
    public function create(array $data = null)
    {

        $this->viewBuilder()->setLayout('pdf');
    }

    public function html(?array $data = null)
    {
        $options = new Options();
        $options->set('defaultFont', 'Courier');

        $pdf = new Dompdf($options);

        $pdf->loadHtml($data);

        // (Optional) Setup the paper size and orientation
        $pdf->setPaper('A4', 'landscape');

        // Renderiza o HTML para PDF
        $pdf->render();

        // Output the generated PDF to Browser
        $pdf->stream();

        $this->disableAutoRender();
        $this->set(compact('data'));
    }
}
