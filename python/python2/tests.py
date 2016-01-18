import main
import unittest


class TestMain(unittest.TestCase):
    def test_is_red(self):
        self.assertEqual(main.get_green(), 'green')


if __name__ == '__main__':
    unittest.main()
