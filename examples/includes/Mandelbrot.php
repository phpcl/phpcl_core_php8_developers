<?php
// includes/Mandelbrot.php
class Mandelbrot
{
	const BAILOUT = 16;
	const MAX_ITERATIONS = 10000;
	/**
	 * @jit
	 */
    public function render()
    {
        $d1 = microtime(1);
        for ($y = -39; $y < 39; $y++) {
            for ($x = -39; $x < 39; $x++) {

                if ($this->iterate($x/40.0,$y/40.0) == 0) 
                    echo("*");
                else
                    echo(" ");

            }
            echo("\n");
        }
        $d2 = microtime(1);
        $diff = $d2 - $d1;
        printf("\nPHP Elapsed %0.3f\n", $diff);
    }

	/**
	 * @jit
	 */
    public function iterate($x,$y)
    {
        $cr = $y-0.5;
        $ci = $x;
        $zr = 0.0;
        $zi = 0.0;
        $i = 0;
        while (true) {
            $i++;
            $temp = $zr * $zi;
            $zr2 = $zr * $zr;
            $zi2 = $zi * $zi;
            $zr = $zr2 - $zi2 + $cr;
            $zi = $temp + $temp + $ci;
            if ($zi2 + $zr2 > self::BAILOUT)
                return $i;
            if ($i > self::MAX_ITERATIONS)
                return 0;
        }
    
	}
}
