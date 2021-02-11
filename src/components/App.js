import React , { useState , useEffect}from 'react';
import SearchBar from './SearchBar';
import Youtube from '../apis/youtube';
import VideoList from './VideoList';
import VideoDetail from './VideoDeatils';
import useVideos from '../hooks/useVideos';

const App = () => {
    const [selectedvideo, setSelectedVideo] = useState(null);
    const[videos, search] = useVideos('dotawtf');

    useEffect(() =>{

        setSelectedVideo(videos[0])

    }, [videos])

return (
    <div className="ui container">
        <SearchBar onFormSubmit={search} />
        <div className="ui grid">
            <div className="ui row">
                <div className="eleven wide column">
                    <VideoDetail video={selectedvideo} />
                </div>
                <div className="five wide column">
                    <VideoList
                     onVideoSelect={(video) => setSelectedVideo(video)}
                      videos={videos}
                       /> 
                </div>
            </div>
        
        </div>
    </div>
);
}

export default  App;