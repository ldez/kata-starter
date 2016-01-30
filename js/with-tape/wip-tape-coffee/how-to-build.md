# Tape project

- https://github.com/substack/tape


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
name: (tape) my-tape-project
version: (1.0.0)
description: My Tape project
entry point: (index.js)
test command: tape test/**/*.js
git repository:
keywords: project, tape
author: me
license: (ISC)
About to write to ../package.json:

{
  "name": "my-tape-project",
  "version": "1.0.0",
  "description": "My Tape project",
  "main": "index.js",
  "scripts": {
    "test": "tape test/**/*.js"
  },
  "keywords": [
    "project",
    "tape"
  ],
  "author": "me",
  "license": "ISC"
}


Is this ok? (yes)
```


## Install Tape

```shell
npm install -D tape
# Install Tape globaly for use as command line tool
npm install -g tape
```


## Colors

```shell
npm install -D faucet
```


## Run tests

```shell
# stand-alone
tape test/**/*.js
# within NPM
npm test
```


## Project structure

```
├── lib
│   ├── file01.js
│   ├── file02.js
│   └── ...
├── spec
│   ├── file01.spec.js
│   ├── file02.spec.js
│   ├── ...
│   ├── helpers
│   │   └── ...
│   └── support
│       └── jasmine.json
├── package.json
├── .editorconfig
└── .jshintrc
```

