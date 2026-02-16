<?php

class HttpAcceptLanguage
{
    /**
     * Accepted languages
     * @var HttpLanguage[]
     */
    protected $acceptedLanguages = [];
    function __construct(?string $httpAcceptLanguage)
    {
        if ($httpAcceptLanguage . '' != '') {
            foreach(explode(',', $httpAcceptLanguage) as $langAndQuality) {
                $langs = explode (';', $langAndQuality);
                if (count($langs) == 1) {
                    $langs[1] = 'q=1.0';
                }

                $this->acceptedLanguages[] = new HttpLanguage($langs[0], substr($langs[1], 2));
            }
            uasort($this->acceptedLanguages, 'languageCompare');
        }
    }

    function getLanguage(array $testLanguages, ?string $fallback = null)
    {
        foreach($testLanguages as $testLanguage) {
            foreach($this->acceptedLanguages as $acceptedLanguage) {
                if (($acceptedLanguage->language) == ($testLanguage)) {
                    return $testLanguage;
                }
            }
        }
        return $fallback;
    }

    function __tostring()
    {
        return implode(',', $this->acceptedLanguages);
    }   
}

function languageCompare($a, $b) {
    if ($a->quality == $b->quality) {
        return 0;
    }
    return ($a->quality > $b->quality) ? -1 : 1;
}

class HttpLanguage
{
    public $language;

    public $country = null;

    public $quality;

    function __construct(?string $language = "", float $quality = 1.0)
    {
        $langCountry = explode('-', $language);

        $this->language = $langCountry[0];
        if(count($langCountry) > 1) {
            $this->country = $langCountry[1];
        }
        $this->quality = $quality;
    }

    function __tostring()
    {
        return $this->language . (($this->country) ? '-' . $this->country : '') . ';q=' . round($this->quality, 1);
    }

}