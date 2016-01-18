package com.dojo.kata;

import org.junit.Assert;
import org.junit.Test;

import static org.assertj.core.api.Assertions.assertThat;
import static org.hamcrest.core.Is.is;
import static org.junit.Assert.assertEquals;

public class KataTest {

    @Test
    public void should_test_with_AssertJ (){
        assertThat("foo").isEqualTo("foo");
    }

    @Test
    public void should_test_with_JUnit(){
        assertEquals("foo", "foo");
    }

    @Test
    public void should_test_with_JUnit_matcher(){
        Assert.assertThat("foo", is("foo"));
    }

}

