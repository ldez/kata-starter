# Go

## References

- https://golang.org
- Download: https://golang.org/dl
- Documentation: https://golang.org/doc
- https://golang.org/doc/effective_go.html
- https://golang.org/ref/spec
- https://github.com/a8m/go-lang-cheat-sheet

## IDE

- https://github.com/golang/go/wiki/IDEsAndTextEditorPlugins
- Autocomplete dans les IDE : [Gocode](https://github.com/nsf/gocode)

## Articles

- http://decouvrir-golang.net/
- http://golang-examples.tumblr.com
- http://www.golangpatterns.info/object-oriented/operators
- http://devs.cloudimmunity.com/gotchas-and-common-mistakes-in-go-golang/
- Un bon article sur la gestion des erreurs en Go. Utile lorsqu'on ne connaît que les exceptions ! : https://justinas.org/best-practices-for-errors-in-go/
- http://miek.nl/go/learninggo.html#beyond-the-basics
- http://etienner.fr/golang/creer-une-api-restfull-sur-go

## Resources

- https://gobyexample.com/
- https://github.com/golang/example
- https://github.com/golang-samples
- https://github.com/gobridge

## Testing

- http://golang.org/pkg/testing
- https://github.com/golang-samples/testing

Les méthodes de test doivent commencer par `Test`.

```go
import "testing"

func TestName(t *testing.T) {
    [...]
    if actual != expected {
    t.Errorf("Must be %s but was %s", expected, actual)
  }
}
```

## Test Tooling

- https://github.com/stretchr/testify
- http://goconvey.co
- https://labix.org/gocheck


