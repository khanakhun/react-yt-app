import React from 'react';

const VideoDeatils =  ({ video }) => {

    if(!video){
        return <div>Loading...</div>
    } 
   const VideoSrc = `https://www.youtube.com/embed/${video.id.videoId}`

    return( 

       
        <div className="ui segment">
             <div className="ui embed">
                <iframe title="vidoe" src={VideoSrc} /> 
            </div>

            <h4 className=" ui header"> {video.snippet.title}</h4>
           <p>{video.snippet.description}</p>
        </div>
    );

};

export default VideoDeatils;