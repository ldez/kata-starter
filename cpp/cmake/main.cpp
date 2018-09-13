#include <iostream>
#include "src/fizz_buzz.cpp"

using namespace std;

int main() {
    for (int i = 1; i < 100; i++) {
        cout << FizzBuzz(i) << " ";
    }
    cout << endl;
    return 0;
}