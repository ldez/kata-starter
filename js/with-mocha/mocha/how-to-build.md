# Mocha project

- http://mochajs.org

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
keywords: project, mocha
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
    "mocha"
  ],
  "author": "you",
  "license": "ISC"
}

Is this ok? (yes)
```

## Install Mocha

```shell
npm install -D mocha chai sinon
# Install Mocha globaly for use as command line tool
npm install -g mocha
```

## (optional) Initiate Mocha for Browser

```shell
mocha init ./spec
```

## Run tests

```shell
# stand-alone
mocha test
# within NPM
npm test
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
├── mocha.opts
├── .editorconfig
└── .jshintrc
```
