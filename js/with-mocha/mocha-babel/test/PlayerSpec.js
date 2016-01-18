import assert from 'assert';
import sinon from 'sinon';
import chai from 'chai';
const expect = chai.expect;

import Player from '../src/Player';
import Song from '../src/Song';

describe('Player', () => {
  'use strict';

  let player;
  let song;

  before(() => {
    player = new Player();
    song = new Song();
  });

  it('should be able to play a Song', () => {
    player.play(song);

    assert.equal(1, 1);
    expect(player.currentlyPlayingSong).equal(song);
  });

  describe('when song has been paused', () => {

    before(() => {
      player.play(song);
      player.pause();
    });

    it('should indicate that the song is currently paused', () => {

      expect(player.isPlaying).to.be.false;
    });

    it('should be possible to resume', () => {
      player.resume();

      expect(player.isPlaying).to.be.true;
      expect(player.currentlyPlayingSong).to.equal(song);
    });
  });

  // demonstrates use of spies to intercept and test method calls
  xit('tells the current song if the user has made it a favorite', () => {
    //   REMOVE   spyOn(song, 'persistFavoriteStatus');

    // FIXME Comment gérer les Spy ?

    console.log(sinon.spy);
    sinon.spy(song, 'persistFavoriteStatus');

    player.play(song);
    player.makeFavorite();

    spy.calledWith(true);
    //    expect(song.persistFavoriteStatus).toHaveBeenCalledWith(true);
  });

  //demonstrates use of expected exceptions
  xdescribe('#resume', () => {
    it('should throw an exception if song is already playing', () => {
      player.play(song);

      expect(() => {
        player.resume();
      }).toThrowError('song is already playing');
    });
  });
});
