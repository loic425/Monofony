<?php



namespace App\Collector;

use App\Kernel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

final class AppCollector extends DataCollector
{
    public function __construct()
    {
        $this->data = [
            'version' => Kernel::VERSION,
        ];
    }

    public function getVersion(): string
    {
        return $this->data['version'];
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request $request, Response $response, \Exception $exception = null): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function reset(): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'app';
    }
}
