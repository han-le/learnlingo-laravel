<!-- Receive the list of comments from post-page.blade.php -->
@props(['allComments'])

@foreach( $allComments as $comment)
    <p>{{$comment->comment_content}}</p>
@endforeach

<div class="blog-comment mt-5">
    <h2 class="handwriting-font">Comments</h2>
    <hr/>
    <ul class="comments-list">
        <li class="comment">
            <div class="comment-item">
                <div class="comment-img">
                    <img src="https://i.pinimg.com/236x/ea/01/c9/ea01c9b8e3ab765f04694550f7ac530f.jpg" class="avatar" alt="avatar">
                </div>
                <div class="comment-content">
                    <div class="meta">
                        <div>
                            <span class="comment-name">Tina</span>
                            <span>on</span>
                            <span>Dec 18, 2021: </span>
                        </div>
                        <div>
                            <i class="fas fa-reply"></i>
                            <a href="#"><small>Reply</small></a>
                        </div>
                    </div>
                    <p>
                        Boy, you write your name, I can do the same
                        Ooh, I love the taste, la-la-la-la
                        All on my tongue, I want it (la-la-la-la)
                        Boy, you write your name, I can do the same
                        Ooh, I love the taste, la-la-la-la-la
                        All on my tongue, I want it
                    </p>
                </div>
            </div>
        </li>
        <li class="comment">
            <div class="comment-item">
                <div class="comment-img">
                    <img src="https://i.pinimg.com/236x/ea/01/c9/ea01c9b8e3ab765f04694550f7ac530f.jpg" class="avatar" alt="avatar">
                </div>
                <div class="comment-content">
                    <div class="meta">
                        <div>
                            <span class="comment-name">Tina</span>
                            <span>on</span>
                            <span>Dec 18, 2014: </span>
                        </div>
                        <div>
                            <i class="fas fa-reply"></i>
                            <a href="#"><small>Reply</small></a>
                        </div>
                    </div>
                    <p>
                        We hug and yes, we make love
                        And always just say "Goodnight"
                    </p>
                </div>
            </div>
            <ul class="comment-reply comments-list">
                <li class="comment">
                    <div class="comment-item">
                        <div class="comment-img">
                            <img src="https://i.pinimg.com/236x/ea/01/c9/ea01c9b8e3ab765f04694550f7ac530f.jpg" class="avatar" alt="avatar">
                        </div>
                        <div class="comment-content">
                            <div class="meta">
                                <div>
                                    <span class="comment-name">Tina</span>
                                    <span>on</span>
                                    <span>Dec 18, 2014: </span>
                                </div>
                                <div>
                                    <i class="fas fa-reply"></i>
                                    <a href="#"><small>Reply</small></a>
                                </div>
                            </div>
                            <p>
                                I, I feel like fuckin' somethin'
                                But we could be corny, fuck it
                                Sugar, I ain't no dummy, dummy
                                I like to say, what if, but if
                                We could kiss and just cut the rubbish
                                Then I might be on to somethin'
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        @foreach( $allComments as $comment)
            <li class="comment">
                <div class="comment-item">
                    <div class="comment-img">
                        <img src="https://i.pinimg.com/564x/b9/3b/a4/b93ba4e78ec0bdd7e6e13b9fab2a0f03.jpg" class="avatar" alt="avatar">
                    </div>
                    <div class="comment-content">
                        <div class="meta">
                            <div>
                                <span class="comment-name">{{$comment->comment_author}}</span>
                                <span>on</span>
                                <span>{{$comment->created_at}}</span>
                            </div>
                            <div>
                                <i class="fas fa-reply"></i>
                                <a href="#"><small>Reply</small></a>
                            </div>
                        </div>
                        <p>{{$comment->comment_content}}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

    <!-- Comment form -->
    <div>
        <div class="mb-3">
            <label for="comment-input" class="form-label"></label>
            <textarea
                class="form-control" id="comment-input" rows="3"
                placeholder="Share your thoughts here, no need to log in..."
            ></textarea>
        </div>
        <div class="row g-3">
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Your email" aria-label="City">
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Name" aria-label="State">
            </div>
            <div class="col-sm">
                <button type="submit" class="btn btn-primary" style="width: 100%">Send</button>
            </div>
        </div>
    </div>
</div>
