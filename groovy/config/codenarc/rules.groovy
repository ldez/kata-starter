ruleset {
    description 'Rules Sample Groovy Gradle Project'

    ruleset('rulesets/basic.xml')

    ruleset('rulesets/braces.xml')

    ruleset('rulesets/exceptions.xml')

    ruleset('rulesets/imports.xml') {
        // we order static imports after other imports because that's the default style in IDEA
        MisorderedStaticImports {
            comesBefore = false
        }
    }

    ruleset('rulesets/logging.xml') {
        'Println' priority: 1
        'PrintStackTrace' priority: 1
    }

    ruleset('rulesets/naming.xml')

    ruleset('rulesets/convention.xml')

    ruleset('rulesets/design.xml') {
        // we don't care
        exclude 'AbstractClassWithoutAbstractMethod'
    }

    // the DRY rules do not necessarily lead to better code
    // ruleset('rulesets/dry.xml')

    ruleset('rulesets/enhanced.xml')

    ruleset('rulesets/formatting.xml') {
        exclude 'SpaceAroundMapEntryColon'
        exclude 'LineLength'
    }

    ruleset('rulesets/generic.xml')

    ruleset('rulesets/groovyism.xml') {
        // not necessarily an issue, problems should be detected by unit tests
        exclude 'GStringExpressionWithinString'
    }

    ruleset('rulesets/security.xml') {
        // we don't care because our classes need not to satisfy the Java Beans specification
        exclude 'JavaIoPackageAccess'
        // we don't care for now
        exclude 'FileCreateTempFile'
    }

    ruleset('rulesets/serialization.xml')

    // we don't care for now
    // ruleset('rulesets/size.xml')

    ruleset('rulesets/unnecessary.xml')

    ruleset('rulesets/unused.xml')
}
