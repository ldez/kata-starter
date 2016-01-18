# QUnit & HTML Runner

Tout est décrit ici : https://qunitjs.com


## Create with CDN:

Replace `x.x.x` by QUnit version. (ex: `qunit-1.18.0.js`)

Create `TestRunner.html`:

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>QUnit Example</title>
  <link rel="stylesheet" href="//code.jquery.com/qunit/qunit-x.x.x.css">
</head>
<body>
  <div id="qunit"></div>
  <div id="qunit-fixture"></div>
  <script src="//code.jquery.com/qunit/qunit-x.x.x.js"></script>
  <script src="tests.js"></script>
</body>
</html>
```


## Create without CDN:

Replace `x.x.x` by QUnit version. (ex: `qunit-1.18.0.js`)

Download:

- http://code.jquery.com/qunit/qunit-x.x.x.js
- http://code.jquery.com/qunit/qunit-x.x.x.css

Create `TestRunner.html`:

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>QUnit Example</title>
  <link rel="stylesheet" href="lib/qunit-x.x.x.css">
</head>
<body>
  <div id="qunit"></div>
  <div id="qunit-fixture"></div>
  <script src="lib/qunit-x.x.x.js"></script>
  <script src="src/file.js"></script>
  <script src="test/tests.js"></script>
</body>
</html>
```


## Run tests

Open `TestRunner.html` file in your browser.


## Project structure

```
├── lib
│   ├── qunit-x.x.x.css
│   └── qunit-x.x.x.js
├── src
│   ├── file01.js
│   ├── file02.js
│   └── ...
├── test
│   ├── file01.test.js
│   ├── file02.test.js
│   └── ...
├── TestRunner.html
├── .editorconfig
└── .jshintrc
```
