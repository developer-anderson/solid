<?php
use PHPUnit\Framework\TestCase;
use App\Item;
class ItemTest extends TestCase
{
    public function testEstadoInicialItem()
    {
        $item = new Item();
        $this->assertEquals('',$item->getDescricao());
        $this->assertEquals(0,$item->getValor());
    }

    public function testGetSetDescricao()
    {
        $item = new Item();
        $item->setDescricao("Mesa");
        $this->assertEquals('Mesa',$item->getDescricao());
    }
    /**
     * @dataProvider providerData
     */
    public function testGetSetDValor($valor)
    {
        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals(11.5,$item->getValor());
    }

    public function providerData()
    {
        return [[100],[2],[-5]];
    }
}