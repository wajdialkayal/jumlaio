<form action="{{ route('pages.posts.store', $page->id) }}" method="POST">
@csrf
<div class="row sticky-top bg-white shadow-sm p-2">
    <div class="col-md-6">
        <div class="form-group">
            <input type="text" name="title" id="title" class="form-control w-100 shadow-sm" placeholder="Title" maxlength="255" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class=" float-md-right">
            Publish as <img src="{{ Auth::user()->profile_photo_url }}"
                class="rounded-circle img-28 border object-fit-cover" alt="photo"> {{ Auth::user()->name }}
            <button type="submit" class="btn btn-primary px-4">Publish</button>
        </div>
    </div>
</div>


<textarea id="post-create-textarea" name="body" required></textarea>
  
</form>