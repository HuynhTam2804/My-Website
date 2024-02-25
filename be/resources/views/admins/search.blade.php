@foreach ($listAdmins as $ad)
    <tr>
        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $ad->id }}</strong>
        </td>
        <td>{{ $ad->username }}</td>
        <td>{{ $ad->fullname }}</td>
        <td>{{ $ad->email }}</td>
        <td>{{ $ad->address }}</td>
        <td>{{ $ad->phone_number }}</td>
        <td><span class="badge bg-label-primary me-1">{{ $ad->login_at }}</span></td>
        <td>
            @if ($ad->status->name == 'Active')
                <span class="badge bg-label-success me-1">{{ $ad->status->name }}</span>
            @else
                <span class="badge bg-label-danger me-1">{{ $ad->status->name }}</span>
            @endif
        </td>

        <td>
            <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                    <button class="dropdown-item edit-button" id="edit-button" data-toggle="modal"
                        data-target="#updateAdmins" data-admin-id="{{ $ad->id }} "><i
                            class="bx bx-edit-alt me-1"></i> Edit</button>
                    <a data-name="{{ $ad->username }}" class="dropdown-item delete-link"
                        data-route="{{ route('admins.delete', ['id' => $ad->id]) }}"><i class="bx bx-trash me-1"></i>
                        Lock</a>
                </div>
            </div>
        </td>
    </tr>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.delete-link').forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();


                    var route = this.getAttribute('data-route');
                    var name = this.getAttribute('data-name');

                    Swal.fire({
                        title: 'Confirm To Lock Account',
                        text: 'Are you sure to lock this ' + name + ' account ?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Lock',
                        cancelButtonText: ' Cancel',
                    }).then(function(result) {
                        if (result.isConfirmed) {
                            window.location.href = route;
                        }
                    });
                });
            });
        });
    </script>
@endforeach
