PHP Roman Numerals
==================

Arabic-to-Roman-numerals converter (currently one-way) using regex for a laugh.

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

See comments at https://github.com/seniorio/roman-numerals/blob/master/src/Seniorio/Numeralizor.php for documentation.
