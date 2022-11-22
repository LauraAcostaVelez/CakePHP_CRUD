<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Routing\Router;
use Spatie\Browsershot\Browsershot;

/**
 * Pdf Controller
 *
 */
class PdfController extends AppController
{
    public function create()
    {
        /*$pdf = Browsershot::url(Router::url([
            '_host' => 'localhost',
            '_port' => 80,
            'action' => 'html']))
            
            ->noSandbox()
            ->pdf();

        $response = $this->getResponse();

        $response = $response->withStringBody($pdf)
            ->withType('pdf');
        
            return $response;*/
    }

    public function html()
    {
        $this->viewBuilder()
            ->setLayout('/Browsershot/default')
            ->setTemplate('browsershot');
    }
}
