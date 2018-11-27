<?php
/**
 * This file is part of the InakaPhper.SelectChair
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace InakaPhper\SelectChair;

use PHPUnit\Framework\TestCase;

class SelectChairTest extends TestCase
{
    /**
     * @var SelectChair
     */
    protected $selectChair;

    protected function setUp()
    {
        $this->selectChair = new SelectChair;
    }

    public function testIsInstanceOfSelectChair()
    {
        $actual = $this->selectChair;
        $this->assertInstanceOf(SelectChair::class, $actual);
    }
}
