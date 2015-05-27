# Ckeditor

[![Build Status](https://travis-ci.org/tsmsogn/cakephp_ckeditor.svg)](https://travis-ci.org/tsmsogn/cakephp_ckeditor)

CKEditor plugin for CakePHP.

## Features

- CKEditor version 4.4.5 (full)

## Installation

Put your app plugin directory as `Ckeditor`.

### Enable plugin

In 2.0 you need to enable the plugin your app/Config/bootstrap.php file:

```php
<?php
CakePlugin::load('Ckeditor');
?>
```

If you are already using CakePlugin::loadAll();, then this is not necessary.

### Usage

In controller:

```php
<?php
class AppController extends Controller {

	public $helpers = array(
		'Ckeditor.Ckeditor',
	);

}
```

In view:

```php
<?php
echo $this->Html->script('/Ckeditor/js/ckeditor', array('inline' => false));

echo $this->Form->input('model.field1');
echo $this->Ckeditor->load('ModelField1'); // Set input tag ID

echo $this->Form->input('model.field2');
echo $this->Ckeditor->load('ModelField2', array('filebrowserBrowseUrl' => 'yourBrowseUrl')); // Set input tag ID, and CKEditor settings
?>
```

CKEDITOR.config documentation is avaliable from [here](http://docs.ckeditor.com/#!/api/CKEDITOR.config).

## License

Copyright (c) 2011 Nigel Babu, and Valkum, Copyright (c) 2014 Toshimasa Oguni

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
