<hr>
<div class="container mb-5">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <span class="text-uppercase text-muted">
                    Article crud laravel
                </span>
                <form action="{{route('articles.create')}}" method="get">
                    <button type="submit" class="btn btn-info text-uppercase font-weight-bold rounded-0">
                        create articles
                    </button>
                    <!-- tạo nút button khi bấm vào route sẽ chuyển đến users.create -->
                </form>
            </div>
        </div>
    </div>
</div>