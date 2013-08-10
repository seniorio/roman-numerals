<?php

class Numeralizor
{
    /**
     * @param  int $n
     * @return string
     */
    public function arabicToRoman($n)
    {
        $n = str_repeat('I', $n);

        foreach (array('/I{5}/ V /V{2}/ X', '/I{4}/ IV /VIV/ IX') as $p) {
            foreach (array('IVX', 'XLC', 'CDM') as $r) {
                $a = explode(' ', strtr($p, 'IVX', $r));
                $n = preg_replace(array($a[0], $a[2]), array($a[1], $a[3]), $n);
            }
        }

        return $n;
    }
}
