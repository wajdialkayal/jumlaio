
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">{{ $page->followers_count }}</h4>
                                <p class="card-text">Followers</p>
                            </div>
                            <div class="col-md-6">
                                <i class="fas fa-rss float-md-right fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 mt-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">{{ $page->posts_count }}</h4>
                                <p class="card-text">Posts</p>
                            </div>
                            <div class="col-md-6">
                                <i class="fas fa-edit float-md-right fa-3x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">{{ $page->likes_count }}</h4>
                                <p class="card-text">Likes</p>
                            </div>
                            <div class="col-md-6">
                                <i class="fas fa-heart float-md-right fa-3x text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 mt-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">{{ $page->comments_count }}</h4>
                                <p class="card-text">Comments</p>
                            </div>
                            <div class="col-md-6">
                                <i class="fas fa-comment float-md-right fa-3x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 mt-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">{{ $page->comments_count }}</h4>
                                <p class="card-text">Shares</p>
                            </div>
                            <div class="col-md-6">
                                <i class="fas fa-share float-md-right fa-3x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">{{ $page->page_views_count }}</h4>
                                <p class="card-text">Page Views</p>
                            </div>
                            <div class="col-md-6">
                                <i class="fas fa-eye float-md-right fa-3x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>