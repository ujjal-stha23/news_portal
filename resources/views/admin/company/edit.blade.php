<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Company Edit</h4>
                            <a href="{{ route('admin.company.index') }}" class="btn btn-primary">Go Back</a>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin.company.update', $company->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <div class="row ">
                                    <div class="col-6 mb-4">
                                        <label for="name">Enter Company Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            value="{{ $company->name }}">
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="email">Enter Company Email <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="email" name="email" class="form-control"
                                            value="{{ $company->email }}">
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="phone">Enter Company Phone <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" id="phone" name="phone" class="form-control"
                                            value="{{ $company->phone }}">
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="facebook">Enter Company Facebook URL</label>
                                        <input type="text" id="facebook" name="facebook" class="form-control"
                                            value="{{ $company->facebook_url }}">
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="youtube">Enter Company Youtube URL</label>
                                        <input type="text" id="youtube" name="youtube" class="form-control"
                                            value="{{ $company->youtube_url }}">
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="instagram">Enter Company Instagram</label>
                                        <input type="text" id="instagram" name="instagram" class="form-control"
                                            value="$company->instagram_url">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="keywords">Enter Meta Keywords (for SEO) </label>
                                        <textarea id="keywords" name="keywords" class="form-control"> {{ $company->meta_keyword }} </textarea>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="description">Enter Meta Description (for SEO) </label>
                                        <textarea name="description" id="description" class="form-control"> {{ $company->meta_description }} </textarea>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <label for="logo">Upload Company Logo<span class="text-danger">*</span>
                                        </label>
                                        <input type="file" id="logo" name="logo" class="form-control">
                                        <img src="{{ asset($company->logo) }}" height="200" alt="">
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">Update Record</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-app-layout>
