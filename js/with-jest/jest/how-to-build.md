# Jest project

- https://facebook.github.io/jest/


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
name: (temp) my-jest-project
version: (1.0.0)
description: My jest project
entry point: (index.js)
test command: jest
git repository:
keywords: project, jest
author: you
license: (ISC)
About to write to ...\package.json:

{
  "name": "my-jest-project",
  "version": "1.0.0",
  "description": "My jest project",
  "main": "index.js",
  "scripts": {
    "test": "jest"
  },
  "keywords": [
    "project",
    "jest"
  ],
  "author": "you",
  "license": "ISC"
}

Is this ok? (yes)
```


## Install Jest

```shell
npm install -D jest
```

## Run tests

```shell
npm test
```


## Project structure

```
├── __tests__
│   ├── file01.js
│   ├── file02.js
│   └── ...
├── spec
│   ├── file01.spec.js
│   ├── file02.spec.js
│   ├── file03.test.js
│   └── ...
├── package.json
├── .editorconfig
└── .jshintrc
```
