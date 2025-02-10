// composer require "twig/twig"
require 'vendor/autoload.php';

class Template {
    private $twig;

    public function __construct() {
        $indexTemplate = '<img ' .
            'src="https://loremflickr.com/320/240">' .
            '<a href="{{link|escape}}">Next slide »</a>';

        // Default twig setup, simulate loading
        // index.html file from disk
        $loader = new Twig\Loader\ArrayLoader([
            'index.html' => $indexTemplate
        ]);
        $this->twig = new Twig\Environment($loader);
    }

    public function getNexSlideUrl() {
        $nextSlide = $_GET['nextSlide'];
        return filter_var($nextSlide, FILTER_VALIDATE_URL);
    }

    public function render() {
        echo $this->twig->render(
private function getNexSlideUrl() {
    $nextSlide = $_GET['nextSlide'];
    $validatedUrl = filter_var($nextSlide, FILTER_VALIDATE_URL);
    if ($validatedUrl === false) {
        throw new InvalidArgumentException('Invalid URL');
    }
    return $validatedUrl;
}
            ['link' => $this->getNexSlideUrl()]
        );
    }
}

(new Template())->render();
