package com.dojo.kata

import org.scalatest.{ShouldMatchers, FunSuite}

class Kata2Test extends FunSuite with ShouldMatchers {

    test("1 should equal to 2") {
        val kata = new Kata("todo")
        kata.name should equal ("fixme")
    }

}
