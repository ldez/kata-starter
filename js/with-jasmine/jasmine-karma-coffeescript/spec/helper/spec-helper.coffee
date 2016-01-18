beforeEach ->
  matcher =
    toBePlaying: ->
      return {
        compare: (actual, expected) ->
          player = actual

          return {
            pass: player.currentlyPlayingSong == expected and player.isPlaying
          }
      }
  jasmine.addMatchers(matcher)

