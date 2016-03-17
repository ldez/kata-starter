package com.dojo.kata

import spock.lang.Specification
import spock.lang.Unroll

class KataSpec extends Specification {

    void 'should be cool when run test'() {
        given:
        String name = 'kata'

        when:
        String message = "Cool ${name}!"

        then:
        message == 'Cool kata!'
    }

    @Unroll
    void 'should be #message when run test with #name'() {
        expect:
        "Cool ${thing} ${name}!" =~ message

        where:
        thing  | name     || message
        'kata' | 'Hubert' || 'Cool kata Hubert!'
        'dojo' | 'Albert' || 'Cool dojo Albert!'
    }

}
