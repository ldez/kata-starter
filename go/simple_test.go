package kata

import "testing"

func Test_simple(t *testing.T) {

	rt := Simple(1, "foo")

	if rt != "result: 1foo" {
		t.Errorf("Must de %s but was %s", "result: 1foo", rt)
	}
}

type data struct {
	number   int
	msg, out string
}

var testDatas = []data{
	data{1, "foo", "result: 1foo"},
	data{2, "bar", "result: 2bar"},
	data{3, "bir", "result: 3bir"},
	data{4, "bor", "result: 4bor"},
	data{5, "bur", "result: 5bur"},
}

func Test_simple_struct(t *testing.T) {

	for _, test := range testDatas {
		out := Simple(test.number, test.msg)
		if out != test.out {
			t.Errorf("Simple(%v, %v) = %v, want %v", test.number, test.msg, out, test.out)
		}
	}
}

func Test_simple_inner_struct(t *testing.T) {
	for _, test := range []struct {
		number   int
		msg, out string
	}{
		{1, "foo", "result: 1foo"},
		{2, "bar", "result: 2bar"},
		{3, "bir", "result: 3bir"},
		{4, "bor", "result: 4bor"},
		{5, "bur", "result: 5bur"},
	} {
		out := Simple(test.number, test.msg)
		if out != test.out {
			t.Errorf("Simple(%v, %v) = %v, want %v", test.number, test.msg, out, test.out)
		}
	}
}
