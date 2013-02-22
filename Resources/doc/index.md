Getting Started With Giko CorpBundle
=====================================

## Installation

Installation is a quick (I promise!) 4 step process:

Setting up the bundle
=============================
### A) Download and install GikoCorpBundle

To install GikoCorpBundle run the following command

``` bash
$ php composer.phar require giko/corp-bundle
```

### B) Enable the bundle

Finally, enable the required bundles in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Giko\CorpBundle\GikoCorpBundle(),
    );
}
```

### C) Import the routing
``` yaml
#app/config/routing.yml
giko_corp:
    resource: "@GikoCorpBundle/Resources/config/routing.yml"
    prefix:   /
```


### D) Make the cache directory and chmod its permission
``` bash
cd webroot
mkdir cache && chmod 777 cache
```

### E) Test the bundle:
http://example.com/cache/100x100/path/to/a/existed/image/file.ext


Congratulations! You have all done.



## Optional next steps

The following steps are optional and the order doesn't matter:

- [customize the configration](2-customize_configration.md)

**Any problem?**
Don't hesitate to contact me or folk a branch. 

TODO:
Clear cache
