 @extends('home.Master') 



@section('main')
<div class="cover">
    <div class="container">
        <div class="row">
            <div class="col-12 white-background">
                <div class="single_post_area">
                    <h2 class="post_title wow ">{{ $post->POST_TITLE }}</h2>
                    <a  class="author_name"><i class="fa fa-user"></i> {{ $post->POST_AUTHOR_NAME }}</a> <i class="fa fa-clock-o"></i>{{ date_format($post->created_at,"d/m/Y H:i:s") }}   
                    </a>

                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true" style="left: 160px; top:15px ;margin-left: 25%;"></div>
                   
                    <div class="single_post_content">
                        {!! $post->POST_CONTENT !!}
                        

                        <div id="comments-container" class="jquery-comments">
                            <div class="commenting-field main">
                                <div
                                    class="profile-picture round"
                                    style="
                                        background-image: url('https://scontent.fpnh22-3.fna.fbcdn.net/v/t1.6435-1/p240x240/149943665_467969470998408_3401684646876157977_n.jpg?_nc_cat=109&amp;ccb=1-3&amp;_nc_sid=7206a8&amp;_nc_ohc=cGiUDb5rVQ0AX_5aRfx&amp;_nc_ht=scontent.fpnh22-3.fna&amp;tp=6&amp;oh=6f710e994a6a95fe7038809a79d515f6&amp;oe=60C80421');
                                    "
                                ></div>
                                <div class="textarea-wrapper">
                                    <span class="enabled upload inline-button" style="display: none;"><i class="fa fa-paperclip"></i><input type="file" multiple="multiple" data-role="none" /></span>
                                    <span class="close inline-button" style=""><i class="fa fa-times"></i></span>
                                    <div class="textarea" data-placeholder="Add a comment" contenteditable="true" style="height: 3.65em;"></div>
                                    <div class="control-row" style="">
                                        <span class="send save highlight-background">Send</span><span class="enabled upload"><i class="fa fa-paperclip"></i><input type="file" multiple="multiple" data-role="none" /></span>
                                        <div class="attachments"></div>
                                    </div>
                                </div>
                            </div>
                            <ul class="navigation">
                                <div class="navigation-wrapper">
                                    <li data-sort-key="newest" data-container-name="comments" class="active">Newest</li>
                                    <li data-sort-key="oldest" data-container-name="comments" class="">Oldest</li>
                                    <li data-sort-key="popularity" data-container-name="comments">Popular</li>
                                    <li data-sort-key="attachments" data-container-name="attachments"><i class="fa fa-paperclip"></i>Attachments</li>
                                </div>
                                <div class="navigation-wrapper responsive">
                                    <li class="title active"><header>Newest</header></li>
                                    <ul class="dropdown" style="display: none;">
                                        <li data-sort-key="newest" data-container-name="comments" class="active">Newest</li>
                                        <li data-sort-key="oldest" data-container-name="comments" class="">Oldest</li>
                                        <li data-sort-key="popularity" data-container-name="comments">Popular</li>
                                    </ul>
                                    <li data-sort-key="attachments" data-container-name="attachments"><i class="fa fa-paperclip"></i>Attachments</li>
                                </div>
                            </ul>
                            <div class="data-container" data-container="comments">
                                <ul id="comment-list" class="main">
                                    <li data-id="1" class="comment">
                                        <div class="comment-wrapper">
                                            <div class="profile-picture round" data-user-id="6" style="background-image: url('https://i1.sndcdn.com/artworks-EAWWsYHMUpnwr6Br-MIm77Q-t500x500.jpg');"></div>
                                            <time data-original="2021-05-16">16/5/2021</time>
                                            <div class="comment-header"><span class="name" data-user-id="6">Nguyễn Thanh Tùng</span></div>
                                            <div class="wrapper">
                                                <div class="content">Sơn Tùng MTP với bài 'Muộn rồi mà sao còn' đã lọt 2 trong thời gian top 1 trending lâu nhất trong vòng 2 tuần và top 1 là bài 'Có chắc yêu là đây' của Nguyễn Thanh Tùng.</div>
                                                <div class="attachments">
                                                    <div class="previews"></div>
                                                    <div class="tags"></div>
                                                </div>
                                                <span class="actions">
                                                    <button class="action reply" type="button">Reply</button><span class="separator">·</span><button class="action upvote"><span class="upvote-count">3</span><i class="fa fa-thumbs-up"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                        <ul class="child-comments"></ul>
                                    </li>
                                    <li data-id="2" class="comment">
                                        <div class="comment-wrapper">
                                            <div class="profile-picture round" data-user-id="6" style="background-image: url('https://vtv1.mediacdn.vn/thumb_w/640/2021/4/30/ts02-love-rosie-thieu-bao-tram-16197688980171160964800.jpeg');"></div>
                                            <time data-original="2021-05-16">16/5/2021</time>
                                            <div class="comment-header"><span class="name" data-user-id="6">Thiều Bảo Trâm</span></div>
                                            <div class="wrapper">
                                                <div class="content">Mọi người nhớ ủng hộ MV mới của Trâm nha, yêu mọi người.</div>
                                                <div class="attachments">
                                                    <div class="previews"></div>
                                                    <div class="tags"></div>
                                                </div>
                                                <span class="actions">
                                                    <button class="action reply" type="button">Reply</button><span class="separator">·</span><button class="action upvote"><span class="upvote-count">3</span><i class="fa fa-thumbs-up"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                        <ul class="child-comments"></ul>
                                    </li>
                                    <li data-id="3" class="comment">
                                        <div class="comment-wrapper">
                                            <div class="profile-picture round" data-user-id="6" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg71Q3qhjq7RHxy-xTfGaJxdteqosczvBwNg&amp;usqp=CAU');"></div>
                                            <time data-original="2021-05-16">16/5/2021</time>
                                            <div class="comment-header"><span class="name" data-user-id="6">Kay Trần</span></div>
                                            <div class="wrapper">
                                                <div class="content">Bao giờ tui mới có MV vậy sếp.</div>
                                                <div class="attachments">
                                                    <div class="previews"></div>
                                                    <div class="tags"></div>
                                                </div>
                                                <span class="actions">
                                                    <button class="action reply" type="button">Reply</button><span class="separator">·</span><button class="action upvote"><span class="upvote-count">3</span><i class="fa fa-thumbs-up"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                        <ul class="child-comments"></ul>
                                    </li>
                                </ul>
                                <div class="no-comments no-data">
                                    <i class="fa fa-comments fa-2x"></i><br />
                                    No comments
                                </div>
                            </div>
                            <div class="data-container" data-container="attachments" style="display: none;">
                                <ul id="attachment-list" class="main"></ul>
                                <div class="no-attachments no-data">
                                    <i class="fa fa-paperclip fa-2x"></i><br />
                                    No attachments
                                </div>
                            </div>
                            <div class="droppable-overlay" style="display: none;">
                                <div class="droppable-container">
                                    <div class="droppable">
                                        <i class="fa fa-paperclip fa-4x"></i>
                                        <div>Drop files here</div>
                                    </div>
                                </div>
                            </div>
                            <ul class="dropdown autocomplete" id="textcomplete-dropdown-1" style="display: none; left: 0px; position: absolute; z-index: 100;"></ul>
                        </div>
                        
                    </div>

                </div>
                <div class="" style="text-transform:uppercase; font-size:2rem; font-weight:bold;text-align:center; padding-top:20px">
                    Shared Post</div>
                <div class="social_area wow fadeInLeft">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                </div>
                <div class="related_post">
                    <h2 class="wow fadeInLeftBig">Related Posts you may like <i class="fa fa-thumbs-o-up"></i></h2>
                    <div class="recentpost_nav relatedpost_nav wow fadeInDown animated">
                        @foreach ($post_related as $post)
                        <li>
                            <a href="{{ route('postdetail.show',$post->id ) }}"> <img alt="" src='http://uitnews.local/file/post/{{$post->POST_IMAGE}}'></a>
                            <a href="#" class="recent_title">{{$post->POST_TITLE}}</a>
                        </li>
                        @endforeach
                        {{-- <li>
                            <a href="{{ route('postdetail.show',$post->id ) }}"> <img alt="" src='public/file/post/{{$post->POST_IMAGE}}'></a>
                            <a href="#" class="recent_title">{{$post->POST_TITLE}}</a>
                        </li>
                        <li>
                            <a href="{{ route('postdetail.show',$post->id ) }}"> <img alt="" src='public/file/post/{{$post->POST_IMAGE}}'></a>
                            <a href="#" class="recent_title">{{$post->POST_TITLE}}</a>
                        </li> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection