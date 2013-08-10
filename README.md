PHP Roman Numerals
==================

One-way Arabic-to-Roman numerals converter using regex for a laugh.

```php
require_once __DIR__.'/../vendor/autoload.php';

$numeralizor = new Numeralizor;

echo $numeralizor->toNumerals($argv[1])."\n";

exit;
```

Or:

```sh
$ ./bin/roman 10
```

## Warning!

Certainly not supposed to be a good solution.
