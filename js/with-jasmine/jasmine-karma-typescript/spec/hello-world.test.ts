/// <reference path="vendor/jasmine.d.ts" />
/// <reference path="hello-world.ts" />

describe("HelloWorld:", () =>  {

    var world :HelloWorld;

    beforeEach(() => {
       world = new HelloWorld("John");
    });

    it("should pass a simple test", () => {
        expect(world.hello()).toEqual("Hello John");
    });

});
