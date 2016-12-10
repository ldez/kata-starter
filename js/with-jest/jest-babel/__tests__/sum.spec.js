'use strict';

jest.dontMock('../lib/sum.js');

const sum = require('../lib/sum.js');

describe('Sum numbers', () => {

  it('adds 1 + 2 to equal 3', () => {
    expect(sum(1, 2)).toBe(3);
  });

});
