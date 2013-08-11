# PHP Roman Numerals

One-way Arabic-to-Roman-numerals converter using regex for a laugh.

```php
require_once __DIR__.'/../vendor/autoload.php';

use Seniorio\Numeralizor;

$numeralizor = new Numeralizor;

echo $numeralizor->arabicToRoman($argv[1])."\n";

exit;
```

Or:

```sh
$ ./bin/roman 10
```

## Warning!

Not a good solution, just a bit of fun with regex.

## Arabic to Roman Numerals Conversion

As a bit of a silly experiment, I’ve tried to solve this using Regular
Expressions.

The very first step is to represent the Arabic number using just the
numeral I, so 1 = I and 18 = IIIIIIIIIIIIIIIIII.

If we concern ourselves with just I, V, and X for a moment, there are
two phases of regex replacement that need to be completed:

Phase 1:
-   All occurrences of IIIII (5) need to be replaced with V;
-   Then, all occurrences of VV (10) need to be replaced with X;

Phase Two:
-   All remaining occurrences of IIII (4) need to be replaced with
    the proper IV;
-   Then, any instances of VIV (9) need to be replaced with the
    proper IX;

The phases above for dealing with the numerals for 1, 5, and 10 are
exactly the same for each multiple of ten upwards:

```
So, for...            1 (I),   5 (V), and   10 (X),
it’s the same for    10 (X),  50 (L), and  100 (C),
and the same for    100 (C), 500 (D), and 1000 (M).
```

Phase 1 needs to be completed for each of these groups (IVX, XLC, CDM),
then Phase 2 can be completed for each of these groups afterwards.

In the code below, the first `foreach` loop iterates through each of the
phases above. The strings in the array each contain four space-separated
tokens, representing two find-replace pairs. E.g. `/I{5}/ V` will be
used to replace IIIII with V, and `/V{2}/ X` will be used to replace
VV with X.

The second `foreach` loop iterates through our groups of numerals (each
a multiple of 10 greater than the last).

We use `strtr($p, 'IVX', $r)` to translate all the find-replace tokens
to the correct multiple-of-ten group, as the patterns are identical.
E.g. the phase `/I{5}/ V /V{2}/ X` will become `/X{5}/ L /L{2}/ C`.

The last step after this translation is to `explode` the space-separated
string and feed the tokens into the correct parameters of `preg_replace`.
