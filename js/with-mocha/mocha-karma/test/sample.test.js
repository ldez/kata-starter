describe('Array', function () {
  'use strict';

  describe('#push()', function () {
    it('should append a value', function () {
      var arr = [];
      arr.push('foo');
      arr.push('bar');
      arr.push('baz');

      assert.equal('foo', arr[0]);
      assert.equal('bar', arr[1]);
      assert.equal('baz', arr[2]);

      assert('foo' === arr[0]);
      assert('bar' === arr[1]);
      assert('baz' === arr[2]);
    });

    it('should return the length', function () {
      var arr = [];

      assert.equal(1, arr.push('foo'));
      assert.equal(2, arr.push('bar'));
      assert.equal(3, arr.push('baz'));
    });
  });
});

describe('Array', function () {
  'use strict';

  describe('#pop()', function () {
    it('should remove and return the last value', function () {
      var arr = [1, 2, 3];

      assert.equal(3, arr.pop());
      assert.equal(2, arr.pop());
      assert.equal(1, arr.pop());
    });

    it('should adjust .length', function () {
      var arr = [1, 2, 3];
      arr.pop();

      assert.equal(2, arr.length);
    });
  });

});
