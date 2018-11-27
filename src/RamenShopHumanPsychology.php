<?php
namespace InakaPhper\SelectChair;

use Tightenco\Collect\Support\Collection;

/**
 * Created by PhpStorm.
 * User: okuda
 * Date: 2018/11/27
 * Time: 17:13
 */

class RamenShopHumanPsychology implements PsychologyInterface
{
    /**
     * @param Collection $chairs
     * @return int|null
     */
    public function join(Collection $chairs): ?int
    {
        if (($triple = $this->triple($chairs)) !== false) {
            return $triple;
        }
        if (($double = $this->double($chairs)) !== false) {
            return $double;
        }
        if (($single = $this->single($chairs)) !== false) {
            return $single;
        }

        return null;
    }

    public function leave(Collection $chairs, string $customer): ?int
    {
        return $chairs->search(strtoupper($customer));
    }

    private function triple(Collection $chairs)
    {
        return $chairs->search(function ($value, $key) use ($chairs) {
            return !$chairs->get($key - 1) && !$value && !$chairs->get($key + 1);
        });
    }

    private function double(Collection $chairs)
    {
        return $chairs->search(function ($value, $key) use ($chairs) {
            return (!$chairs->get($key - 1) && !$value) || (!$value && !$chairs->get($key + 1));
        });
    }

    private function single(Collection $chairs)
    {
        return $chairs->search(function ($value) {
            return !$value;
        });
    }
}