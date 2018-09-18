# Facade example

```php
<?php

$mediaFile = new Facade();

$mediaFile->upload('/path/to/file');

echo $mediaFile->getUrl();
```