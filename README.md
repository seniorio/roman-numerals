PHP Roman Numerals
==================

One-way Arabic-to-Roman numerals converter using regex for a laugh.

```php
require_once __DIR__.'/../vendor/autoload.php';

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
