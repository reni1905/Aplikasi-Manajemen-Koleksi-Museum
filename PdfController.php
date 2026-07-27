<?php

namespace App\Http\Controllers;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\PengunjungModel;
use App\Models\ArkeologikaModel;
use App\Models\EtnografikaModel;
use App\Models\FilologikaModel;
use App\Models\HistorikaModel;
use App\Models\KeramologikaModel;
use App\Models\SeniRupaModel;
use App\Models\TeknologikaModel;
use App\Models\GaleriModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PdfController extends Controller
{
    public function pengunjungpdf()
    {
        // Fetch data from database
        $data['pengunjung'] = PengunjungModel::orderBy('id', 'desc')->paginate(5);

        // Create PDF instance
        $pdf = new Dompdf();

        // Load HTML content (Blade view)
        $html = view('pengunjung.pdf', $data)->render();
        $pdf->loadHtml($html);

        // (Optional) Set options for PDF
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $pdf->setOptions($options);

        // Render PDF (streaming to browser)
        $pdf->render();

        // Stream the generated PDF to the browser
        return $pdf->stream('pengunjung.pdf');
    }

    public function arkeologikapdf()
    {
        // Fetch data from database
        $data['arkeologika'] = ArkeologikaModel::orderBy('id', 'desc')->paginate(5);

        // Create PDF instance
        $pdf = new Dompdf();

        // Load HTML content (Blade view)
        $html = view('arkeologika.pdf', $data)->render();
        $pdf->loadHtml($html);

        // (Optional) Set options for PDF
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $pdf->setOptions($options);

        // Render PDF (streaming to browser)
        $pdf->render();

        // Stream the generated PDF to the browser
        return $pdf->stream('arkeologika.pdf');
    }

    public function etnografikapdf()
    {
        // Fetch data from database
        $data['etnografika'] = EtnografikaModel::orderBy('id', 'desc')->paginate(5);

        // Create PDF instance
        $pdf = new Dompdf();

        // Load HTML content (Blade view)
        $html = view('etnografika.pdf', $data)->render();
        $pdf->loadHtml($html);

        // (Optional) Set options for PDF
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $pdf->setOptions($options);

        // Render PDF (streaming to browser)
        $pdf->render();

        // Stream the generated PDF to the browser
        return $pdf->stream('etnografika.pdf');
    }

    public function filologikapdf()
    {
        // Fetch data from database
        $data['filologika'] = FilologikaModel::orderBy('id', 'desc')->paginate(5);

        // Create PDF instance
        $pdf = new Dompdf();

        // Load HTML content (Blade view)
        $html = view('filologika.pdf', $data)->render();
        $pdf->loadHtml($html);

        // (Optional) Set options for PDF
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $pdf->setOptions($options);

        // Render PDF (streaming to browser)
        $pdf->render();

        // Stream the generated PDF to the browser
        return $pdf->stream('filologika.pdf');
    }

    public function historikapdf()
    {
        // Fetch data from database
        $data['historika'] = HistorikaModel::orderBy('id', 'desc')->paginate(5);

        // Create PDF instance
        $pdf = new Dompdf();

        // Load HTML content (Blade view)
        $html = view('historika.pdf', $data)->render();
        $pdf->loadHtml($html);

        // (Optional) Set options for PDF
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $pdf->setOptions($options);

        // Render PDF (streaming to browser)
        $pdf->render();

        // Stream the generated PDF to the browser
        return $pdf->stream('historika.pdf');
    }

    public function keramologikapdf()
    {
        // Fetch data from database
        $data['keramologika'] = KeramologikaModel::orderBy('id', 'desc')->paginate(5);

        // Create PDF instance
        $pdf = new Dompdf();

        // Load HTML content (Blade view)
        $html = view('keramologika.pdf', $data)->render();
        $pdf->loadHtml($html);

        // (Optional) Set options for PDF
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $pdf->setOptions($options);

        // Render PDF (streaming to browser)
        $pdf->render();

        // Stream the generated PDF to the browser
        return $pdf->stream('keramologika.pdf');
    }

    public function senirupapdf()
    {
        // Fetch data from database
        $data['senirupa'] = SeniRupaModel::orderBy('id', 'desc')->paginate(5);

        // Create PDF instance
        $pdf = new Dompdf();

        // Load HTML content (Blade view)
        $html = view('senirupa.pdf', $data)->render();
        $pdf->loadHtml($html);

        // (Optional) Set options for PDF
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $pdf->setOptions($options);

        // Render PDF (streaming to browser)
        $pdf->render();

        // Stream the generated PDF to the browser
        return $pdf->stream('senirupa.pdf');
    }

    public function teknologikapdf()
    {
        // Fetch data from database
        $data['teknologika'] = TeknologikaModel::orderBy('id', 'desc')->paginate(5);

        // Create PDF instance
        $pdf = new Dompdf();

        // Load HTML content (Blade view)
        $html = view('teknologika.pdf', $data)->render();
        $pdf->loadHtml($html);

        // (Optional) Set options for PDF
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $pdf->setOptions($options);

        // Render PDF (streaming to browser)
        $pdf->render();

        // Stream the generated PDF to the browser
        return $pdf->stream('teknologika.pdf');
    }

    public function galeripdf()
    {
        // Fetch data from database
        $data['galeri'] = GaleriModel::orderBy('id', 'desc')->paginate(5);

        // Create PDF instance
        $pdf = new Dompdf();

        // Load HTML content (Blade view)
        $html = view('galeri.pdf', $data)->render();
        $pdf->loadHtml($html);

        // (Optional) Set options for PDF
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $pdf->setOptions($options);

        // Render PDF (streaming to browser)
        $pdf->render();

        // Stream the generated PDF to the browser
        return $pdf->stream('galeri.pdf');
    }
}
