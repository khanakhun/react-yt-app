import axios from 'axios';
const KEY = 'AIzaSyCrzNWHZANaM5plnEwfc1XqYg5pYUjw_5w';

export default axios.create({
    baseURL: 'https://www.googleapis.com/youtube/v3',
    params: {
      part: 'snippet', 
      type: 'video',
      maxResults: 5,
      key: KEY
  }
})