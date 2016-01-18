package com.dojo.kata

import org.scalatest._

class Kata1Test extends FlatSpec with Matchers {

    it should "foo" in {
        val kata = new Kata("todo")
        kata.name should equal ("fixme")
    }
}

