Cucumber ?


----

Karma

- `karma init karma.conf.ls` LiveScript

----

npm install karma-chrome-launcher karma-firefox-launcher karma-phantomjs-launcher
npm install karma-html-reporter karma-html2js-preprocessor

```javascript
  preprocessors: {
      '**/!(*.test).js': 'coverage',
      '**/*.html': ['html2js']
    },

    htmlReporter: {
      outputDir: '../report'
    },
```


----

karma-mocha

```javascript
// karma.conf.js
module.exports = function(config) {
  config.set({
    frameworks: ['mocha'],

    files: [
      '*.js'
    ],

    client: {
      mocha: {
        reporter: 'html', // change Karma's debug.html to the mocha web reporter
        ui: 'tdd'
      }
    }
  });
};
```

----

Jasmine

```json
{
 "src_dir"  : "/public/javascript/",
 "spec_dir" : "/spec/",

 "server":{
   "port":8124
 },
 "externals":[
  "https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js",
  "https://github.com/velesin/jasmine-jquery/raw/master/lib/jasmine-jquery.js",
  "http://localhost/strophe.js",
  "http://localhost/Stanzas.js"
 ]

}
```

------

https://github.com/gulpjs/gulp/blob/master/docs/API.md

https://semaphoreci.com/community/tutorials/getting-started-with-node-js-and-mocha


[A Testing Framework for CoffeeScript / JavaScript](http://beastjavascript.github.io/TestSuite/)

http://docs.busterjs.org/en/latest/
https://github.com/FluentLenium/FluentLenium
http://www.happyprog.com/pairhero/
http://www.slimerjs.org/
http://thejsguy.com/2015/01/12/jasmine-vs-mocha-chai-and-sinon.html
