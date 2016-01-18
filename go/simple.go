package kata

import (
	"fmt"
	"strconv"
)

// Simple main function
func Simple(number int, msg string) string {
	fmt.Printf("Kata number: %d, msg: %s\n", number, msg)
	return "result: " + strconv.Itoa(number) + msg
}
