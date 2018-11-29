    @foreach($forum as $forum)
        <div class="list-group">
            <a href="{{route('forum.show',$forum->id)}}" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{$forum->title}}</h5>
                    <small>by aracista 3 days ago</small>
                </div>
                    <p class="mb-1">{{$forum->post}}</p>
                    <br>
                    <span class="badge badge-pill badge-primary">Primary</span>
                    <span class="badge badge-pill badge-secondary">Secondary</span>
                    <span class="badge badge-pill badge-success">Success</span>
                    <span class="badge badge-pill badge-danger">Danger</span>
                    <span class="badge badge-pill badge-warning">Warning</span>
                    <span class="badge badge-pill badge-info">Info</span>
                    <span class="badge badge-pill badge-light">Light</span>
                    <span class="badge badge-pill badge-dark">Dark</span>
            </a>
        </div>
    @endforeach