beforeEach(() => {
  'use strict';

  jasmine.addMatchers({
    toBePlaying: () => {
      return {
        compare: (actual, expected) => {
          let player = actual;

          return {
            pass: player.currentlyPlayingSong === expected && player.isPlaying
          };
        }
      };
    }
  });
});
