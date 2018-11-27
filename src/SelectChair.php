<?php
/**
 * This file is part of the InakaPhper.SelectChair
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace InakaPhper\SelectChair;

class SelectChair
{
    private $chairs;

    public function __construct($input)
    {
        list($capacity, $io) = explode(':', $input);
        $ios = str_split($io);

        $psychology = new RamenShopHumanPsychology;
        $this->chairs = new Chairs($capacity, $psychology);

        foreach ($ios as $io) {
            if (ctype_upper($io)) {
                $this->chairs->join($io);
            }
            if (ctype_lower($io)) {
                $this->chairs->leave($io);
            }
        }
    }

    public function __toString()
    {
        return (string)$this->chairs;
    }
}
