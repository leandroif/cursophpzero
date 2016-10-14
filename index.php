<?php
class Cache {

    private $cache;

    public function getPage($page) {


        if(!file_exists($page.'.cache') || (!$this->isValido($page.'.cache'))){
            ob_start();
            require $page.'.php';
            $html = ob_get_contents();
            $this->cache = $html;
            ob_end_clean();
            $this->saveCache($page);
        } else {
            $this->readCache($page);
        }
        return $this->cache;

    }

    private function isValido($cach) {
        $c = 0;
        $ultima_modificacao = filemtime($cach);
        $c = time() - $ultima_modificacao;

        if($c > 10){
            return false;
        } else {
            return true;
        }

    }

    private function readCache($page) {
        $this->cache = new stdClass();

        if(file_exists($page.'.cache')){
            $this->cache = file_get_contents($page.'.cache');
        }
    }

    private function saveCache($page) {
        file_put_contents($page.".cache", $this->cache);
    }

}
$cache = new Cache();

echo $cache->getPage("pagina2");

