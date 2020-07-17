#!/bin/bash
cp /bin/lfphp-compile /bin/lfphp-compile-php8
sed -i 's/--prefix=\/usr/--prefix=\/usr\/local --with-ffi/g' /bin/lfphp-compile-php8
/bin/lfphp-compile-php8
