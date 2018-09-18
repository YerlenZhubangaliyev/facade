# Facade example

```php
<?php

$mediaFile = new Facade();

echo $mediaFile
        ->upload('/path/to/file')
        ->getUrl()
;
```
