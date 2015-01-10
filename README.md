The Puli Factory
================

[![Latest Stable Version](https://poser.pugx.org/puli/factory/v/stable.svg)](https://packagist.org/packages/puli/factory)
[![Total Downloads](https://poser.pugx.org/puli/factory/downloads.svg)](https://packagist.org/packages/puli/factory)
[![Dependency Status](https://www.versioneye.com/php/puli:factory/1.0.0/badge.svg)](https://www.versioneye.com/php/puli:factory/1.0.0)

Latest release: none

PHP >= 5.3.9

The [Puli] factory API contains a single interface [`PuliFactory`] that can be
used to generate Puli's core services. Implementations of this class are
typically generated with the [Puli CLI]. If you need specialized service
definitions, you should implement the interface by hand.

Read [Puli at a Glance] if you want to learn more about Puli.

Authors
-------

* [Bernhard Schussek] a.k.a. [@webmozart]
* [The Community Contributors]

Installation
------------

Follow the [Getting Started] guide to install Puli in your project.

Documentation
-------------

Read the [Puli Documentation] if you want to learn more about Puli.

Contribute
----------

Contributions to are very welcome!

* Report any bugs or issues you find on the [issue tracker].
* You can grab the source code at Puli’s [Git repository].

Support
-------

If you are having problems, send a mail to bschussek@gmail.com or shout out to
[@webmozart] on Twitter.

License
-------

All contents of this package are licensed under the [MIT license].

[Puli]: http://puli.io
[Puli CLI]: https://github.com/puli/cli
[Bernhard Schussek]: http://webmozarts.com
[The Community Contributors]: https://github.com/puli/factory/graphs/contributors
[Getting Started]: http://docs.puli.io/en/latest/getting-started.html
[Puli Documentation]: http://docs.puli.io/en/latest/index.html
[Puli at a Glance]: http://docs.puli.io/en/latest/at-a-glance.html
[issue tracker]: https://github.com/puli/issues/issues
[Git repository]: https://github.com/puli/factory
[@webmozart]: https://twitter.com/webmozart
[MIT license]: LICENSE
[`PuliFactory`]: src/PuliFactory.php
