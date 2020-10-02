

<div class="mt-4">
    <div class="table-responsive mt-2">
        <table class="table table-hover shadow-sm w-100" id="table-posts">
            <thead style="display:none;"></thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function() {

            var _url = "{{ route('pages.posts.all', ':id') }}";
            _url = _url.replace(':id', {{ $page->id }});

            var table = $('#table-posts').DataTable({
                "bSort": true,
                processing: true,
                sprocessing: true,
                "order": [],
                orderCellsTop: true,
                fixedHeader: true,

                ajax: {
                    url: _url,
                    dataSrc: 'data'
                },
                columns: [
                    {
                        data: "title"
                    },

                    {
                    data: "likes_count",
                        "render": function(data, type, row, meta) {
                            return data + ' <i class="fas fa-heart text-muted"></i>'
                        }
                    },
                    { 
                    data: "comments_count",
                        "render": function(data, type, row, meta) {
                            return data + ' <i class="fas fa-comment text-muted"></i>'
                        }
                    },
                    { 
                    data: "shares_count",
                        "render": function(data, type, row, meta) {
                            return data + ' <i class="fas fa-share text-muted"></i>'
                        }
                    },
                    {
                    data: "shares_count",
                        "render": function(data, type, row, meta) {
                            return data + ' <i class="fas fa-eye text-muted"></i>'
                        }
                    },
                    {
                    data: "user",
                        "render": function(data, type, row, meta) {
                            return 'By: <img src="'+data.profile_photo_url+'" class="rounded-circle img-28 border object-fit-cover" alt="profile_photo"> '+data.name+' '
                        }
                    },

                    {
                    data: "id",
                        "render": function(data, type, row, meta) {
                            return

                            ' <div class="dropdown"> ' +
                            ' <button class="btn btn-ling" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +
                            '   <i class="fas fa-ellipsis-v"></i>' +
                            '  </button>' +
                            ' <div class="dropdown-menu dropdown-menu-right shadow-sm" aria-labelledby="dropdownMenuButton">' +
                            '    <a class="dropdown-item " href="#">' +
                            '     <i class="fas fa-chart-bar"></i> Stats' +
                            '    </a>' +
                            '    <a class="dropdown-item " href="#">' +
                            '      <i class="fas fa-eye"></i> View' +
                            '      </a>' +
                            '      <a class="dropdown-item" href="#">' +
                            '     <i class="fas fa-edit"></i> Edit' +
                            '       </a>' +
                            '     <hr class="dropdown-divider">' +
                            '     <a class="dropdown-item remove-user-btn" href="#" id="#"> ' +
                            '     <i class="fas fa-trash"></i> Delete' +
                            ' </a>' +
                            ' </div>' +
                            ' </div>'

                        }
                    },
                ],

            });

        });

    </script>
@endpush
