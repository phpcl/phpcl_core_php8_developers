<?php
namespace Application\Variance;
use ArrayObject;
interface Factory 
{
    public function make(array $arr): ArrayObject;
}
