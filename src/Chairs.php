<?php
namespace InakaPhper\SelectChair;

use Tightenco\Collect\Support\Collection;

/**
 * Created by PhpStorm.
 * User: okuda
 * Date: 2018/11/27
 * Time: 17:09
 */

class Chairs
{
    /**
     * @var PsychologyInterface
     */
    private $psychology;

    private $chairs;

    public function __construct(int $capacity, PsychologyInterface $psychology)
    {
        $this->psychology = $psychology;
        $this->chairs = (new Collection())->pad($capacity, null);
    }

    public function join(string $customer)
    {
        $key = $this->psychology->join($this->chairs);
        $this->chairs->put($key, $customer);
    }

    public function leave(string $customer)
    {
        $key = $this->psychology->leave($this->chairs, $customer);
        $this->chairs->put($key, null);
    }

    public function __toString()
    {
        return $this->chairs->map(function ($value) {
            return is_null($value) ? '-' : $value;
        })->implode('');
    }
}
