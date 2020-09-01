<?php
namespace Application\Variance;
class ArrFactory implements Factory {
    protected array $data;
    public function make(array $data): ArrTest {
        $this->data = $data;
        return new ArrTest($this->data);
    }
}
