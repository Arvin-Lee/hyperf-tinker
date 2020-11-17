### 说明

### install

```bash
composer require leearvin/hyperf-tinker
```

### publish config

```bash
php bin/hyperf.php vendor:publish leearvin/hyperf-tinker
```

### use

```bash
php bin/hyperf.php tinker
```

### commnads

* run command

````bash
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

* The help command

```bash
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

* get hyperf env

```bash
Psy Shell v0.10.4 (PHP 7.2.34 — cli)
>>> env("APP_NAME")
=> "skeleton"
>>>
```