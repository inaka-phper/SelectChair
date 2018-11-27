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
    public function data()
    {
        return [
            ['6:NABEbBZn', '-ZAB-E'],
            ['1:A', 'A'],
            ['1:Aa', '-'],
            ['2:AB', 'AB'],
            ['2:AaB', 'B-'],
            ['2:AZa', '-Z'],
            ['2:AZz', 'A-'],
            ['3:ABC', 'ACB'],
            ['3:ABCa', '-CB'],
            ['4:ABCD', 'ADBC'],
            ['4:ABCbBD', 'ABDC'],
            ['4:ABCDabcA', '-D-A'],
            ['5:NEXUS', 'NUESX'],
            ['5:ZYQMyqY', 'ZM-Y-'],
            ['5:ABCDbdXYc', 'AYX--'],
            ['6:FUTSAL', 'FAULTS'],
            ['6:ABCDEbcBC', 'AECB-D'],
            ['7:FMTOWNS', 'FWMNTSO'],
            ['7:ABCDEFGabcdfXYZ', 'YE-X-GZ'],
            ['10:ABCDEFGHIJ', 'AGBHCIDJEF'],
        ];
    }
    /**
     * @dataProvider data
     * @param $input
     * @param $expected
     */
    public function testIsInstanceOfSelectChair($input, $expected)
    {
        $this->assertEquals($expected, (string)(new SelectChair($input)));
    }
}
