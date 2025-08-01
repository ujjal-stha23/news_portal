<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Advertise Create</h4>
                            <a href="{{ route('admin.advertise.index') }}" class="btn btn-primary">Go Back</a>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin.advertise.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row ">
                                    <div class="col-6 mb-4">
                                        <label for="company_name">Enter Company Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="company_name" name="company_name" class="form-control"
                                            value="{{ old('company_name') }}">
                                        @error('company_name')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="contact">Enter Company Contact <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="contact" name="contact" class="form-control"
                                            value="{{ old('contact') }}">
                                        @error('contact')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-6 mb-4">
                                        <label for="redirect_url">Enter Redirect URL <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="redirect_url" name="redirect_url" class="form-control"
                                            value="{{ old('redirect_url') }}">
                                        @error('redirect_url')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-6 mb-4">
                                        <label for="schedule_date">Enter Schedule Date <span
                                                class="text-danger">*</span></label>
                                        <input type="date" id="schedule_date" name="schedule_date"
                                            class="form-control" value="{{ old('schedule_date') }}">
                                        @error('schedule_date')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-6 mb-4">
                                        <label for="expiry_date">Enter Expiry Date <span
                                                class="text-danger">*</span></label>
                                        <input type="date" id="expiry_date" name="expiry_date" class="form-control"
                                            value="{{ old('expiry_date') }}">
                                        @error('expiry_date')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-6 mb-4">
                                        <label for="image">Enter Advertise Image <span
                                                class="text-danger">*</span></label>
                                        <input type="file" id="image" name="image" class="form-control">
                                        @error('image')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
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
