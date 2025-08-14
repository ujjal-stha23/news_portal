<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Article</h4>
                            <a href="{{ route('admin.article.create') }}" class="btn btn-primary">Add New</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Views</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($articles as $index => $article)
                                            <tr>
                                                <td>{{ ++$index }}</td>
                                                <td>{{ $article->title }}</td>
                                                <td>
                                                    <img height="60" src="{{ asset($article->image) }}"
                                                        alt="{{ $article->image }}">
                                                </td>
                                                <td>{{ $article->views }}</td>
                                                <td><a href="{{ route('admin.article.edit', $article->id) }}"
                                                        class="btn btn-primary">Edit</a></td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-app-layout>
