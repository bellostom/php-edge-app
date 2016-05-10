<?php
namespace Application\Tests;

use Edge\Core\Tests\EdgeControllerTestCase;

class HomeTest Extends EdgeControllerTestCase{

    protected function getConfigFile(){
        return include("Application/Config/config.php");
    }

    public function testIndex(){
        $crawler = $this->get("/");
        $this->assertEquals("Edge MVC", $crawler->filter("title")->text());
    }

    public function testList(){
        $crawler = $this->get("/list");
        $this->assertEquals(3, $crawler->filter("p")->count());
        $this->assertEquals("one", $crawler->filter("p")->eq(0)->text());
    }

}