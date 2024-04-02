<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document" data-dismiss="modal">
        <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>
        <div class="wrap-video-mo-01">
            <div class="video-mo-01">
                @if (Route::currentRouteName() === 'home.archive_page')
                @if(isset($archiveVideos))

                <iframe src="https://www.youtube.com/embed/{{$archiveVideos->video_url}}?rel=0" allowfullscreen></iframe>
                 @else
                    <p>
                        Sorry, there is currently no live TV news available. Please check back later for updates.
                    </p>            
                @endif
                @else
                @if(isset($livetvnews))
                        @if(Str::startsWith($livetvnews->video_url, 'https://collect'))
                                <video controls width="640" height="360">
                                    <source src="{{$livetvnews->video_url}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                
                        @elseif( Str::startsWith($livetvnews->video_url, 'https://fb'))
                        <iframe src="https://www.facebook.com/plugins/video.php?href={{$livetvnews->video_url}}/&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        @else
                              <iframe src="https://www.youtube.com/embed/{{$livetvnews->video_url}}?rel=0" allowfullscreen></iframe>
                        @endif
                 @else
                    <p>
                        Sorry, there is currently no live TV news available. Please check back later for updates.
                    </p>            
                @endif
                @endif
                
               
            </div>
        </div>
    </div>
</div>