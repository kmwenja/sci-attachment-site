sci-attachment-site
===================

SCI Attachment Management Website

## Authors

* Canine Mwenja

## Installation and Running

1. Clone repo
2. Put the project in a webserver
3. Add a ```db.config.php``` file to the project's root with the following content
```
<?php

$_db_host = 'your database host';
$_db_name = 'your database name';
$_db_username = 'username';
$_db_password = 'password';

```

## Testing

Testing is done using [Codeception](http://codeception.com/).

To run tests:
1. Download ```composer.phar```
2. Go to the project's root
2. Run ```php codecept.phar run```

If you edit any of the testing settings (*.yml files), run ```php codecept.phar build```
