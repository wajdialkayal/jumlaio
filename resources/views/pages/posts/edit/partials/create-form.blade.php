<form action="{{ route('pages.posts.update', [$page->id, $post->id]) }}" method="POST">
    @method('PUT')
    @csrf
    
    <div class="row sticky-top bg-white shadow-sm p-2">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="title" id="title" class="form-control w-100 shadow-sm" value="{{ $post->title }}"
                    placeholder="Title" maxlength="255" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class=" float-md-right">
    
                <button type="submit" class="btn btn-primary px-4">Save Changes</button>
            </div>
        </div>
    </div>

    <textarea id="post-create-textarea" name="body" required>
    {{ $post->body }}
    </textarea>

</form>
