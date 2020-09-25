<script>
    function editFunction($id) {
        const formEdit      = 'form-edit-' + $id;
        var element         = document.getElementById(formEdit);
        var dataId          = element.getAttribute('data-id');
        var datapekerjaan       = element.getAttribute('data-pekerjaan');
        document.getElementById("EditInputId").value = dataId;
        document.getElementById("EditInputpekerjaan").value = datapekerjaan;
    }   

    function deleteFunction($id) {
        event.preventDefault();
        const form = 'form-delete-' + $id;
        Swal.fire({
            title: 'Apakah anda yakin menghapus ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(form).submit();
            }
        }).catch((error) => {
            console.log(error);
        })
    }
</script>
@if (session('status'))
<script>
    Swal.fire({
        icon: 'success',
        title: '{{ session('status') }}',
    })
</script>
@endif