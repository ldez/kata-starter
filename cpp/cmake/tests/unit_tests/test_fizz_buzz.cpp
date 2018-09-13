#include "gtest/gtest.h"
#include "../../src/fizz_buzz.cpp"

TEST(FizzBuzz, Empty) {
  EXPECT_EQ("", FizzBuzz(0));
}
