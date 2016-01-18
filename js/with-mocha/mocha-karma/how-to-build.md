# Karma & Mocha


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
name: (temp) my-mocha-project
version: (1.0.0)
description: My mocha project
entry point: (index.js)
test command: mocha test
git repository:
keywords: project, mocha, karma
author: you
license: (ISC)
About to write to ...\package.json:

{
  "name": "my-mocha-project",
  "version": "1.0.0",
  "description": "My mocha project",
  "main": "index.js",
  "scripts": {
    "test": "mocha test"
  },
  "keywords": [
    "project",
    "mocha",
    "karma
  ],
  "author": "you",
  "license": "ISC"
}

Is this ok? (yes)
```


## Install Karma, Chai & Sinon

```shell
npm install -D karma chai karma-chai sinon karma-sinon
# npm install -D karma chai karma-chai sinon karma-sinon mocha karma-mocha karma-phantomjs-launcher phantomjs
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

Console output:

```shell
Which testing framework do you want to use ?
Press tab to list possible options. Enter to move to the next question.
> mocha

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


## karma.conf.js & Mocha, Chai, Sinon

```javascript
[...]
    frameworks: ['mocha', 'chai', 'sinon'],
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
    'src/**/!(*.test).js': 'coverage'
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
