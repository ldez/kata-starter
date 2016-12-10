# Jasmine project

- http://jasmine.github.io/edge/node.html


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
name: (temp) my-jasmine-project
version: (1.0.0)
description: My jasmine project
entry point: (index.js)
test command: jasmine
git repository:
keywords: project, jasmine
author: you
license: (ISC)
About to write to ...\package.json:

{
  "name": "my-jasmine-project",
  "version": "1.0.0",
  "description": "My jasmine project",
  "main": "index.js",
  "scripts": {
    "test": "jasmine"
  },
  "keywords": [
    "project",
    "jasmine"
  ],
  "author": "you",
  "license": "ISC"
}

Is this ok? (yes)
```


## Install Jasmine

```shell
npm install -D jasmine
# Install Jasmine globaly for use as command line tool
npm install -g jasmine
```


## Initiate Jasmine

```shell
jasmine init
```


## (Optional) Generate examples

```shell
jasmine examples
```


## Run tests

```shell
# stand-alone
jasmine
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
