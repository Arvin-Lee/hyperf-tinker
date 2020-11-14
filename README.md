### install
```
composer require leearvin/hyperf-tinker
```
### use
```
php bin/hyerf.php tinker
```
### commnads
````shell script
run command
    Psy Shell v0.10.4 (PHP 7.3.11 — cli)
    >>> $a=1
    => 1
    >>> $a
    => 1
    >>> define('VERSION', 'v1.0.1')
    => true
    >>> VERSION
    => "v1.0.1"
    >>>
````
```shell script
The help command
    >>> help
      help             Show a list of commands. Type `help [foo]` for information about [foo].      Aliases: ?
      ls               List local, instance or class variables, methods and constants.              Aliases: dir
      dump             Dump an object or primitive.
      doc              Read the documentation for an object, class, constant, method or property.   Aliases: rtfm, man
      show             Show the code for an object, class, constant, method or property.
      wtf              Show the backtrace of the most recent exception.                             Aliases: last-exception, wtf?
      whereami         Show where you are in the code.
      throw-up         Throw an exception or error out of the Psy Shell.
      timeit           Profiles with a timer.
      trace            Show the current call stack.
      buffer           Show (or clear) the contents of the code input buffer.                       Aliases: buf
      clear            Clear the Psy Shell screen.
      edit             Open an external editor. Afterwards, get produced code in input buffer.
      sudo             Evaluate PHP code, bypassing visibility restrictions.
      history          Show the Psy Shell history.                                                  Aliases: hist
      exit             End the current session and return to caller.                                Aliases: quit, q
      clear-compiled   Remove the compiled class file
      down             Put the application into maintenance mode
      env              Display the current framework environment
      optimize         Cache the framework bootstrap files
      up               Bring the application out of maintenance mode
      migrate          Run the database migrations
      inspire          Display an inspiring quote
```
```shell script
    >>> clear
    >>> show Request
    663:     /**
    664:      * Get an instance of the current request or an input item from the request.
    665:      *
    666:      * @param  array|string|null  $key
    667:      * @param  mixed  $default
    668:      * @return \Illuminate\Http\Request|string|array
    669:      */
    670:     function request($key = null, $default = null)
    671:     {
    672:         if (is_null($key)) {
    673:             return app('request');
    674:         }
    675:
    676:         if (is_array($key)) {
    677:             return app('request')->only($key);
    678:         }
    679:
    680:         $value = app('request')->__get($key);
    681:
    682:         return is_null($value) ? value($default) : $value;
    683:     }
    
    >>>
```
```shell script
get hyperf env
    Psy Shell v0.10.4 (PHP 7.2.34 — cli)
    >>> env("APP_NAME")
    => "skeleton"
    >>>
```
```shell script
Show the current call stack
    >>> trace
     0:  Laravel\Tinker\Console\TinkerCommand->handle() at vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php:36
     1:  Illuminate\Container\BoundMethod::Illuminate\Container\{closure}() at vendor/laravel/framework/src/Illuminate/Container/Util.php:37
     2:  Illuminate\Container\Util::unwrapIfClosure() at vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php:93
     3:  Illuminate\Container\BoundMethod::callBoundMethod() at vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php:37
     4:  Illuminate\Container\BoundMethod::call() at vendor/laravel/framework/src/Illuminate/Container/Container.php:596
     5:  Illuminate\Container\Container->call() at vendor/laravel/framework/src/Illuminate/Console/Command.php:134
     6:  Illuminate\Console\Command->execute() at vendor/symfony/console/Command/Command.php:258
     7:  Symfony\Component\Console\Command\Command->run() at vendor/laravel/framework/src/Illuminate/Console/Command.php:121
     8:  Illuminate\Console\Command->run() at vendor/symfony/console/Application.php:920
     9:  Symfony\Component\Console\Application->doRunCommand() at vendor/symfony/console/Application.php:266
    10:  Symfony\Component\Console\Application->doRun() at vendor/symfony/console/Application.php:142
    11:  Symfony\Component\Console\Application->run() at vendor/laravel/framework/src/Illuminate/Console/Application.php:93
    12:  Illuminate\Console\Application->run() at vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php:129
    13:  Illuminate\Foundation\Console\Kernel->handle() at artisan:37
    >>>
```