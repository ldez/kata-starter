# Karma & Jasmine & CoffeeScript


## Initiate NPM project

```shell
npm init
```

Console output:

```shell
This utility will walk you through creating a package.json file.
It only covers the most common items, and tries to guess sensible defaults.

See `npm help json` for definitive documentation on these fields
and exactly what they do.

Use `npm install <pkg> --save` afterwards to install a package and
save it as a dependency in the package.json file.

Press ^C at any time to quit.
name: (temp) my-coffeescript-project
version: (1.0.0)
description: My CoffeeScript project
entry point: (index.js)
test command: karma start
git repository:
keywords: project, jasmine, karma, CoffeeScript
author: you
license: (ISC)
About to write to ...\package.json:

{
  "name": "my-coffeescript-project",
  "version": "1.0.0",
  "description": "My CoffeeScript project",
  "main": "index.js",
  "scripts": {
    "test": "karma start"
  },
  "keywords": [
    "project",
    "jasmine",
    "karma",
    "CoffeeScript"
  ],
  "author": "you",
  "license": "ISC"
}

Is this ok? (yes)
```


## Install Karma & CoffeeScript

```shell
npm install -D karma karma-coffee-preprocessor
# npm install -D karma coffee-script karma-coffee-preprocessor jasmine-core karma-jasmine karma-phantomjs-launcher phantomjs
```


## Install Karma as command line tool

```shell
# linux
npm install -g karma
# windows
npm install -g karma-cli
```


## Initiate Karma project

```shell
# Initiate Karma
karma init karma.conf.coffee
```

Console output :

```shell
Which testing framework do you want to use ?
Press tab to list possible options. Enter to move to the next question.
> jasmine

Do you want to use Require.js ?
This will add Require.js plugin.
Press tab to list possible options. Enter to move to the next question.
> no

Do you want to capture any browsers automatically ?
Press tab to list possible options. Enter empty string to move to the next question.
> PhantomJS
>

What is the location of your source and test files ?
You can use glob patterns, eg. "js/*.js" or "test/**/*Spec.js".
Enter empty string to move to the next question.
> src/**/*.coffee
WARN [init]: There is no file matching this pattern.
> spec/**/*.coffee
WARN [init]: There is no file matching this pattern.
>

Should any of the files included by the previous patterns be excluded ?
You can use glob patterns, eg. "**/*.swp".
Enter empty string to move to the next question.
>

Do you want Karma to watch all the files and run the tests on change ?
Press tab to list possible options.
> yes

Config file generated at "...\karma.conf.coffee".
```


## karma.conf.coffee & CoffeeScript

```coffeescript
[...]
  preprocessors:
      '+(src|spec)/**/*.coffee': 'coffee'
[...]
```


## Run tests

```shell
# stand-alone
karma start
# within NPM
npm test
```


## Install Karma Coverage

```shell
# Coverage
npm install -D karma-coverage
```


## karma.conf.coffee & coverage

Attention le preprocessor doit se situer **après** celui de CoffeeScript car Istanbul ne sait pas instrumenter CoffeeScript.

La couverture de code sera alors donner sur le code généré en JS au lieu du CoffeeScript.

Il exite une extension [Ibrik](https://github.com/Constellation/ibrik) pour instrumenter le CoffeeScript mais pour l'instant je n'arrive pas à le faire fonctionner.

```coffeescript
[...]
  preprocessors:
    '+(src|spec)/**/*.coffee': 'coffee'
    'src/**/!(*.spec).coffee': 'coverage'
[...]
  reporters: ['dots', 'coverage']
[...]
  coverageReporter:
    reporters: [
      # File output
        type: 'html'
        dir: 'coverage/'
        # supprime les dossiers spécifiques à chaque browser
        subdir: '.'
      ,
      # Console output
        type: 'text'
    ]
[...]
```


## Project structure

```
├── src
│   ├── file01.coffee
│   ├── file02.coffee
│   └── ...
├── spec
│   ├── file01.spec.coffee
│   ├── file02.spec.coffee
│   └── ...
├── package.json
├── karma.conf.coffee
├── .editorconfig
└── .jshintrc
```

