<?php
namespace InakaPhper\SelectChair;

use Tightenco\Collect\Support\Collection;

/**
 * Created by PhpStorm.
 * User: okuda
 * Date: 2018/11/27
 * Time: 17:13
 */

interface PsychologyInterface
{
    public function join(Collection $chairs): ?int;

    public function leave(Collection $chairs, string $customer): ?int;

}