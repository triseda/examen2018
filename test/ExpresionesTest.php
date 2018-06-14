<?php
require_once "src\Expresiones.php";
use PHPUnit\Framework\TestCase;
use lib\utils\Expresiones;

class ExpresionesTest extends TestCase
{

    public function testCadenaCorrecta()
    {
        $res = Expresiones::secuenciaParentesisBalanceada("(abcd)");
        $this->assertTrue($res);
    }

    public function testCadenaSinApertura()
    {
        $res = Expresiones::secuenciaParentesisBalanceada("abcde)");
        $this->assertFalse($res);
    }

    public function testCadenaSinCierre()
    {
        $res = Expresiones:: secuenciaParentesisBalanceada("(abcde");
        $this->assertFalse($res);
    }
}

?>