<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Company Create</h4>
                            <a href="{{ route('admin.company.index') }}" class="btn btn-primary">Go Back</a>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin.company.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row ">
                                    <div class="col-6 mb-4">
                                        <label for="name">Enter Company Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="name" name="name" class="form-control">
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="email">Enter Company Email <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="email" name="email" class="form-control">
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="phone">Enter Company Phone <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" id="phone" name="phone" class="form-control">
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="facebook">Enter Company Facebook URL</label>
                                        <input type="text" id="facebook" name="facebook" class="form-control">
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="youtube">Enter Company Youtube URL</label>
                                        <input type="text" id="youtube" name="youtube" class="form-control">
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="instagram">Enter Company Instagram</label>
                                        <input type="text" id="instagram" name="instagram" class="form-control">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="keywords">Enter Meta Keywords (for SEO) </label>
                                        <textarea id="keywords" name="keywords" class="form-control"></textarea>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="description">Enter Meta Description (for SEO) </label>
                                        <textarea name="description" id="description" class="form-control"></textarea>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <label for="logo">Upload Company Logo<span class="text-danger">*</span>
                                        </label>
                                        <input type="file" id="logo" name="logo" class="form-control">
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">Save Record</button>
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
