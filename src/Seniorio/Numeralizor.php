<?php

namespace Seniorio;

class Numeralizor
{
    /**
     * Arabic to Roman Numerals converter
     *
     * As a bit of a silly experiment, I’ve tried to solve this using Regular
     * Expressions.
     *
     * The very first step is to represent the Arabic number using just the
     * numeral I, so 1 = I and 18 = IIIIIIIIIIIIIIIIII.
     *
     * If we concern ourselves with just I, V, and X for a moment, there are
     * two phases of regex replacement that need to be completed:
     *
     * Phase 1:
     * -   All occurrences of IIIII (5) need to be replaced with V;
     * -   Then, all occurrences of VV (10) need to be replaced with X;
     *
     * Phase Two:
     * -   All remaining occurrences of IIII (4) need to be replaced with
     *     the proper IV;
     * -   Then, any instances of VIV (9) need to be replaced with the
     *     proper IX;
     *
     * The phases above for dealing with the numerals for 1, 5, and 10 are
     * exactly the same for each multiple of ten upwards:
     *
     * So, for...            1 (I),   5 (V), and   10 (X),
     * it’s the same for    10 (X),  50 (L), and  100 (C),
     * and the same for    100 (C), 500 (D), and 1000 (M).
     *
     * Phase 1 needs to be completed for each of these groups (IVX, XLC, CDM),
     * then Phase 2 can be completed for each of these groups afterwards.
     *
     * In the code below, the first `foreach` loop iterates through each of the
     * phases above. The strings in the array each contain four space-separated
     * tokens, representing two find-replace pairs. E.g. `/I{5}/ V` will be
     * used to replace IIIII with V, and `/V{2}/ X` will be used to replace
     * VV with X.
     *
     * The second `foreach` loop iterates through our groups of numerals (each
     * a multiple of 10 greater than the last).
     *
     * We use `strtr($p, 'IVX', $r)` to translate all the find-replace tokens
     * to the correct multiple-of-ten group, as the patterns are identical.
     * E.g. the phase `/I{5}/ V /V{2}/ X` will become `/X{5}/ L /L{2}/ C`.
     *
     * The last step after this translation is to `explode` the space-separated
     * string and feed the tokens into the correct parameters of `preg_replace`.
     *
     * @param  int    $n
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
