# Karma & QUnit & Babel


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
name: (temp) my-qunit-project
version: (1.0.0)
description: My QUnit project
entry point: (index.js)
test command: karma start
git repository:
keywords: project, QUnit, karma, babel
author: you
license: (ISC)
About to write to ...\package.json:

{
  "name": "my-qunit-project",
  "version": "1.0.0",
  "description": "My QUnit project",
  "main": "index.js",
  "scripts": {
    "test": "karma start"
  },
  "keywords": [
    "project",
    "QUnit",
    "karma",
    "babel"
  ],
  "author": "you",
  "license": "ISC"
}

Is this ok? (yes)
```


## Install Karma & Babel

```shell
npm install -D karma karma-babel-preprocessor
# npm install -D karma karma-babel-preprocessor jasmine-core karma-jasmine karma-phantomjs-launcher phantomjs
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
karma init
```

Console output :

```shell
Which testing framework do you want to use ?
Press tab to list possible options. Enter to move to the next question.
> qunit

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
> src/**/*.js
WARN [init]: There is no file matching this pattern.
> test/**/*.js
WARN [init]: There is no file matching this pattern.
>

Should any of the files included by the previous patterns be excluded ?
You can use glob patterns, eg. "**/*.swp".
Enter empty string to move to the next question.
>

Do you want Karma to watch all the files and run the tests on change ?
Press tab to list possible options.
> yes

Config file generated at "...\karma.conf.js".
```


## karma.conf.js & Babel

```javascript
[...]
  preprocessors: {
    '+(src|spec)/**/*.js': ['babel']
  },
[...]
  // Babel preprocessor configuration
  babelPreprocessor: {
    options: {
      sourceMap: 'inline'
    },
    filename: function (file) {
      return file.originalPath.replace(/\.js$/, '.es5.js');
    },
    sourceFileName: function (file) {
      return file.originalPath;
    }
  },
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


## karma.conf.js & coverage

```javascript
[...]
  preprocessors: {
    'src/**/!(*.spec).js': 'coverage'
  },
[...]
  reporters: ['dots', 'coverage'],
[...]
  // Coverage Reporter configuration
  coverageReporter: {
    reporters: [
      // File output
      {
        type: 'html',
        dir: 'coverage/',
        // supprime les dossiers spécifiques à chaque browser
        subdir: '.'
      },
      // Console output
      {
        type: 'text'
      }
    ]
  },
[...]
```


## Project structure

```
├── src
│   ├── file01.js
│   ├── file02.js
│   └── ...
├── test
│   ├── file01.test.js
│   ├── file02.test.js
│   └── ...
├── package.json
├── karma.conf.js
├── .editorconfig
└── .jshintrc
```
