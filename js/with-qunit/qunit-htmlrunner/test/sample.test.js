QUnit.module('module A', {
  beforeEach: function () {
    // prepare something for all following tests
  },
  afterEach: function () {
    // clean up after each test
  }
});

QUnit.test('a basic test example', function (assert) {
  assert.ok(true, 'this test is fine');
});
QUnit.test('a basic test example 2', function (assert) {
  assert.ok(true, 'this test is fine');
});

QUnit.module('group b');

QUnit.test('a basic test example 3', function (assert) {
  assert.ok(true, 'this test is fine');
});
QUnit.test('a basic test example 4', function (assert) {
  assert.ok(true, 'this test is fine');
});
