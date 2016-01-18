class Player {

  play(song) {
    this.currentlyPlayingSong = song;
    this.isPlaying = true;
  }
  pause() {
    this.isPlaying = false;
  }

  resume() {
    if (this.isPlaying) {
      throw new Error("song is already playing");
    }

    this.isPlaying = true;
  }

  makeFavorite() {
    this.currentlyPlayingSong.persistFavoriteStatus(true);
  }

}

// FIXME je n'arrive pas à faire fonctionner `exports` voir commonjs ( browserify/webpack etc)
//export default Player;
