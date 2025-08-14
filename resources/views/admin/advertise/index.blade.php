<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Advertisements</h4>
                            <a href="{{ route('admin.advertise.create') }}" class="btn btn-primary">Add New</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Company Name</th>
                                            <th>Contact</th>
                                            <th>Image</th>
                                            <th>Schedule Date</th>
                                            <th>Schedule Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($advertises as $index => $advertise)
                                            <tr>
                                                <td>{{ ++$index }}</td>
                                                <td>{{ $advertise->company_name }}</td>
                                                <td>{{ $advertise->contact }}</td>
                                                <td>
                                                    <img height="60" src="{{ asset($advertise->image) }}"
                                                        alt="{{ $advertise->company_name }}">
                                                </td>
                                                <td>{{ $advertise->schedule_date }}</td>
                                                <td>{{ $advertise->expiry_date }}</td>
                                                <td><a href="{{ route('admin.advertise.edit', $advertise->id) }}"
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
