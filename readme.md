# Facade example

```php
<?php

$mediaFile = new Facade();

echo $mediaFile
        ->upload('/path/to/file')
        ->getUrl()
;

// https://cdn.dogovor24.kz/<OBJECT_ID>
```
