# Karma & Jasmine & TypeScript


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
name: (temp) my-typescript-project
version: (1.0.0)
description: My TypeScript project
entry point: (index.js)
test command: karma start
git repository:
keywords: project, jasmine, karma, TypeScript
author: you
license: (ISC)
About to write to ...\package.json:

{
  "name": "my-typescript-project",
  "version": "1.0.0",
  "description": "My TypeScript project",
  "main": "index.js",
  "scripts": {
    "test": "karma start"
  },
  "keywords": [
    "project",
    "jasmine",
    "karma",
    "TypeScript"
  ],
  "author": "you",
  "license": "ISC"
}

Is this ok? (yes)
```


## Install Karma & TypeScript

```shell
npm install -D karma typescript karma-typescript-preprocessor
# npm install -D karma typescript karma-typescript-preprocessor jasmine-core karma-jasmine karma-phantomjs-launcher phantomjs
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
> src/**/*.ts
WARN [init]: There is no file matching this pattern.
> spec/**/*.ts
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


## karma.conf.js & TypeScript

```javascript
[...]
  preprocessors: {
      '+(src|spec)/**/*.ts': ['typescript']
  },
[...]
  // TypeScript preprocessor configuration
  typescriptPreprocessor: {
    // options passed to the typescript compiler
    options: {
      target: 'ES5', // (optional) Specify ECMAScript target version: 'ES3' (default), or 'ES5'
      noImplicitAny: true, // (optional) Warn on expressions and declarations with an implied 'any' type.
    }
  },
[...]
```


## Jasmine & TypeScript

Get `jasmine.d.ts` file from [DefinitelyTyped - Jasmine](https://github.com/borisyankov/DefinitelyTyped/tree/master/jasmine).

Add at the begin of each test:

````typescript
/// <reference path="vendor/jasmine.d.ts" />
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

Attention le preprocessor doit se situer **après** celui de Typescript car Istanbul ne sait pas instrumenter TypeScript.

La couverture de code sera alors donner sur le code généré en JS au lieu du TypeScript.

```javascript
[...]
  preprocessors: {
    'src/**/!(*.test).ts': 'coverage'
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
│   ├── file01.ts
│   ├── file02.ts
│   └── ...
├── spec
│   ├── vendor
│   │   └── jasmine.d.ts
│   ├── file01.spec.ts
│   ├── file02.spec.ts
│   └── ...
├── package.json
├── karma.conf.js
├── .editorconfig
└── .jshintrc
```

